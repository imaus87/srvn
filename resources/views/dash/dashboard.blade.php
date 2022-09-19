<div class="container mx-auto flex h-full">

    <x-dash.sidebar />
    <div class="px-9 py-6">
        You are logged in now.
        <x-button class="mt-4 max-w-min bg-stone-100 dark:bg-stone-900" type="button" wire:click="logout">
            Uitloggen
        </x-button>
    </div>
</div>
