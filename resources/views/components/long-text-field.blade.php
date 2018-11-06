<div class="form-field
        {{ $hint ?? false ? '-hint' : null }}
        {{ $error ? '-error' : null }}
        {{ $class ?? null }}">

    <label for="{{ $name }}" class="label">
        {{ $label }}

        @if($optional ?? false)
            <small class="optional">(optional)</small>
        @endif
    </label>

    <div class="control">
        <textarea id="{{ $name }}"
               class="input"
               type="text"
               name="{{ $name }}"
               placeholder="{{ $placeholder ?? null }}"

               @if($autofocus ?? false)
                   autofocus
               @endif

               @if($vModel ?? false)
                   v-model="{{ $vModel }}"
               @endif
        >{{ $value }}</textarea>
    </div>

    @if($hint ?? false)
    <p class="hint">{{ $hint }}</p>
    @endif

    @if((! ($silent ?? false)) && $error)
        <p class="message">{!! $error !!}</p>
    @endif
</div>
