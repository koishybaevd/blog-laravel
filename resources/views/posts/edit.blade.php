@extends('layouts.app')

@section('content')

<form action="{{ route('posts.update', $post->id) }}" method="post">

    @csrf
    @method('patch')

    <div class="form-group">
        <label for="inputTitle">Post title</label>
        <input name="title" type="text" class="form-control" id="inputTitle" aria-describedby="titleHelp" placeholder="Enter title"
            autocomplete="off" required value="{{ $post->title }}">
    </div>

    <div class="form-group">
        <label for="inputText">Post text</label>
        <textarea name="body" class="form-control" id="inputText" rows="3" placeholder="Enter text" required>{{ $post->body }}</textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>

    @include('layouts.errors')

</form>

@endsection
