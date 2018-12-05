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

<div class="my-4">
    @foreach($post->comments as $comment)
        @if($comment->parent_id === 0)
        <div class="pb-0">
            <p class="text-muted mb-1">{{ $comment->created_at->toFormattedDateString() }} &nbsp;
                <a href="#">{{ $comment->user->name }}</a></p>
            <p>{{ $comment->body }}</p>
            <hr>
            @if(count($comment->replies))
                @include('comments.comment', ['replies' => $comment->replies])
            @endif
        </div>
        @endif
    @endforeach
    
</div>
