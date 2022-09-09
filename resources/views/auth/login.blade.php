<x-auth-layout>
    <x-auth.container class="font-medium">
        <x-slot name="logo">
            <a href="/">
                <x-srvn-stone class="h-12" />
            </a>
        </x-slot>

        <p class="text-center font-semibold text-[#ff460d]">
            Simrace Vereniging Nederland
        </p>

        <!-- Session Status -->
        <x-auth.session-status class="mb-3" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth.validation-errors class="mb-3" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mt-9">
                <x-input.label for="email"
                               :value="__('Email')"
                               class="hidden" />

                <x-input.text id="email"
                              class="block w-full"
                              type="email"
                              name="email"
                              :value="old('email')"
                              required
                              placeholder="Emailadres"
                              autofocus />
            </div>

            <!-- Password -->
            <div class="mt-6">
                <x-input.label for="password"
                               :value="__('Password')"
                               class="hidden" />

                <x-input.text id="password"
                              class="block w-full"
                              type="password"
                              name="password"
                              required
                              autocomplete="current-password"
                              placeholder="Wachtwoord" />
            </div>

            <div class="mt-6 flex items-center justify-between">
                @if (Route::has('password.request'))
                    <span class="text-sm decoration-1 hover:underline">
                        <a href="{{ route('password.request') }}">
                            {{ __('Wachtwoord vergeten?') }}
                        </a>
                    </span>
                @endif

                <x-button class="ml-3 text-[#f3f3f3]">
                    {{ __('Inloggen') }}
                </x-button>
            </div>
        </form>
        <div class="mt-9 border-t border-stone-300">
            @if (Route::has('register'))
                <p class="mt-6 text-center text-sm decoration-1 hover:underline">
                    <a href="{{ route('register') }}">
                        {{ __('Nog geen account?') }}
                    </a>
                </p>
            @endif
        </div>
    </x-auth.container>
</x-auth-layout>
