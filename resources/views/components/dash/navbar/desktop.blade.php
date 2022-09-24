<div class="relative w-full bg-white px-6 font-medium shadow-md dark:bg-neutral-800">
    <div class="relative mx-auto flex w-full items-center justify-between py-3">
        {{-- Main Logo --}}
        <a href="{{ route('home') }}">
            <x-logo.100 class="hidden h-8 dark:block" />
            <x-logo.900 class="block h-8 dark:hidden" />
        </a>

        {{-- Main Navigation --}}
        <x-dash.navbar.nav>
            <x-dash.navbar.nav-item href="#">
                Persoonlijk
            </x-dash.navbar.nav-item>
            <x-dash.navbar.nav-item href="#">
                Team
            </x-dash.navbar.nav-item>
            <x-dash.navbar.nav-item href="#">
                Crew
            </x-dash.navbar.nav-item>
            <x-dash.navbar.nav-item href="#">
                Admin
            </x-dash.navbar.nav-item>
        </x-dash.navbar.nav>


        {{-- User Menu --}}

        <div class="flex items-center justify-center divide-x bg-transparent">
            <div class="relative"
                 x-data
                 x-popover>
                <button class="focus:ring-neutal-200 flex min-w-[130px] justify-between space-x-2 rounded-md px-4 py-2 hover:bg-neutral-100 focus:bg-neutral-100 focus:ring focus:ring-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:focus:ring-neutral-600"
                        x-popover:button
                        type="button">
                    <span class="">
                        {{ str(auth()->user()->first_name) }}
                    </span>

                    <x-heroicon-s-chevron-down class="mt-0.5 h-5 w-5 text-neutral-900 transition-transform dark:text-neutral-300"
                                               x-bind:class="$popover.isOpen && '-rotate-180 transition-transform'" />
                </button>

                <div x-popover:panel
                     x-cloak
                     x-transition.origin.top.center
                     class="absolute left-0 right-0 mt-2 rounded-md bg-neutral-100 shadow-md dark:bg-neutral-700">
                    <a href="#"
                       class="block w-full px-4 py-2.5 text-left text-sm first:rounded-t-md last:rounded-b-md hover:bg-neutral-200 disabled:text-gray-500 dark:hover:bg-neutral-600">
                        Instellingen
                    </a>

                    <a href="#"
                       class="block w-full px-4 py-2.5 text-left text-sm first:rounded-t-md last:rounded-b-md hover:bg-neutral-200 disabled:text-gray-500 dark:hover:bg-neutral-600">
                        Profiel
                    </a>

                    <form action="{{ route('logout') }}"
                          method="post"
                          class="block w-full px-4 py-2.5 text-left text-sm text-srvn-orange first:rounded-t-md last:rounded-b-md hover:bg-neutral-200 disabled:text-gray-500 dark:hover:bg-neutral-600">
                        @csrf
                        <button class="flex h-full w-full items-center"
                                type="submit">
                            Uitloggen
                        </button>
                    </form>

                </div>
            </div>
        </div>


    </div>
</div>
