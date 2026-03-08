<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;

class CartController extends Controller
{

    /* 
     *  Add a new item to the cart
     *  @param $request
     *  @return Confirmation message
     */
    public function addItem(Request $request)
    {
        $request->validate(['pid' => 'required|integer', 'quantity' => 'required|integer|min:1']); // Check if input is valid

        $cart = session()->get('cart', []); //Get cart or create cart if none exists

        $item_in_cart = false; //Holds if item has been found in cart

        foreach ($cart as &$item) {
            if ($item['pid'] == $request->pid) {
                $item['quantity'] += $request->quantity; //if product is found, increment by request quantity
                $item_in_cart = true;

            }

        }

        if (!$item_in_cart) {
            $cart[] = ['pid' => $request->pid, 'quantity' => $request->quantity]; //if not found add item to cart

        }

        session()->put('cart', $cart); //store cart in session

        return Redirect::to('cart'); //returns view page for basket

    }

    /* 
     *  Retrieves cart from session and displays content to user
     *  @return Blade view of cart
     */
    public function viewCart()
    {
        $tempcart = session()->get('cart', []); //retrieve cart from session or empty cart if none exists

        $cart = [];

        $runningTotal = 0;

        foreach ($tempcart as $item) {

            if ($item['pid'] != 0) {

                $product = Product::findOrFail($item['pid']);

                if ($product) {

                    $cartItem = [$product, $item['quantity']];

                    $runningTotal += ($product->p_price * $item['quantity']);

                    array_push($cart, $cartItem);

                }

            }

        }

        return view('checkout.index', compact('cart', 'runningTotal')); //returns view page for basket

    }

    /* 
     *  Updates the quantity of specified item
     *  @param $request
     *  @return Confirmation message
     */
    public function updateItemQuantity(Request $request)
    {
        $cart = session()->get('cart', []); //retrieve cart from session or make new cart

        foreach ($cart as &$item) {
            if ($item['pid'] == $request->pid) { //find item in cart matching request
                $item['quantity'] = max(1, $request->quantity); // update quantity to request value or 1 if less than 1   

            }

        }

        session()->put('cart', $cart); //store cart in session

        return Redirect::to('cart'); //returns view page for basket
    }


    /* 
     *  Removes specified item from cart
     *  @param $pid
     *  @return Confirmation message
     */
    public function removeItem($pid)
    {

        $cart = session()->get('cart', []); //get cart from session or make a new cart

        $cart = array_filter($cart, fn($item) => $item['pid'] != $pid); //removes selected item from array

        session()->put('cart', $cart); //store cart in session

        return Redirect::to('cart'); //returns view page for basket

    }

    /* 
     *  Removes all items from cart
     *  @param $pid
     *  @return Confirmation message
     */
    public function clearCart()
    {
        session()->forget('cart'); //deletes cart from session

        return Redirect::to('cart'); //returns view page for basket

    }

}
