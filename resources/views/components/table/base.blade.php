@props(['gridcols' => 'grid-cols-4'])

<div class="min-w-min max-w-7xl rounded-lg bg-neutral-200 dark:bg-neutral-800">

    <div
         class="{{ $gridcols }} grid w-full border-b border-neutral-100 py-[0.625rem] px-6 text-xs font-bold uppercase tracking-wider text-neutral-400 dark:border-neutral-700">
        {{ $header }}
    </div>

    <ul role="table"
        class="rounded-b-lg px-2 pb-2 [&>li:nth-child(even)]:bg-neutral-100 dark:[&>li:nth-child(even)]:bg-neutral-700">
        {{ $slot }}
    </ul>

</div>
