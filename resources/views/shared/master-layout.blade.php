<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('larablog.title') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('vendor/larablog/css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="larablog">
        @yield('main')
    </div>

    <script src="{{ asset('vendor/larablog/js/manifest.js') }}"></script>
    <script src="{{ asset('vendor/larablog/js/vendor.js') }}"></script>
    <script src="{{ asset('vendor/larablog/js/app.js') }}"></script>
</body>
</html>