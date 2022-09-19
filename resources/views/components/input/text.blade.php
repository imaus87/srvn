@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'p-3 font-semibold text-sm rounded border border-stone-500 bg-srvn-gray focus:border-srvn-orange focus:ring focus:ring-srvn-orange focus:ring-opacity-25 focus:outline-none placeholder:text-stone-400 placeholder:font-medium',
]) !!}>
