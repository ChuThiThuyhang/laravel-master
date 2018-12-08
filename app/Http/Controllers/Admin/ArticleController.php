<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
    	$articles = Article::all();

    	return view('admin.article.index', [
            'articles' => $articles,
        ]);
    }

    public function showArticle(Request $request)
    {
    	$article = Article::findOrFail($request->article_id);

    	$article->update(
    		['is_show' => 1]
    	);

    	return redirect()->route('admin.articles.index');
    }

    public function hideArticle(Request $request)
    {
    	$article = Article::findOrFail($request->article_id);

    	$article->update(
    		['is_show' => 0]
    	);

    	return redirect()->route('admin.articles.index');
    }
}
