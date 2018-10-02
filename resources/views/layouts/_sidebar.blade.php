<aside class="app-sidebar" :class="{ '-open': sidebar.open }">
    <h1 class="title">Outline Admin</h1>

    <nav class="navigation [ mb-4 ]">
        <ul class="sidebar-links [ list-reset ]">
            @foreach($sidebar as $item)
            <li class="sidebar-link-item">
                <a class="sidebar-link [ text-grey-darker no-underline flex items-center relative py-3 px-4 mb-1 rounded-sm hover:bg-grey-lighter {{ \Facades\Artisan\Outline\Outline::activeStateHereForNowBecauseIDontWantToUseAHelper(array_get($item, 'scope', $item['path'])) ? 'is-active' : null }} ]"
                   href="{{ $item['path'] }}">
                    <i class="icon icon-{{ $item['icon'] }} [ mr-2 ]" style="margin-top: 1.5px; opacity: .9;"></i>
                    {{ $item['title'] }}
                </a>
            </li>
            @endforeach
        </ul>
    </nav>
</aside>

<div class="sidebar-overlay [
    fixed h-screen w-screen bg-white z-40 cursor-pointer md:hidden opacity-75
]" @click.prevent="closeSidebar" v-if="sidebar.open">
</div>
