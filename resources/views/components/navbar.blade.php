<div class="flex h-14 w-full items-center border-b-2 border-[#ff4e08] bg-zinc-900 px-6 font-semibold text-white">
    <a href="{{ route('home') }}">
        <x-srvn-logo class="mr-36 h-12" />
    </a>
    <div class="flex h-full w-full justify-between">
        <ul class="flex h-full space-x-4">
            <li class="h-full"><a class="flex h-full w-full items-center px-4 hover:bg-[#ff4e08]"
                   href="{{ route('kalender') }}"><span>Kalender</span></a></li>
            <li class="h-full"><a class="flex h-full w-full items-center px-4 hover:bg-[#ff4e08]"
                   href="{{ route('klassement') }}"><span>Klassement</span></a></li>
            <li class="h-full"><a class="flex h-full w-full items-center px-4 hover:bg-[#ff4e08]"
                   href="{{ route('rijders') }}"><span>Rijders</span></a></li>
            <li class="h-full"><a class="flex h-full w-full items-center px-4 hover:bg-[#ff4e08]"
                   href="{{ route('teams') }}"><span>Teams</span></a></li>
        </ul>
        <ul class="h-full">
            <li class="h-full">
                <a href="{{ route('dashboard') }}" class="flex h-full items-center space-x-2 px-4 hover:bg-[#ff4e08]">
                    <x-heroicon-s-user class="h-4" />
                    <span>Mijn SRVN</span>
                </a>
            </li>
        </ul>
    </div>
</div>
