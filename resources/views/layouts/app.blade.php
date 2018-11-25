<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
</head>

<body>
    <div class="app">

        @include('layouts.navbar')

        <div class="blog-header">
            <div class="container">
                <h1 class="blog-title">The Bootstrap Blog</h1>
                <p class="lead blog-description">An example blog template built with Bootstrap.</p>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <!-- Main column -->
                <div class="col-sm-8 blog-main">

                    <div class="blog-post">
                        <h2 class="blog-post-title">Sample blog post</h2>
                        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
                        <p>Post text</p>
                    </div>

                    <nav class="blog-pagination">
                        <a class="btn btn-outline-primary" href="#">Older</a>
                        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                    </nav>

                </div>

                <!-- Sidebar column -->
                @include('layouts.sidebar')        

            </div>
        </div>

        @include('layouts.footer')

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </div>
</body>

</html>
