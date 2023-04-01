<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .loginbackgrn{
                background-image: url('https://img.freepik.com/free-photo/present-box-scissors-snags-letters_23-2147966098.jpg?size=626&ext=jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }
        
            .font-sans {
                /* Add any additional styling for the login container here */
            }
        </style>
        
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased loginbackgrn" style="background-image: url('https://img.freepik.com/free-photo/present-box-scissors-snags-letters_23-2147966098.jpg?size=626&ext=jpg')">
            {{ $slot }}
        </div>
    </body>
</html>
