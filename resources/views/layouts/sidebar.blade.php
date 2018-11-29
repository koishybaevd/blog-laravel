@include('layouts.flashMessage')

<div class="card shadow-sm mb-3">
    <div class="card-body">
        <h4 class="card-title">Archives</h4>
        <hr>
        <ol class="list-unstyled">
            @foreach($archives as $archive)
            <li>
                <a href="/posts/?year={{$archive->year}}&month={{$archive->month}}">{{ $archive->month . ' ' .
                    $archive->year }}</a>
            </li>
            @endforeach
        </ol>
    </div>
</div>

<div class="card shadow-sm mb-3">
    <div class="card-body">
        <h4 class="card-title">Tags</h4>
        <hr>
        <ol class="list-unstyled">
            @foreach($tags as $tag)
            <li>
                <a href="/posts/?tag={{ $tag->name }}">
                    <span>{{ $tag->name }}</span>
                    <span class="badge badge-secondary">{{ count($tag->posts) }}</span>
                </a>
            </li>
            @endforeach
        </ol>
    </div>
</div>

<div class="card shadow-sm mb-3">
    <div class="card-body">
        <h4 class="card-title">Elsewhere</h4>
        <hr>
        <ol class="list-unstyled">
            <li><a href="https://github.com/koishybaevd/blog-laravel">GitHub</a></li>
        </ol>
    </div>
</div>
