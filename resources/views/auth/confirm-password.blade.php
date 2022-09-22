<x-auth-layout>
    <x-auth.container>
        <x-slot name="logo">
            <a href="{{ route('home') }}">
                <x-logo.900 class="h-20" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth.validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-input.label for="password" :value="__('Password')" />

                <x-input.text id="password" class="mt-1 block w-full" type="password" name="password" required
                              autocomplete="current-password" />
            </div>

            <div class="mt-4 flex justify-end">
                <x-button>
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>
    </x-auth.container>
</x-auth-layout>
