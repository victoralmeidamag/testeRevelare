<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Site Title')</title>
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col min-h-screen">
    @include('components.offline.header')

    <main class="flex-grow px-[5%] py-8">
        @yield('content')
    </main>

    @include('components.offline.footer')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.5/dist/cdn.min.js" defer></script>
    @livewireScripts
</body>

</html>