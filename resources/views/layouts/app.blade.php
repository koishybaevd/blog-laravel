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
                <h1 class="blog-title">Blog-Laravel</h1>
                <p class="lead blog-description">An example blog</p>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <!-- Main column -->
                <div class="col-sm-8 blog-main">

                    @yield('content')

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
