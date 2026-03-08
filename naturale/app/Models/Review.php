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
        'r_title',
        'r_description',
        'r_image',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'r_cid','cid');
    }

}