<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::where('is_show', 1)
        	->paginate(3);

        return view('sites.home', [
            'articles' => $articles,
        ]);
    }
}
