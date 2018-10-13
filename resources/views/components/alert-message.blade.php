<transition name="fade">
    <div class="alert-message -{{ $type }}" v-if="alert.open">
        {{ $slot }}

        <button type="button" class="close" @click.prevent="closeAlert">
            <i class="icon icon-x"></i>
        </button>
    </div>
</transition>
