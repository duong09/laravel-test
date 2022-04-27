@extends('components.layout')

@section('content')

<?php foreach ($posts as $post) : ?>
    <article>
        <a href="/posts/{{ $post->id }}">
            <h1>{{ $post->title }}</h1>
        </a>
        <p>
            By <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->name }}">{{ $post->category->name }}</a>
        </p>

        <div>
            <p>
                {!! $post->body !!}
            </p>
        </div>
    </article>
<?php endforeach ?>
<a href="/">Go back</a>

@endsection