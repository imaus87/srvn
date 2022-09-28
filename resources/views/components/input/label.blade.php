@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-base']) }}>
    {{ $value ?? $slot }}
</label>
