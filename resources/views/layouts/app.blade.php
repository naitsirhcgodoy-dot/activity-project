<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>{{ $title ?? 'Home page' }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div id="app" class="app-root">
        @include('layouts.header')
        

        <div class="site-body">
            @include('layouts.sidebar')

            <main class="main-content" role="main" id="mainContent">
                @yield('content')
            </main>
        </div>
        @include('layouts.footer')

        <!-- mobile overlay for sidebar -->
        <div id="overlay" class="overlay" aria-hidden="true"></div>
    </div>
</body>
</html>