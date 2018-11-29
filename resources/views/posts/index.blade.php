@extends('layouts.app')

@section('content')

@foreach($posts as $post)
<div class="card mb-3 shadow-sm">
    <div class="card-body">
        <h2 class="card-title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
        <p class="card-subtitle mb-2">
            <span class="text-muted">{{ $post->created_at->toFormattedDateString() }}</span> &nbsp; 
            <a href="#">{{ $post->user->name }}</a>
        </p>
        <p class="card-text">{{ str_limit($post->body, 30, '...') }}</p>
    </div>
</div>
@endforeach

{{ $posts->links() }}

@endsection
