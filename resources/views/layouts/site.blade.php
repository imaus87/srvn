<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SimRace Vereniging Nederland</title>

    @vite(['resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
          href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">

    <livewire:styles />
</head>

<body x-data="{ showBar: false, navOpen: false }"
      x-bind:class="navOpen && 'overflow-hidden fixed w-full'"
      class="antialiased fixed h-screen w-screen bg-srvn-gray font-sans text-neutral-800">
    <div id="app">

        <header>
          <div class="block lg:hidden">
              <x-navbar.mobile />
          </div>
          <div class="hidden lg:block">
              <x-navbar.desktop />
          </div>
        </header>

        <main class="h-full overflow-auto px-6 pb-9 pt-23 lg:pt-9">
            <div class="mx-auto max-w-7xl">
                {{ $slot }}
            </div>
        </main>

    </div>

    <livewire:scripts />
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
            data-turbo-eval="false"></script>
</body>

</html>
