<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show($pid) {
        $product = Product::where('pid',$pid)->firstOrFail();
        return view('product', compact('product'));
    }

    public function index(Request $request) {
        $query = Product::query();

        if ($request->filled('name')) {
            $query->where('p_name', 'like', "%{$request->get('name')}%");
        }

        if ($request->filled('type')) {
            $query->where('p_category', $request->type);
        }

        $products = $query->get();

        $categories = Product::select('p_category')
            ->distinct()
            ->pluck('p_category');

        return view('products', compact('products', 'categories'));
    }
}
