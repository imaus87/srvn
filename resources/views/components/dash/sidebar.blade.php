<div class="mt-9 h-full w-80 pr-6 font-oxanium">
    <x-dash.sidebar.nav>
        @if (Route::is('driver.*'))
            <x-dash.sidebar.nav-item href="#">
                <x-heroicon-o-users class="h-6 w-6 text-neutral-900 active:bg-srvn-orange dark:text-neutral-700" />
                <span>Teamgenoten</span>
            </x-dash.sidebar.nav-item>
        @endif
        @if (Route::is('team.*'))
            <x-dash.sidebar.nav-item href="#">
                <x-heroicon-o-users class="h-6 w-6 text-neutral-900 active:bg-srvn-orange dark:text-neutral-700" />
                <span>Teamleden</span>
            </x-dash.sidebar.nav-item>
        @endif
        @if (Route::is('crew.*'))
        @endif
        @if (Route::is('admin.*'))
            <x-dash.sidebar.nav-item href="{{ route('admin.index-users') }}">
                <x-heroicon-o-user-group class="h-6 w-6 text-neutral-900 active:bg-srvn-orange dark:text-neutral-700" />
                <span>Gebruikers</span>
            </x-dash.sidebar.nav-item>

            <x-dash.sidebar.nav-item href="#">
                <x-heroicon-o-users class="h-6 w-6 text-neutral-900 active:bg-srvn-orange dark:text-neutral-700" />
                <span>Teams</span>
            </x-dash.sidebar.nav-item>

            <x-dash.sidebar.nav-item href="#">
                <x-heroicon-o-trophy class="h-6 w-6 text-neutral-900 active:bg-srvn-orange dark:text-neutral-700" />
                <span>Gebruikers</span>
            </x-dash.sidebar.nav-item>
        @endif
    </x-dash.sidebar.nav>
</div>
