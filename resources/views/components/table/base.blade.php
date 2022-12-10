@props(['gridcols' => 'grid-cols-4'])

<div class="min-w-min max-w-7xl rounded-md">

    <div
         class="{{ $gridcols }} mb-3 grid w-full rounded-md bg-white py-[0.625rem] px-6 font-oxanium text-xs font-medium tracking-wider text-neutral-900 shadow-md">
        {{ $header }}
    </div>

    <ul role="table"
        class="space-y-3">
        {{ $slot }}
    </ul>

</div>
