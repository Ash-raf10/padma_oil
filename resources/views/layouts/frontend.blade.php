<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('public/css/frontend/style.css') }}" rel="stylesheet">
    <script src="{{ asset('public/vendor/jquery/jquery.min.js') }}"></script>
</head>
<body>
<div class="preloader">
    <div class="anim pulse"><img src="{{ asset('../public/images/preloader.gif') }}"></div>
</div>
<div class="wrapper">
    @yield('content')
</div>

<!-- Scripts -->

<script src="{{ asset('public/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('public/js/frontend/main.js') }}"></script>
</body>
</html>
