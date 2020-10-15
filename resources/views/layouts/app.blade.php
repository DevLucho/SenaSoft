<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shorcut icon" href="{{asset('storage/icon.png')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <script src="https://kit.fontawesome.com/11c72a119e.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @guest
            @include('layouts/navGuest')
        @else
            @include('layouts/navUser')
        @endguest
        
        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>
        @guest
            
        @else
            <footer class="footer-hack">
            <p class="text-md-right">Developed by Hackathon (G28) &copy {{date("Y")}}</p>
            </footer>  
        @endguest
    </div>
</body>
</html>
