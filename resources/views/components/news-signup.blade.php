<section>
    <p class="max-w-sm font-oxanium text-2xl font-semibold sm:max-w-lg sm:text-3xl">
        Klaar om dieper in de wereld van <span class="font-extrabold">sim racing</span> te duiken?
    </p>
    <form method="POST"
          action="{{ route('login') }}"
          class="space-y-6">
        @csrf
        <div class="items-center md:flex">
            <!-- Email Address -->
            <x-input.label for="email"
                           :value="__('Emailadres')"
                           class="hidden" />
            <x-input.text id="email"
                          class="mb-3 block w-full border-opacity-25 bg-neutral-900 md:mb-0 md:mr-3 md:max-w-sm"
                          type="email"
                          name="email"
                          :value="old('email')"
                          required
                          placeholder="Emailadres" />
            <x-button
                      class="w-full border-srvn-orange/40 bg-srvn-orange/90 hover:border-srvn-orange/90 hover:text-neutral-300 md:w-auto">
                {{ __('Schrijf je in voor onze nieuwsbrief!') }}
            </x-button>
        </div>
    </form>
</section>
