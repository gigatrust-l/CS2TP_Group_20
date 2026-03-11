<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderStatusUpdated;

class OrderController extends Controller
{
    public function index()
    {
        $cid = 0;
        $orders = auth()->user()->orders()->get();
        return view('orders.index', compact('orders'));
    }

    public function show($oid)
    {
        $order = auth()->user()->orders()->where('oid', $oid)->firstOrFail();

        return view('orders.show', compact('order'));
    }

    public function updateStatus(Request $request, $oid)
    {
        // 1. Find the order
        $order = auth()->user()->orders()->with('items.product')->where('oid', $oid)->firstOrFail();

        // 2. Change the status in the database
        $order->o_status = $request->status; 
        $order->save();

        // 3. Send the email
        // This sends to the logged-in user's email
        Mail::to(auth()->user()->email)->send(new OrderStatusUpdated($order, $request->status));

        // 4. Return to dashboard with the message for the popup
        // If the status is 'refund requested', show the specific message
        if ($request->status == 'refund requested') {
            $message = 'Refund has been requested for order number #' . $oid;
        } else {
            $message = 'Order number #' . $oid . ' has been ' . $request->status;
        }

        return redirect('/dashboard/orders')->with('success', $message);
    }
}
