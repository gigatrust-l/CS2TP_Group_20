<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Review;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'pid';
    public $timestamps = false;

    protected $fillable = [
        'p_name',
        'p_description',
        'p_price',
        'p_stock',
        'p_category',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class, 'r_pid');
    }

}

