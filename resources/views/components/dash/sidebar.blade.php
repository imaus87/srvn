<div class="h-full w-80 px-6">
    <nav>
        <ul class="space-y-2 font-medium text-neutral-500 dark:text-neutral-500">
            <li class="">
                <a href="{{ route('admin.index-users') }}"
                   class="flex items-center space-x-4 py-1">
                    <x-heroicon-s-user-group class="h-6 w-6 text-neutral-400 dark:text-neutral-700" />
                    <span>Gebruikers</span>
                </a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center space-x-4 py-1">
                    <x-heroicon-s-users class="h-6 w-6 text-neutral-400 dark:text-neutral-700" />
                    <span>Teams</span>
                </a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center space-x-4 py-1">
                    <x-heroicon-s-trophy class="h-6 w-6 text-neutral-400 dark:text-neutral-700" />
                    <span>Kampioenschappen</span>
                </a>
            </li>

        </ul>
    </nav>
</div>
