<x-auth-layout>
    <div class="mx-auto grid sm:grid-cols-2">

        {{-- Selling Points Section --}}
        <div class="flex min-h-screen w-full items-center bg-stone-900 p-6 lg:p-12">
            <div class="relative mx-auto flex flex-col justify-center">
                <h1 class="pl-8 text-xl font-semibold text-stone-300 lg:text-2xl">
                    Doe je gordel om en wordt lid van dé<br class="hidden lg:block"> nederlandse simrace vereniging!
                </h1>

                {{-- List --}}
                <ul class="mt-9 text-sm font-medium text-stone-500 lg:text-base">
                    <li class="flex items-center pb-6">
                        <x-heroicon-s-check class="mr-3 h-5 text-srvn-orange lg:h-6" />
                        Maak 24/7 gebruik van onze raceservers
                    </li>
                    <li class="flex items-center pb-6">
                        <div class="pb-11 lg:pb-12">
                            <x-heroicon-s-check class="mr-3 h-5 text-srvn-orange lg:h-6" />
                        </div>
                        <div>
                            Doe mee aan het NK simracen:<br>
                            <span class="inline-block pt-6 font-semibold text-srvn-orange">
                                GT3, DTCR, Enduro en Formula Pro!
                            </span>
                        </div>
                    </li>
                    <li class="flex items-center pb-6">
                        <div class="pb-11 lg:pb-12">
                            <x-heroicon-s-check class="mr-3 h-5 text-srvn-orange lg:h-6" />
                        </div>
                        <div>
                            Rijdt mee in onze evenementen:<br>
                            <span class="inline-block pt-6 font-semibold text-srvn-orange">
                                de SRVN 500 en de SRVN Zomer Cup
                            </span>
                        </div>
                    </li>
                    <li class="flex items-center pb-6">
                        <x-heroicon-s-check class="mr-3 h-5 text-srvn-orange lg:h-6" />
                        Krijg je eigen auto in de mods van SRVN
                    </li>
                    <li class="flex items-center pb-6">
                        <div class="pb-11 lg:pb-12">
                            <x-heroicon-s-check class="mr-3 h-5 text-srvn-orange lg:h-6" />
                        </div>
                        <div>
                            Kom naar de Algemene Ledenvergadering<br class="hidden lg:block">
                            <span class="inline-block pt-6">
                                en ga mee karten!
                            </span>
                        </div>
                    </li>
                </ul>

                {{-- Price Tag --}}
                <div class="absolute -right-2 top-48 hidden h-32 w-min rotate-6 flex-col items-center justify-between rounded-xl border-4 border-double border-stone-900 bg-srvn-gray p-3 shadow-2xl shadow-srvn-gray/20 lg:flex">
                    <div class="flex items-center justify-center rounded-full shadow-inner shadow-srvn-gray/20">
                        <div class="h-4 w-4 rounded-full bg-stone-900"></div>
                    </div>
                    <div class="font-smooch flex flex-col items-center justify-end">
                        <p class="-mb-2 text-3xl font-bold text-srvn-orange">
                            €25,-
                        </p>
                        <p class="mb-2 text-lg font-semibold text-stone-900">
                            per jaar
                        </p>
                    </div>
                </div>

                {{-- Price Tag Mobile --}}
                <a href="#register">
                  <div class="mt-3 ml-6 flex items-center space-x-6 lg:hidden">
                      <div class="flex h-16 w-52 items-center rounded-xl border-4 border-double border-stone-900 bg-srvn-gray p-3 shadow-2xl shadow-srvn-gray/20">
                          <div class="flex shrink items-center justify-center rounded-full shadow-inner shadow-srvn-gray/20">
                              <div class="h-4 w-4 rounded-full bg-stone-900"></div>
                          </div>
                          <div class="font-smooch mt-0.5 flex grow items-center justify-center space-x-2">
                              <p class="text-3xl font-bold text-srvn-orange">
                                  €25,-
                              </p>
                              <p class="text-lg font-semibold text-stone-900">
                                  per jaar
                              </p>
                          </div>
                      </div>
                      <div>
                          <x-heroicon-o-chevron-double-down class="h-10 animate-bounce text-srvn-orange" />
                      </div>
                  </div>
                </a>
            </div>
        </div>

        {{-- Auth Section --}}
        <x-auth.container class="pt-12 pb-3 lg:p-12" id="register">
            <x-slot name="logo">
                <a href="{{ route('home') }}">
                    <x-logo.900 class="h-12" />
                </a>
            </x-slot>
            <p class="text-center font-semibold text-srvn-orange">
                Simrace Vereniging Nederland
            </p>

            <!-- Validation Errors -->
            <x-auth.validation-errors class="mb-3"
                                      :errors="$errors" />

            {{-- Form --}}
            <form method="POST"
                  action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mt-9">
                    <x-input.label for="name"
                                   :value="__('Naam')"
                                   class="hidden" />
                    <x-input.text id="name"
                                  class="mt-1 block w-full"
                                  type="text"
                                  name="name"
                                  :value="old('name')"
                                  placeholder="Naam"
                                  required
                                  autofocus />
                </div>

                <!-- Email Address -->
                <div class="mt-6">
                    <x-input.label for="email"
                                   :value="__('Emailadres')"
                                   class="hidden" />
                    <x-input.text id="email"
                                  class="mt-1 block w-full"
                                  type="email"
                                  name="email"
                                  :value="old('email')"
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
                                  autocomplete="new-password" />
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

                {{-- Buttons --}}
                <x-auth.button-container>
                    <x-link href="{{ route('login') }}">
                        {{ __('Terug naar inloggen?') }}
                    </x-link>
                    <x-button class="w-full sm:w-auto">
                        {{ __('Account aanmaken') }}
                    </x-button>
                </x-auth.button-container>

                {{-- Footnote --}}
                <div class="mt-9 border-t border-stone-300">
                    <p class="mt-6 text-xs text-stone-500">
                        Door verder te gaan, ga je akkoord met de
                        <a href="#"
                           class="font-semibold text-srvn-orange hover:underline">
                            Algemene Voorwaarden</a>.
                        Ook verklaar je
                        <span class="font-semibold text-srvn-orange">
                            18 jaar
                        </span>
                        of ouder te zijn,
                        <span class="font-semibold text-srvn-orange">
                            of
                        </span>
                        heb je toestemming van je ouders om je aan te melden bij SRVN.
                    </p>
                </div>
            </form>
        </x-auth.container>
    </div>
</x-auth-layout>
