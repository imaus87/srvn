<div>
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-semibold">
            Team Informatie
        </h1>
        <x-button wire:click="editOn">
            Edit
        </x-button>
    </div>

    @if (!$editmode)
        <div class="rounded-md bg-white px-9 py-6 text-lg shadow-md dark:bg-neutral-800">
            <p class="font-semibold">
                Naam: <span class="font-normal">{{ $name }}</span>
            </p>
            <p class="font-semibold">
                Locatie: <span class="font-normal">{{ $location }}</span>
            </p>
            <p class="font-semibold">
                Eigenaar: <span class="font-normal">{{ $owner }}</span>
            </p>
            <p class="font-semibold">
                Opgericht: <span class="font-normal">{{ $since }}</span>
            </p>
            <p class="font-semibold">
                Omschrijving: <span class="font-normal">{{ $description }}</span>
            </p>
        </div>
    @endif

    @if ($editmode)
        <div class="rounded-md bg-white shadow-md dark:bg-neutral-800">
            <div class="flex flex-col px-9 py-6">
                <label for="name">Naam:</label>
                <x-input id="name" name="name" wire:model.lazy="name" />
                <label for="location">Locatie:</label>
                <x-input id="location" name="location" wire:model.lazy="location" />
                <label for="owner">Eigenaar:</label>
                <x-input id="owner" name="owner" wire:model.lazy="owner" />
                <label for="since">Opgericht:</label>
                <x-input id="since" name="since" wire:model.lazy="since" />
                <label for="description">Omschrijving:</label>
                <textarea id="description" name="description" wire:model.lazy="description"
                          class="appearance-none rounded outline-0 ring ring-transparent focus:border-srvn-orange focus:ring-srvn-orange focus:ring-opacity-25">
                </textarea>
            </div>
            <div class="flex justify-end space-x-3 border-t border-neutral-100 dark:border-neutral-700 px-9 py-3">
                <x-button wire:click="editOff">
                    Terug
                </x-button>
                <x-button wire:click="save">
                    Save
                </x-button>
            </div>
        </div>
    @endif
</div>
