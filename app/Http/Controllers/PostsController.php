<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show', 'register', 'login']);
    }

    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {

        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {

        $this->validate(request(), [

            'title' => 'required',
            'body'  => 'required'

        ]);


        Post::create($request->input());

//        Post::create([
//
//            'title' => request('title'),
//            'body' => request('body'),
//            'user_id' => auth()->user()->id
//
//        ]);

        return redirect('/');

//         // creat a new post using the request data
//
//        $post = new Post;
//
//        $post->title = request('title');
//
//        $post->body = request('body');
//
//        // save it to the data base
//
//        $post->save();
//
//        // and than redirect to the home page.
//
//        return redirect('/');
    }
}
