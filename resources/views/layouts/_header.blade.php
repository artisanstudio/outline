<header class="[ bg-offwhite py-4 px-6 md:px-8 flex ]">
    <nav class="browser-actions [ inline-flex ]">
        <a class="button [ rounded-r-none p-1 ]" href="#">
            @svg('chevron-left', ['height' => 24, 'width' => 26, 'stroke-width' => 1.5])
        </a>
        <a class="button [ border-l-0 p-1 rounded-l-none ]" href="#">
            @svg('chevron-right', ['height' => 24, 'width' => 26, 'stroke-width' => 1.5])
        </a>
    </nav>

    <a href="#" class="button [ py-1 px-2 ml-auto md:hidden ]" @click.prevent="openSidebar">
        @svg('hamburger', ['height' => 16, 'width' => 16, 'stroke-width' => 1.5])
    </a>
</header>
