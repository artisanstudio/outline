<section class="app-page {{ $class ?? null }}">
    <header class="header">
        <h1 class="title">{{ $title }}</h1>
        @if($caption ?? false)
        <div class="caption">
            {{ $caption }}
        </div>
        @endif

        @if($actions ?? false)
            <nav class="actions">
                {{ $actions }}
            </nav>
        @endif
    </header>

    {{ $slot }}
</section>
