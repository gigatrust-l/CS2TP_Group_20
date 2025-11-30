<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;

class Order extends Model
{
    protected $table = 'orders';

    protected $primaryKey = 'oid'; 

    public $timestamps = false;

    protected $fillable = [
        'o_cid',
        'o_address',
        'o_status',
        'o_price',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'o_cid', 'id');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class, 'oi_oid', 'oid');
    }

}
