<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'enquiries';
    protected $primaryKey = 'eid';
    public $timestamps = false;

    protected $fillable = [
        'e_name',
        'e_email',
        'e_subject',
        'e_message',
    ];
}

