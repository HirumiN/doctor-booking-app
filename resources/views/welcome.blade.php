<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <livewire:top-bar-navigation/>

        <main id="content">
            <div class="px-4 py-20 mx-auto max-w-7xl sm:px-6 lg:px8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <livewire:hero-section/>
                </div>
            </div>
        </main>
    </body>
</html>
