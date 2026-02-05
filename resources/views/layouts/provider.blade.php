<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Provider Panel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-50 text-gray-900 min-h-screen flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-white border-r border-gray-200 fixed h-full z-30 hidden lg:flex flex-col">
        <div class="h-16 flex items-center justify-center border-b border-gray-100 px-6">
            <a href="{{ route('worker.dashboard') }}" class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-gradient-to-br from-teal-500 to-emerald-600 rounded-lg flex items-center justify-center text-white font-bold text-lg shadow-lg">
                    W
                </div>
                <span class="text-xl font-bold text-gray-900 tracking-tight">Worker<span class="text-teal-600">Panel</span></span>
            </a>
        </div>

        <nav class="p-4 space-y-1 overflow-y-auto flex-grow">
            <a href="{{ route('worker.dashboard') }}" class="flex items-center space-x-3 px-4 py-3 text-gray-600 rounded-xl hover:bg-teal-50 hover:text-teal-600 transition-all group {{ request()->routeIs('worker.dashboard') ? 'bg-teal-50 text-teal-600 font-bold shadow-sm' : '' }}">
                <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                </svg>
                <span>Dashboard</span>
            </a>

            <div class="pt-4 pb-2">
                <p class="px-4 text-xs font-bold text-gray-400 uppercase tracking-wider">Switch View</p>
                <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 px-4 py-2 text-gray-600 rounded-xl hover:bg-teal-50 hover:text-teal-600 transition-all group mt-1">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                    <span>Book a Service</span>
                </a>
            </div>

            <div class="pt-4 pb-2">
                <p class="px-4 text-xs font-bold text-gray-400 uppercase tracking-wider">Management</p>
            </div>

            <a href="{{ route('worker.services') }}" class="flex items-center space-x-3 px-4 py-3 text-gray-600 rounded-xl hover:bg-teal-50 hover:text-teal-600 transition-all group {{ request()->routeIs('worker.services') ? 'bg-teal-50 text-teal-600 font-bold shadow-sm' : '' }}">
                <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <span>My Services</span>
            </a>

            <a href="{{ route('worker.bookings') }}" class="flex items-center space-x-3 px-4 py-3 text-gray-600 rounded-xl hover:bg-teal-50 hover:text-teal-600 transition-all group {{ request()->routeIs('worker.bookings') ? 'bg-teal-50 text-teal-600 font-bold shadow-sm' : '' }}">
                <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <span>My Bookings</span>
            </a>

            <a href="{{ route('worker.earnings') }}" class="flex items-center space-x-3 px-4 py-3 text-gray-600 rounded-xl hover:bg-teal-50 hover:text-teal-600 transition-all group {{ request()->routeIs('worker.earnings') ? 'bg-teal-50 text-teal-600 font-bold shadow-sm' : '' }}">
                <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>My Earnings</span>
            </a>

        </nav>

        <!-- User Profile Card in Sidebar -->
        <div class="p-4 border-t border-gray-100">
            <a href="{{ route('worker.profile') }}" class="flex items-center gap-3 p-3 rounded-xl hover:bg-gray-50 transition-colors group border border-transparent hover:border-gray-100">
                <div class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-600 font-bold flex-shrink-0">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
                <div class="flex-grow overflow-hidden">
                    <p class="text-sm font-bold text-gray-900 truncate">{{ Auth::user()->name }}</p>
                    <div class="flex items-center gap-1.5 mt-0.5">
                        <span class="w-2 h-2 rounded-full {{ Auth::user()->is_active ? 'bg-green-500 animate-pulse' : 'bg-red-400' }}"></span>
                        <p class="text-xs text-gray-500 font-medium">{{ Auth::user()->is_active ? 'Available' : 'Offline' }}</p>
                    </div>
                </div>
                <svg class="w-4 h-4 text-gray-400 group-hover:text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>

            <form method="POST" action="{{ route('logout') }}" class="mt-2">
                @csrf
                <button type="submit" class="w-full flex items-center justify-center space-x-2 px-4 py-2 text-sm text-red-600 font-medium rounded-lg hover:bg-red-50 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    <span>Sign Out</span>
                </button>
            </form>
        </div>
    </aside>

    <!-- Mobile Header -->
    <div class="lg:hidden fixed w-full bg-white border-b border-gray-200 z-30 h-16 flex items-center justify-between px-4">
        <a href="{{ route('worker.dashboard') }}" class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-gradient-to-br from-teal-500 to-emerald-600 rounded-lg flex items-center justify-center text-white font-bold text-lg">W</div>
            <span class="text-xl font-bold text-gray-900">Worker<span class="text-teal-600">Panel</span></span>
        </a>
        <button class="p-2 rounded-lg bg-gray-100 text-gray-600">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <!-- Main Content -->
    <main class="flex-grow lg:ml-64 pt-16 lg:pt-0">
        <div class="p-6 md:p-8 max-w-7xl mx-auto">
            {{ $slot }}
        </div>
    </main>

</body>

</html>