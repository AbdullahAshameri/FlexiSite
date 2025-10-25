@props([
    'name',
    'label' => false,
    'options' => [],
    'checked' => ''
])

<div class="form-group">
    @if ($label)
        <label class="d-block">{{ $label }}</label>
    @endif

    @foreach ($options as $value => $text)
        <div class="form-check form-check">
            <input class="form-check-input"
                   type="radio"
                   name="{{ $name }}"
                   id="{{ $name . '_' . $value }}"
                   value="{{ $value }}"
                   @checked(old($name, $checked) == $value)
                   {{ $attributes->class([
                        'form-check-input',
                        'is-invalid' => $errors->has($name)
                   ]) }}>

            <label class="form-check-label" for="{{ $name . '_' . $value }}">
                {{ $text }}
            </label>
        </div>
    @endforeach

    @error($name)
        <div class="invalid-feedback d-block">
            {{ $message }}
        </div>
    @enderror
</div>
