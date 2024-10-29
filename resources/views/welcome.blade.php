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
            <div class="w-full px-4 py-10 mx-auto sm:px-6 lg:px8">

                    <livewire:hero-section/>
                    <livewire:featured-doctor/>
                    <livewire:specialist-cards/>
                    <livewire:featured-articles/>
            </div>
        </main>
    </body>
</html>
