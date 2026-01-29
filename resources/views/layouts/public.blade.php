<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Smart Service') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }
    </style>
</head>

<body class="antialiased bg-gray-50 text-gray-900 flex flex-col min-h-screen">

    <!-- Navigation -->
    <nav class="bg-white/90 backdrop-blur-xl sticky top-0 z-50 border-b border-gray-100 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center">
                    <a href="/" class="flex-shrink-0 flex items-center gap-2 group">
                        <div class="w-10 h-10 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-indigo-200 group-hover:scale-105 transition-transform">S</div>
                        <span class="font-bold text-2xl text-gray-900 tracking-tight">Smart<span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">Service</span></span>
                    </a>
                </div>
                <div class="hidden md:flex space-x-8">
                    @foreach([
                    ['name' => 'Home', 'url' => '/'],
                    ['name' => 'Services', 'url' => route('services.index')],
                    ['name' => 'About Us', 'url' => '#'],
                    ['name' => 'Contact', 'url' => '#'],
                    ] as $link)
                    <a href="{{ $link['url'] }}" class="relative text-gray-600 hover:text-indigo-600 font-medium transition duration-300 group">
                        {{ $link['name'] }}
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    @endforeach
                </div>
                <div class="flex items-center gap-4">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="font-medium text-gray-600 hover:text-gray-900 transition">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="font-medium text-gray-600 hover:text-gray-900 transition">Log in</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="px-6 py-2.5 bg-gray-900 hover:bg-gray-800 text-white font-medium rounded-full transition shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">Get Started</a>
                    @endif
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-black text-gray-400 py-12 mt-auto border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <span class="text-2xl font-bold text-white tracking-tight">Smart<span class="text-indigo-500">Service</span></span>
                    <p class="mt-2 text-sm">© 2024 All rights reserved.</p>
                </div>
                <div class="flex space-x-8">
                    <a href="#" class="hover:text-white transition duration-300">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition duration-300">Terms of Service</a>
                    <a href="#" class="hover:text-white transition duration-300">Support</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>