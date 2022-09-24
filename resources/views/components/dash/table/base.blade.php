@props(['gridcols' => 'grid-cols-4'])

<div class="min-w-min max-w-7xl rounded-lg dark:bg-zinc-800">

    <div
         class="{{ $gridcols }} grid w-full border-b border-zinc-700 py-[0.625rem] px-6 text-xs font-bold uppercase tracking-wider text-zinc-400">
        {{ $header }}
    </div>

    <ul role="table"
        class="[&>li:nth-child(even)]:bg-zinc-700 rounded-b-lg px-2 pb-2">
        {{ $slot }}
    </ul>

</div>
