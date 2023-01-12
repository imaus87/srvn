<section class="mt-9 max-w-7xl px-3 md:py-9 md:px-6 xl:ml-auto">
    <x-h3 class="text-center tracking-tight sm:tracking-normal">
        Neem SRVN overal mee naartoe
    </x-h3>
    <p class="text-center text-lg">
        en blijf op de hoogte, waar je ook bent!
    </p>
    <div class="mx-auto mt-6 max-w-2xl items-center justify-center space-y-9 md:flex md:space-x-9 md:space-y-0">
        <div class="flex items-center justify-center">
            <img src="/img/apple-stocks-dow-jones.png"
                 alt="#"
                 class="z-20 h-96">
            <img src="/img/apple-stocks.png"
                 alt="#"
                 class="z-10 -ml-21 h-88">
        </div>
        <div>
            <div class="shrink grow-0">
              <div class="hidden items-center space-x-3 rounded-md bg-white p-3 shadow-md md:flex">
                  <x-qr-code />
                  <div class="pr-3">
                      <p class="shrink-0 text-neutral-500">
                          Scan om te installeren
                          {{-- Scan om te Downloaden --}}
                      </p>
                      <p class="text-lg font-semibold">
                          iOS & Android
                      </p>
                  </div>
              </div>
            </div>
            <div class="flex items-center justify-center md:hidden">
                <a href="#">
                    <img src="/img/app-store-badge.svg"
                         alt="App Store Badge"
                         class="h-12 shadow-md">
                </a>
            </div>
            <p class="py-3 text-center font-semibold uppercase md:py-6">
                of
            </p>
            <div class="flex items-center justify-center">
                {{-- <x-button class="w-full max-w-lg border-srvn-orange/40 bg-srvn-orange/90 hover:border-srvn-orange/90 hover:text-neutral-300">
                    Bekijk eerst de voordelen!
                </x-button> --}}
                <a href="{{ route('download') }}"
                   class="flex w-full max-w-lg items-center justify-center space-x-1 rounded border-2 border-srvn-orange bg-srvn-orange px-3 py-2 text-lg font-semibold text-white transition duration-150 ease-in-out hover:bg-transparent hover:text-neutral-800">
                    Bekijk eerst de voordelen!
                </a>
            </div>
        </div>
    </div>

</section>
