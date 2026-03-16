<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'pid';
    public $timestamps = false;

    public function ingredients(){
        return $this->belongsToMany(
            Ingredient::class,
            'ingredient_product',
            'product_id',
            'ingredient_id'
        );
    }

    public function category(){
        return $this->belongsTo(
            Category::class,
            'category_id',
            'id');
    }
}

