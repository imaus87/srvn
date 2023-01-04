<x-auth-layout>
    <x-auth.container class="font-medium">
        <x-slot name="logo">
            <x-auth.header />
        </x-slot>

        <p class="mt-6 text-neutral-800">
            Vul het <span class="font-semibold text-neutral-900">emailadres van je SRVN account</span> in om je wachtwoord opnieuw in te stellen.
        </p>

        <!-- Session Status -->
        <x-auth.session-status class="mb-3"
                               :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth.validation-errors class="mb-3"
                                  :errors="$errors" />

        <form method="POST"
              action="{{ route('password.email') }}"
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

            <div class=" flex items-center">
                <x-button class="w-full">
                    {{ __('Nieuw wachtwoord aanvragen') }}
                </x-button>
            </div>
            @if (Route::has('login'))
                <div class="">
                    <x-link-auth href="{{ route('login') }}">
                        {{ __('Terug naar inloggen?') }}
                    </x-link>
                </div>
            @endif
        </form>
    </x-auth.container>
</x-auth-layout>
