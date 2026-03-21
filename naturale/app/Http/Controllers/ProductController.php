<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
use App\Models\Review;
use App\Models\Customer;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProductController extends Controller
{

    public function addItem(Request $request)
    {
        $request->validate(['pid' => 'required|integer', 'quantity' => 'required|integer|min:1']); // Check if input is valid

        $cart = session()->get('cart', []); //Get cart or create cart if none exists

        $product = Product::find($request->pid);

        if (is_null($product)) {
            return back()->with('notify', 'Product Not Found. Try reloading this page or contact support.');
        }

        $quantity_in_cart = 0;
        foreach ($cart as $item) {
            if ($item['pid'] == $request->pid) {
                $quantity_in_cart = $item['quantity'];
                break;
            }
        }

        // Check if requested quantity + existing cart quantity exceeds stock
        if (($quantity_in_cart + $request->quantity) > $product->p_stock) {
            return back()->with('notify', 'You already have the maximum stock in your cart.');
        }

        $item_in_cart = false; //Holds if item has been found in cart

        foreach ($cart as &$item) {
            if ($item['pid'] == $request->pid) {
                $item['quantity'] += $request->quantity; //if product is found, increment by request quantity
                $item_in_cart = true;
                break;

            }

        }

        if (!$item_in_cart) {
            $cart[] = ['pid' => $request->pid, 'quantity' => $request->quantity]; //if not found add item to cart

        }

        session()->put('cart', $cart); //store cart in session

        return redirect()->route('products.show', ['pid' => $request['pid']])->with('showWindow', $request->quantity);

    }

    public function show(?Request $request, $pid)
    {
        $quantity = null;
        if (session('showWindow')) {
            $showWindow = true;
            $quantity = session('showWindow');
        } else {
            $showWindow = false;
        }

        

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

            $sort = 'rid';
            $direction = 'asc';

            if (isset($request)) {

                $sort = $request->input('sort', 'rid');   // default: review number

                $sortable = ['rid', 'r_rating'];
                $sort = in_array($sort, $sortable) ? $sort : 'rid';
                $direction = in_array($request->input('direction'), ['asc', 'desc'])
                    ? $request->input('direction') : 'asc';

            }

            $reviews = Review::with('customer')
                ->where('r_pid', $product->pid)
                ->where('r_approved', true)
                ->orderBy($sort, $direction)
                ->paginate(10);

            return view('product', compact('product', 'reviews', 'sort', 'direction', 'showWindow', 'quantity'));

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

        if ($request->filled('ingredient')) {
            $query->where('p_feature', $request->ingredient);
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

        $ingredients = Product::select('p_feature')
            ->distinct()
            ->pluck('p_feature');


        return view('products', compact('products', 'categories', 'ingredients'));
    }
}