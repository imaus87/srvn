<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SRVN Dash </title>

    @vite(['resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <livewire:styles />

    <script defer src="https://unpkg.com/@alpinejs/ui@3.10.3-beta.2/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/@alpinejs/focus@3.10.3/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
</head>

<body class="antialiased font-sans text-stone-800 bg-[#f3f3f3] h-screen">
    <div id="app">
        <x-navbar />
        <main class="px-6 py-9 bg-stone-800 text-stone-100 h-screen">
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
