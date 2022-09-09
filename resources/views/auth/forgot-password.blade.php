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

        <div class="mt-6 text-sm text-gray-600">
            {{ __('Vul je emailadres in om je wachtwoord opnieuw in te stellen.') }}
        </div>

        <!-- Session Status -->
        <x-auth.session-status class="mb-3" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth.validation-errors class="mb-3" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}" class="mt-6">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input.label for="email"
                :value="__('Email')"
                class="hidden" />

                <x-input.text id="email"
                class="mt-1 block w-full"
                type="email"
                name="email"
                :value="old('email')"
                required
                placeholder="Emailadres"
                autofocus />
            </div>

            <div class="mt-6 flex items-center justify-end">
                <x-button class="w-full">
                    {{ __('Nieuw wachtwoord aanvragen') }}
                </x-button>
            </div>
        </form>
    </x-auth.container>
</x-auth-layout>
