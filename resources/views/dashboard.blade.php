<div>
    You are logged in now.
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <x-button type="submit">
            Logout
        </x-button>
    </form>
</div>
