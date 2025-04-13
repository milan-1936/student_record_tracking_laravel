<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        {{-- CDN link of tailwindcss --}}
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

        {{-- CDN link of remixicon --}}
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

        <!-- Favicon -->
        {{-- <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png"> --}}

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
       
    </head>
    <body class="max-w-7xl mx-auto">
        <div class="flex">
            @include('dashboard.sidenav')
            <div class="flex-1">
                
            </div>
        </div>
    </body>
</html>
