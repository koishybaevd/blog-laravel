<div class="card">
    <div class="card-body p-2">
        <form action="{{ route('comments.store') }}" method="post">
            @csrf

            <input type="hidden" name="post" value="{{ $post->id }}">

            <div class="form-group">
                <textarea name="body" class="form-control" id="inputText" rows="1" placeholder="Enter comment"></textarea>
            </div>

            <div class="form-group mb-0">
                <button type="submit" class="btn btn-sm btn-primary">ADD COMMENT</button>
            </div>

            @include('layouts.errors')
        </form>
    </div>
</div>

<ul class="list-group my-4">
    @foreach($post->comments as $comment)
    <li class="list-group-item pb-0">
        <p class="text-muted mb-1">{{ $comment->created_at->toFormattedDateString() }} &nbsp;
            <a href="#">{{ $comment->user->name }}</a></p>
        <p>{{ $comment->body }}</p>
    </li>
    @endforeach
</ul>
