<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Mijn SRVN</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">

    <livewire:styles />
</head>

<body class="dark antialiased">
    <div id="app"
         class="bg-srvn-gray font-sans text-neutral-800 dark:bg-neutral-900 dark:text-neutral-100">

        <header class="fixed w-full">
            <x-dash.navbar.desktop />
        </header>

        <div class="container mx-auto grid h-screen grid-cols-[320px_1fr] pt-25">
            <aside class="fixed col-start-1 h-full w-80">
                <x-dash.sidebar />
            </aside>
            <main class="col-start-2 h-full overflow-auto">
                {{ $slot }}
            </main>
        </div>

    </div>

    <livewire:scripts />
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
            data-turbo-eval="false"></script>

</body>

</html>
