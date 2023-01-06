<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SimRace Vereniging Nederland</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap"
          rel="stylesheet">

    <livewire:styles />
</head>

<body x-data="{ showBar: false, navOpen: false }"
      x-bind:class="navOpen && '!overflow-hidden !fixed !w-full'"
      class="min-h-screen w-screen bg-srvn-gray font-titilliumweb text-neutral-800 antialiased">
    <div id="app">

        <header>
            <div class="block lg:hidden">
                <x-navbar.mobile />
            </div>
            <div class="hidden lg:block">
                <x-navbar.desktop />
            </div>
        </header>

        <main class="h-full pb-6 pt-23 lg:pt-9">

            {{ $slot }}

        </main>

        <Footer>
            <div class="bg-neutral-900 text-neutral-300">
                <div class="max-w-7xl px-3 py-9 md:px-6 xl:ml-auto">

                    <div class="mb-9">
                        <x-news-signup />
                    </div>

                    <x-footer />
                </div>
            </div>
        </Footer>

    </div>

    <livewire:scripts />
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
            data-turbo-eval="false"></script>

</body>

</html>
