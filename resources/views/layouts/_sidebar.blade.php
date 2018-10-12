<aside class="app-sidebar" :class="{ '-open': sidebar.open }">
    <h1 class="title">{{ config('outline.name') }}</h1>

    @include('outline::partials.current-user')

    <nav class="navigation sidebar-navigation mb-4">
        <ul class="links">
            <li class="item -separator"></li>

            @foreach($sidebar->items() as $item)
                @if($item->isSeparator())
                    <li class="item -separator"></li>
                @else
                    <li class="item {{ $item->active() }}">
                        <a class="link" href="{{ $item->link }}">
                            <i class="icon {{ $item->icon }}"></i>

                            {{ $item->name }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </nav>
</aside>
