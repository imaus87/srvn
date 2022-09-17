<div x-data x-popover>

    {{-- Navbar Mobile --}}
    <div class="shadow-b bg-white px-6 font-medium shadow-md">
        <div class="flex h-20 w-full items-center justify-between">
            <a href="{{ route('home') }}">
                <x-srvn-stone class="h-6" />
            </a>
            <div class="flex items-center justify-end space-x-6">
                <div x-show="!$popover.isOpen" x-transition.duration.150ms.delay.50ms>
                  <a class="text-sm font-medium underline decoration-1"
                     href="{{ route('login') }}">
                      {{ __('Mijn SRVN') }}
                  </a>
                </div>
                <button x-popover:button
                        class="relative mt-0 h-10 w-10">
                    <div x-show="!$popover.isOpen" x-transition.duration.150ms class="absolute inset-0">
                      <x-heroicon-o-bars-2 class="h-10 text-[#ff460d]" />
                    </div>
                    <div x-show="$popover.isOpen" x-transition.duration.150ms class="absolute inset-0">
                      <x-heroicon-o-x-mark class="h-10 text-[#ff460d]" />
                    </div>
                </button>
            </div>
        </div>
    </div>

    {{-- Menu Mobile --}}
    <div x-popover:panel
         x-cloak
         x-transition.origin.top
         class="abstolute top-0 flex w-full flex-col justify-between px-6 py-9 font-medium shadow-inner [min-height:calc(100vh-80px)]">
        <div>

            {{-- Internal Links --}}
            <h2 class="pb-6 text-sm font-medium uppercase text-stone-400">
                Intern
            </h2>
            <ul class="flex flex-col space-y-3">
                <li class="flex items-center space-x-2">
                    <x-heroicon-o-chevron-double-right class="-mt-0.5 h-5 text-[#ff460d]" />
                    <a class="flex w-full items-center hover:text-[#ff460d]"
                       href="{{ route('schedule') }}">
                        <span>Kalender</span>
                    </a>
                </li>
                <li class="flex items-center space-x-2">
                    <x-heroicon-o-chevron-double-right class="-mt-0.5 h-5 text-[#ff460d]" />
                    <a class="flex w-full items-center hover:text-[#ff460d]"
                       href="{{ route('standings') }}">
                        <span>Klassement</span>
                    </a>
                </li>
                <li class="flex items-center space-x-2">
                    <x-heroicon-o-chevron-double-right class="-mt-0.5 h-5 text-[#ff460d]" />
                    <a class="flex w-full items-center hover:text-[#ff460d]"
                       href="{{ route('drivers') }}">
                        <span>Rijders</span>
                    </a>
                </li>
                <li class="flex items-center space-x-2">
                    <x-heroicon-o-chevron-double-right class="-mt-0.5 h-5 text-[#ff460d]" />
                    <a class="flex w-full items-center hover:text-[#ff460d]"
                       href="{{ route('teams') }}">
                        <span>Teams</span>
                    </a>
                </li>
            </ul>

            {{-- Mijn SRVN Button --}}
            <ul class="flex items-center pt-6 pb-9">
                <li class="w-full">
                    <a href="{{ route('dashboard') }}"
                       class="flex items-center justify-center space-x-1 rounded border-2 border-[#ff460d] bg-[#ff460d] px-3 py-2 font-semibold text-white transition duration-150 ease-in-out hover:bg-transparent hover:text-stone-800">
                        <x-heroicon-o-user class="h-6" />
                        <span>Mijn SRVN</span>
                    </a>
                </li>
            </ul>

            {{-- External Links --}}
            <h2 class="border-t border-stone-300 pt-9 pb-6 text-sm font-medium uppercase text-stone-400">
                Extern
            </h2>
            <ul class="flex flex-col space-y-3">
                <li class="flex items-center space-x-2">
                    <x-heroicon-o-arrow-top-right-on-square class="-mt-0.5 h-5 text-[#ff460d]" />
                    <a class="flex w-full items-center hover:text-[#ff460d]"
                       href="https://srvn.liveracers.com/League"
                       target="_blank">
                        <span>LiveRacers</span>
                    </a>
                </li>
                <li class="flex items-center space-x-2">
                    <x-heroicon-o-arrow-top-right-on-square class="-mt-0.5 h-5 text-[#ff460d]" />
                    <a class="flex w-full items-center hover:text-[#ff460d]"
                       href="https://forum.srvn.nl/"
                       target="_blank">
                        <span>Forum</span>
                    </a>
                </li>
                <li class="flex items-center space-x-2">
                    <x-heroicon-o-arrow-top-right-on-square class="-mt-0.5 h-5 text-[#ff460d]" />
                    <a class="flex w-full items-center hover:text-[#ff460d]"
                       href="https://discord.com/invite/U5rs68Q9CQ"
                       target="_blank">
                        <span>Discord</span>
                    </a>
                </li>
            </ul>
        </div>

        {{-- Callout --}}
        <a href="{{ route('register') }}"
           class="mt-9 text-center font-semibold text-[#ff460d]">
            Wordt lid voor €25 per jaar!
        </a>
    </div>

</div>
