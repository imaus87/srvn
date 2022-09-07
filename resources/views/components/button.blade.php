@props(['color' => 'blue', 'href' => false, 'type' => 'submit'])

@php
    $baseclasses = 'inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest focus:outline-none disabled:opacity-25 transition ease-in-out duration-150';
    $blue = 'bg-blue-700 text-white  hover:bg-blue-600 active:bg-blue-800 focus:border-blue-800 focus:shadow-outline-gray';
    $green = 'bg-emerald-700 text-white  hover:bg-emerald-600 active:bg-emerald-800 focus:border-emerald-800 focus:shadow-outline-gray';
    $indigo = 'bg-indigo-700 text-white  hover:bg-indigo-600 active:bg-indigo-800 focus:border-indigo-800 focus:shadow-outline-gray';
    $gray = 'bg-zinc-700 text-white  hover:bg-zinc-600 active:bg-zinc-800 focus:border-zinc-800 focus:shadow-outline-gray';
    $red = 'bg-red-600 text-white hover:bg-red-500 focus:border-red-700 focus:shadow-outline-red active:bg-red-600';

    $link = 'hover:text-white cursor-pointer';

    switch ($color) {
        case 'blue':
            $colorClasses = $blue;
            break;
        case 'green':
            $colorClasses = $green;
            break;
        case 'indigo':
            $colorClasses = $indigo;
            break;
        case 'gray':
            $colorClasses = $gray;
            break;
        case 'red':
            $colorClasses = $red;
            break;

        default:
            $colorClasses = $blue;
            break;
    }

    $classes = $baseclasses.' '.$colorClasses;

    if ($href) {
        $linkClasses = $classes.' '.$link;
    }
@endphp

@if ($href)
    <a {{ $attributes->merge(['href' => $href, 'class' =>  $linkClasses ]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}"{{ $attributes->merge(['class' =>  $classes.' ' ]) }}>
        {{ $slot }}
    </button>
@endif
