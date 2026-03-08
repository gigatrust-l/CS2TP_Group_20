<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Review;
use App\Models\Customer;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProductController extends Controller
{
    public function show(Request $request, $pid)
    {

        if (!ctype_digit($pid)) {
            return redirect('/products');
        }

        try {
            $product = Product::where('pid', $pid)
                ->withAvg('reviews', 'r_rating')
                ->firstOrFail(); // <-- this was missing

            if ($product->p_category == "shipping") {
                return redirect('/products');
            }
            $sort = $request->input('sort', 'rid');   // default: review number

            $sortable = ['rid', 'r_rating'];
            $sort = in_array($sort, $sortable) ? $sort : 'rid';
            $direction = in_array($request->input('direction'), ['asc', 'desc'])
                ? $request->input('direction') : 'asc';

            $reviews = Review::with('customer')
                ->orderBy($sort, $direction)
                ->paginate(10);

            return view('product', compact('product', 'reviews', 'sort', 'direction'));

        } catch (ModelNotFoundException $e) {
            return redirect('/products');
        }

    }
    public function index(Request $request)
    {
        $query = Product::query()->withAvg('reviews', 'r_rating')->where('p_category', '!=', 'shipping');

        if ($request->filled('name')) {
            $query->where('p_name', 'like', "%{$request->get('name')}%");
        }

        if ($request->filled('type')) {
            $query->where('p_category', $request->type);
        }
        if ($request->filled('min_price')) {
            $query->where('p_price', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $query->where('p_price', '<=', $request->max_price);
        }

        if ($request->filled('min_rating')) {
            $query->having('reviews_avg_r_rating', '>=', $request->min_rating);
        }

        match ($request->sort) {
            'price_asc' => $query->orderBy('p_price', 'asc'),
            'price_desc' => $query->orderBy('p_price', 'desc'),
            'rating' => $query->orderBy('reviews_avg_r_rating', 'desc'),
            'name_asc' => $query->orderBy('p_name', 'asc'),
            'name_desc' => $query->orderBy('p_name', 'desc'),
            default => null,
        };

        $products = $query->paginate(12);

        $categories = Product::select('p_category')
            ->distinct()
            ->pluck('p_category')
            ->where('p_category', '!=', 'shipping');

        return view('products', compact('products', 'categories'));
    }
}