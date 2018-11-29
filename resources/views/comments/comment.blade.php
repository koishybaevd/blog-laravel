@foreach($comment->replies as $comment)
<div class="ml-3 pb-0">
    <p class="text-muted mb-1">{{ $comment->created_at->toFormattedDateString() }} &nbsp;
        <a href="#">{{ $comment->user->name }}</a>
        <span>for {{ $parent->user->name }}</span>
    </p>
    <p>{{ $comment->body }}</p>
    <hr>

    @include('comments.comment', ['parent' => $comment])

</div>    
@endforeach

