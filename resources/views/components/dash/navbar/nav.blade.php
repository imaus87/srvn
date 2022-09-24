<nav class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
    <ul {!! $attributes->merge(['class' => 'space-x-4 flex']) !!}>
        {{ $slot }}
    </ul>
</nav>
