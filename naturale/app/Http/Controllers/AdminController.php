<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if (auth()->user()->isAdmin()) {

            return view('admin.admin_dashboard');
        }

        return redirect()->route('dashboard');
    }

    public function show($slug)
    {
        if ($slug == "stock") {

            return $this->stock();

        } else if ($slug == "order") {

            return $this->orders();

        } else {

            return redirect()->route('portal');

        }


    }

    public function stock()
    {
        if (auth()->user()->isAdmin()) {
            $products = Product::all();

            return view('admin.admin_dashboard', compact('products'));
        }

        return redirect()->route('dashboard');
    }

    public function orders()
    {
        if (auth()->user()->isAdmin()) {
            $orders = Order::with('user')->orderBy('oid', 'desc')->get();

            return view('admin.admin_dashboard', compact('orders'));
        }

        return redirect()->route('dashboard');
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
