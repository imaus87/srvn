<li>
    <a {!! $attributes->merge(['class' => 'flex font-medium h-full w-full items-center px-3 hover:text-[#ff460d]']) !!}>
        {{ $slot }}
    </a>
</li>
