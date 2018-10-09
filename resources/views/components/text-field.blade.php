<div class="form-field
            {{ $name }}
            {{ $error ? '-error' : null }}
            {{ $class ?? null }}">

    <label for="{{ $name }}" class="label">
        {{ $label }}

        @if($optional ?? false)
            <small class="optional">(optional)</small>
        @endif
    </label>

    <div class="control">
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
    </div>

    @if((! ($silent ?? false)) && $error)
        <p class="message">{!! $error !!}</p>
    @endif
</div>
