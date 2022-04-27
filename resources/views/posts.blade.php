@extends('components.layout')

@section('content')

@foreach ($posts as $post)
<article>
    <h1>
        <a href="/posts/{{ $post->slug }}">
            {!! $post->title !!}
        </a>
    </h1>

    <p>
        By <a href="authors/{{ $post->user->username }}"> Author: {{ $post->user->name }} </a> in <a href="/categories/{{ $post->category->name }}">{{ $post->category->name }}</a>
    </p>
    

    <div>
        <p>{!! $post->body !!}</p>
    </div>
</article>
<a href="/">Go back</a>
@endforeach

@endsection