<div x-on:scroll.window="showBar = (window.scrollY > 1) ? true : false"
     x-bind:class="showBar && '!-translate-y-[56px]'"
     class="shadow-b bg-white px-6 font-medium shadow-md transition-transform delay-[0ms] duration-200">
    {{-- https://github.com/tailwindlabs/tailwindcss/discussions/3028 --}}
    {{-- https://www.revolut.com/ --}}

    {{-- Navbar Desktop --}}
    <div class="mx-auto max-w-7xl">

        {{-- Secondary Navbar --}}
        <nav class="flex w-full items-center justify-between py-2 text-sm">

            {{-- Call To Action --}}
            <div class="flex w-full items-center">
                <a href="{{ route('register') }}"
                   class="font-semibold text-srvn-orange">
                    Wordt lid voor €25 per jaar!
                </a>
                <ul class="flex text-neutral-500">
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
                    {{-- Trello -> Bug Report --}}
                    {{-- <li class="ml-6">
                        <a href="#">
                            Reporteer een bug
                            <x-heroicon-o-bug-ant class="h-4 text-neutral-700" />
                        </a>
                    </li> --}}
                </ul>
            </div>
        </nav>

        {{-- Primary Navbar --}}
        <div x-bind:class="showBar && '!translate-y-[11px]'"
             class="flex w-full items-center border-t border-neutral-200 py-6 transition-transform delay-[0ms] duration-200">
            <a href="{{ route('home') }}">
                <h1 class="sr-only">
                    SimRace Vereniging Nederland
                </h1>
                <x-logo.900 class="h-10 pr-6" />
            </a>
            <nav class="flex w-full items-center justify-between">
                <ul class="flex h-full font-oxanium">
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
                <ul class="flex h-full items-center space-x-3">
                    <li>
                        <a href="{{ route('dash.dashboard') }}"
                           class="flex items-center justify-center space-x-1 rounded border-2 border-srvn-orange bg-srvn-orange px-3 py-2 font-semibold text-white transition duration-150 ease-in-out hover:bg-transparent hover:text-neutral-800">
                            <x-heroicon-o-user class="h-6" />
                            <span>Mijn SRVN</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</div>
