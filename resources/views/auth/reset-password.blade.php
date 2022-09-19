<x-auth-layout>
    <x-auth.container>
        <x-slot name="logo">
            <a href="{{ route('home') }}">
                <x-srvn-stone class="h-12" />
            </a>
        </x-slot>

        <h1 class="text-center font-semibold text-srvn-orange">
            Simrace Vereniging Nederland
        </h1>

        <p class="mt-9 text-sm text-stone-600">
            Vul je nieuwe wachtwoord in voor het account met email:
            <span class="font-semibold text-stone-800">
              {{ $request->email }}
            </span>
        </p>

        <!-- Validation Errors -->
        <x-auth.validation-errors class="mb-3"
                                  :errors="$errors" />

        <form method="POST"
              action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden"
                   name="token"
                   value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div class="mt-6">
                <x-input.label for="email"
                               :value="__('Emailadres')"
                               class="hidden" />

                <x-input.text id="email"
                              class="hidden mt-1 w-full"
                              type="email"
                              name="email"
                              :value="old('email', $request->email)"
                              placeholder="Emailadres"
                              required />

            </div>

            <!-- Password -->
            <div class="mt-6">
                <x-input.label for="password"
                               :value="__('Wachtwoord')"
                               class="hidden" />

                <x-input.text id="password"
                              class="mt-1 block w-full"
                              type="password"
                              name="password"
                              placeholder="Wachtwoord"
                              required
                              autofocus />
            </div>

            <!-- Confirm Password -->
            <div class="mt-6">
                <x-input.label for="password_confirmation"
                               :value="__('Bevestig wachtwoord')"
                               class="hidden" />

                <x-input.text id="password_confirmation"
                              class="mt-1 block w-full"
                              type="password"
                              name="password_confirmation"
                              placeholder="Bevestig wachtwoord"
                              required />
            </div>

            <x-auth.button-container>
                <x-link href="{{ route('login') }}">
                    {{ __('Terug naar inloggen?') }}
                </x-link>
                <x-button>
                    {{ __('Stel opnieuw in') }}
                </x-button>
            </x-auth.button-container>
        </form>
    </x-auth.container>
</x-auth-layout>
