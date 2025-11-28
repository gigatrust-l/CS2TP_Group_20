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

        $cart = session() -> get('cart', []); //retrieve cart from session or empty cart if none exists

        $runningTotal = 0;

        foreach ($cart as $item) {

            $command = $db->prepare("SELECT * FROM products WHERE pid = :pid");
            $command->execute([':pid'=>$item['pid']]);

            foreach ($command as $row) {

                $runningTotal += $row['p_price'] * $item['quantity'];

                if ($row['p_stock'] < $item['quantity']) {

                    return view('checkout.cart', compact('cart'));

                }

            }

        }

        //check if customer exists

        $command = $db->prepare("SELECT COUNT(*) FROM customers WHERE c_email = :email");
        $command->execute([':email'=>$validatedRequest['email']]);

        if ($command->fetchColumn() == 0) { //if customer does not exist create customer

            $command = $db->prepare("INSERT INTO customers (c_name,c_email) VALUES (:name, :email)");
            
            $command->execute([':name' =>$validatedRequest['name'],':email' =>$validatedRequest['email']]);

        }

        //check if customer address exists

        $command = $db->prepare("SELECT * FROM customers WHERE c_email = :email");
        $command->execute([':email'=>$validatedRequest['email']]);

        $cid = $command->fetchColumn();

        $command = $db->prepare("SELECT COUNT(*) FROM customer_address WHERE ca_cid = :cid AND ca_line1 = :line1");
        $command->execute([':cid'=>$cid, ':line1'=>$validatedRequest['addressLine1']]);

        if ($command->fetchColumn() == 0) { //if address doesnt exist create address

            $command = $db->prepare("INSERT INTO customer_address (ca_cid, ca_line1, ca_line2, ca_city, ca_county, ca_postcode, ca_country) VALUES (:ca_cid, :ca_line1, :ca_line2, :ca_city, :ca_county, :ca_postcode, :ca_country)");
            
            $command->execute([':ca_cid'=>$cid, ':ca_line1'=>$validatedRequest['addressLine1'], ':ca_line2'=>$validatedRequest['addressLine2'], ':ca_city'=>$validatedRequest['addressCity'], ':ca_county'=>$validatedRequest['addressCounty'], ':ca_postcode'=>$validatedRequest['addressPostcode'], ':ca_country'=>$validatedRequest['addressCountry']]);

        }

        //add order to orders table

        $command = $db->prepare("SELECT * FROM customer_address WHERE ca_cid = :cid");
        $command->execute([':cid'=>$cid]);

        $caid = $command->fetchColumn();
    
        $command = $db->prepare("INSERT INTO orders (o_cid, o_address, o_status, o_price) VALUES (:o_cid, :o_address, :o_status, :o_price)");
            
        $command->execute([':o_cid'=>$cid, ':o_address'=>$caid, ':o_status'=>"in_checkout", ':o_price'=>$runningTotal]);

        //add items to order_item

        $command = $db->prepare("SELECT * FROM orders WHERE o_cid = :cid AND o_status = :o_status");
            
        $command->execute([':cid'=>$cid, ':o_status'=>"in_checkout"]);

        $oid = $command->fetchColumn();

        foreach ($cart as $item) {

            $command = $db->prepare("SELECT * FROM products WHERE pid = :pid");
            $command->execute([':pid'=>$item['pid']]);

            foreach ($command as $row) {
    
                $command2 = $db->prepare("INSERT INTO order_item (oi_oid, oi_pid, oi_quantity, oi_ind_price) VALUES (:oi_oid, :oi_pid, :oi_quantity, :oi_ind_price)");
            
                $command2->execute([':oi_oid'=>$oid, ':oi_pid'=>$row['pid'], ':oi_quantity'=>$item['quantity'], ':oi_ind_price'=>$row['p_price']]);    

            }

        }

        $checkoutCart = $cart;

        session() -> put('checkoutCart', $checkoutCart); //store cart in session

        session() -> forget('cart'); //deletes cart from session

        $command = $db->prepare("UPDATE `orders` SET `o_status` = 'Processing' WHERE `oid` = :oid ");
        $command->execute([':oid'=>$oid]);

        foreach ($cart as $item) {

            $command = $db->prepare("SELECT * FROM products WHERE pid = :pid");
            $command->execute([':pid'=>$item['pid']]);

            foreach ($command as $row) {

                $command2 = $db->prepare("UPDATE `products` SET `p_stock` = :newStock WHERE `oid` = :oid ");
                $command2->execute([':oid'=>$oid, ':newStock'=>($row['p_stock']-$item['quantity'])]);

            }

        }



        return view('checkout.checkout_complete', compact('checkoutCart')); //returns view page for complete checkout

    }

    /* 
    *  Retrieves cart from session and displays content to user
    *  @return Blade view of cart
    */
    public function completeCheckout() {
        $checkoutCart = session() -> get('checkoutCart', []); //retrieve cart from session or empty cart if none exists
        return view('checkout.index', compact('checkoutCart')); //returns view page for basket

    }

}
