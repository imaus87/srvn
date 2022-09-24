@props(['gridcols' => 'grid-cols-4'])

<li role="row"
    class="{{ $gridcols }} grid min-h-min rounded-md py-1 px-4 text-zinc-200">
    {{ $slot }}
</li>
