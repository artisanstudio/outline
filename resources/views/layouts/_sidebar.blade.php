<aside class="app-sidebar" :class="{ '-open': sidebar.open }">
    <h1 class="title">{{ config('outline.name') }}</h1>

    <nav class="navigation sidebar-navigation mb-4">
        <ul class="links">
            @foreach($sidebar as $item)
            <li class="item {{ Facades\Artisan\Outline\Outline::activeWhen(array_get($item, 'scope', $item['path'])) ? '-active' : null }}">
                <a class="button justify-start -transparent -with-icon" href="{{ $item['path'] }}">
                    <i class="icon icon-{{ $item['icon'] }}"></i>
                    {{ $item['title'] }}
                </a>
            </li>
            @endforeach
        </ul>
    </nav>
</aside>
