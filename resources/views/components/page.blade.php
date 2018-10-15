<section class="app-page {{ $class ?? null }}">
    <header class="header">
        <h1 class="title">{{ $title }}</h1>
        <div class="caption">
            {{ $caption }}
        </div>

        @if($cta ?? false)
            {{ $cta }}
        @endif
    </header>

    {{ $slot }}
</section>
