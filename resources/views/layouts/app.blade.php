<!doctype html>
<html class="[ bg-primary ]" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>
            @yield('title') · {{ config('app.name') }}
        </title>

        <link rel="icon" href="/vendor/outline/img/favicon.png">
        <link href="{{ mix('css/app.css', 'vendor/outline') }}" rel="stylesheet">

        @yield('head')
    </head>

    <body class="[ leading-normal tracking-normal font-sans font-normal text-base bg-offwhite text-black ]">
        <main id="app" class="app [ flex flex-col md:flex-row ]" :class="{ 'sidebar-open': sidebar.open }">
            @include('outline::layouts._sidebar')

            <section class="body [ flex-grow ]">
                @include('outline::layouts._header')

                <section class="content [ pt-4 pb-16 px-6 md:px-8 rounded-tl-sm bg-white ]">
                    @yield('content')
                </section>
            </section>
        </main>

        <script type="text/javascript" src="{{ mix('js/manifest.js', 'vendor/outline') }}"></script>
        <script type="text/javascript" src="{{ mix('js/vendor.js', 'vendor/outline') }}"></script>
        <script type="text/javascript" src="{{ mix('js/bootstrap.js', 'vendor/outline') }}"></script>

        @stack('scripts')

        <script type="text/javascript" src="{{ mix('js/app.js', 'vendor/outline') }}"></script>
    </body>
</html>
