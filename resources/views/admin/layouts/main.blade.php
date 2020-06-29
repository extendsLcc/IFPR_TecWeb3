<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Controle de Séries - @yield('title')</title>

    <meta name="description" content="@yield('meta_description', 'controle series')">
    <meta name="author" content="extendsLcc">

    @yield('meta')


    @stack('before-styles')
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body, html{
            height: 100%;
        }
    </style>
    @stack('styles')

</head>
<body>

    @yield('body')

    @stack('before-scripts')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    @stack('scripts')

</body>
</html>
