<div x-bind:class="navOpen && '!translate-y-[0px] bottom-0 h-full'"
     class="shadow-b fixed top-0 z-50 h-auto w-full bg-white font-medium shadow-md transition-transform duration-500">

    {{-- Navbar Mobile --}}
    <div class="relative z-50 bg-white">
        <div x-bind:class="navOpen && '!translate-y-[12px]'"
             class="flex w-full items-center justify-between px-2.5 sm:px-6 py-3 transition-transform duration-500">
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
                <h1 class="sr-only">
                    SimRace Vereniging Nederland
                </h1>
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
    <div x-if="navOpen"
         x-bind:class="navOpen && '!pt-20 !mb-3 !h-full !overflow-auto'"
         class="absolute top-0 z-40 mb-0 flex h-0 w-full flex-col overflow-hidden bg-white pt-0 transition-all duration-500">

        {{-- Internal Links --}}
        <nav class="shrink grow-0 basis-auto bg-white px-3 pt-3">
            <h2 x-bind:class="navOpen && '!opacity-100 !translate-x-0 !delay-[100ms]'"
                class="translate-x-[-5%] pb-6 text-sm font-medium uppercase text-neutral-400 opacity-0 transition-all delay-[100ms] duration-500">
                Intern
            </h2>
            <ul class="flex flex-col space-y-3">
                <li x-bind:class="navOpen && '!opacity-100 !translate-x-0 !delay-[200ms]'"
                    class="flex translate-x-[-5%] items-center space-x-2 opacity-0 transition-all delay-[200ms] duration-500">
                    <x-heroicon-o-chevron-double-right class="h-5 text-srvn-orange" />
                    <a class="{{ Route::is('news') ? 'text-srvn-orange font-medium' : '' }} flex w-full items-center hover:font-medium hover:text-srvn-orange"
                       href="{{ route('news') }}">
                        <span>Nieuws</span>
                    </a>
                </li>
                <li x-bind:class="navOpen && '!opacity-100 !translate-x-0 !delay-[200ms]'"
                    class="flex translate-x-[-5%] items-center space-x-2 opacity-0 transition-all delay-[200ms] duration-500">
                    <x-heroicon-o-chevron-double-right class="h-5 text-srvn-orange" />
                    <a class="{{ Route::is('schedule') ? 'text-srvn-orange font-medium' : '' }} flex w-full items-center hover:font-medium hover:text-srvn-orange"
                       href="{{ route('schedule') }}">
                        <span>Kalender</span>
                    </a>
                </li>
                <li x-bind:class="navOpen && '!opacity-100 !translate-x-0 !delay-[300ms]'"
                    class="flex translate-x-[-5%] items-center space-x-2 opacity-0 transition-all delay-[300ms] duration-500">
                    <x-heroicon-o-chevron-double-right class="h-5 text-srvn-orange" />
                    <a class="{{ Route::is('standings') ? 'text-srvn-orange font-medium' : '' }} flex w-full items-center hover:font-medium hover:text-srvn-orange"
                       href="{{ route('standings') }}">
                        <span>Klassement</span>
                    </a>
                </li>
                <li x-bind:class="navOpen && '!opacity-100 !translate-x-0 !delay-[400ms]'"
                    class="flex translate-x-[-5%] items-center space-x-2 opacity-0 transition-all delay-[400ms] duration-500">
                    <x-heroicon-o-chevron-double-right class="h-5 text-srvn-orange" />
                    <a class="{{ Route::is('drivers') ? 'text-srvn-orange font-medium' : '' }} flex w-full items-center hover:font-medium hover:text-srvn-orange"
                       href="{{ route('drivers') }}">
                        <span>Rijders</span>
                    </a>
                </li>
                <li x-bind:class="navOpen && '!opacity-100 !translate-x-0 !delay-[500ms]'"
                    class="flex translate-x-[-5%] items-center space-x-2 opacity-0 transition-all delay-[500ms] duration-500">
                    <x-heroicon-o-chevron-double-right class="h-5 text-srvn-orange" />
                    <a class="{{ Route::is('teams') ? 'text-srvn-orange font-medium' : '' }} flex w-full items-center hover:font-medium hover:text-srvn-orange"
                       href="{{ route('teams') }}">
                        <span>Teams</span>
                    </a>
                </li>
            </ul>

            {{-- Mijn SRVN Button --}}
            <div x-bind:class="navOpen && '!opacity-100 !delay-[0ms]'"
                 class="flex items-center pt-6 pb-9 opacity-0 transition-opacity delay-[0ms] duration-500">
                <a href="{{ route('driver.dashboard') }}"
                   class="flex w-full items-center justify-center space-x-1 rounded border-2 border-srvn-orange bg-srvn-orange px-3 py-2 font-semibold text-white transition duration-150 ease-in-out hover:bg-transparent hover:text-neutral-800">
                    <x-heroicon-o-user class="h-6" />
                    <span>Mijn SRVN</span>
                </a>
            </div>
        </nav>

        {{-- External Links --}}
        <nav class="flex shrink grow basis-auto flex-col justify-between bg-srvn-gray">
            <div class="shrink-0 grow basis-auto px-3">
                <h2 x-bind:class="navOpen && '!opacity-100 !translate-x-0 !delay-[125ms]'"
                    class="translate-x-[-5%] pt-9 pb-6 text-sm font-medium uppercase text-neutral-400 opacity-0 transition-all delay-[125ms] duration-500">
                    Extern
                </h2>
                <ul class="flex flex-col space-y-3">
                    <li x-bind:class="navOpen && '!opacity-100 !translate-x-0 !delay-[250ms]'"
                        class="flex translate-x-[-5%] items-center space-x-2 opacity-0 transition-all delay-[250ms] duration-500">
                        <x-heroicon-o-arrow-top-right-on-square class="-mt-0.5 h-5 text-srvn-orange" />
                        <a class="flex w-full items-center hover:text-srvn-orange"
                           href="https://srvn.liveracers.com/League"
                           target="_blank">
                            <span>LiveRacers</span>
                        </a>
                    </li>
                    <li x-bind:class="navOpen && '!opacity-100 !translate-x-0 !delay-[375ms]'"
                        class="flex translate-x-[-5%] items-center space-x-2 opacity-0 transition-all delay-[375ms] duration-500">
                        <x-heroicon-o-arrow-top-right-on-square class="-mt-0.5 h-5 text-srvn-orange" />
                        <a class="flex w-full items-center hover:text-srvn-orange"
                           href="https://forum.srvn.nl/"
                           target="_blank">
                            <span>Forum</span>
                        </a>
                    </li>
                    <li x-bind:class="navOpen && '!opacity-100 !translate-x-0 !delay-[500ms]'"
                        class="flex translate-x-[-5%] items-center space-x-2 opacity-0 transition-all delay-[500ms] duration-500">
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
            <a href="{{ route('get-in') }}"
               x-bind:class="navOpen && '!opacity-100 !delay-[0ms]'"
               class="mb-6 mt-9 shrink grow-0 basis-auto text-center font-semibold text-srvn-orange opacity-0 transition-opacity delay-[0ms] duration-500">
                Klaar om in te stappen?
                {{-- Word lid voor €25 per jaar! --}}
            </a>
        </nav>

    </div>

</div>
