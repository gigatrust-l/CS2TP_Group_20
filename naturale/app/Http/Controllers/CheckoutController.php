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

    public function confirmCheckout(Request $request) {
        //validates input from form
        $validatedRequest = $request -> validate ([

            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'addressLine1' => 'required|string|max:255',
            'addressLine2' => 'nullable|string|max:255',
            'addressCity' => 'required|string|max:255',
            'addressCounty' => 'nullable|string|max:255',
            'addressPostcode' => 'required|string|max:20',
            'addressCountry' => 'required|string|max:255'

        ]);

        $db = \DB::connection()->getPdo();

        $command = $db->prepare("SELECT COUNT(*) FROM customers WHERE c_email = :email");
        $command->execute([':email'=>$validatedRequest['email']]);

        if ($command->fetchColumn() == 0) {

            $command = $db->prepare("INSERT INTO customers (c_name,c_email) VALUES (:name, :email)");
            
            $command->execute([':name' =>$validatedRequest['name'],':email' =>$validatedRequest['email']]);

        }

        $command = $db->prepare("SELECT * FROM customers WHERE c_email = :email");
        $command->execute([':email'=>$validatedRequest['email']]);

        $cid = $command->fetchColumn();

        $command = $db->prepare("SELECT COUNT(*) FROM customer_address WHERE ca_cid = :cid AND ca_line1 = :line1");
        $command->execute([':cid'=>$cid, ':line1'=>$validatedRequest['addressLine1']]);

        if ($command->fetchColumn() == 0) {

            $command = $db->prepare("INSERT INTO customers (c_name,c_email) VALUES (:name, :email)");
            
            $command->execute([':name' =>$validatedRequest['name'],':email' =>$validatedRequest['email']]);

        }



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
