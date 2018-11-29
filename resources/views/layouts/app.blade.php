<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
</head>

<body>
    <div id="app" class="bg-light">

        @include('layouts.navbar')

        <div class="container my-5">
            <div class="row">

                <!-- Main column -->
                <div class="col-12 col-sm-8 col-md-9 blog-main">
                    @yield('content')
                </div>

                <!-- Sidebar column -->
                <div class="col-12 col-sm-4 col-md-3 blog-main">
                    @include('layouts.sidebar')   
                </div>     

            </div>
        </div>

        @include('layouts.footer')

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
</body>

</html>
