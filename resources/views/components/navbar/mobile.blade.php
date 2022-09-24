<div x-bind:class="navOpen ? 'translate-y-[0px]' : ''"
     class="[transition-delay: 0ms;] transition-transform duration-200">

    <div x-bind:class="navOpen ? 'shadow-none' : ''"
         class="shadow-b relative bg-white font-medium shadow-md transition-shadow duration-75">

        {{-- Navbar Mobile --}}
        <div class="relative z-50 bg-white">
            <div x-bind:class="navOpen ? 'translate-y-[12px]' : ''"
                 class="[transition-delay: 0ms;] flex w-full items-center justify-between px-6 py-3 transition-transform duration-300">
                <button x-on:click="navOpen = !navOpen"
                        class="relative mt-0 h-8 w-8">
                    <div x-show="!navOpen"
                         class="absolute inset-0">
                        <x-heroicon-o-bars-2 class="h-8 text-srvn-orange" />
                    </div>
                    <div x-show="navOpen"
                         class="absolute inset-0">
                        <x-heroicon-o-x-mark class="h-8 text-srvn-orange" />
                    </div>
                </button>
                <a href="{{ route('home') }}">
                    <x-logo.900 class="h-6" />
                </a>
                <div>
                    <a class="h-8 font-semibold text-srvn-orange"
                       href="{{ route('login') }}">
                        <x-heroicon-o-user class="h-6" />
                    </a>
                </div>
            </div>
        </div>

        {{-- Menu Mobile --}}
        <div x-show="navOpen"
             class="absolute top-14 bottom-0 z-50 flex w-full flex-col overflow-auto bg-white pt-9 font-medium [min-height:calc(100vh-56px)]">

            {{-- Internal Links --}}
            <nav class="relative z-40 px-6">
                <h2 class="pb-6 text-sm font-medium uppercase text-neutral-400">
                    Intern
                </h2>
                <ul class="flex flex-col space-y-3">
                    <li class="flex items-center space-x-2">
                        <x-heroicon-o-chevron-double-right class="h-5 text-srvn-orange" />
                        <a class="flex w-full items-center hover:text-srvn-orange"
                           href="{{ route('schedule') }}">
                            <span>Kalender</span>
                        </a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <x-heroicon-o-chevron-double-right class="h-5 text-srvn-orange" />
                        <a class="flex w-full items-center hover:text-srvn-orange"
                           href="{{ route('standings') }}">
                            <span>Klassement</span>
                        </a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <x-heroicon-o-chevron-double-right class="h-5 text-srvn-orange" />
                        <a class="flex w-full items-center hover:text-srvn-orange"
                           href="{{ route('drivers') }}">
                            <span>Rijders</span>
                        </a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <x-heroicon-o-chevron-double-right class="h-5 text-srvn-orange" />
                        <a class="flex w-full items-center hover:text-srvn-orange"
                           href="{{ route('teams') }}">
                            <span>Teams</span>
                        </a>
                    </li>
                </ul>

                {{-- Mijn SRVN Button --}}
                <div class="flex items-center pt-6 pb-9">
                    <a href="{{ route('dashboard') }}"
                       class="flex w-full items-center justify-center space-x-1 rounded border-2 border-srvn-orange bg-srvn-orange px-3 py-2 font-semibold text-white transition duration-150 ease-in-out hover:bg-transparent hover:text-neutral-800">
                        <x-heroicon-o-user class="h-6" />
                        <span>Mijn SRVN</span>
                    </a>
                </div>
            </nav>

            {{-- External Links --}}
            <nav class="relative z-50 flex grow flex-col justify-between bg-srvn-gray">
                <div class="grow px-6">
                    <h2 class="pt-9 pb-6 text-sm font-medium uppercase text-neutral-400">
                        Extern
                    </h2>
                    <ul class="flex flex-col space-y-3">
                        <li class="flex items-center space-x-2">
                            <x-heroicon-o-arrow-top-right-on-square class="-mt-0.5 h-5 text-srvn-orange" />
                            <a class="flex w-full items-center hover:text-srvn-orange"
                               href="https://srvn.liveracers.com/League"
                               target="_blank">
                                <span>LiveRacers</span>
                            </a>
                        </li>
                        <li class="flex items-center space-x-2">
                            <x-heroicon-o-arrow-top-right-on-square class="-mt-0.5 h-5 text-srvn-orange" />
                            <a class="flex w-full items-center hover:text-srvn-orange"
                               href="https://forum.srvn.nl/"
                               target="_blank">
                                <span>Forum</span>
                            </a>
                        </li>
                        <li class="flex items-center space-x-2">
                            <x-heroicon-o-arrow-top-right-on-square class="-mt-0.5 h-5 text-srvn-orange" />
                            <a class="flex w-full items-center hover:text-srvn-orange"
                               href="https://discord.com/invite/U5rs68Q9CQ"
                               target="_blank">
                                <span>Discord</span>
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- Callout --}}
                <a href="{{ route('register') }}"
                   class="my-6 grow-0 text-center font-semibold text-srvn-orange">
                    Wordt lid voor €25 per jaar!
                </a>
            </nav>

        </div>

    </div>

</div>
