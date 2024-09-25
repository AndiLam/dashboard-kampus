<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Menggunakan hasil build Vite -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/AndiLam/cdn-stai/styles-cdn.css">
    <title>@yield('title')</title>
    <!-- Path icon ke dist -->
    <link rel="icon" href="{{ asset('https://cdn.jsdelivr.net/gh/AndiLam/cdn-stai/logo.ico') }}?v=1" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css') }}">
</head>
<body class="h-screen flex overflow-hidden bg-gray-100">
    <div class="flex">
        @yield('sidebar')
    </div>
    <div class="flex-1 flex flex-col overflow-hidden">
        @include('dashLayout.header')
        <main class="flex-1 overflow-y-auto p-4 bg-white ml-0 md-64 transition-all duration-300">
            @yield('content')
        </main>
        @include('dashLayout.footer')
    </div>
    <script src="https://cdn.jsdelivr.net/gh/AndiLam/cdn-stai/script-cdn.js"></script>
</body>
</html>
