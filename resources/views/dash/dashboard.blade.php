<div class="container mx-auto flex h-full">

    <x-dash.sidebar />
    <div class="px-9">
        You are logged in now.
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <x-button class="mt-4 flex max-w-min items-center justify-center space-x-1 rounded border-2 border-[#ff460d] bg-[#ff460d] px-3 py-2 font-semibold text-white transition duration-150 ease-in-out hover:bg-transparent hover:text-neutral-800 dark:hover:text-neutral-100"
                      type="submit">
                Uitloggen
            </x-button>
            {{-- <input type="submit" value="Loguit"> --}}
        </form>
    </div>
</div>
