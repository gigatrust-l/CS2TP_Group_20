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

    public function showOrder($id)
    {
        // 1. Find the order by its ID (using 'oid' as per your schema)
        $order = \App\Models\Order::with(['user', 'items.product'])->where('oid', $id)->firstOrFail();

        // 2. Grab the address used for THIS order specifically
        // DashboardController uses 'o_address' as the foreign key
        $address = \App\Models\Address::find($order->o_address);

        // 3. Safety check: If the address was deleted, provide a fallback object 
        // to prevent the "property on null" error
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
        $order = \App\Models\Order::where('oid', $id)->firstOrFail();
        
        $order->update([
            'o_status' => $request->status
        ]);

        return back()->with('success', 'Order status updated successfully!');
    }
}
