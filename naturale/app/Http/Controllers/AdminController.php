<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;
use App\Models\Address;

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

    public function showOrder($id)
    {
        $order = Order::with(['user', 'items.product'])->where('oid', $id)->firstOrFail();

        $address = Address::find($order->o_address);

        if (!$address) {
            $address = (object) [
                'ca_line1' => 'Address record missing',
                'ca_line2' => '',
                'ca_city' => 'N/A',
                'ca_county' => 'N/A',
                'ca_country' => 'N/A',
                'ca_postcode' => 'N/A'
            ];
        }

        return view('admin.components.admin_dashboard_order', compact('order', 'address'));
    }

    public function updateOrderStatus(Request $request, $id)
    {
        $order = Order::where('oid', $id)->firstOrFail();
        
        $order->update([
            'o_status' => $request->status
        ]);

        return back()->with('success', 'Order status updated successfully!');
    }
}
