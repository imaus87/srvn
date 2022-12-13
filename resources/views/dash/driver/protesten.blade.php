<div>
    <h1 class="mb-9 text-2xl font-semibold">
        Protesten
    </h1>


    <h2 class="text-lg font-semibold mb-6">Protest Indienen</h2>

    <div class="grid grid-cols-4 gap-3  font-oxanium mb-3">
        <button class="rounded-md shadow-md py-6 px-9 bg-white flex justify-center items-center space-x-3 ring ring-transparent hover:ring-srvn-orange/75">
            <img src="../icons/fpro-icon.png" alt="fpro-logo" class="h-8">
            <span class="font-medium uppercase">NK Formula Pro</span>
        </button>
        <button class="rounded-md shadow-md py-6 px-9 bg-white flex justify-center items-center space-x-3 ring ring-transparent hover:ring-srvn-orange/75">
            <img src="../icons/gt3-icon.png" alt="gt3-logo" class="h-8">
            <span class="font-medium uppercase">NK GT3</span>
        </button>
        <button class="rounded-md shadow-md py-6 px-9 bg-white flex justify-center items-center space-x-3 ring ring-transparent hover:ring-srvn-orange/75">
            <img src="../icons/enduro-icon.png" alt="enduro-logo" class="h-8">
            <span class="font-medium uppercase">NK Enduro</span>
        </button>
        <button class="rounded-md shadow-md py-6 px-9 bg-white flex justify-center items-center space-x-3 ring ring-transparent hover:ring-srvn-orange/75">
            <img src="../icons/dtcr-icon.png" alt="dtcr-logo" class="h-8">
            <span class="font-medium uppercase">NK DTCR</span>
        </button>
    </div>

    <div class="flex space-x-3 mb-6">
        <div class="w-full">
            <x-input.label for="event" value="Evenement"/>
            <select name="event" id="event" class="rounded w-full">
                <option value="" disabled selected hidden>Selecteer een Evenement</option>
                <option value="event1">Donnington</option>
                <option value="event2">Hockenheimring</option>
                <option value="event3">Monaco</option>
                <option value="event4">Spa-Francorchamps</option>
                <option value="event5">Bahrain</option>
                <option value="event6">Monza</option>
            </select>
        </div>
        <div class="w-full">
            <x-input.label for="split" value="Split"/>
            <select name="split" id="split" class="rounded w-full">
                <option value="" disabled selected hidden>Selecteer een Split</option>
                <option value="split1">Split 1</option>
                <option value="split2">Split 2</option>
                <option value="split3">Split 3</option>
            </select>
        </div>
        <div class="w-full">
            <x-input.label for="race" value="Sessie"/>
            <select name="race" id="race" class="rounded w-full">
                <option value="" disabled selected hidden>Selecteer een Sessie</option>
                <option value="practice">Practice / Warm-up</option>
                <option value="qualli">Kwalificatie</option>
                <option value="race1">Race 1</option>
                <option value="race2">Race 2</option>
                <option value="algemeen">Algemeen</option>
            </select>
        </div>
    </div>

    <div class="w-full rounded-md shadow-md bg-white py-6 mb-9">
        <div class="mx-9 mb-6">
            <h3 class=" font-semibold text-lg mb-3">
                Tijdstip incident <span class="text-srvn-orange">*</span>
            </h3>
            <p>
                Op welk tijdstip in de replay kunnen we het incident terugvinden? ("Tijdstip" rechtsonder in het replay-scherm. Gebruik hiervoor de SERVER REPLAY vanuit TeamSpeak -> Kanaal Wedstrijdleiding & Serverbeheer -> Rechtermuisknop -> Open File Browser)
            </p>
            <img src="/img/protest-tijd-voorbeeld.png" alt="protest tijd voorbeeld" class="w-full py-3">
            <x-input.label for="incident-time" value="Tijdstip incident"/>
            <x-input id="incident-time" class="w-full mt-1"/>
        </div>

        <div class="w-full h-[2px] bg-neutral-100 mb-6"></div>

        <div class="mx-9 mb-6">
            <h3 class=" font-semibold text-lg mb-3">
                Betrokken deelnemers <span class="text-srvn-orange">*</span>
            </h3>
            <p class="mb-3">
                Welke deelnemers (behalve jijzelf) zijn er direct bij het incident betrokken?
            </p>
                <x-input.label for="incident-drivers" value="Betrokken deelnemers"/>
                <x-input id="incident-drivers" class="w-full mt-1"/>

        </div>

        <div class="w-full h-[2px] bg-neutral-100 mb-6"></div>

        <div class="mx-9 mb-6">
            <h3 class=" font-semibold text-lg mb-3">
                Omschrijving incident
            </h3>
            <p class="mb-3">
                Bij voorkeur verwijzing naar ARR-artikel en/of korte omschrijving
            </p>
            <x-input.label for="incident-desc" value="Omscrijving incident"/>
            <x-input id="incident-desc" class="w-full mt-1"/>

        </div>

        <div class="w-full h-[2px] bg-neutral-100 mb-6"></div>

        <div class="flex justify-end mx-9">
            <x-button class="">
                Insturen
            </x-button>
        </div>
    </div>
    {{-- <h2 class="text-lg font-semibold mt-9">Protest Uitslagen</h2> --}}
</div>
