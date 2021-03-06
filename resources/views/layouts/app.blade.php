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

        @stack('head')

        <script>
            window.Admin = {!! json_encode([
                'notification' => Facades\Artisan\Outline\Http\Flash::get(),
            ]) !!}
        </script>
    </head>

    <body>
        <section id="app" class="app-wrapper" :class="{ '-sidebar-open': sidebar.open }">
            @include('outline::layouts._sidebar')

            <section class="app-overlay"
                 @click.prevent="closeSidebar"
                 v-if="sidebar.open">
            </section>

            <section class="app-main">
                @include('outline::layouts._header')

                <main class="app-content">
                    @yield('content')
                </main>
            </section>

            <transition name="fade">
                <search-overlay
                    v-if="search.open"
                    @close="closeGlobalSearch()"
                    api="/{{ config('outline.prefix') }}/search">
                </search-overlay>
            </transition>

            <notifications
                classes="alert-message" width="375"
                position="bottom right" animation-type="velocity" />
        </section>

        <script type="text/javascript" src="/vendor/outline/js/manifest.js"></script>
        <script type="text/javascript" src="/vendor/outline/js/vendor.js"></script>
        <script type="text/javascript" src="/vendor/outline/js/bootstrap.js"></script>

        @stack('scripts')

        <script type="text/javascript" src="/vendor/outline/js/app.js"></script>
    </body>
</html>
