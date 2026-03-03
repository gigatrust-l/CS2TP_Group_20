<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 
use App\Models\Order;   

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::all();

        $orders = Order::with('user')->orderBy('oid', 'desc')->get();

        return view('admin.admin_dashboard', compact('products', 'orders'));
    }

    public function redirectUser()
    {
        if (auth()->user()->isAdmin()) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('profile.edit');
    }

    public function updateStock(Request $request, $pid)
    {
        $product = Product::findOrFail($pid);
        
        $product->update([
            'p_stock' => $request->stock 
        ]);

        return back()->with('success', 'Stock for ' . $product->p_name . ' updated!');
    }
}