@props(['iteration'])

<li class="rounded-lg bg-zinc-800"
    {{ $attributes }}
    x-data="{
        id: {{ $iteration }},
        get expanded() {
            return this.active === this.id
        },
        set expanded(value) {
            this.active = value ? this.id : null
        },
    }">
    <button x-on:click="expanded = !expanded"
            x-bind:aria-expanded="expanded"
            class="flex w-full items-center justify-between rounded-lg px-4 py-3">
        {{ $card }}
        <span x-bind:class="expanded && '-rotate-180 transition-transform'"
              aria-hidden="true"
              class="ml-4 transition-transform">
            <x-heroicon-s-chevron-down class="h-6" />
        </span>
    </button>
    <div x-show="expanded"
         x-collapse
         class="space-y-2 px-4 pb-4">
        {{ $expanded }}
    </div>
</li>
