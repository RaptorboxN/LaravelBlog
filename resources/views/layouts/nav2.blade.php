<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="blog-nav-item active" href="#">Home</a>
            <a class="blog-nav-item" href="#">New features</a>
            <a class="blog-nav-item" href="#">Press</a>
            <a class="blog-nav-item" href="#">New hires</a>
            <a class="blog-nav-item" href="#">About</a>

            {{--<a class="blog-nav-item ml-auto" href="#">{{ Auth::user()->name }}</a>--}}
        </nav>


        {{--@if (Route::has('login'))--}}
            {{--<div class="top-right links">--}}
                {{--@if (Auth::check())--}}
                    {{--<a href="{{ url('/home') }}">Home</a>--}}
                {{--@else--}}
                    {{--<a href="{{ url('/login') }}">Login</a>--}}
                    {{--<a href="{{ url('/register') }}">Register</a>--}}
                {{--@endif--}}
            {{--</div>--}}
        {{--@endif--}}
    </div>
</div>