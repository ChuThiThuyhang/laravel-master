<?php

namespace App\Http\Controllers\Sites;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function create()
    {
    	return view('sites.article.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['sologan', 'content', 'title']);
        $data['user_id'] = Auth::user()->id;
        $data['is_show'] = 0;
        $filePath = $request->file('avatar')->store('public');
        $data['avatar'] = substr($filePath, 7);
        
        Article::create($data);

        return redirect()->route('home');
    }

    public function show(Article $article)
    {
        return view('sites.article.show', [
            'article' => $article,
        ]);
    }
    public function uploadImage(Request $request)
    {
    	$path = $request->file->store('public');
    	$path = str_replace('public', 'storage', $path);

    	return json_encode(array('location' => '/' . $path));
    }
}
