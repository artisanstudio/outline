<nav class="current-user">
    <img class="avatar" alt="" src="https://www.gravatar.com/avatar/{{ md5(auth()->user()->email) }}">

    <strong class="name">{{ auth()->user()->name }}</strong>
    <small class="greeting">Good Morning!</small>
</nav>
