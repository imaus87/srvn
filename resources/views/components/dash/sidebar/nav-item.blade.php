<li>
    <a {!! $attributes->merge(['class' => 'flex items-center space-x-4 py-1 hover:text-neutral-400']) !!}>
        {{ $slot }}
    </a>
</li>
