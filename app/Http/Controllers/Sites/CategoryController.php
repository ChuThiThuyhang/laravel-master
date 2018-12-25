<?php

namespace App\Http\Controllers\Sites;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
    	$name = $category->name;

      	return view('sites.category.show', [
      		'name' => $name,
      		'articles' => $category->articles()->where('is_show', 1)->get(),
      	]);
    }
}
