<div class="alert-message -{{ $type }}" ref="alert">
    {{ $slot }}

    <button type="button" class="close" @click.prevent="closeAlert">
        <i class="icon icon-x"></i>
    </button>
</div>
