@extends('layouts.app')

@section('content')

<form action="{{ route('posts.store') }}" method="post">

    @csrf

    <div class="form-group">
        <label for="inputTitle">Post title</label>
        <input name="title" type="text" class="form-control" id="inputTitle" aria-describedby="titleHelp" placeholder="Enter title"
            autocomplete="off" required>
    </div>

    <div class="form-group">
        <label for="inputText">Post text</label>
        <textarea name="body" class="form-control" id="inputText" rows="3" placeholder="Enter text" required></textarea>
    </div>

    <div class="form-group">
        <label for="selectCategory">Select category</label>
        <select name="category" class="form-control" id="selectCategory" required>
            <option selected disabled>Categories</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="selectTags">Select tags</label>
        <select name="tags[]" multiple class="form-control" id="selectTags" required>
            @foreach ($tags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach            
        </select>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Publish</button>
    </div>

    @include('layouts.errors')

</form>

@endsection
