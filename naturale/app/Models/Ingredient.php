<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    
    protected $table = 'ingredients';

    public function products(){
        return $this->belongsToMany(
            Product::class,
            'ingredient_product',
            'ingredient_id',
            'product_id'
        );
    }
}