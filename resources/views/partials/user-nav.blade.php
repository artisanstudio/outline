<nav class="user-nav">
    <a class="user" href="#" @click.prevent="toggleUserNavigation()">
        <img class="avatar" alt="" src="https://www.gravatar.com/avatar/{{ md5(auth()->user()->email) }}">

        <i class="icon icon-chevron-down"></i>
    </a>

    <ul class="dropdown" v-if="userNavigation">
        <li>
            <a class="user leading-tight">
                <span class="name">{{ auth()->user()->name }}</span>
                <small class="email text-grey-darker">{{ auth()->user()->email }}</small>
            </a>
        </li>

        <li class="separator"></li>

        <li>
            <form method="POST" action="{{ route(config('outline.prefix') . '.sessions.destroy') }}">
                @method('DELETE')
                @csrf
                <button class="button" type="submit">Sign Out</button>
            </form>
        </li>
    </ul>
</nav>
