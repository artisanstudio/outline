<aside class="app-sidebar" :class="{ '-open': sidebar.open }">
    @include('outline::partials.logo')

    <nav class="navigation sidebar-navigation mb-4">
        <ul class="links">
            @foreach($sidebar as $item)
            <li class="item {{ Facades\Artisan\Outline\Outline::activeWhen(array_get($item, 'scope', $item['path'])) ? '-active' : null }}">
                <a class="button justify-start -transparent -with-icon" href="{{ $item['path'] }}">
                    <i class="icon icon-{{ $item['icon'] }} [ mr-2 ]" style="margin-top: 1.5px; opacity: .9;"></i>
                    {{ $item['title'] }}
                </a>
            </li>
            @endforeach
        </ul>
    </nav>
</aside>
