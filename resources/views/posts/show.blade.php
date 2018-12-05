@extends('layouts.app')

@section('content')

<div class="blog-post mb-4">
    <h2 class="blog-post-title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
    <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} &nbsp; <a href="#">{{ $post->user->name
            }}</a></p>
    <p>{{ $post->body }}</p>
</div>

<hr>

<div class="container my-4">
    <div class="row">
        <div class="px-2 my-2 ml-2">
            <i class="fas fa-tags"></i>
        </div>

        @foreach($post->tags as $tag)
        <a href="/posts/?tag={{ $tag->name }}" class="btn btn-sm btn-outline-dark m-2">
            <span>{{ $tag->name }}</span>
        </a>
        @endforeach
    </div>
</div>

<hr>

@if(Auth::check() && Auth::id() === $post->user->id)
<div class="container my-4">
    <div class="row d-flex">

        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-info mr-2 text-white">Edit Post</a>

        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-sm btn-danger">Delete Post</button>
        </form>

    </div>
</div>
@endif

@include('comments.index')

@endsection
