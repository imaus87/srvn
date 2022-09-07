<div class="w-full h-14 bg-zinc-900 border-b-2 border-[#ff4e08] flex items-center text-white px-6 font-semibold">
    <a href="{{ route('home') }}">
        <x-srvn-logo class="h-12 mr-36" />
    </a>
    <div class="flex h-full justify-between w-full">
        <ul class="flex space-x-4 h-full">
            <li class="h-full"><a class="hover:bg-[#ff4e08] h-full w-full flex items-center px-4"
                    href="{{ route('kalender') }}"><span>Kalender</span></a></li>
            <li class="h-full"><a class="hover:bg-[#ff4e08] h-full w-full flex items-center px-4"
                    href="{{ route('klassement') }}"><span>Klassement</span></a></li>
            <li class="h-full"><a class="hover:bg-[#ff4e08] h-full w-full flex items-center px-4"
                    href="{{ route('rijders') }}"><span>Rijders</span></a></li>
            <li class="h-full"><a class="hover:bg-[#ff4e08] h-full w-full flex items-center px-4"
                    href="{{ route('teams') }}"><span>Teams</span></a></li>
        </ul>
        <ul class="h-full">
            <li class="h-full">
                <a href="{{ route('dashboard') }}" class="flex items-center space-x-2 hover:bg-[#ff4e08] h-full px-4">
                    <x-heroicon-s-user class="h-4" />
                    <span>Mijn SRVN</span>
                </a>
            </li>
        </ul>
    </div>
</div>
