<div>


    <div class="mb-4 flex flex-col-reverse items-center justify-between gap-4 lg:flex-row">
        <div class="flex w-full space-x-4 self-start lg:w-1/2">
            {{-- Table Search --}}
            <div class="self-start">
                <x-wired-input wire:model.delay="search"
                               placeholder="Search Staff..."
                               type="search"
                               class="block w-full px-2 py-1" />
            </div>

            {{-- Per Page Selector --}}
            <div class="hidden items-center justify-between space-x-2 lg:flex">
                <x-wired-label for="perpage"
                               value="{{ __('Per Page') }}" />
                <select wire:model="perPage" id="perpage"
                        class="rounded-md border-zinc-700 bg-zinc-700 py-1 text-zinc-100 shadow-sm focus:border-zinc-700 focus:ring focus:ring-zinc-400 focus:ring-opacity-50">
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </select>
            </div>
        </div>
        <div class="">
            @can('')
                {{-- Add Button or Modal --}}
            @endcan
        </div>
    </div>

    {{-- Desktop table --}}
    <div class="hidden w-full lg:block">
        <x-new-table gridcols="grid-cols-[340px_1fr_2fr_190px]">
            <x-slot name="header">
                <span class="hidden sm:flex">Actions</span>
            </x-slot>
            @forelse(as)
                <x-new-table.row gridcols="grid-cols-1 sm:grid-cols-[340px_1fr_2fr_190px]">
                    <x-new-table.cell>


                    </x-new-table.cell>

                    <x-new-table.cell class="hidden space-x-2 sm:flex">
                        <x-wired-button color="green">
                            <x-fas-edit class="mr-1 h-3 text-zinc-200" />
                            Edit
                        </x-wired-button>

                        <x-wired-button color="red">
                            Remove
                        </x-wired-button>
                    </x-new-table.cell>
                </x-new-table.row>

            @empty
                <x-new-table.row>
                    <x-new-table.cell>
                        No Staff
                    </x-new-table.cell>
                </x-new-table.row>
            @endforelse

        </x-new-table>
    </div>

    {{-- Mobile Table --}}
    <div class="mb-20 block w-full lg:hidden">
        <x-mobile-table>
            @forelse (as)
                <x-mobile-table.item iteration="{{ $loop->iteration }}">
                    <x-slot name="card">



                    </x-slot>
                    <x-slot name="expanded">
                        <div>

                        </div>

                        <div class="grid grid-cols-2">
                            <div class="col-span-3 flex items-center space-x-2">
                                <x-wired-button color="green"
                                                class="flex w-full items-center justify-center">
                                    <x-fas-edit class="mr-1 h-3 text-zinc-200" />
                                    Edit
                                </x-wired-button>

                                <x-wired-button color="red"
                                                class="flex w-full items-center justify-center">
                                    Remove
                                </x-wired-button>
                            </div>
                        </div>
                    </x-slot>
                </x-mobile-table.item>
            @empty
            @endforelse
        </x-mobile-table>
    </div>


</div>
