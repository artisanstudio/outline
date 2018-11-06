<header class="app-header">
    <button type="button" class="global-search" @click.prevent="openGlobalSearch()">
        <i class="icon icon-search"></i>
        <span class="placeholder">Search</span>
    </button>

    <button type="button" class="hamburger button -transparent" :class="{ '-active': sidebar.open }" @click.prevent="openSidebar()">
        <i class="icon icon-menu"></i>
    </button>
</header>
