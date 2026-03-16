<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Ingredient;

class HomeController extends Controller
{
    public function index(){
        $ingredients = Ingredient::all();
        $categories = Category::withCount('products')->get();

        return view('index', compact('ingredients', 'categories'));
    }

}
