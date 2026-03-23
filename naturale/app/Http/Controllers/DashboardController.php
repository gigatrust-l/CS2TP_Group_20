<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;
use App\Models\Address;
use App\Models\Review;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if (auth()->user()->isAdmin()) {

            return redirect()->route('portal');
        }

        return view('dashboard.dashboard');
    }

    public function show($slug)
    {
        if ($slug == "profile") {

            $user = auth()->user();

            return view('dashboard.dashboard', compact('user'));

        } else if ($slug == "orders") {

            $orders = auth()->user()->orders()->get();

            return view('dashboard.dashboard', compact('orders'));

        } else if ($slug == "subscription") {

            $subscription = true;

            return view('dashboard.dashboard', compact('subscription'));

        } else if ($slug == "addresses") {

            $addresses = auth()->user()->addresses()->get();

            return view('dashboard.dashboard', compact('addresses'));

        } else if ($slug == "reviews") {
            $customer = auth()->user()->customer;

            $reviews = auth()->user()->reviews()
                ->with('product')
                ->paginate(10);

            $reviewedProductIds = Review::where('r_cid', $customer->cid)->pluck('r_pid');

            $reviewableProducts = Product::whereHas('orderItems', function ($query) use ($customer) {
        $query->whereHas('order', function ($q) use ($customer) {
            $q->where('o_cid', $customer->cid)
              ->where('o_status', 'completed');
        });
    })
    ->whereNotIn('pid', $reviewedProductIds)
    ->where('pid', '!=', 0)
    ->get();

            return view('dashboard.dashboard', compact('reviews', 'reviewableProducts'));

        } else {

            return redirect()->route('dashboard');

        }


    }

    public function modify($slug, $id)
    {
        if ($slug == "addresses") {
            $address = auth()->user()->addresses()->where('caid', $id)->firstOrFail();

            return view('dashboard.dashboard', compact('address'));

        } else if ($slug == "orders") {
            $order = auth()->user()->orders()->where('oid', $id)->firstOrFail();
            $address = Address::findOrFail($order['o_address']);

            return view('dashboard.dashboard', compact('order', 'address'));

        } else if ($slug = "reviews") {

            $review = auth()->user()->reviews()->with('product')->where('rid', $id)->firstOrFail();

            return view('dashboard.dashboard', compact('review'));


        } else {

            return redirect()->route('dashboard');

        }


    }

    public function updateStock(Request $request, $pid)
    {
        if (auth()->user()->isAdmin()) {
            $product = Product::findOrFail($pid);

            $product->update([
                'p_stock' => $request->stock
            ]);

            return back()->with('success', 'Stock for ' . $product->p_name . ' updated!');
        }

        return redirect()->route('dashboard');
    }

    public function toggle(Request $request)
    {
        $user = $request->user();
        $user->subscribed = !$user->subscribed;
        $user->save();

        $message = $user->subscribed
            ? 'You have successfully subscribed to delivery notifications.'
            : 'You have unsubscribed from delivery notifications.';

        return back()->with('success', $message);
    }
}

