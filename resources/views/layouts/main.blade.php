<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    {{-- TODO: change site name by aplication type --}}
    <title>TecWeb 3 - @yield('title')</title>
    
    <meta name="description" content="@yield('meta_description', 'controle series')">
    <meta name="author" content="extendsLcc">
    
    @yield('meta')
    
    <!-- Before-Styles -->
    @stack('before-styles')
    <!-- /Before-Styles -->
    
    <!-- Styles -->
    <link href="{{ asset('css/vendor.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    @stack('styles')
    <!-- /Styles -->

</head>
<body>
    <!-- Body -->
    @yield('body')
    <!-- /Body -->
    
    @stack('before-scripts')
    <!-- Scripts -->
    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
    <!-- /Scripts -->
</body>
</html>
