@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'p-3 font-semibold text-base rounded border border-neutral-500 bg-white focus:border-srvn-orange focus:ring focus:ring-srvn-orange focus:ring-opacity-25 focus:outline-none placeholder:text-neutral-400 placeholder:font-medium',
]) !!}>
