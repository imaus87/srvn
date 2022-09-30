@props(['gridcols' => 'grid-cols-4'])

<li role="row"
    class="{{ $gridcols }} grid min-h-min rounded-md py-1 px-4 text-neutral-700 dark:text-neutral-200">
    {{ $slot }}
</li>
