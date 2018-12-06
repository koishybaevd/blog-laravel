@extends('layouts.app')

@section('content')

@isset($category)
<div class="card mb-3">
    <div class="card-body px-3 py-2">
        <h6 class="card-text font-weight-bold">Category: {{ $category->name }}</h5>
    </div>
</div>
@endisset

@foreach($posts as $post)
<div class="card mb-3 shadow-sm">
    <div class="card-body">
        <h2 class="card-title"><a href="{{ route('posts.show', $post->id) }}" class="text-dark">{{ $post->title }}</a></h2>
        <p class="card-subtitle mb-2">
            by <a href="#">{{ $post->user->name }}</a>
            <span>at {{ $post->created_at->toFormattedDateString() }}</span>
            on <a href="{{ route('categories.show', ['id' => $post->category->id]) }}">
                {{ $post->category->name }}
            </a>
        </p>
        <p class="card-text">{{ str_limit($post->body, 30, '...') }}</p>
    </div>
</div>
@endforeach

{{ $posts->links() }}

@endsection
