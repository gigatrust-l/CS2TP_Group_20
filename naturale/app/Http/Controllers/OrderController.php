<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

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
}
