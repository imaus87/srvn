<li>
    <a {!! $attributes->merge([
        'class' =>
            'flex h-full w-full items-center rounded-md px-3 py-2 font-medium ring ring-transparent hover:bg-transparent hover:text-srvn-orange focus:ring-srvn-orange active:text-srvn-orange',
    ]) !!}
       class="">
        {{ $slot }}
    </a>
</li>
