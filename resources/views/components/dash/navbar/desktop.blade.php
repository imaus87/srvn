<div class="w-full bg-stone-800 px-6 shadow-xl">
    <div class="mx-auto flex w-full items-center justify-between py-3">
        <div class="flex items-center space-x-4">
            {{-- Main Logo --}}
            <a href="{{ route('home') }}">
                <x-srvn-stone-light class="h-8" />
            </a>

            {{-- Main Navigation --}}
            <x-dash.navbar.nav>
                <x-dash.navbar.nav-item href="#">
                    Team
                </x-dash.navbar.nav-item>
            </x-dash.navbar.nav>
        </div>

        {{-- User Menu --}}
        <a href="{{ route('dashboard') }}"
           class="flex items-center justify-center space-x-1 rounded border-2 border-[#ff460d] bg-[#ff460d] px-3 py-2 font-semibold text-white transition duration-150 ease-in-out hover:bg-transparent hover:text-stone-800 dark:hover:text-stone-100">
            <x-heroicon-o-user class="h-6" />
            <span>{{ auth()->user()->name }}</span>
        </a>
    </div>
</div>
