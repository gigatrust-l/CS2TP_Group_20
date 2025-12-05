<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Product;

class OrderItem extends Model
{
    protected $table = 'order_item';
    protected $primaryKey = 'oiid';
    public $timestamps = false;

    protected $fillable = [
        'oi_oid',
        'oi_pid',
        'oi_quantity',
        'oi_ind_price'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'oi_oid', 'oid');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'oi_pid', 'pid');
    }

}
