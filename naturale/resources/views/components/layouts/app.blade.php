<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <script>
        (function() {
            const theme = localStorage.getItem('theme') || 'light';
            if (theme === 'dark') document.documentElement.classList.add('dark');
            // Set initial icon positions before Alpine loads
            document.documentElement.setAttribute('data-theme', theme);
        })();
    </script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="/media/favicon.ico" />

    <title>{{ config('app.name', 'Laravel') }} - {{ $title }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased  bg-[var(--page)] ">
    <div class="flex flex-col min-h-screen">
        <livewire:naturale.components.navigation />

        <!-- Page Content -->
        <main class="flex-grow ">
            {{ $slot }}
        </main>

        <livewire:naturale.components.footer />
    </div>
</body>

</html>
