<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.typekit.net/tff8xri.css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ mix('/js/manifest.js') }}" defer></script>
        <script src="{{ mix('/js/vendor.js') }}" defer></script>
        <script src="{{ mix('/js/app.js') }}" defer></script>

        <meta name="turbolinks-cache-control" content="no-cache">
    </head>
    <body class="bg-grey-lightest font-lato">
        @yield('content')
    </body>
</html>
