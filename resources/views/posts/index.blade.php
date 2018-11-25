@extends('layouts.app')

@section('content')

@foreach($posts as $post)
<div class="blog-post">
    <h2 class="blog-post-title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
    <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} &nbsp; <a href="#">{{ $post->user->name }}</a></p>
    <p>{{ $post->body }}</p>
</div>
@endforeach

{{ $posts->links() }}

@endsection