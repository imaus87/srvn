<x-auth-layout>
    <div class="mx-auto grid grid-cols-1 lg:grid-cols-2">

        <section class="hidden flex-col items-center justify-center bg-neutral-900 p-9 text-neutral-300 lg:flex">
            <nav class="xl:mt-12 flex items-center justify-center overflow-hidden">
                <ul class="grid grid-cols-1 gap-3 text-lg">
                    <li class="max-w-xl space-y-3 rounded-md bg-neutral-500/5 p-6 shadow-md">
                        <div class="flex items-center space-x-3">
                            <x-heroicon-s-trophy class="h-7 w-7" />
                            <x-h4>
                                Officiël kampioenschap
                            </x-h4>
                        </div>
                        <p class="ml-10 text-neutral-500">
                            Rijd twee maal per jaar mee in het officiël nederlands kampioenschap simracen.
                        </p>
                    </li>
                    <li class="max-w-xl space-y-3 rounded-md bg-neutral-500/5 p-6 shadow-md">
                        <div class="flex items-center space-x-3">
                            <x-heroicon-s-user-group class="h-7 w-7" />
                            <x-h4>
                                Winter- en zomerstop
                            </x-h4>
                        </div>
                        <p class="ml-10 text-neutral-500">
                            Met de winter en somer series tussen de seizoenen in verveel je je geen moment!
                        </p>
                    </li>
                    <li class="max-w-xl space-y-3 rounded-md bg-neutral-500/5 p-6 shadow-md">
                        <div class="flex items-center space-x-3">
                            <x-heroicon-s-paint-brush class="h-7 w-7" />
                            <x-h4>
                                Eigen liveries
                            </x-h4>
                        </div>
                        <p class="ml-10 text-neutral-500">
                            Ontwerp en rijd rond met je eigen gemaakte livery of gebruik er een van ons.
                        </p>
                    </li>
                    <li class="max-w-xl space-y-3 rounded-md bg-neutral-500/5 p-6 shadow-md">
                        <div class="flex items-center space-x-3">
                            <x-heroicon-s-user-circle class="h-7 w-7" />
                            <x-h4>
                                Gratis account
                            </x-h4>
                        </div>
                        <p class="ml-10 text-neutral-500">
                            Schrijf je nu in voor een gratis account en verken de wonderen wereld van het simracen!
                        </p>
                    </li>
                </ul>
            </nav>
            <div class="mt-6 hidden items-center justify-center xl:flex">
                <x-link-primary href="{{ route('news') }}"
                                class="uppercase">
                    Bekijk hoe SRVN werkt
                </x-link-primary>
                <x-heroicon-o-chevron-double-right class="h-5 text-srvn-orange" />
            </div>
        </section>

        {{-- Selling Points Section --}}
        <div class="hidden min-h-screen w-full items-center bg-neutral-900 p-6 lg:p-12">
            <div class="relative mx-auto flex flex-col justify-center">
                <h1 class="px-8 text-2xl font-semibold text-neutral-300 lg:text-3xl">
                    Doe je gordel om en wordt lid van dé<br class="hidden lg:block"> nederlandse simrace vereniging!
                </h1>

                {{-- List --}}
                <ul class="mt-9 text-base font-medium text-neutral-500 lg:text-lg">
                    <li class="flex items-center pb-6">
                        <div class="mt-1">
                            <x-heroicon-s-check class="mr-3 h-6 text-srvn-orange lg:h-7" />
                        </div>
                        Maak 24/7 gebruik van onze raceservers
                    </li>
                    <li class="flex items-center pb-6">
                        <div class="pb-11 lg:pb-12">
                            <x-heroicon-s-check class="mr-3 h-6 text-srvn-orange lg:h-7" />
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
                            <x-heroicon-s-check class="mr-3 h-6 text-srvn-orange lg:h-7" />
                        </div>
                        <div>
                            Rijdt mee in onze evenementen:<br>
                            <span class="inline-block pt-6 font-semibold text-srvn-orange">
                                de SRVN 500 en de SRVN Zomer Cup
                            </span>
                        </div>
                    </li>
                    <li class="flex items-center pb-6">
                        <div class="mt-1">
                            <x-heroicon-s-check class="mr-3 h-6 text-srvn-orange lg:h-7" />
                        </div>
                        Krijg je eigen auto in de mods van SRVN
                    </li>
                    <li class="flex items-center pb-6">
                        <div class="pb-11 lg:pb-12">
                            <x-heroicon-s-check class="mr-3 h-6 text-srvn-orange lg:h-7" />
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
                <div
                     class="absolute -right-2 top-48 hidden h-32 w-min rotate-6 flex-col items-center justify-between rounded-xl border-4 border-double border-neutral-900 bg-srvn-gray p-3 shadow-2xl shadow-srvn-gray/20 lg:flex">
                    <div class="flex items-center justify-center rounded-full shadow-inner shadow-srvn-gray/20">
                        <div class="h-4 w-4 rounded-full bg-neutral-900"></div>
                    </div>
                    <div class="flex flex-col items-center justify-end font-smooch">
                        <p class="-mb-2 text-3xl font-bold text-srvn-orange">
                            €25,-
                        </p>
                        <p class="mb-2 text-lg font-semibold text-neutral-900">
                            per jaar
                        </p>
                    </div>
                </div>

                {{-- Price Tag Mobile --}}
                <a href="#register">
                    <div class="mt-3 ml-6 flex items-center space-x-6 lg:hidden">
                        <div
                             class="flex h-16 w-52 items-center rounded-xl border-4 border-double border-neutral-900 bg-srvn-gray p-3 shadow-2xl shadow-srvn-gray/20">
                            <div
                                 class="flex shrink items-center justify-center rounded-full shadow-inner shadow-srvn-gray/20">
                                <div class="h-4 w-4 rounded-full bg-neutral-900"></div>
                            </div>
                            <div class="mt-0.5 flex grow items-center justify-center space-x-2 font-smooch">
                                <p class="text-3xl font-bold text-srvn-orange">
                                    €25,-
                                </p>
                                <p class="text-lg font-semibold text-neutral-900">
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
        <x-auth.container class="" id="register">
            <x-slot name="logo">
                <x-auth.header />
            </x-slot>

            <!-- Validation Errors -->
            <x-auth.validation-errors class="mb-3"
                                      :errors="$errors" />

            {{-- Form --}}
            <form method="POST"
                  action="{{ route('register') }}"
                  class="space-y-3">
                @csrf

                <!-- Name -->
                {{-- <div class="flex space-x-3">
                    <div class="w-full">
                        <x-input.label for="first_name"
                                       :value="__('Voornaam')"
                                       class="hidden" />
                        <x-input.text id="first_name"
                                      class="block w-full"
                                      type="text"
                                      name="first_name"
                                      :value="old('first_name')"
                                      placeholder="Voornaam"
                                      required
                                      autofocus />
                    </div>

                    <div class="w-full">
                        <x-input.label for="last_name"
                                       :value="__('Achternaam')"
                                       class="hidden" />
                        <x-input.text id="last_name"
                                      class="block w-full"
                                      type="text"
                                      name="last_name"
                                      :value="old('last_name')"
                                      placeholder="Achternaam"
                                      required />
                    </div>
                </div> --}}

                <!-- Email Address -->
                <x-input.label for="email"
                               :value="__('Emailadres')"
                               class="hidden" />
                <x-input.text id="email"
                              class="block w-full"
                              type="email"
                              name="email"
                              :value="old('email')"
                              placeholder="Emailadres"
                              required
                              autofocus />

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
                              autocomplete="new-password" />

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

                {{-- Buttons --}}
                <x-auth.button-container>
                    <div class="pt-6 md:pt-0">
                        <x-link-auth href="{{ route('login') }}">
                            {{ __('Terug naar inloggen?') }}
                            </x-link>
                    </div>
                    <x-button class="w-full sm:w-auto">
                        {{ __('Account aanmaken') }}
                    </x-button>
                </x-auth.button-container>

            </form>

            {{-- Footnote --}}
            <div class="mt-9 border-t border-neutral-300">
                <p class="mt-6 text-sm text-neutral-500">
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

        </x-auth.container>
    </div>
</x-auth-layout>
