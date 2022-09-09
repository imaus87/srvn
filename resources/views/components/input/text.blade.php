@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'p-3 font-semibold text-sm rounded border border-stone-500 bg-[#f3f3f3] focus:border-[#ff460d] focus:ring focus:ring-[#ff460d] focus:ring-opacity-25 focus:outline-none placeholder:text-stone-400 placeholder:font-medium',
]) !!}>
