<div>
    <h2 class="pt-6 font-oxanium text-4xl font-bold lg:text-6xl">
        Klassement
    </h2>

    <p class="max-w-xl hyphens-manual pt-6">
        Bekijk de kampioenschapstanden en race-uitslagen.
    </p>

    <div x-data x-tabs>
        <div x-tabs:list class="grid grid-cols-4 gap-3 justify-between font-oxanium font-bold text-xl pt-6 lg:pt-9">
            <button x-tabs:tab type="button" class="flex items-center bg-white py-6 px-9 rounded-md shadow-md space-x-3 ring ring-srvn-orange hover:ring-srvn-orange/75">
                <img src="../icons/fpro-icon.png" alt="enduro-logo" class="h-10">
                <span class="block uppercase">NK Formula Pro</span>
            </button>
            <button x-tabs:tab type="button" class="flex items-center bg-white py-6 px-9 rounded-md shadow-md space-x-3 ring ring-transparent hover:ring-srvn-orange/75">
                <img src="../icons/gt3-icon.png" alt="enduro-logo" class="h-10">
                <span class="block uppercase">NK GT3</span>
            </button>
            <button x-tabs:tab type="button" class="flex items-center bg-white py-6 px-9 rounded-md shadow-md space-x-3 ring ring-transparent hover:ring-srvn-orange/75">
                <img src="../icons/enduro-icon.png" alt="enduro-logo" class="h-10">
                <span class="block uppercase">NK Enduro</span>
            </button>
            <button x-tabs:tab type="button" class="flex items-center bg-white py-6 px-9 rounded-md shadow-md space-x-3 ring ring-transparent hover:ring-srvn-orange/75">
                <img src="../icons/dtcr-icon.png" alt="enduro-logo" class="h-10">
                <span class="block uppercase">NK DTCR</span>
            </button>
        </div>

        <div x-tabs:panels class="mt-9">
            <section x-tabs:panel class="">
                <div x-data x-tabs class=" grid grid-cols-4">
                    <div x-tabs:list class="col-start-2 col-span-2 grid gap-3 grid-cols-2 font-bold text-xl ">
                        <button x-tabs:tab type="button" class="flex items-center bg-white py-3 px-9 rounded-md shadow-md space-x-3 ring ring-srvn-orange hover:ring-srvn-orange/75 justify-center">
                            Stand
                        </button>
                        <button x-tabs:tab type="button" class="flex items-center bg-white py-3 px-9 rounded-md shadow-md space-x-3 ring ring-transparent hover:ring-srvn-orange/75 justify-center">
                            Race Uitslagen
                        </button>
                    </div>
                    <div x-tabs:panels class="col-span-4 col-start-1 mt-3">
                        <section x-tabs:panel>
                            <ul class="flex flex-col gap-3 font-oxanium">
                                @foreach ($fprostandings as $result)
                                    <li class="">
                                        <a href="" class="bg-white rounded-md shadow-md py-6 px-9 grid grid-cols-6 items-center ring ring-transparent hover:ring-srvn-orange/75">
                                            <div class="col-span-2 flex items-center">
                                                <span class="font-bold text-2xl block mr-6">
                                                    {{ $result['position'] }}
                                                </span>
                                                <span class="uppercase font-semibold">
                                                    {{ $result['name'] }}
                                                </span>
                                            </div>
                                            <span class="col-span-2">
                                                {{ $result['team'] }}
                                            </span>
                                            <div class=" col-start-6 flex justify-end items-center space-x-6">
                                                <span class="bg-neutral-200 rounded-full px-3 py-1 font-bold text-sm grow-0">
                                                    {{ $result['points'] }}
                                                </span>
                                                <x-heroicon-s-chevron-right class="h-6 w-6"/>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </section>
                        <section x-tabs:panel>
                            uitslagen
                        </section>

                    </div>
                </div>
            </section>
            <section x-tabs:panel>
                GT3
            </section>
            <section x-tabs:panel>
                Enduro
            </section>
            <section x-tabs:panel>
                DTCR
            </section>

        </div>
    </div>


</div>
