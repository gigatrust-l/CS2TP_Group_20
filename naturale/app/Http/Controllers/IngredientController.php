<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class IngredientController extends Controller
{
    public function show($slug)
    {
        try {
            $ingredient = Ingredient::where('slug', $slug)
            ->with('products')
            ->firstOrFail();

            return view('ingredients.ingredient', compact('ingredient'));

        } catch (ModelNotFoundException $e) {
            return redirect()->route('/ingredients');

        }
    }
}
