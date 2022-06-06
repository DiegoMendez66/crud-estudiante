<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') Estudiantes</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header ?? '' }}
                </div>
            </header>
            <nav class="h-16 flex justify-center py-4 px-16">
                <a href=" {{ route('estudiantes.index') }}" class="border border-blue-500 rounded px-4 pt-2 h-10 bg-white font-bold text-blue-500 mx-2">Listado de estudiantes</a>
                <a href=" {{ route('crear') }}" class="text-white rounded px-4 pt-2 h-10 bg-blue-500 font-bold hover:bg-blue-700">CREAR</a>
            </nav>

            <!-- Page Content -->
            <main class="p-16 flex justify-center">
                @yield('content')
            </main>
        </div>
    </body>
</html>
