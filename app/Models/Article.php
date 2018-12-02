<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'sologan', 'content', 'user_id', 'is_show', 'avatar', 'title',
    ];
}
