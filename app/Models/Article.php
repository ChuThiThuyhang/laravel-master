<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Article extends Model
{
    protected $fillable = [
        'sologan', 'content', 'user_id', 'is_show', 'avatar', 'title',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
