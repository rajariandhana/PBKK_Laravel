<html class="h-full bg-gray-100">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>

<body class="h-full">
    <div class="min-h-full">
        <x-navbar></x-navbar>

        <x-header>{{$title}}</x-header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>
    @livewireScripts
</body>

</html>
