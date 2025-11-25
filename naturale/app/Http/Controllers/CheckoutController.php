<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class CheckoutController extends Controller {

    /* 
    *  Retrieves cart from session and displays content to user
    *  @return Blade view of cart
    */
    public function viewCheckout() {
        $cart = session() -> get('cart', []); //retrieve cart from session or empty cart if none exists
        return view('checkout.checkout', compact('cart')); //returns view page for basket

    }

    public function confirmCheckout() {



    }

    /* 
    *  Removes all items from cart
    *  @param $pid
    *  @return Confirmation message
    */
    public function clearCart() {
        session() -> forget('cart'); //deletes cart from session

        return Redirect::to('cart'); //returns view page for basket

    }

}
