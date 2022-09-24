<ul x-data="{ active: 0 }"
    role="region"
    class="[&>li:nth-child(even)]:bg-zinc-700 mt-6 space-y-2 rounded-lg text-zinc-50">
    {{ $slot }}
</ul>
