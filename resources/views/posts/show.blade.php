@extends('layouts.master2')

<?php

        use Illuminate\Support\Facades\Auth;

?>


@section('content')

    <div class="col-sm-8 blog-main">
        <h1>{{ $post->title }}</h1>

        {{$post->body}}

        <hr>

        <div class="comments">

            <ul class="list-group">

            @foreach($post->comments as $comment)

                    <li class="list-group-item">

                        <strong>

                            {{ $comment->created_at }}: &nbsp;

                        </strong>

                    {{ $comment->body }}

                    </li>

            @endforeach

            </ul>

        </div>

        <hr>

        <div class="card">

            <div class="card-block">



                <form method="POST" action="{{ route('storecomment', ['post' => $post->id]) }}">

                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                    <div class="form-group">
                        {{ csrf_field() }}

                        <textarea name="body" placeholder="Your comment here." class="form-control" required>

                        </textarea>

                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary">Add comment</button>

                    </div>

                </form>

                @include('layouts.erros')

            </div>

        </div>

    </div>

@endsection
