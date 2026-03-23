<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Address;
use App\Models\User;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;
use App\Mail\OrderCompleted;


class CheckoutController extends Controller
{

    /* 
     *  Retrieves cart from session and displays content to user
     *  @return Blade view of cart
     */
    public function viewCheckout()
    {
        $cart = session()->get('cart', []);

        $cart = array_filter($cart, fn($item) => $item['pid'] != 0); //removes selected item from array

        session()->put('cart', $cart); //store cart in session

        $tempcart = session()->get('cart', []); //retrieve cart from session or empty cart if none exists

        $cart = [];

        $runningTotal = 0;

        $totalQuantity = 0;

        foreach ($tempcart as $item) {

            $product = Product::findOrFail($item['pid']);

            if ($product) {

                $cartItem = [$product, $item['quantity']];

                $runningTotal += ($product->p_price * $item['quantity']);

                $totalQuantity += $item['quantity'];

                array_push($cart, $cartItem);

            }

        }

        if ($totalQuantity == 0) {
            return redirect()->route('cart.view');
        }

        if (auth()->user()) {

            $addresses = auth()->user()->addresses()->get()->map(fn($a) => [
                $a->ca_line1,
                $a->ca_line2,
                $a->ca_city,
                $a->ca_county,
                $a->ca_postcode,
                $a->ca_country,
            ])->toArray();

        } else {

            $addresses = null;

        }

        return view('checkout.checkout_details', compact('cart', 'runningTotal', 'totalQuantity', 'addresses')); //returns view page for basket
    }

    public function viewLogin()
    {

        if (auth()->user()) {
            return redirect()->route('checkout.view');
        } else {
            session()->put('checkout-redirect', 'true');
            return view('checkout.checkout_login');
        }

    }

    public function confirmCheckout(Request $request)
    {
        //validates input from form
        $validated = $request->validate([

            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'addressLine1' => 'required|string|max:255',
            'addressLine2' => 'nullable|string|max:255',
            'addressCity' => 'required|string|max:255',
            'addressCounty' => 'nullable|string|max:255',
            'addressPostcode' => 'required|string|max:20',
            'addressCountry' => 'required|string|max:255'

        ]);

        $cart = session()->get('cart', []);

        foreach ($cart as $item) {

            if ($item['pid'] == 0) {

                $cart = array_filter($cart, fn($item) => $item['pid'] != $item['pid']); //removes selected item from array

            }

        }

        session()->put('cart', $cart); //store cart in session

        if (!(auth()->user() && auth()->user()->isSubscriber())) {

            $shippingrequest = new Request();

            $shippingrequest->replace(['pid' => '0', 'quantity' => '1']);

            $apiUserController = new CartController();
            $apiUserController->addItem($shippingrequest);

        }

        $cart = session()->get('cart', []);

        $runningTotal = 0;

        foreach ($cart as $item) {

            $product = Product::findOrFail($item['pid']);

            if ($product->p_stock < $item['quantity']) {
                return view('checkout.cart', compact('cart'))->withErrors('Insufficient stock for ' . $product->p_name);
            }

            $runningTotal += $product->p_price * $item['quantity'];

        }

        return DB::transaction(function () use ($validated, $cart, $runningTotal) {
            $userId = \Auth::user()?->id;

            $customer = null;

            if ($userId) {
                $customer = auth()->user()->customer; // access as property to get the model

                $customer = Customer::firstOrCreate(
                    ['c_uid' => $customer->c_uid],
                    [
                        'c_email' => $validated['email'],
                        'c_name' => $validated['name'],
                    ]
                );

            } else {
                $customer = Customer::firstOrCreate(
                    ['c_email' => $validated['email']],
                    ['c_name' => $validated['name']]
                );

            }

            $address = Address::firstOrCreate(
                [
                    'ca_cid' => $customer->cid,
                    'ca_line1' => $validated['addressLine1'],
                    'ca_postcode' => $validated['addressPostcode']
                ],
                [
                    'ca_line2' => $validated['addressLine2'],
                    'ca_city' => $validated['addressCity'],
                    'ca_county' => $validated['addressCounty'],
                    'ca_country' => $validated['addressCountry']
                ]
            );

            $order = Order::create([
                'o_cid' => $customer->cid,
                'o_address' => $address->caid,
                'o_status' => 'Processing',
                'o_price' => $runningTotal
            ]);

            foreach ($cart as $item) {
                $product = Product::find($item['pid']);

                OrderItem::create([
                    'oi_oid' => $order->oid,
                    'oi_pid' => $product->pid,
                    'oi_quantity' => $item['quantity'],
                    'oi_ind_price' => $product->p_price
                ]);

                $product->decrement('p_stock', $item['quantity']);
            }

            session()->put('checkoutCart', $cart);
            session()->put('orderNum', $order->oid);
            session()->forget('cart');

            $subscribed = false;
            if ($userId) {
                if (auth()->user()->isSubscriber()) {
                    $subscribed = true;
                }
            }

            Mail::to($validated['email'])->send(new OrderCompleted($order, "processing", $validated['name'], $subscribed));

            return redirect()->route('checkout.complete');
        });
    }

    /* 
     *  Retrieves cart from session and displays content to user
     *  @return Blade view of cart
     */
    public function completeCheckout()
    {

        $tempcart = session()->get('checkoutCart', []); //retrieve cart from session or empty cart if none exists

        $cart = [];

        $runningTotal = 0;

        foreach ($tempcart as $item) {

            $product = Product::findOrFail($item['pid']);

            if ($product) {

                $cartItem = [$product, $item['quantity']];

                $runningTotal += ($product->p_price * $item['quantity']);

                array_push($cart, $cartItem);

            }

        }

        $oid = session()->get('orderNum');


        session()->forget('checkoutCart');

        return view('checkout.checkout_complete', compact('cart', 'runningTotal', 'oid')); //returns view page for basket

    }

}
