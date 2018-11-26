@extends('layouts.app')

@section('content')

<div class="blog-post mb-4">
    <h2 class="blog-post-title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
    <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} &nbsp; <a href="#">{{ $post->user->name
            }}</a></p>
    <p>{{ $post->body }}</p>

</div>

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

@include('posts.comments')

@endsection
