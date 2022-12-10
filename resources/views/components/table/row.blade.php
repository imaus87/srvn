@props(['gridcols' => 'grid-cols-4'])

<li role="row"
    class="{{ $gridcols }} grid min-h-min rounded bg-white py-3 px-6 text-neutral-900 shadow-md dark:text-neutral-200">
    {{ $slot }}
</li>
