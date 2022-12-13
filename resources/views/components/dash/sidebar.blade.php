<div class="mt-9 h-full w-80 pr-6 font-oxanium">
    <x-dash.sidebar.nav>
        @if (Route::is('driver.*'))
            <x-dash.sidebar.nav-item href="{{ route('driver.dashboard') }}"
                                     class="{{ Route::is('driver.dashboard') ? 'text-srvn-orange' : '' }}">
                <x-heroicon-o-rectangle-group class="h-6 w-6 text-neutral-900 dark:text-neutral-700" />
                <span>Dashboard</span>
            </x-dash.sidebar.nav-item>

            <x-dash.sidebar.nav-item href="{{ route('driver.team') }}"
                                     class="{{ Route::is('driver.team') ? 'text-srvn-orange' : '' }}">
                <x-heroicon-o-users class="h-6 w-6 text-neutral-900 dark:text-neutral-700" />
                <span>Team</span>
            </x-dash.sidebar.nav-item>

            <x-dash.sidebar.nav-item href="#">
                <x-heroicon-o-users class="h-6 w-6 text-neutral-900 dark:text-neutral-700" />
                <span>Teamgenoten</span>
            </x-dash.sidebar.nav-item>

            <x-dash.sidebar.nav-item href="#">
                <x-heroicon-o-trophy class="h-6 w-6 text-neutral-900 dark:text-neutral-700" />
                <span>Inschrijven</span>
            </x-dash.sidebar.nav-item>

            <x-dash.sidebar.nav-item href="#">
                <x-heroicon-o-arrow-up-tray class="h-6 w-6 text-neutral-900 dark:text-neutral-700" />
                <span>Skins inleveren</span>
            </x-dash.sidebar.nav-item>

            <x-dash.sidebar.nav-item href="{{ route('driver.protesten') }}"
                                     class="{{ Route::is('driver.protesten') ? 'text-srvn-orange' : '' }}">
                <x-heroicon-o-document-text class="h-6 w-6 text-neutral-900 dark:text-neutral-700" />
                <span>Protesten</span>
            </x-dash.sidebar.nav-item>
        @endif
        @if (Route::is('team.*'))
            <x-dash.sidebar.nav-item href="{{ route('team.dashboard') }}"
                                     class="{{ Route::is('team.dashboard') ? 'text-srvn-orange' : '' }}">
                <x-heroicon-o-rectangle-group class="h-6 w-6 text-neutral-900 dark:text-neutral-700" />
                <span>Dashboard</span>
            </x-dash.sidebar.nav-item>

            <x-dash.sidebar.nav-item href="{{ route('team.info') }}"
                                     class="{{ Route::is('team.info') ? 'text-srvn-orange' : '' }}">
                <x-heroicon-o-information-circle class="h-6 w-6 text-neutral-900 dark:text-neutral-700" />
                <span>Team informatie</span>
            </x-dash.sidebar.nav-item>

            <x-dash.sidebar.nav-item href="#">
                <x-heroicon-o-users class="h-6 w-6 text-neutral-900 dark:text-neutral-700" />
                <span>Teamleden</span>
            </x-dash.sidebar.nav-item>

            <x-dash.sidebar.nav-item href="#">
                <x-heroicon-o-arrow-up-tray class="h-6 w-6 text-neutral-900 dark:text-neutral-700" />
                <span>Skins inleveren</span>
            </x-dash.sidebar.nav-item>
        @endif
        @if (Route::is('crew.*'))
            <x-dash.sidebar.nav-item href="{{ route('crew.dashboard') }}"
                                     class="{{ Route::is('crew.dashboard') ? 'text-srvn-orange' : '' }}">
                <x-heroicon-o-rectangle-group class="h-6 w-6 text-neutral-900 dark:text-neutral-700" />
                <span>Dashboard</span>
            </x-dash.sidebar.nav-item>

            <h3 class="pt-3 pb-2 text-xs font-semibold uppercase">Kampioenschaps Commissie</h3>

            <x-dash.sidebar.nav-item href="#">
                <x-heroicon-o-trophy class="h-6 w-6 text-neutral-900 dark:text-neutral-700" />
                <span>Kampioenschappen</span>
            </x-dash.sidebar.nav-item>

            <x-dash.sidebar.nav-item href="#">
                <x-heroicon-o-trophy class="h-6 w-6 text-neutral-900 dark:text-neutral-700" />
                <span>Evenementen</span>
            </x-dash.sidebar.nav-item>

            <x-dash.sidebar.nav-item href="#">
                <x-heroicon-o-document-plus class="h-6 w-6 text-neutral-900 dark:text-neutral-700" />
                <span>Raceformats</span>
            </x-dash.sidebar.nav-item>

            <x-dash.sidebar.nav-item href="#">
                <x-heroicon-o-arrow-down-on-square class="h-6 w-6 text-neutral-900 dark:text-neutral-700" />
                <span>Content</span>
            </x-dash.sidebar.nav-item>
            <h3 class="pt-3 pb-2 text-xs font-semibold uppercase">Race Commissie</h3>
            <x-dash.sidebar.nav-item href="#">
                <x-heroicon-o-arrow-down-on-square class="h-6 w-6 text-neutral-900 dark:text-neutral-700" />
                <span>Protesten</span>
            </x-dash.sidebar.nav-item>
            <x-dash.sidebar.nav-item href="#">
                <x-heroicon-o-arrow-down-on-square class="h-6 w-6 text-neutral-900 dark:text-neutral-700" />
                <span>Race Uitslagen</span>
            </x-dash.sidebar.nav-item>
        @endif
        @if (Route::is('admin.*'))
            <x-dash.sidebar.nav-item href="{{ route('admin.dashboard') }}"
                                     class="{{ Route::is('admin.dashboard') ? 'text-srvn-orange' : '' }}">
                <x-heroicon-o-rectangle-group class="h-6 w-6 text-neutral-900 dark:text-neutral-700" />
                <span>Dashboard</span>
            </x-dash.sidebar.nav-item>

            <x-dash.sidebar.nav-item href="{{ route('admin.index-users') }}"
                                     class="{{ Route::is('admin.index-users') ? 'text-srvn-orange' : '' }}">
                <x-heroicon-o-user-group class="h-6 w-6 text-neutral-900 dark:text-neutral-700" />
                <span>Gebruikers</span>
            </x-dash.sidebar.nav-item>

            <x-dash.sidebar.nav-item href="#">
                <x-heroicon-o-users class="h-6 w-6 text-neutral-900 dark:text-neutral-700" />
                <span>Teams</span>
            </x-dash.sidebar.nav-item>
        @endif
    </x-dash.sidebar.nav>
</div>
