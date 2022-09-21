<div
     x-on:scroll.window="showBar = (window.scrollY > 1) ? true : false"
     x-bind:class="showBar ? '-translate-y-[56px]' : ''"
     class="shadow-b bg-white px-6 font-medium shadow-md transition-transform duration-200 [transition-delay: 0ms;]">
     {{-- https://github.com/tailwindlabs/tailwindcss/discussions/3028 --}}
     {{-- https://www.revolut.com/ --}}

    {{-- Navbar Desktop --}}
    <div class="mx-auto max-w-7xl">

        {{-- Secondary Navbar --}}
        <div class="flex py-2 w-full items-center justify-between text-xs">

            {{-- Call To Action --}}
            <div class="flex w-full items-center">
                <a href="{{ route('register') }}"
                   class="font-semibold text-srvn-orange">
                    Wordt lid voor €25 per jaar!
                </a>
                <ul class="flex text-stone-500">
                    <li class="ml-6 flex items-center">
                        <x-heroicon-s-check class="mr-1 h-4 text-srvn-orange" />
                        24/7 raceservers
                    </li>
                    <li class="ml-6 flex items-center">
                        <x-heroicon-s-check class="mr-1 h-4 text-srvn-orange" />
                        Kampioenschappen
                    </li>
                    <li class="ml-6 flex items-center">
                        <x-heroicon-s-check class="mr-1 h-4 text-srvn-orange" />
                        Evenementen
                    </li>
                    <li class="ml-6 flex items-center">
                        <x-heroicon-s-check class="mr-1 h-4 text-srvn-orange" />
                        Eigen livery
                    </li>
                    <li class="ml-6 flex items-center">
                        <x-heroicon-s-check class="mr-1 h-4 text-srvn-orange" />
                        2x ALV
                    </li>
                </ul>
            </div>

            {{-- External Navigation --}}
            <div>
                <ul class="flex w-full items-center">
                    <li class="ml-6 hover:underline">
                        <a href="https://srvn.liveracers.com/League"
                           target="_blank">
                            LiveRacers
                        </a>
                    </li>
                    <li class="ml-6 hover:underline">
                        <a href="https://forum.srvn.nl/"
                           target="_blank">
                            Forum
                        </a>
                    </li>
                    <li class="ml-6 hover:underline">
                        <a href="https://discord.com/invite/U5rs68Q9CQ"
                           target="_blank">
                            Discord
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Primary Navbar --}}
        <div x-bind:class="showBar ? 'translate-y-[11px]' : ''"
             class="py-6 flex w-full items-center border-t border-stone-200 transition-transform duration-200 [transition-delay: 0ms;]">
            <a href="{{ route('home') }}">
                <x-srvn-stone class="h-8 pr-3" />
            </a>
            <div class="flex w-full items-center justify-between">
                <ul class="flex h-full">
                    <li class="h-full">
                        <a class="flex h-full w-full items-center px-3 hover:text-srvn-orange"
                           href="{{ route('schedule') }}">
                            <span>Kalender</span>
                        </a>
                    </li>
                    <li class="h-full">
                        <a class="flex h-full w-full items-center px-3 hover:text-srvn-orange"
                           href="{{ route('standings') }}">
                            <span>Klassement</span>
                        </a>
                    </li>
                    <li class="h-full">
                        <a class="flex h-full w-full items-center px-3 hover:text-srvn-orange"
                           href="{{ route('drivers') }}">
                            <span>Rijders</span>
                        </a>
                    </li>
                    <li class="h-full">
                        <a class="flex h-full w-full items-center px-3 hover:text-srvn-orange"
                           href="{{ route('teams') }}">
                            <span>Teams</span>
                        </a>
                    </li>
                </ul>
                <ul class="flex h-full items-center">
                    <li>
                        <a href="{{ route('dashboard') }}"
                           class="flex items-center justify-center space-x-1 rounded border-2 border-srvn-orange bg-srvn-orange px-3 py-2 font-semibold text-white transition duration-150 ease-in-out hover:bg-transparent hover:text-stone-800">
                            <x-heroicon-o-user class="h-6" />
                            <span>Mijn SRVN</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
