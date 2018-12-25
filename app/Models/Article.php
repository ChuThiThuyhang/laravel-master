<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;

class Article extends Model
{
    protected $fillable = [
        'sologan', 'content', 'user_id', 'is_show', 'avatar', 'title', 'category_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'caterogy_id', 'id');
    }
}
