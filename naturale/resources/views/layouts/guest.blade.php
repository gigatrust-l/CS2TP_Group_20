<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/x-icon" href="/media/media_webp/favicon.ico" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        @include('components/head-theme-script')

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased theme-transition" style="color: var(--text);">
        
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 transition-colors duration-300" 
             style="background-color: var(--page);">
            
            <div class='max-w-32'>
                <a href="/">
                    <x-application-logo class="w-auto h-auto fill-current" style="color: var(--text);" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg border transition-colors duration-300"
                 style="background-color: var(--bg); border-color: var(--border); box-shadow: 0 4px 6px var(--shadow);">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>