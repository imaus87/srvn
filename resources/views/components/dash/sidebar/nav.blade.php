<nav>
    <ul {!! $attributes->merge(['class' => 'space-y-2 font-medium text-neutral-900 dark:text-neutral-500']) !!}>
        {{ $slot }}
    </ul>
</nav>
