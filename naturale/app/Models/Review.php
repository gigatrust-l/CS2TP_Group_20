<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    protected $table = 'reviews';
    protected $primaryKey = 'rid';
    public $timestamps = false;

    protected $fillable = [
        'r_cid',
        'r_pid',
        'r_rating',
        'r_anonymous',
        'r_title',
        'r_description',
        'r_image',
        'r_approved',
    ];
    protected $casts = [
    'r_anonymous' => 'integer',
];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'r_cid', 'cid');
    }

    public function isVerified()
    {
        return $this->r_approved == true;
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'r_pid'); // swap r_pid for whatever your FK column is
    }

}