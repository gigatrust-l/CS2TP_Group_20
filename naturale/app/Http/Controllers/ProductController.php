<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProductController extends Controller
{
    public function show($pid)
    {

        if (!ctype_digit($pid)) {
            return redirect('/products');
        }

        try {
            $product = Product::where('pid', $pid)->firstOrFail();

            if ($product->p_category == "shipping"){

                return redirect('/products');

            } else {

                return view('product', compact('product'));

            }

        } catch (ModelNotFoundException $e) {

            return redirect('/products');

        }

    }
    public function index(Request $request)
    {
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