<x-auth-layout>
    <x-auth.container>
        <x-slot name="logo">
            <x-auth.header />
        </x-slot>

        <div class="mt-6 text-neutral-800">
            Je bent er bijna! <span class="font-semibold text-neutral-900">Klik op de knop hieronder en ga naar je email</span> om je account registratie af te ronden.
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-3 text-sm font-medium text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <x-auth.button-container>
            <form method="POST"
                  action="{{ route('logout') }}"
                  class="mt-6 flex items-center lg:mt-0">
                @csrf
                <button type="submit"
                        class="text-sm font-medium decoration-1 hover:underline">
                    {{ __('Later afronden?') }}
                </button>
            </form>

            <form method="POST"
                  action="{{ route('verification.send') }}"
                  class="flex flex-col-reverse">
                @csrf

                <x-button>
                    {{ __('Verstuur opnieuw') }}
                </x-button>
            </form>

        </x-auth.button-container>
    </x-auth.container>
</x-auth-layout>
