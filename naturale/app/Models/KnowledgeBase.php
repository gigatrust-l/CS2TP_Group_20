<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KnowledgeBase extends Model
{
    protected $table = 'knowledge_base';
    protected $primaryKey = 'kbid';
    public $timestamps = false;
    protected $fillable = [
        'kb_keyword',
        'kb_content',
    ];
}
