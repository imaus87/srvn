<div>
    <div class="mb-6 flex gap-6">
        <div>
            {{-- <x-input wire:model.delay="search"
                     placeholder="Zoek Gebruikers..."
                     type="search"
                     class="block w-full !rounded-lg px-2 py-1 dark:border-neutral-800 dark:bg-neutral-800" /> --}}
            <x-input.text wire:model.delay="search"
                          class="block w-full text-base"
                          type="search"
                          name="search"
                          placeholder="Zoek Gebruikers..." />
        </div>
        <div class="grid max-w-[200px] grid-cols-3 gap-1 rounded bg-white text-sm font-semibold uppercase dark:bg-neutral-800">
            <button class="{{ $loadIncrement === 10 ? 'bg-neutral-900 text-neutral-100 dark:bg-neutral-700' : '' }} flex items-center justify-center rounded p-1 px-4 hover:bg-neutral-100 dark:hover:bg-neutral-700/75"
                    wire:click="setAmount(10)">
                10
            </button>
            <button class="{{ $loadIncrement === 15 ? 'bg-neutral-900 text-neutral-100 dark:bg-neutral-700' : '' }} flex items-center justify-center rounded p-1 px-4 hover:bg-neutral-100 dark:hover:bg-neutral-700/75"
                    wire:click="setAmount(15)">
                15
            </button>
            <button class="{{ $loadIncrement === 20 ? 'bg-neutral-900 text-neutral-100 dark:bg-neutral-700' : '' }} flex items-center justify-center rounded p-1 px-4 hover:bg-neutral-100 dark:hover:bg-neutral-700/75"
                    wire:click="setAmount(20)">
                20
            </button>
        </div>
    </div>
    <x-table.base gridcols="grid-cols-2">
        <x-slot name="header">
            <span class="ml-15">User</span>
            <span>Roles</span>
        </x-slot>
        @forelse ($users as $user)
            <x-table.row gridcols="grid-cols-2">
                <x-table.cell>
                    <div class="flex w-full items-center">
                        {{-- <img class="ml-2 mr-4 h-8 w-8 rounded-full object-cover sm:block"
                             src="{{ $user->photo_url }}" alt="{{ $user->full_name }}" /> --}}

                        <div class="mr-6 h-9 w-9 overflow-hidden rounded-full">
                            @if (isset($user->photo_url))
                                <img class="h-full object-cover"
                                     src="{{ $user->photo_url }}" alt="Rijder foto">
                            @else
                                @php
                                    $i = rand(1, 4);
                                @endphp
                                @switch($i)
                                    @case(1)
                                        <img class="h-full object-cover opacity-60"
                                             src="https://steamuserimages-a.akamaihd.net/ugc/947336408514665995/AF59BC6F235A209A59200DEE6C5D50E4BFEBD0E6/"
                                             alt="Rijder foto">
                                    @break

                                    @case(2)
                                        <img class="h-full object-cover opacity-60"
                                             src="https://steamuserimages-a.akamaihd.net/ugc/947336408514689481/78D5D92C21D117C006F88DEB4DA57EACF16B601D/"
                                             alt="Rijder foto">
                                    @break

                                    @case(3)
                                        <img class="h-full object-cover opacity-60"
                                             src="https://steamuserimages-a.akamaihd.net/ugc/947336408523001743/7D8FE6718479559950E2D091E052AD35FD67130E/"
                                             alt="Rijder foto">
                                    @break

                                    @case(4)
                                        <img class="h-full object-cover opacity-60"
                                             src="https://steamuserimages-a.akamaihd.net/ugc/947336408523058097/297BA4E3D61CEA7D0E4005DF620D9E411ABF3B96/"
                                             alt="Rijder foto">
                                    @break
                                @endswitch
                            @endif
                        </div>
                        <div class="space-y-1">
                            <div class="text-base font-semibold">{{ $user->full_name }}</div>
                            <div>{{ $user->email }}</div>
                        </div>
                    </div>
                </x-table.cell>

                <x-table.cell>
                    @forelse ($user->roles as $role)
                        {{ $role->name }}
                    @empty
                    @endforelse
                </x-table.cell>
            </x-table.row>
        @empty
            <x-table.row>
                No Users
            </x-table.row>
        @endforelse
    </x-table.base>
    <div class="my-6">
        @if ($users->count() < $totalRecords)
            <button wire:click="loadMore"
                    class="flex h-[50px] items-center justify-center rounded bg-white px-4 py-2 hover:bg-neutral-900 hover:text-neutral-50 dark:bg-neutral-800 dark:hover:bg-neutral-700">
                <div class="text-sm font-semibold uppercase">Laad Meer</div>
            </button>
        @endif
    </div>
</div>
