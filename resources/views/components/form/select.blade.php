@props([
    'name',
    'id' => null,
    'label' => false,
    'text' => '',
    'options' => [], // key => label
    'selected' => ''
])

<div class="form-group">
    @if ($label)
        <label for="{{ $id ?? $name }}">{{ $label }}</label>
    @endif

    <select
        name="{{ $name }}"
        id="{{ $id ?? $name }}"
        {{ $attributes->class([
            'form-control',
            'is-invalid' => $errors->has($name),
        ]) }}
    >
        <option value="">{{ $text }}</option>

        @foreach ($options as $value => $optionLabel)
            <option value="{{ $value }}" @selected(old($name, $selected) == $value)>
                {{ $optionLabel }}
            </option>
        @endforeach
    </select>

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
