<transition name="fade">
    <div class="alert-message -{{ $type }}" v-if="alert.open">
        <strong class="title">{{ $title }}</strong>
        {{ $slot }}

        <button type="button" class="close" @click.prevent="closeAlertMessage">
            <i class="icon icon-x"></i>
        </button>
    </div>
</transition>
