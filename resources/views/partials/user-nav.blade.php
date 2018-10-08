<nav class="user-nav">
    <a class="user" href="#">
        <img class="avatar rounded-full" alt="" src="https://www.gravatar.com/avatar/{{ md5(auth()->user()->email) }}">

        <span class="name">{{ auth()->user()->name }}</span>
    </a>
</nav>
