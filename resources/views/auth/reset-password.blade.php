<x-auth-layout>
    <x-auth.container>
        <x-slot name="logo">
            <x-auth.header />
        </x-slot>

        <p class="mt-2 text-neutral-800">
            Vul je nieuwe wachtwoord in voor het account met email:
            <span class="font-semibold text-neutral-900">
                {{ $request->email }}
            </span>
        </p>

        <!-- Validation Errors -->
        <x-auth.validation-errors class="mb-3"
                                  :errors="$errors" />

        <form method="POST"
              action="{{ route('password.update') }}"
              class="space-y-3">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden"
                   name="token"
                   value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <x-input.label for="email"
                           :value="__('Emailadres')"
                           class="hidden" />

            <x-input.text id="email"
                          class="hidden w-full"
                          type="email"
                          name="email"
                          :value="old('email', $request->email)"
                          placeholder="Emailadres"
                          required />


            <!-- Password -->
            <x-input.label for="password"
                           :value="__('Wachtwoord')"
                           class="hidden" />

            <x-input.text id="password"
                          class="block w-full"
                          type="password"
                          name="password"
                          placeholder="Wachtwoord"
                          required
                          autofocus />

            <!-- Confirm Password -->
            {{-- <x-input.label for="password_confirmation"
                            :value="__('Bevestig wachtwoord')"
                            class="hidden" />

            <x-input.text id="password_confirmation"
                          class="block w-full"
                          type="password"
                          name="password_confirmation"
                          placeholder="Bevestig wachtwoord"
                          required /> --}}

            <x-auth.button-container>
                <div class="pt-6 md:pt-0">
                    <x-link-auth href="{{ route('login') }}">
                        {{ __('Terug naar inloggen?') }}
                    </x-link>
                </div>

                <x-button>
                    {{ __('Stel opnieuw in') }}
                </x-button>
            </x-auth.button-container>
        </form>
    </x-auth.container>
</x-auth-layout>
