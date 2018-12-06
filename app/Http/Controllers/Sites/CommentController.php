<?php

namespace App\Http\Controllers\Sites;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
    	$data = $request->only('content', 'article_id');
    	$data['user_id'] = Auth::user()->id;
    	Comment::create($data);

    	return redirect()->back();
    }
}
