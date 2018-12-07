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

    public function ajaxCreate(Request $request)
    {
    	try {
	    	$data = $request->only('content', 'article_id');
	    	$data['user_id'] = Auth::user()->id;

	    	$comment = Comment::create($data);

	    	return view('sites.comment.ajax-create', [
	    		'comment' => $comment,
	    	]);
	    } catch (Exception $e) {
	    	return 0;
	    }
    }

    public function getCommentFromLoadmore(Request $request)
    {
    	$articleId = $request->article_id;
    	$skip = $request->skip;

    	$comments = Comment::where('article_id', $articleId)
    		->skip($skip * 5)
            ->take(5)
            ->orderBy('created_at', 'desc')
            ->get();

        if (count($comments) > 0) {
	        return view('sites.comment.get-comment-from-loadmore', [
	        	'comments' => $comments,
	        ]);
	    } else {
	    	return 0;
	    }
    }
}
