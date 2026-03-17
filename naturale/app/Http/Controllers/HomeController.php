<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;

class HomeController extends Controller
{
    public function index(){
        $ingredients = Ingredient::all();
        return view('index', compact('ingredients'));
    }

}