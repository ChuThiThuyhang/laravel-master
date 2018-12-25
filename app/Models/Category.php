<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class Category extends Model
{
    protected $fillable = [
        'name', 'description', 'avatar',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class, 'caterogy_id', 'id');
    }

}
