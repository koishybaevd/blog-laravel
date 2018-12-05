@foreach($replies as $reply)
<div class="ml-3 pb-0">
    <p class="text-muted mb-1">{{ $reply->created_at->toFormattedDateString() }} &nbsp;
        <a href="#">{{ $reply->user->name }}</a>
        <span>for {{ $reply->parent->user->name }}</span>
    </p>
    <p>{{ $reply->body }}</p>
    <hr>
    @if(count($reply->replies))
        @include('comments.comment', ['replies' => $reply->replies])
    @endif
</div>    
@endforeach

