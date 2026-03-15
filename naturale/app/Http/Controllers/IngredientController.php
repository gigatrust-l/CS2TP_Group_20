<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;

class IngredientController extends Controller
{
    public function show($slug)
    {
        $ingredient = Ingredient::where('slug', $slug)
            ->with('products')
            ->firstOrFail();

        return view('ingredient', compact('ingredient'));
    }
}

