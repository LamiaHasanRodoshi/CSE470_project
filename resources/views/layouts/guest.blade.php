<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <style>
        /* body {
        margin: 0;
        padding: 0;
        background-color: #17a2b8;
        height: 100vh;
        } */
      
    </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    </head>
    <body>
        <!-- <div class="font-sans text-gray-900 antialiased"> -->
        <div class="w-[100vw] min-h-[100vh] flex flex col justify-center">  
             {{ $slot }}
        </div>
        <!-- <main></main> -->
    </body>
</html>
