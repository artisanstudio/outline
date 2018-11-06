<div class="form-field
            {{ ($iconLeft ?? false) ? '-icon -left' : null }}
            {{ ($iconRight ?? false) ? '-icon -right' : null }}
            {{ $error ? '-error' : null }}
            {{ $class ?? null }}">

    <label for="{{ $name }}" class="label">
        {{ $label }}

        @if($optional ?? false)
            <small class="optional">(optional)</small>
        @endif
    </label>

    <div class="control">
        @if($iconLeft ?? false)
            <i class="icon -left">{{ $iconLeft }}</i>
        @endif

        <input id="{{ $name }}"
               class="input"
               type="text"
               name="{{ $name }}"
               value="{{ $value }}"
               placeholder="{{ $placeholder ?? null }}"

               @if($autofocus ?? false)
                   autofocus
               @endif

               @if($vModel ?? false)
                   v-model="{{ $vModel }}"
               @endif
        >

        @if($iconRight ?? false)
            <i class="icon -right">{{ $iconRight }}</i>
        @endif
    </div>

    @if((! ($silent ?? false)) && $error)
        <p class="message">{!! $error !!}</p>
    @endif
</div>
