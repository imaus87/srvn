<div x-bind:class="navOpen && '!translate-y-[0px] bottom-0 h-full'"
     class="shadow-b fixed top-0 z-50 h-auto w-full bg-white font-medium shadow-md transition-transform duration-500">

    {{-- Navbar Mobile --}}
    <div class="relative z-50 bg-white">
        <div x-bind:class="navOpen && '!translate-y-[12px]'"
             class="flex w-full items-center justify-between px-2.5 py-3 transition-transform duration-500 md:px-6">
            <button x-on:click="navOpen = !navOpen"
                    class="relative mt-0 h-8 w-8">
                <div x-show="!navOpen"
                     class="absolute inset-0">
                    <x-heroicon-o-bars-2 class="-ml-[1px] h-8 text-srvn-orange" />
                </div>
                <div x-show="navOpen"
                     class="absolute inset-0">
                    <x-heroicon-o-x-mark class="-ml-[1px] h-8 text-srvn-orange" />
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
                    <x-heroicon-o-user class="mr-[2px] h-6" />
                </a>
            </div>
        </div>
    </div>

    {{-- Menu Mobile --}}
    <div x-if="navOpen"
         x-bind:class="navOpen && '!pt-20 !mb-3 !h-full !overflow-auto'"
         class="absolute top-0 z-40 mb-0 flex h-0 w-full flex-col overflow-hidden bg-white pt-0 transition-all duration-500">

        {{-- Internal Links --}}
        <nav class="shrink grow-0 basis-auto bg-white px-3 pt-3 md:px-6">
            <h2 x-bind:class="navOpen && '!opacity-100 !translate-x-0 !delay-[83ms]'"
                class="translate-x-[-5%] pb-6 text-sm font-medium uppercase text-neutral-400 opacity-0 transition-all delay-[100ms] duration-500">
                Intern
            </h2>
            <ul class="flex flex-col space-y-3">
                <li x-bind:class="navOpen && '!opacity-100 !translate-x-0 !delay-[166ms]'"
                    class="flex translate-x-[-5%] items-center opacity-0 transition-all delay-[166ms] duration-500">
                    <a class="{{ Route::is('news') ? 'text-srvn-orange font-medium' : '' }} flex w-full items-center space-x-2 hover:font-medium hover:text-srvn-orange"
                       href="{{ route('news') }}">
                        <x-heroicon-o-chevron-double-right class="-ml-[3px] h-5 text-srvn-orange" />
                        <span>Nieuws</span>
                    </a>
                </li>
                <li x-bind:class="navOpen && '!opacity-100 !translate-x-0 !delay-[249ms]'"
                    class="flex translate-x-[-5%] items-center opacity-0 transition-all delay-[249ms] duration-500">
                    <a class="{{ Route::is('schedule') ? 'text-srvn-orange font-medium' : '' }} flex w-full items-center space-x-2 hover:font-medium hover:text-srvn-orange"
                       href="{{ route('schedule') }}">
                        <x-heroicon-o-chevron-double-right class="-ml-[3px] h-5 text-srvn-orange" />
                        <span>Kalender</span>
                    </a>
                </li>
                <li x-bind:class="navOpen && '!opacity-100 !translate-x-0 !delay-[333ms]'"
                    class="flex translate-x-[-5%] items-center opacity-0 transition-all delay-[333ms] duration-500">
                    <a class="{{ Route::is('standings') ? 'text-srvn-orange font-medium' : '' }} flex w-full items-center space-x-2 hover:font-medium hover:text-srvn-orange"
                       href="{{ route('standings') }}">
                        <x-heroicon-o-chevron-double-right class="-ml-[3px] h-5 text-srvn-orange" />
                        <span>Klassement</span>
                    </a>
                </li>
                <li x-bind:class="navOpen && '!opacity-100 !translate-x-0 !delay-[416ms]'"
                    class="flex translate-x-[-5%] items-center opacity-0 transition-all delay-[416ms] duration-500">
                    <a class="{{ Route::is('drivers') ? 'text-srvn-orange font-medium' : '' }} flex w-full items-center space-x-2 hover:font-medium hover:text-srvn-orange"
                       href="{{ route('drivers') }}">
                        <x-heroicon-o-chevron-double-right class="-ml-[3px] h-5 text-srvn-orange" />
                        <span>Rijders</span>
                    </a>
                </li>
                <li x-bind:class="navOpen && '!opacity-100 !translate-x-0 !delay-[500ms]'"
                    class="flex translate-x-[-5%] items-center opacity-0 transition-all delay-[500ms] duration-500">
                    <a class="{{ Route::is('teams') ? 'text-srvn-orange font-medium' : '' }} flex w-full items-center space-x-2 hover:font-medium hover:text-srvn-orange"
                       href="{{ route('teams') }}">
                        <x-heroicon-o-chevron-double-right class="-ml-[3px] h-5 text-srvn-orange" />
                        <span>Teams</span>
                    </a>
                </li>
            </ul>

            {{-- Mijn SRVN Button --}}
            {{-- <div x-bind:class="navOpen && '!opacity-100 !delay-[0ms]'"
                 class="flex items-center pt-6 pb-9 opacity-0 transition-opacity delay-[0ms] duration-500">
                <a href="{{ route('driver.dashboard') }}"
                   class="flex w-full items-center justify-center space-x-1 rounded border-2 border-srvn-orange bg-srvn-orange px-3 py-2 font-semibold text-white transition duration-150 ease-in-out hover:bg-transparent hover:text-neutral-800">
                    <x-heroicon-o-user class="h-6" />
                    <span>Mijn SRVN</span>
                </a>
            </div> --}}
            <div class="w-full pt-6 pb-9">
                <ul class="flex flex-col items-center justify-center space-y-6">
                    <li x-bind:class="navOpen && '!opacity-100 !delay-[250ms]'"
                        class="opacity-0 transition-opacity delay-[250ms] duration-250">
                        <a href="{{ route('register') }}"
                           class="font-semibold hover:text-srvn-orange">
                            Stap in
                        </a>
                    </li>
                    <li x-bind:class="navOpen && '!opacity-100 !delay-[0ms]'"
                        class="w-full opacity-0 transition-opacity delay-[0ms] duration-500">
                        <a href="{{ route('driver.dashboard') }}"
                           class="flex w-full items-center justify-center space-x-1 rounded border-2 border-srvn-orange bg-srvn-orange px-3 py-2 font-semibold text-white transition duration-150 ease-in-out hover:bg-transparent hover:text-neutral-800">
                            {{-- <x-heroicon-o-arrow-right-on-rectangle class="h-5" /> --}}
                            <span>Mijn SRVN</span>
                            {{-- Schrijf in --}}
                        </a>
                    </li>
                    <div x-bind:class="navOpen && '!opacity-100 !delay-[250ms]'"
                         class="flex items-center space-x-3 opacity-0 transition-opacity delay-[250ms] duration-250">
                        <li>
                            <a href="#"
                               class="hover:text-srvn-orange">
                                <x-heroicon-o-device-phone-mobile class="h-5" />
                            </a>
                        </li>
                        <li>
                            <a href="#"
                               class="hover:text-srvn-orange">
                                <x-heroicon-o-wrench class="h-5" />
                            </a>
                        </li>
                        <li>
                            <a href="#"
                               class="hover:text-srvn-orange">
                                <x-heroicon-o-moon class="h-5" />
                            </a>
                        </li>
                    </div>
                </ul>
            </div>
        </nav>

        {{-- External Links --}}
        <nav class="flex shrink grow basis-auto flex-col justify-between bg-srvn-gray">
            <div class="shrink grow-0 basis-auto px-3 md:px-6">
                <h2 x-bind:class="navOpen && '!opacity-100 !translate-x-0 !delay-[125ms]'"
                    class="translate-x-[-5%] pt-9 pb-6 text-sm font-medium uppercase text-neutral-400 opacity-0 transition-all delay-[125ms] duration-500">
                    Extern
                </h2>
                <ul class="flex flex-col space-y-3">
                    <li x-bind:class="navOpen && '!opacity-100 !translate-x-0 !delay-[250ms]'"
                        class="flex translate-x-[-5%] items-center opacity-0 transition-all delay-[250ms] duration-500">
                        <a class="flex w-full items-center space-x-2 hover:text-srvn-orange"
                           href="https://srvn.liveracers.com/League"
                           target="_blank">
                            <x-heroicon-o-arrow-top-right-on-square class="-mt-0.5 -ml-[1px] h-5 text-srvn-orange" />
                            <span>LiveRacers</span>
                        </a>
                    </li>
                    <li x-bind:class="navOpen && '!opacity-100 !translate-x-0 !delay-[375ms]'"
                        class="flex translate-x-[-5%] items-center opacity-0 transition-all delay-[375ms] duration-500">
                        <a class="flex w-full items-center space-x-2 hover:text-srvn-orange"
                           href="https://forum.srvn.nl/"
                           target="_blank">
                            <x-heroicon-o-arrow-top-right-on-square class="-mt-0.5 -ml-[1px] h-5 text-srvn-orange" />
                            <span>Forum</span>
                        </a>
                    </li>
                    <li x-bind:class="navOpen && '!opacity-100 !translate-x-0 !delay-[500ms]'"
                        class="flex translate-x-[-5%] items-center opacity-0 transition-all delay-[500ms] duration-500">
                        <a class="flex w-full items-center space-x-2 hover:text-srvn-orange"
                           href="https://discord.com/invite/U5rs68Q9CQ"
                           target="_blank">
                            <x-heroicon-o-arrow-top-right-on-square class="-mt-0.5 -ml-[1px] h-5 text-srvn-orange" />
                            <span>Discord</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div x-bind:class="navOpen && '!opacity-100 !delay-[250ms]'"
                 class="mt-6 flex shrink-0 grow justify-center opacity-0 transition-opacity delay-[250ms] duration-250">
                <div class="shrink grow-0">
                    <div class="hidden items-center space-x-3 rounded-md bg-white p-3 shadow-md md:flex">
                        <div class="dark:border-4 dark:border-white">
                            <x-qr-code />
                        </div>
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
