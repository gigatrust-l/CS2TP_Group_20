<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model

{
    protected $table = 'customer_address';
    protected $primaryKey = 'caid';
    public $timestamps = false;

    protected $fillable = [
        'ca_cid',
        'ca_line1',
        'ca_line2',
        'ca_city',
        'ca_county',
        'ca_postcode',
        'ca_country'
    ];
}
