<li class="">
    <a {!! $attributes->merge([
        'class' => 'flex h-full w-full items-center rounded-md px-3 py-2 font-medium hover:text-srvn-orange',
    ]) !!}>
        {{ $slot }}
    </a>
</li>
