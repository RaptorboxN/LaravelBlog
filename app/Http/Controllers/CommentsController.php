<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use Illuminate\Database\Eloquent\Model;
use App\post;

use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{

    public function store(Post $post, Request $request)
    {
        // Validating the request.
        $this->validate($request,['body' => 'required|min:2']);

        Comment::create([
            'post_id' => $post->id,
            'user_id' => $request->input('user_id'),
            'body' => $request->input('body')
        ]);

//        Comment::create([
//
//            'body' => request('body'),
//            'post_id' => $post->id
//
//        ]);

        return back();
    }

}
