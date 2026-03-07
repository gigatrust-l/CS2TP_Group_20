<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
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

        } else if ($slug == "addresses") {

            $addresses = auth()->user()->addresses()->get();

            return view('dashboard.dashboard', compact('addresses'));

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

            return view('dashboard.dashboard', compact('order'));

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
}
