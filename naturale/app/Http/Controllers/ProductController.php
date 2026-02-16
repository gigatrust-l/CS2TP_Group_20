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
}
