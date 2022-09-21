<div class="w-full bg-white px-6 font-medium shadow-md dark:bg-neutral-800">
    <div class="mx-auto flex w-full items-center justify-between py-3">
        <div class="flex items-center space-x-4">
            {{-- Main Logo --}}
            <a href="{{ route('home') }}">
                <x-srvn-stone-light class="hidden h-8 dark:block" />
                <x-srvn-stone class="block h-8 dark:hidden" />
            </a>

            {{-- Main Navigation --}}
            <x-dash.navbar.nav>
                <x-dash.navbar.nav-item href="#">
                    Team
                </x-dash.navbar.nav-item>
            </x-dash.navbar.nav>
        </div>

        {{-- User Menu --}}

        <div class="flex items-center justify-center divide-x bg-transparent">
            <div class="relative"
                 x-data="{
                     open: false,
                     toggle() {
                         if (this.open) {
                             return this.close()
                         }

                         this.$refs.button.focus()

                         this.open = true
                     },
                     close(focusAfter) {
                         if (!this.open) return

                         this.open = false

                         focusAfter && focusAfter.focus()
                     }
                 }"
                 x-on:keydown.escape.prevent.stop="close($refs.button)"
                 x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                 x-id="['dropdown-button']">

                <button class="flex space-x-2 rounded-md px-3 py-2 hover:bg-neutral-700 focus:bg-neutral-700 focus:ring focus:ring-neutral-600"
                        x-ref="button"
                        x-on:click="toggle()"
                        x-bind:aria-expanded="open"
                        x-bind:aria-controls="$id('dropdown-button')"
                        type="button">
                    <span>
                        {{ str(auth()->user()->name) }}
                    </span>

                    <x-heroicon-s-chevron-down class="h-5 w-5 text-neutral-300" />
                </button>

                <div x-ref="panel"
                     x-show="open"
                     x-transition.origin.top.left
                     x-on:click.outside="close($refs.button)"
                     x-bind:id="$id('dropdown-button')"
                     style="display: none;"
                     class="absolute left-0 right-0 mt-2 rounded-md bg-white shadow-md dark:bg-neutral-700">
                    <a href="#"
                       class="block w-full px-4 py-2.5 text-left text-sm first-of-type:rounded-t-md last-of-type:rounded-b-md hover:bg-neutral-600 disabled:text-gray-500">
                        Instellingen
                    </a>

                    <a href="#"
                       class="block w-full px-4 py-2.5 text-left text-sm first-of-type:rounded-t-md last-of-type:rounded-b-md hover:bg-neutral-600 disabled:text-gray-500">
                        Profiel
                    </a>

                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="text-srvn-orange block w-full px-4 py-2.5 text-left text-sm first-of-type:rounded-t-md last-of-type:rounded-b-md hover:bg-neutral-600 disabled:text-gray-500"
                                type="submit">
                            Uitloggen
                        </button>

                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
