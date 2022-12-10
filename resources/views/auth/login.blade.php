<x-auth-layout>
    <x-auth.container class="font-medium">
        <x-slot name="logo">
            <x-auth.header />
        </x-slot>

        <!-- Session Status -->
        <x-auth.session-status class="mb-3"
                               :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth.validation-errors class="mb-3"
                                  :errors="$errors" />

        <form method="POST"
              action="{{ route('login') }}"
              class="space-y-6">
            @csrf

            <!-- Email Address -->
                <x-input.label for="email"
                               :value="__('Emailadres')"
                               class="hidden" />

                <x-input.text id="email"
                              class="block w-full"
                              type="email"
                              name="email"
                              :value="old('email')"
                              required
                              placeholder="Emailadres"
                              autofocus />

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
                              placeholder="Wachtwoord" />

            <x-auth.button-container>
                @if (Route::has('password.request'))
                    <x-link href="{{ route('password.request') }}">
                        {{ __('Wachtwoord vergeten?') }}
                    </x-link>
                @endif

                <x-button>
                    {{ __('Inloggen') }}
                </x-button>
            </x-auth.button-container>
        </form>
        <div class="mt-9 border-t border-neutral-300 text-center">
            @if (Route::has('register'))
                <div class="mt-6">
                    <x-link href="{{ route('register') }}">
                        {{ __('Nog geen account?') }}
                    </x-link>
                </div>
            @endif
        </div>
    </x-auth.container>
</x-auth-layout>
