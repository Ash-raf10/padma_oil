<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/backend/all.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/backend/style.css') }}" rel="stylesheet">

    <script src="{{ asset('public/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('public/vendor/feather/feather.min.js') }}"></script>

</head>
<body>

<div class="preloader">
    <div class="anim pulse"><img src="{{ asset('../public/images/preloader.gif') }}"></div>
</div>
<div class="wrapper">
    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('public/js/backend/all.js') }}"></script>
<script src="{{ asset('public/js/backend/main.js') }}"></script>
<script src="{{ asset('public/js/app.js') }}"></script>

@if(!empty($message))
    @if($message == 'Congratulations')
        <script src="{{ asset('public/js/backend/jquery.confetti.js') }}"></script>
        <script type="text/javascript">
            $.confetti.start();
        </script>
    @endif
@endif
<script>
    feather.replace()
</script>
<script>
    $(document).ready(function () {
        $('.signout').on('click', function (e) {
            e.preventDefault();
            caches.keys().then(function () {
                caches.delete('dynamic');
            });
            $(location).attr('href', '{{ route('logout') }}');
        });
    });
</script>
{{-- <script type="text/javascript" src="{{ url('resources/js/cordova.js') }}"></script> --}}
{{-- <script type = "text/javascript">

document.addEventListener('deviceready', onDeviceReady, false);

function onDeviceReady() {

      window.plugins.OneSignal
            .startInit("d54dc557-bcbe-4ed4-9277-12b2c594b6d3")
            .handleNotificationReceived(function (jsonData) {
                window.location.href = openResult.notification.payload.additionalData.url;
            })
            .handleNotificationOpened(function (openResult) {
                window.location.href = openResult.notification.payload.additionalData.url;

            })
            .inFocusDisplaying()
            .endInit();
}

</script> --}}


</body>
</html>
