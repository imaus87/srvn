<x-auth-layout>
    <x-auth.container>
        <x-slot name="logo">
            <x-auth.header />
        </x-slot>

        <p class="mt-6 text-neutral-800">
            {{-- TZT AANPASSEN --}}
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </p>

        <!-- Validation Errors -->
        <x-auth.validation-errors class="mb-4" :errors="$errors" />

        <form method="POST"
              action="{{ route('password.confirm') }}"
              class="space-y-6">
            @csrf

            <!-- Password -->
            <x-input.label for="password"
                           :value="__('Wachtwoord')"
                           class="hidden" />

            <x-input.text id="password"
                          class="block w-full"
                          type="password"
                          name="password"
                          required
                          autocomplete="current-password"
                          placeholder="Wachtwoord"
                          autofocus />

            {{-- TZT AANPASSEN --}}
            <div class="mt-4 flex justify-end">
                <x-button>
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>
    </x-auth.container>
</x-auth-layout>
