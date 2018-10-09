<div class="form-field
            {{ $name }}
            {{ $errors->has($name) ? '-error' : null }}
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
               type="{{ $type ?? 'text' }}"
               name="{{ $name }}"
               value="{{ old($name, $value ?? null) }}"
               placeholder="{{ $placeholder ?? null }}"

               @if($autofocus ?? false)
                   autofocus
               @endif

               @if($model ?? false)
                   v-model="{{ $model }}"
               @endif
        >
    </div>

    @if(($showError ?? true) && $errors->has($name))
        <p class="message">{!! $errors->get($name)[0] !!}</p>
    @endif
</div>
