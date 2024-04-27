<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') - AtaCar</title>
{{--        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">--}}
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-icons.min.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        </head>
    <body>
        @include('app.nav')
        @include('app.alert')
        @yield('content')
        </body>
</html>
