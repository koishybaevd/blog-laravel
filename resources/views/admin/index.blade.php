<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>

<body>

    <div id="app" class="container-fluid">
        <div class="row">
            
            <div class="d-none d-md-block col-2 bg-dark text-white">
                <ul class="list-group list-group-flush">
                    <a href="{{ route('admin.home') }}" class="list-group-item bg-dark text-white">Home</a>
                    <a href="{{ route('admin.posts') }}" class="list-group-item bg-dark text-white">Posts</a>
                    <a href="{{ route('admin.comments') }}" class="list-group-item bg-dark text-white">Comments</a>
                    <a href="#" class="list-group-item bg-dark text-white">Users</a>
                    <a href="#" class="list-group-item bg-dark text-white">Categories</a>
                    <a href="#" class="list-group-item bg-dark text-white">Tags</a>
                </ul>
            </div>

            <div class="col">
                @yield('content')
            </div>

        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>

</html>
