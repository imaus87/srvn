<div>
    <section class="max-w-7xl gap-12 px-3 sm:flex sm:px-6 xl:ml-auto">
        <div class="w-full sm:w-96">
            <div class="aspect-w-1 aspect-h-1 h-0 w-full overflow-hidden rounded-lg">
                <img src="../img/rene-en-kind.jpg"
                     alt="Rene Hoogterp met zijn kleine"
                     class="h-full w-full rounded-lg object-cover object-center">
            </div>
        </div>

        <div>
            <div class="flex items-center space-x-6">
                {{-- <div class="-mt-2 rounded bg-white py-2 px-3 text-center font-oxanium text-4xl font-bold leading-none text-srvn-orange shadow-sm">
                    <div class="mt-0.5 -mb-0.5">
                        {{ $driver->start_nr }}
                    </div>
                </div> --}}
                <x-h2 class="mt-9 sm:mt-0">
                    <span class="mr-3 text-srvn-orange sm:mr-6">10</span>{{ $driver->full_name }}
                </x-h2>
            </div>

            <ul class="mt-6 max-w-md text-lg">
                <li class="flex items-center justify-between">
                    <span class="inline-block w-1/2 font-semibold">Lid sinds</span><span
                          class="inline-block w-1/2">2011</span>
                </li>
                <li class="flex items-center justify-between">
                    <span class="inline-block w-1/2 font-semibold">Geboren op</span><span class="inline-block w-1/2">13
                        maart 1986</span>
                </li>
                <li class="flex items-center justify-between">
                    <span class="inline-block w-1/2 font-semibold">Geboorteplaats</span><span
                          class="inline-block w-1/2">Amsterdam</span>
                </li>
            </ul>

            <ul class="mt-6 max-w-md text-lg">
                <li class="flex items-center justify-between">
                    <span class="inline-block w-1/2 font-semibold">Podiums</span><span
                          class="inline-block w-1/2">93</span>
                </li>
                <li class="flex items-center justify-between">
                    <span class="inline-block w-1/2 font-semibold">Punten</span><span
                          class="inline-block w-1/2">34.000</span>
                </li>
                <li class="flex items-center justify-between">
                    <span class="inline-block w-1/2 font-semibold">Races</span><span
                          class="inline-block w-1/2">195</span>
                </li>
                <li class="flex items-center justify-between">
                    <span class="inline-block w-1/2 font-semibold">Overwinningen</span><span
                          class="inline-block w-1/2">20</span>
                </li>
                <li class="flex items-center justify-between">
                    <span class="inline-block w-1/2 font-semibold">Hoogste race finish</span><span
                          class="inline-block w-1/2 space-x-1"><span>1</span><span
                              class="text-srvn-orange">(35)</span></span>
                </li>
                <li class="flex items-center justify-between">
                    <span class="inline-block w-1/2 font-semibold">Hoogste startpositie</span><span
                          class="inline-block w-1/2 space-x-1"><span>1</span><span
                              class="text-srvn-orange">(42)</span></span>
                </li>
            </ul>
        </div>
    </section>
    <section class="mt-9 max-w-7xl xl:ml-auto">
        <x-h3 class="pl-6">Teams</x-h3>
        <nav>
            <ul class="flex snap-x snap-mandatory gap-3 overflow-x-auto py-3 scrollbar-hide">
                <li class="flex snap-center snap-always first:snap-start first:pl-6 last:snap-end last:pr-6">
                    <a href="#"
                       class="flex w-72 grow flex-col items-center rounded-md bg-white p-6 shadow-md">
                        <img src="https://www.srvn.nl/klassement/design/liveries_2019-1/dtcc/Rene-Hoogterp.gif"
                             alt="GNCR Motorsports Logo"
                             class="grow">
                        <span class="inline-block w-full flex-none text-center">GNCR Motorsports</span>
                    </a>
                </li>
                <li class="flex snap-center snap-always first:snap-start first:pl-6 last:snap-end last:pr-6">
                    <a href="#"
                       class="flex w-72 grow flex-col items-center rounded-md bg-white p-6 shadow-md">
                        <img src="../img/anillusion-racing.svg"
                             alt="Anillusion Racing Logo"
                             class="grow">
                        <span class="inline-block w-full flex-none text-center">Anillusion Racing</span>
                    </a>
                </li>
            </ul>
        </nav>
    </section>
    <section class="mt-6 max-w-7xl xl:ml-auto">
        <x-h3 class="pl-6">Kampioenschappen</x-h3>
        <nav>
            <ul class="flex snap-x snap-mandatory gap-3 overflow-x-auto py-3 scrollbar-hide">
                <li class="flex snap-center snap-always first:snap-start first:pl-6 last:snap-end last:pr-6">
                    <a href="#"
                       class="flex w-72 grow flex-col items-center rounded-md bg-white p-6 shadow-md">
                        <img src="https://www.srvn.nl/klassement/design/liveries/nk_f2_2021-1/Maurice-Willems.gif"
                             alt="GNCR Motorsports"
                             class="grow">
                        <div class="flex flex-none grow items-center space-x-3">
                            <img src="../icons/fpro-icon.png"
                                 alt="Formula Pro icon"
                                 class="h-6">
                            <span class="inline-block w-full text-center">NK Formula Pro</span>
                        </div>
                    </a>
                </li>
                <li class="flex snap-center snap-always first:snap-start first:pl-6 last:snap-end last:pr-6">
                    <a href="#"
                       class="flex w-72 grow flex-col items-center rounded-md bg-white p-6 shadow-md">
                        <img src="https://www.srvn.nl/klassement/design/liveries/gt_2020-2/Mark-de-Vries.gif"
                             alt="GNCR Motorsports"
                             class="grow">
                        <div class="flex flex-none grow items-center space-x-3">
                            <img src="../icons/gt3-icon.png"
                                 alt="Formula Pro icon"
                                 class="h-6">
                            <span class="inline-block w-full text-center">NK GT3</span>
                        </div>
                    </a>
                </li>
                <li class="flex snap-center snap-always first:snap-start first:pl-6 last:snap-end last:pr-6">
                    <a href="#"
                       class="flex w-72 grow flex-col items-center rounded-md bg-white p-6 shadow-md">
                        <img src="https://www.srvn.nl/klassement/design/liveries_2019-1/dtcc/Rene-Hoogterp.gif"
                             alt="GNCR Motorsports"
                             class="grow">
                        <div class="flex flex-none grow items-center space-x-3">
                            <img src="../icons/dtcr-icon.png"
                                 alt="Formula Pro icon"
                                 class="h-6">
                            <span class="inline-block w-full text-center">NK DTCR</span>
                        </div>
                    </a>
                </li>
                <li class="flex snap-center snap-always first:snap-start first:pl-6 last:snap-end last:pr-6">
                    <a href="#"
                       class="flex w-72 grow flex-col items-center justify-center space-y-3 rounded-md border border-srvn-orange p-6">
                        <span class="text-center">Opzoek naar kampioenschappen van voorgaande jaren?</span>
                        <span class="font-semibold uppercase">Bekijk het Archief</span>
                    </a>
                </li>
            </ul>
        </nav>
    </section>
    <section class="mt-9 max-w-7xl px-6 xl:ml-auto">
        <x-h3>Biografie</x-h3>
        <div class="mt-6 max-w-3xl space-y-3 text-lg">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui veritatis est quasi delectus ducimus neque
                temporibus inventore quas beatae eveniet exercitationem adipisci animi pariatur impedit voluptatibus
                omnis obcaecati, nam nobis, laudantium voluptate. Porro, ea nostrum?</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem consequatur repellendus deleniti
                asperiores, odio explicabo iure commodi, corporis mollitia excepturi culpa? Minus iste ipsum, autem,
                consectetur veniam doloribus repellat quis, ad quo nemo tenetur maiores. Soluta unde, odit magni,
                dolores quam delectus vero omnis maxime nulla corrupti, ipsum neque deleniti.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde accusantium natus tempore provident
                explicabo, perferendis consectetur. Doloribus, asperiores deserunt enim pariatur dignissimos aliquid
                vero.</p>
        </div>
    </section>
    <section class="relative mt-6 h-96">
        <ul class="flex h-96 snap-x snap-mandatory gap-3 overflow-x-auto py-3 scrollbar-hide">
            <li
                class="xl:first:pl-snap flex-shrink-0 snap-center snap-always first:snap-start first:pl-3 last:snap-end last:pr-6 sm:first:pl-6">
                <img src="https://pbs.twimg.com/media/FRP0eGnXsAApx9o?format=jpg&name=large"
                     class="h-full w-full rounded-lg object-cover object-center"
                     alt="#">
            </li>
            <li class="flex-shrink-0 snap-center snap-always first:snap-start first:pl-6 last:snap-end last:pr-6">
                <img src="https://pbs.twimg.com/media/FTgC2ZJX0AEAY2j.jpg"
                     class="h-full w-full rounded-lg object-cover object-center"
                     alt="#">
            </li>
            <li class="flex-shrink-0 snap-center snap-always first:snap-start first:pl-6 last:snap-end last:pr-6">
                <img src="https://roadworks.tv/images/page/detail/1409-mtw-beeldred-14-januari-2016-edit1.jpg"
                     class="h-full w-full rounded-lg object-cover object-center"
                     alt="#">
            </li>
            <li class="flex-shrink-0 snap-center snap-always first:snap-start first:pl-6 last:snap-end last:pr-6">
                <img src="https://amstelland.intobusiness.nu/resize/upload/146/14597/foto%20ren%C3%A9-NEWSDETAIL.jpg"
                     class="h-full w-full rounded-lg object-cover object-center"
                     alt="#">
            </li>
        </ul>
    </section>
    <section class="mt-9 max-w-7xl xl:ml-auto">
        <x-h3 class="pl-6">Verder lezen</x-h3>
        <nav>
            <ul class="flex snap-x snap-mandatory gap-3 overflow-x-auto py-3 scrollbar-hide">
                <li class="flex snap-center snap-always first:snap-start first:pl-6 last:snap-end last:pr-6">
                    <a href="#"
                       class="flex w-72 grow flex-col items-center rounded-md bg-white p-6 shadow-md">
                        <img src="https://www.srvn.nl/klassement/design/liveries/nk_f2_2021-1/Robin-de-Jong.gif"
                             alt="GNCR Motorsports"
                             class="grow">
                        <div class="flex flex-none grow items-center">
                            <span class="inline-block w-full text-center">Maurice Willems</span>
                        </div>
                    </a>
                </li>
                <li class="flex snap-center snap-always first:snap-start first:pl-6 last:snap-end last:pr-6">
                    <a href="#"
                       class="flex w-72 grow flex-col items-center justify-end rounded-md bg-white bg-cover bg-bottom p-6 shadow-md"
                       style="background-image: url(https://srvn.nl//images/circuits/crop_small/circuit-map-monza.png)">
                        {{-- <img src="https://srvn.nl/images/blog/header-slider/2022-fpro-r6.png"
                             alt="GNCR Motorsports"
                             class="grow"> --}}
                        <div class="flex items-center justify-end space-x-3">
                            <img src="../icons/fpro-icon.png"
                                 alt="Formula Pro icon"
                                 class="h-6">
                            <span class="inline-block w-full text-center">Ronde 6</span>
                        </div>
                    </a>
                </li>
                <li class="flex snap-center snap-always first:snap-start first:pl-6 last:snap-end last:pr-6">
                    <a href="#"
                       class="flex w-72 grow flex-col items-center rounded-md bg-white p-6 shadow-md">
                        <img src="https://www.srvn.nl/klassement/design/liveries/nk_f2_2021-1/Robin-de-Jong.gif"
                             alt="GNCR Motorsports"
                             class="grow">
                        <div class="flex flex-none grow items-center">
                            <span class="inline-block w-full text-center">Ruben Correa Alves</span>
                        </div>
                    </a>
                </li>
                {{-- <li class="flex snap-center snap-always first:snap-start first:pl-6 last:snap-end last:pr-6">
                    <a href="#"
                       class="flex w-72 grow flex-col items-center justify-center rounded-md bg-white p-6 shadow-md">
                        <div class="grow h-32">
                          <img src="https://srvn.nl//images/circuits/crop_small/circuit-map-monza.png"
                               alt="GNCR Motorsports"
                               class="">
                        </div>
                        <div class="flex flex-none grow items-center space-x-3">
                            <img src="../icons/fpro-icon.png"
                                 alt="Formula Pro icon"
                                 class="h-6">
                            <span class="inline-block w-full text-center">Ronde 6</span>
                        </div>
                    </a>
                </li> --}}
                <li class="flex snap-center snap-always first:snap-start first:pl-6 last:snap-end last:pr-6">
                    <a href="#"
                       class="flex w-72 grow flex-col items-center rounded-md bg-white p-6 shadow-md">
                        <img src="../img/anillusion-racing.svg"
                             alt="Anillusion Racing Logo"
                             class="grow">
                        <span class="inline-block w-full flex-none text-center">Scuderia Leone</span>
                    </a>
                </li>
            </ul>
        </nav>
    </section>
</div>
