@extends('components.layout')

@section('content')

<article>
    <h1>
        {{ $post->title }}
    </h1>

    <p>
    By <a href="authors/{{ $post->user->username }}"> Author: {{ $post->user->name }} </a> in <a href="/categories/{{ $post->category->name }}">{{ $post->category->name }}</a>
    </p>


    <div>
        {!! $post->body !!}
    </div>
</article>
<a href="/">Go Back</a>

@endsection