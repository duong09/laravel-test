@extends('components.layout')

@section('content')

<article>
    <a href="/posts/{{ $post->id }}">
        <h1>{{ $post->title }}</h1>
    </a>
    <div>
        <p>
            By <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->name }}">{{ $post->category->name }}</a>
        </p>
    </div>
</article>
<a href="/">Go Back</a>
@endsection