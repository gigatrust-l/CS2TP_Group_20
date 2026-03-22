<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="icon" type="image/x-icon" href="/media/media_webp/favicon.ico" />
    <!--This is to link google fonts-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/navbar_style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Optional: per-page extra styles --}}
    {{ $styles ?? '' }}
</head>

<body style="background: var(--page)">
    @include('components/nav_bar_customer')

    <div class="w-full">
        {{ $slot }}
    </div>


    @include('components/footer')

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function applyTheme(theme) {
            const sun = document.getElementById('icon-sun');
            const moon = document.getElementById('icon-moon');
            const iconColor = theme === 'dark' ? '#ffffff' : '#000000';

            sun.style.stroke = iconColor;
            moon.style.stroke = iconColor;

            if (theme === 'dark') {
                document.documentElement.classList.add('dark');
                sun.style.transform = 'translate(-50%, calc(-50% + 40px))';
                moon.style.transform = 'translate(-50%, -50%)';
            } else {
                document.documentElement.classList.remove('dark');
                sun.style.transform = 'translate(-50%, -50%)';
                moon.style.transform = 'translate(-50%, calc(-50% + 40px))';
            }

            document.documentElement.setAttribute('data-theme', theme);
            document.documentElement.setAttribute('data-bs-theme', theme);
            localStorage.theme = theme;
        }

        document.addEventListener('DOMContentLoaded', () => {
            const saved = localStorage.theme === 'dark' ? 'dark' : 'light';
            applyTheme(saved);

            document.getElementById('theme-toggle').addEventListener('click', () => {
                const current = localStorage.theme === 'dark' ? 'dark' : 'light';
                applyTheme(current === 'dark' ? 'light' : 'dark');
            });
        });
    </script>

    {{-- Optional: per-page extra scripts --}}
    {{ $scripts ?? '' }}
</body>

</html>
