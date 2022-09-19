<div>
    You are logged in now.
    {{-- <form action="{{ route('logout') }}" method="POST">
        @csrf
        <x-button type="submit">
            Logout
        </x-button>
    </form> --}}

    <x-button class="mt-4 max-w-min" type="button" wire:click="logout">
        Uitloggen
    </x-button>
</div>
