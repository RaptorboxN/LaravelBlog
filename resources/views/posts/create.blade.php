@extends('layouts.master2')


@section('content')

    <div class="col-sm-8 blog-main">
        <h1>Publish a post</h1>

        <hr>

        <form method="POST" action="{{ url('/posts') }}">

            {{ csrf_field() }}

            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Body</label>

                <textarea id="body" name="body" class="form-control" ></textarea>

            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>

            @include('layouts.erros')
        </form>




    </div>

@endsection