<aside class="sidebar [
    bg-offwhite text-13 py-8
    w-sidebar flex-no-shrink flex-no-grow
    px-8 md:px-6
    fixed pin md:static md:block z-50
]" :class="{ 'is-open': sidebar.open }">
    <h1 class="sidebar-title [ text-black ms-base px-4 mb-8 ]">
        <!-- Let's change this later. -->
        Outline Admin
    </h1>

    <nav class="sidebar-nav [ mb-4 ]">
        <ul class="sidebar-links [ list-reset ]">
        </ul>
    </nav>

    <nav class="sidebar-nav">
        <h2 class="sidebar-nav-title [ uppercase ms-sm text-grey font-semibold mb-3 ]">Your Tools</h2>

        <ul class="sidebar-links [ list-reset ]">
        </ul>
    </nav>
</aside>

<div class="sidebar-overlay [
    fixed h-screen w-screen bg-white z-40 cursor-pointer md:hidden opacity-75
]" @click.prevent="closeSidebar" v-if="sidebar.open">
</div>
