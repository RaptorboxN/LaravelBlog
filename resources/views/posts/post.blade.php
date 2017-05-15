<div class="blog-post">

    {{ url($post->id) }}
    <h2 class="blog-post-title">
        <a href="{{ route('showpost', ['id' => $post->id]) }}">
            {{ $post->title }}
        </a>

    </h2>

    <p class="blog-post-meta">{{$post->created_at }}</p>

    {{ $post->body }}
</div><!-- /.blog-post -->