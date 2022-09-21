<div x-bind:class="(!$popover.isOpen) ? '-translate-y-[24px]' : ''"
     class="[transition-delay: 0ms;] transition-transform duration-200">

    <div x-bind:class="($popover.isOpen) ? 'shadow-none' : ''"
    class="shadow-b relative bg-white font-medium shadow-md transition-shadow duration-75">

        {{-- Navbar Mobile --}}
        <div class=" bg-white relative z-50">
          <div x-bind:class="(!$popover.isOpen) ? 'translate-y-[12px]' : ''"
               class="[transition-delay: 0ms;] flex w-full items-center justify-between px-6 py-6 transition-transform duration-200">
              <button x-popover:button
                      x-on:click="open = !open"
                      class="relative mt-0 h-8 w-8">
                  <div x-show="!$popover.isOpen"
                       x-transition.duration.150ms
                       class="absolute inset-0">
                      <x-heroicon-o-bars-2 class="text-srvn-orange h-8" />
                  </div>
                  <div x-show="$popover.isOpen"
                       x-transition.duration.150ms
                       class="absolute inset-0">
                      <x-heroicon-o-x-mark class="text-srvn-orange h-8" />
                  </div>
              </button>
              <a href="{{ route('home') }}">
                  <x-srvn-stone class="h-6" />
              </a>
              <div>
                  <a class="text-srvn-orange h-8 font-semibold"
                     href="{{ route('login') }}">
                      <x-heroicon-o-user class="h-6" />
                  </a>
              </div>
          </div>
        </div>

        {{-- Menu Mobile --}}
        <div x-popover:panel
             x-cloak
             x-transition.origin.top
             class="absolute top-20 bottom-0 flex w-full flex-col overflow-auto bg-white pt-3 font-medium [min-height:calc(100vh-80px)]">

            {{-- Internal Links --}}
            <div class="relative z-40 px-6">
                <h2 class="pb-6 text-sm font-medium uppercase text-stone-400">
                    Intern
                </h2>
                <ul class="flex flex-col space-y-3">
                    <li class="flex items-center space-x-2">
                        <x-heroicon-o-chevron-double-right class="text-srvn-orange -mt-0.5 h-5" />
                        <a class="hover:text-srvn-orange flex w-full items-center"
                           href="{{ route('schedule') }}">
                            <span>Kalender</span>
                        </a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <x-heroicon-o-chevron-double-right class="text-srvn-orange -mt-0.5 h-5" />
                        <a class="hover:text-srvn-orange flex w-full items-center"
                           href="{{ route('standings') }}">
                            <span>Klassement</span>
                        </a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <x-heroicon-o-chevron-double-right class="text-srvn-orange -mt-0.5 h-5" />
                        <a class="hover:text-srvn-orange flex w-full items-center"
                           href="{{ route('drivers') }}">
                            <span>Rijders</span>
                        </a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <x-heroicon-o-chevron-double-right class="text-srvn-orange -mt-0.5 h-5" />
                        <a class="hover:text-srvn-orange flex w-full items-center"
                           href="{{ route('teams') }}">
                            <span>Teams</span>
                        </a>
                    </li>
                </ul>

                {{-- Mijn SRVN Button --}}
                <ul class="flex items-center pt-6 pb-9">
                    <li class="w-full">
                        <a href="{{ route('dashboard') }}"
                           class="border-srvn-orange bg-srvn-orange flex items-center justify-center space-x-1 rounded border-2 px-3 py-2 font-semibold text-white transition duration-150 ease-in-out hover:bg-transparent hover:text-stone-800">
                            <x-heroicon-o-user class="h-6" />
                            <span>Mijn SRVN</span>
                        </a>
                    </li>
                </ul>
            </div>

            {{-- External Links --}}
            <div class="bg-srvn-gray relative z-50 flex grow flex-col justify-between">
                <div class="grow px-6">
                    <h2 class="pt-9 pb-6 text-sm font-medium uppercase text-stone-400">
                        Extern
                    </h2>
                    <ul class="flex flex-col space-y-3">
                        <li class="flex items-center space-x-2">
                            <x-heroicon-o-arrow-top-right-on-square class="text-srvn-orange -mt-0.5 h-5" />
                            <a class="hover:text-srvn-orange flex w-full items-center"
                               href="https://srvn.liveracers.com/League"
                               target="_blank">
                                <span>LiveRacers</span>
                            </a>
                        </li>
                        <li class="flex items-center space-x-2">
                            <x-heroicon-o-arrow-top-right-on-square class="text-srvn-orange -mt-0.5 h-5" />
                            <a class="hover:text-srvn-orange flex w-full items-center"
                               href="https://forum.srvn.nl/"
                               target="_blank">
                                <span>Forum</span>
                            </a>
                        </li>
                        <li class="flex items-center space-x-2">
                            <x-heroicon-o-arrow-top-right-on-square class="text-srvn-orange -mt-0.5 h-5" />
                            <a class="hover:text-srvn-orange flex w-full items-center"
                               href="https://discord.com/invite/U5rs68Q9CQ"
                               target="_blank">
                                <span>Discord</span>
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- Callout --}}
                <a href="{{ route('register') }}"
                   class="text-srvn-orange my-6 grow-0 text-center font-semibold">
                    Wordt lid voor €25 per jaar!
                </a>
            </div>

        </div>

    </div>

</div>
