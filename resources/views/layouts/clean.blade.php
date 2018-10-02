<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>
            @yield('title') · {{ config('app.name') }}
        </title>

        <link rel="icon" href="/vendor/outline/img/favicon.png">
        <link href="/vendor/outline/css/app.css" rel="stylesheet">

        @yield('head')
    </head>

    <body class="[ leading-normal tracking-normal font-sans font-normal text-base bg-white text-black ]">
        @yield('content')

        @stack('scripts')
    </body>
</html>
