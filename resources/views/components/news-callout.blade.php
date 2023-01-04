<section class="mb-9 max-w-7xl px-3 sm:px-6 xl:ml-auto">
    <nav>
        <a href="{{ route('news') }}"
           class="flex items-center">
            <x-h2>Nieuws</x-h2>
            <x-heroicon-o-chevron-double-right class="h-7 lg:hidden" />
        </a>
        {{-- <div class="flex items-center mb-1.5 lg:mb-2">
          <x-link-secondary class="text-sm uppercase">
              Ga naar
          </x-link-secondary>
          <x-heroicon-o-chevron-double-right class="h-4" />
        </div> --}}
    </nav>
    <nav class="mt-3.5">
        <ul class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
            <li class="overflow-hidden rounded-md bg-white shadow-md">
                <a href="#"
                   class="flex lg:block lg:space-y-3">
                    <div class="relative h-32 w-25 shrink-0 lg:h-36 lg:w-auto">
                        <img src="https://srvn.nl/images/blog/header-slider/header-btcc-02.jpg"
                             alt="#"
                             class="h-full w-full object-cover">
                    </div>
                    <div class="space-y-1 p-3 lg:px-6 lg:pt-0 lg:pb-6">
                        <span class="text-xs font-semibold uppercase text-srvn-orange">
                            Enquête
                        </span>
                        <x-h5 class="font-normal">
                            SRVN 2022 Kampioenschap Enquêtes
                        </x-h5>
                    </div>
                </a>
            </li>
            <li class="overflow-hidden rounded-md bg-white shadow-md">
                <a href="#"
                   class="flex lg:block lg:space-y-3">
                    <div class="relative h-32 w-25 shrink-0 lg:h-36 lg:w-auto">
                        <img src="https://srvn.nl/images/blog/header-slider/endurance1.png"
                             alt="#"
                             class="h-full w-full object-cover">
                        <x-heroicon-o-play class="absolute bottom-2.5 right-3 h-6 w-6 text-white" />
                    </div>
                    <div class="space-y-1 p-3 lg:px-6 lg:pt-0 lg:pb-6">
                        <span class="text-xs font-semibold uppercase text-srvn-orange">
                            Video
                        </span>
                        <x-h5 class="font-normal">
                            Rik van Aerle en Arjan Veltens pakken de titels in zwaar verregend Laguna Seca
                        </x-h5>
                    </div>
                </a>
            </li>
            <li class="overflow-hidden rounded-md bg-white shadow-md">
                <a href="#"
                   class="flex lg:block lg:space-y-3">
                    <div class="relative h-32 w-25 shrink-0 lg:h-36 lg:w-auto">
                        <img src="https://srvn.nl/images/blog/header-slider/2023-winter-series-header.png"
                             alt="#"
                             class="h-full w-full object-cover">
                    </div>
                    <div class="space-y-1 p-3 lg:px-6 lg:pt-0 lg:pb-6">
                        <span class="text-xs font-semibold uppercase text-srvn-orange">
                            Artikel
                        </span>
                        <x-h5 class="font-normal">
                            SRVN 2023 Winter Series Inschrijvingen 22 december open
                        </x-h5>
                    </div>
                </a>
            </li>
            <li class="overflow-hidden rounded-md bg-white shadow-md">
                <a href="#"
                   class="flex lg:block lg:space-y-3">
                    <div class="relative h-32 w-25 shrink-0 lg:h-36 lg:w-auto">
                        <img src="https://srvn.nl/images/blog/header-slider/dtcr-race-6-brands.png"
                             alt="#"
                             class="h-full w-full object-cover">
                    </div>
                    <div class="space-y-1 p-3 lg:px-6 lg:pt-0 lg:pb-6">
                        <span class="text-xs font-semibold uppercase text-srvn-orange">
                            Uitgelicht
                        </span>
                        <x-h5 class="font-normal">
                            Zoon en vader schrijven wereldgeschiedenis: een waar één tweetje voor Dylan en Tom!
                        </x-h5>
                    </div>
                </a>
            </li>
            <li class="hidden overflow-hidden rounded-md bg-white shadow-md md:block">
                <a href="#"
                   class="flex lg:block lg:space-y-3">
                    <div class="relative h-32 w-25 shrink-0 lg:h-36 lg:w-auto">
                        <img src="https://srvn.nl/images/blog/header-slider/bathurst.png"
                             alt="#"
                             class="h-full w-full object-cover">
                        <x-heroicon-o-play class="absolute bottom-2.5 right-3 h-6 w-6 text-white" />
                    </div>
                    <div class="space-y-1 p-3 lg:px-6 lg:pt-0 lg:pb-6">
                        <span class="text-xs font-semibold uppercase text-srvn-orange">
                            Race rapport
                        </span>
                        <x-h5 class="font-normal">
                            Jeroen Huisers en Felix de Kruijff winnen op Bathurst
                        </x-h5>
                    </div>
                </a>
            </li>
            <li class="hidden overflow-hidden rounded-md bg-white shadow-md md:block">
                <a href="#"
                   class="flex lg:block lg:space-y-3">
                    <div class="relative h-32 w-25 shrink-0 lg:h-36 lg:w-auto">
                        <img src="https://srvn.nl/images/blog/header-slider/2022-fpro-r6.png"
                             alt="#"
                             class="h-full w-full object-cover">
                    </div>
                    <div class="space-y-1 p-3 lg:px-6 lg:pt-0 lg:pb-6">
                        <span class="text-xs font-semibold uppercase text-srvn-orange">
                            Artikel
                        </span>
                        <x-h5 class="font-normal">
                            Denny Mateman NK Formula Pro 2022-2 kampioen
                        </x-h5>
                    </div>
                </a>
            </li>
            <li class="hidden overflow-hidden rounded-md bg-white shadow-md md:block">
                <a href="#"
                   class="flex lg:block lg:space-y-3">
                    <div class="relative h-32 w-25 shrink-0 lg:h-36 lg:w-auto">
                        <img src="https://srvn.nl/images/blog/header-slider/nk-fpro.png"
                             alt="#"
                             class="h-full w-full object-cover">
                        <x-heroicon-o-play class="absolute bottom-2.5 right-3 h-6 w-6 text-white" />
                    </div>
                    <div class="space-y-1 p-3 lg:px-6 lg:pt-0 lg:pb-6">
                        <span class="text-xs font-semibold uppercase text-srvn-orange">
                            Video
                        </span>
                        <x-h5 class="font-normal">
                            van der Horn en Hamming houden het hoofd koel in Bahrein
                        </x-h5>
                    </div>
                </a>
            </li>
            <li class="hidden overflow-hidden rounded-md bg-white shadow-md md:block">
                <a href="#"
                   class="flex lg:block lg:space-y-3">
                    <div class="relative h-32 w-25 shrink-0 lg:h-36 lg:w-auto">
                        <img src="https://srvn.nl/images/blog/header-slider/nk-enduro-2022-2-race-4.png"
                             alt="#"
                             class="h-full w-full object-cover">
                        <x-heroicon-o-play class="absolute bottom-2.5 right-3 h-6 w-6 text-white" />
                    </div>
                    <div class="space-y-1 p-3 lg:px-6 lg:pt-0 lg:pb-6">
                        <span class="text-xs font-semibold uppercase text-srvn-orange">
                            Video
                        </span>
                        <x-h5 class="font-normal">
                            Pascal de Birk en Arjan Veltens pakken de overwinningen in een verregend Monza.
                        </x-h5>
                    </div>
                </a>
            </li>
            <li class="hidden overflow-hidden rounded-md bg-white shadow-md lg:block">
                <a href="#"
                   class="flex lg:block lg:space-y-3">
                    <div class="relative h-32 w-25 shrink-0 lg:h-36 lg:w-auto">
                        <img src="https://srvn.nl/images/blog/header-slider/nk-dtcr-2022-ll-race-4.png"
                             alt="#"
                             class="h-full w-full object-cover">
                        <x-heroicon-o-play class="absolute bottom-2.5 right-3 h-6 w-6 text-white" />
                    </div>
                    <div class="space-y-1 p-3 lg:px-6 lg:pt-0 lg:pb-6">
                        <span class="text-xs font-semibold uppercase text-srvn-orange">
                            Video
                        </span>
                        <x-h5 class="font-normal">
                            Verzijl en Kuipers winnaars Atlanta Motorsports Park
                        </x-h5>
                    </div>
                </a>
            </li>
        </ul>
    </nav>
    <div class="mt-6 flex items-center justify-center">
        <x-link-primary href="{{ route('news') }}"
                        class="uppercase">
            Bekijk het laatste nieuws
        </x-link-primary>
        <x-heroicon-o-chevron-double-right class="h-5 text-srvn-orange" />
    </div>
</section>
