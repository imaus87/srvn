<section class="mx-3 overflow-hidden bg-transparent text-neutral-800 dark:bg-neutral-900 dark:text-neutral-300 lg:mx-6 lg:rounded-lg">
    <div class="py-9 md:px-3 lg:px-9">

        <div class="pb-6 text-center">
            <x-h3 class="text-2xl font-semibold lg:text-3xl">
                Stap in bij dé <span class="font-extrabold">nederlandse</span> simrace vereniging!
            </x-h3>
        </div>

        <ul class="grid grid-cols-1 gap-3 text-lg sm:grid-cols-2">
            <li class="space-y-3 rounded-md bg-white p-6 shadow-md dark:bg-neutral-500/5">
                <div class="flex items-center space-x-3">
                    <x-heroicon-o-trophy class="h-7 w-7 text-srvn-orange" />
                    <x-h4>
                        Officiël kampioenschap
                    </x-h4>
                </div>
                <p class="ml-10 text-neutral-500">
                    Rijd twee maal per jaar mee in het officiël nederlands kampioenschap simracen.
                </p>
            </li>
            <li class="space-y-3 rounded-md bg-white p-6 shadow-md dark:bg-neutral-500/5">
                <div class="flex items-center space-x-3">
                    <x-heroicon-o-user-group class="h-7 w-7 text-srvn-orange" />
                    <x-h4>
                        Winter- en zomerstop
                    </x-h4>
                </div>
                <p class="ml-10 text-neutral-500">
                    Met de winter en somer series tussen de seizoenen in verveel je je geen moment!
                </p>
            </li>
            <li class="space-y-3 rounded-md bg-white p-6 shadow-md dark:bg-neutral-500/5">
                <div class="flex items-center space-x-3">
                    <x-heroicon-o-paint-brush class="h-7 w-7 text-srvn-orange" />
                    <x-h4>
                        Eigen liveries
                    </x-h4>
                </div>
                <p class="ml-10 text-neutral-500">
                    Ontwerp en rijd rond met je eigen gemaakte livery of gebruik er een van ons.
                </p>
            </li>
            <li class="space-y-3 rounded-md bg-white p-6 shadow-md dark:bg-neutral-500/5">
                <div class="flex items-center space-x-3">
                    <x-heroicon-o-user-circle class="h-7 w-7 text-srvn-orange" />
                    <x-h4>
                        Gratis account
                    </x-h4>
                </div>
                <p class="ml-10 text-neutral-500">
                    Schrijf je nu in voor een gratis account en verken de wonderen wereld van het simracen!
                </p>
            </li>
            {{-- <li class="space-y-3 rounded-md border border-srvn-orange/90 p-6">
                <x-h4>
                    Overtuigd?
                </x-h4>
                <p class="text-neutral-500">
                    Schrijf je nu in voor een gratis account.
                </p>
            </li> --}}
            {{-- <li class="">
                <x-h3 class="text-2xl font-semibold lg:text-3xl">
                    Doe je gordel om en stap in bij dé<br class="hidden lg:block"> nederlandse simrace vereniging!
                </x-h3>
            </li> --}}
        </ul>

        <div class="flex items-center justify-center pt-6">
            {{-- <x-button class="w-full max-w-lg border-srvn-orange/40 bg-srvn-orange/90 hover:border-srvn-orange/90 hover:text-neutral-300">
                Klaar om in te stappen?
                Lees meer over hoe SRVN werkt / wij werken
            </x-button> --}}
            <a href="{{ route('get-in') }}"
               class="flex w-full max-w-lg items-center justify-center space-x-1 rounded border-2 border-srvn-orange bg-srvn-orange px-3 py-2 text-lg font-semibold text-white transition duration-150 ease-in-out hover:bg-transparent hover:text-neutral-800 dark:border-srvn-orange/40 dark:bg-srvn-orange/90 dark:hover:border-srvn-orange/90 dark:hover:text-neutral-300">
                Klaar om in te stappen?
            </a>
        </div>

    </div>

    {{-- <div class="mx-auto w-full max-w-7xl px-6 py-12">

        <div class="pb-9 text-center">
            <x-h3 class="text-2xl font-semibold lg:text-3xl">
                Stap in bij dé <span class="font-extrabold">nederlandse</span> simrace vereniging!
            </x-h3>
        </div>

        <ul class="grid grid-cols-1 gap-3 text-lg sm:grid-cols-2 sm:px-6">
            <li class="space-y-6 rounded-md bg-neutral-500/5 p-6 shadow-md">
                <div class="flex items-center justify-center">
                    <x-heroicon-s-trophy class="h-24 w-24" />
                </div>
                <div class="space-y-3">
                    <x-h4 class="text-center">
                        Officiël kampioenschap
                    </x-h4>
                    <p class="text-neutral-500 px-6">
                        Rijd twee maal per jaar mee in het officiël nederlands kampioenschap simracen.
                    </p>
                </div>
            </li>
            <li class="space-y-3 rounded-md bg-neutral-500/5 p-6 shadow-md">
                <div class="flex items-center justify-center">
                    <x-heroicon-s-user-group class="h-24 w-24" />
                </div>
                <div class="space-y-3">
                    <x-h4 class="text-center">
                        Winter- en zomerstop
                    </x-h4>
                    <p class="text-neutral-500 px-6">
                        Met de winter en somer series tussen de seizoenen in verveel je je geen moment!
                    </p>
                </div>
            </li>
            <li class="space-y-3 rounded-md bg-neutral-500/5 p-6 shadow-md">
                <div class="flex items-center justify-center">
                    <x-heroicon-s-paint-brush class="h-24 w-24" />
                </div>
                <div class="space-y-3">
                    <x-h4 class="text-center">
                        Eigen liveries
                    </x-h4>
                    <p class="text-neutral-500 px-6">
                        Ontwerp en rijd rond met je eigen gemaakte livery of gebruik er een van ons.
                    </p>
                </div>
            </li>
            <li class="space-y-3 rounded-md bg-neutral-500/5 p-6 shadow-md">
                <div class="flex items-center justify-center">
                    <x-heroicon-s-user-circle class="h-24 w-24" />
                </div>
                <div class="space-y-3">
                    <x-h4 class="text-center">
                        Gratis account
                    </x-h4>
                    <p class="text-neutral-500 px-6">
                        Schrijf je nu in voor een gratis account en verken de wonderen wereld van het simracen!
                    </p>
                </div>
            </li> --}}
    {{-- <li class="space-y-3 rounded-md border border-srvn-orange/90 p-6">
                <x-h4>
                    Overtuigd?
                </x-h4>
                <p class="text-neutral-500">
                    Schrijf je nu in voor een gratis account.
                </p>
            </li> --}}
    {{-- <li class="">
                <x-h3 class="text-2xl font-semibold lg:text-3xl">
                    Doe je gordel om en stap in bij dé<br class="hidden lg:block"> nederlandse simrace vereniging!
                </x-h3>
            </li> --}}
    {{-- </ul>

        <div class="flex items-center justify-center pt-6">
            <x-button
                      class="w-full max-w-lg border-srvn-orange/40 bg-srvn-orange/90 hover:border-srvn-orange/90 hover:text-neutral-300">
                Account aanmaken
            </x-button>
        </div>

    </div> --}}
</section>
