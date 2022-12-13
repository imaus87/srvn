<section class="px-6">
    <x-h2>
        Rijders 2022-2
    </x-h2>
    <div class="items-center justify-between pt-6 lg:flex">
        {{-- <p class="max-w-xl">
            Bekijk de officiële line-up van dit seizoen van het NK SimRacen! Zie het huidige aantal punten en de positie
            van elke rijder, en volg je favoriete coureurs ten alle tijden!
        </p> --}}
        <p class="max-w-xl hyphens-manual">
            Bekijk de officiële line-up van dit seizoen van het NK SimRacen. Zie in welke kampioen&shy;schappen ze
            rijden en voor welke teams. Leer je favoriete coureurs kennen!
        </p>

        {{-- Validation Errors --}}
        <x-auth.validation-errors class="mb-3"
                                  :errors="$errors" />

        <div class="w-full pt-6 lg:max-w-xs lg:pt-0">
            {{-- <form> --}}
            {{-- Search Field --}}
            <x-input.label for="search"
                           :value="__('Vind je favourite coureur...')"
                           class="hidden" />
            <x-input.text wire:model="search"
                          id="search"
                          class="block w-full text-base"
                          type="search"
                          name="search"
                          placeholder="Vind je favourite coureur..." />
            {{-- </form> --}}
        </div>
    </div>
    <ul class="grid grid-cols-1 gap-3 pt-6 font-oxanium lg:grid-cols-2 lg:pt-9">
        @foreach ($drivers as $driver)
            <li class="group rounded-md bg-white shadow-md transition-all duration-150 hover:bg-neutral-800">
                {{-- <div class="flex items-center justify-between pb-2">
                  <span class=" text-4xl font-bold">
                      1
                  </span>
                  <div class="flex items-center justify-end space-x-2">
                      <span class="text-2xl font-bold leading-none">
                        335
                      </span>
                      <span class="text-white -mt-0.5 uppercase text-center rounded font-extrabold text-sm bg-srvn-orange/80 leading-none py-1 px-2">
                        ptn
                      </span>
                  </div>
                </div> --}}
                <a href="{{ route('driver', $driver) }}"
                   class="block w-full p-6">
                    <div class="flex w-full items-center justify-between">
                        <div class="grid w-full grid-cols-[52px_1fr_40px] items-center">
                            {{-- <div class="h-full w-full bg-red-600 py-3"></div> --}}
                            {{-- <div class="-mt-1 h-9 w-9 overflow-hidden rounded-full">
                              @if (isset($driver->photo_url))
                                  <img class="h-full object-cover"
                                       src="{{ $driver->photo_url }}" alt="Rijder foto">
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
                          </div> --}}
                            <span class="-mb-1 w-[52px] text-right text-3xl font-bold text-srvn-orange">
                                {{ $driver->start_nr }}
                            </span>
                            <div
                                 class="mx-6 -mb-1.5 overflow-hidden uppercase transition-all duration-150 group-hover:text-neutral-100">
                                <div class="text-sm">
                                    {{ $driver->first_name }}
                                </div>
                                <div class="truncate text-lg font-bold lg:text-xl">
                                    {{ $driver->last_name }}
                                </div>
                            </div>
                            <x-heroicon-m-chevron-double-right class="h-10 transition-all duration-150 group-hover:text-neutral-100" />
                        </div>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</section>
