<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Smart Service') }} - @yield('title', 'Book Professional Services')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Design System Tokens -->
    <x-design-tokens />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased text-gray-600 bg-gray-50 flex flex-col min-h-screen overflow-x-hidden" x-data="{ mobileMenuOpen: false, residentialMenuOpen: false, commercialMenuOpen: false }">

    {{-- Top Utility Bar --}}
    <x-top-utility-bar />

    {{-- Main Navigation --}}
    <nav class="bg-white sticky top-0 z-40 border-b border-gray-200 w-full shadow-sm">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                {{-- Logo --}}
                <div class="flex items-center">
                    <a href="{{ url('/') }}" class="flex-shrink-0 flex items-center gap-2 group">
                        <div class="w-10 h-10 bg-gradient-to-br from-primary to-secondary rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-primary/20 group-hover:scale-105 transition-transform">
                            S
                        </div>
                        <span class="font-bold text-2xl text-gray-900 tracking-tight">Smart<span class="text-primary">Service</span></span>
                    </a>

                    {{-- Desktop Navigation --}}
                    <div class="hidden lg:ml-16 lg:flex lg:space-x-8">
                        <a href="{{ url('/') }}" class="inline-flex items-center px-3 pt-1 border-b-2 {{ request()->is('/') ? 'border-primary text-primary' : 'border-transparent text-gray-700 hover:text-gray-900 hover:border-gray-300' }} text-base font-medium leading-5 transition duration-150 ease-in-out">
                            Home
                        </a>

                        {{-- Residential Mega Menu --}}
                        <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                            <button class="inline-flex items-center px-3 pt-1 border-b-2 {{ request()->is('residential-services*') ? 'border-primary text-primary' : 'border-transparent text-gray-700 hover:text-gray-900 hover:border-gray-300' }} text-base font-medium leading-5 transition duration-150 ease-in-out">
                                Residential
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <x-mega-menu-residential />
                        </div>

                        {{-- Commercial Mega Menu --}}
                        <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                            <button class="inline-flex items-center px-3 pt-1 border-b-2 {{ request()->is('commercial-services*') ? 'border-secondary text-secondary' : 'border-transparent text-gray-700 hover:text-gray-900 hover:border-gray-300' }} text-base font-medium leading-5 transition duration-150 ease-in-out">
                                Commercial
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <x-mega-menu-commercial />
                        </div>

                        <a href="{{ route('how-it-works') }}" class="inline-flex items-center px-3 pt-1 border-b-2 {{ request()->routeIs('how-it-works') ? 'border-primary text-primary' : 'border-transparent text-gray-700 hover:text-gray-900 hover:border-gray-300' }} text-base font-medium leading-5 transition duration-150 ease-in-out">
                            How We Work
                        </a>
                        <a href="{{ route('about') }}" class="inline-flex items-center px-3 pt-1 border-b-2 {{ request()->routeIs('about') ? 'border-primary text-primary' : 'border-transparent text-gray-700 hover:text-gray-900 hover:border-gray-300' }} text-base font-medium leading-5 transition duration-150 ease-in-out">
                            About
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center px-3 pt-1 border-b-2 {{ request()->routeIs('contact') ? 'border-primary text-primary' : 'border-transparent text-gray-700 hover:text-gray-900 hover:border-gray-300' }} text-base font-medium leading-5 transition duration-150 ease-in-out">
                            Contact
                        </a>
                    </div>
                </div>

                {{-- Right Side CTAs --}}
                <div class="hidden lg:flex items-center space-x-4">
                    {{-- Phone Number (Prominent) --}}
                    <a href="tel:+18001234567" class="flex items-center gap-2 px-4 py-2 rounded-lg text-gray-900 font-bold text-lg hover:bg-gray-50 transition group">
                        <svg class="w-5 h-5 text-primary group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span class="whitespace-nowrap">(800) 123-4567</span>
                    </a>

                    @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900 transition">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="px-5 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-semibold rounded-lg transition">
                            Log Out
                        </button>
                    </form>
                    @else
                    <a href="{{ route('bookings.create') }}" class="px-6 py-3 bg-gradient-to-r from-primary to-secondary hover:from-primary-dark hover:to-secondary-dark text-white font-bold rounded-lg shadow-lg shadow-primary/30 transition transform hover:-translate-y-0.5 whitespace-nowrap">
                        Request Service
                    </a>
                    @endauth
                </div>

                {{-- Mobile menu button --}}
                <div class="lg:hidden flex items-center">
                    <button type="button" class="text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700" @click="mobileMenuOpen = !mobileMenuOpen">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            {{-- Mobile menu --}}
            <div class="lg:hidden" x-show="mobileMenuOpen" style="display: none;" x-cloak x-transition:enter="duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="{{ url('/') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Home</a>

                    {{-- Residential Accordion --}}
                    <div x-data="{ residentialOpen: false }">
                        <button @click="residentialOpen = !residentialOpen" class="w-full flex items-center justify-between px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                            <span>Residential</span>
                            <svg class="w-5 h-5 transform transition-transform" :class="{ 'rotate-180': residentialOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="residentialOpen" x-collapse class="pl-4 space-y-1">
                            <a href="{{ route('residential.index') }}" class="block px-3 py-2 rounded-md text-sm text-gray-600 hover:text-primary hover:bg-gray-50">All Residential Services</a>
                            <a href="{{ route('services.category', 'cleaning') }}" class="block px-3 py-2 rounded-md text-sm text-gray-600 hover:text-primary hover:bg-gray-50">Cleaning</a>
                            <a href="{{ route('services.category', 'plumbing') }}" class="block px-3 py-2 rounded-md text-sm text-gray-600 hover:text-primary hover:bg-gray-50">Plumbing</a>
                            <a href="{{ route('services.category', 'electrical') }}" class="block px-3 py-2 rounded-md text-sm text-gray-600 hover:text-primary hover:bg-gray-50">Electrical</a>
                            <a href="{{ route('services.category', 'painting') }}" class="block px-3 py-2 rounded-md text-sm text-gray-600 hover:text-primary hover:bg-gray-50">Painting</a>
                            <a href="{{ route('services.category', 'gardening') }}" class="block px-3 py-2 rounded-md text-sm text-gray-600 hover:text-primary hover:bg-gray-50">Lawn & Gardening</a>
                            <a href="{{ route('services.category', 'moving') }}" class="block px-3 py-2 rounded-md text-sm text-gray-600 hover:text-primary hover:bg-gray-50">Moving</a>
                        </div>
                    </div>

                    {{-- Commercial Accordion --}}
                    <div x-data="{ commercialOpen: false }">
                        <button @click="commercialOpen = !commercialOpen" class="w-full flex items-center justify-between px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                            <span>Commercial</span>
                            <svg class="w-5 h-5 transform transition-transform" :class="{ 'rotate-180': commercialOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="commercialOpen" x-collapse class="pl-4 space-y-1">
                            <a href="{{ route('commercial.index') }}" class="block px-3 py-2 rounded-md text-sm text-gray-600 hover:text-secondary hover:bg-gray-50">All Commercial Services</a>
                            <a href="#" class="block px-3 py-2 rounded-md text-sm text-gray-600 hover:text-secondary hover:bg-gray-50">Healthcare</a>
                            <a href="#" class="block px-3 py-2 rounded-md text-sm text-gray-600 hover:text-secondary hover:bg-gray-50">Retail</a>
                            <a href="#" class="block px-3 py-2 rounded-md text-sm text-gray-600 hover:text-secondary hover:bg-gray-50">Offices</a>
                            <a href="#" class="block px-3 py-2 rounded-md text-sm text-gray-600 hover:text-secondary hover:bg-gray-50">Restaurants</a>
                        </div>
                    </div>

                    <a href="{{ route('how-it-works') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">How We Work</a>
                    <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">About</a>
                    <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Contact</a>
                    <a href="{{ route('faq') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">FAQ</a>
                </div>
                <div class="pt-4 pb-3 border-t border-gray-200">
                    <div class="px-2 space-y-1">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Log Out</button>
                        </form>
                        @else
                        <a href="{{ route('login') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Log in</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="block px-3 py-2 rounded-md text-base font-medium bg-primary text-white hover:bg-primary-dark text-center">Get Started</a>
                        @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="section-full-width bg-gray-900 border-t border-gray-800 text-gray-300">
        <div class="section-content-contained py-16 md:py-20">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 mb-12">
                {{-- Company Info --}}
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-10 h-10 bg-gradient-to-br from-primary to-secondary rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg">S</div>
                        <span class="font-bold text-2xl text-white">Smart<span class="text-primary">Service</span></span>
                    </div>
                    <p class="text-base leading-relaxed text-gray-400 mb-6">
                        Your trusted partner for professional home services. Licensed, insured, and background-checked professionals delivering quality workmanship with a 100% satisfaction guarantee.
                    </p>
                    {{-- Trust Badges --}}
                    <div class="flex flex-wrap gap-3">
                        <div class="px-3 py-1.5 bg-trust-green/10 border border-trust-green/20 rounded-lg flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-xs font-semibold text-white">Licensed</span>
                        </div>
                        <div class="px-3 py-1.5 bg-trust-green/10 border border-trust-green/20 rounded-lg flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-xs font-semibold text-white">Insured</span>
                        </div>
                        <div class="px-3 py-1.5 bg-trust-green/10 border border-trust-green/20 rounded-lg flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-xs font-semibold text-white">10+ Years</span>
                        </div>
                    </div>
                </div>

                {{-- Services --}}
                <div>
                    <h3 class="text-sm font-bold text-white tracking-wider uppercase mb-4">Services</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('services.category', 'cleaning') }}" class="text-sm text-gray-400 hover:text-white transition">Cleaning</a></li>
                        <li><a href="{{ route('services.category', 'plumbing') }}" class="text-sm text-gray-400 hover:text-white transition">Plumbing</a></li>
                        <li><a href="{{ route('services.category', 'electrical') }}" class="text-sm text-gray-400 hover:text-white transition">Electrical</a></li>
                        <li><a href="{{ route('services.category', 'moving') }}" class="text-sm text-gray-400 hover:text-white transition">Moving</a></li>
                        <li><a href="{{ route('services.category', 'painting') }}" class="text-sm text-gray-400 hover:text-white transition">Painting</a></li>
                        <li><a href="{{ route('services.category', 'gardening') }}" class="text-sm text-gray-400 hover:text-white transition">Gardening</a></li>
                        <li><a href="{{ route('services.index') }}" class="text-sm text-primary hover:text-secondary transition font-semibold">All Services →</a></li>
                    </ul>
                </div>

                {{-- Company Links --}}
                <div>
                    <h3 class="text-sm font-bold text-white tracking-wider uppercase mb-4">Company</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('about') }}" class="text-sm text-gray-400 hover:text-white transition">About Us</a></li>
                        <li><a href="{{ route('contact') }}" class="text-sm text-gray-400 hover:text-white transition">Contact</a></li>
                        <li><a href="{{ route('faq') }}" class="text-sm text-gray-400 hover:text-white transition">FAQ</a></li>
                        <li><a href="{{ route('privacy') }}" class="text-sm text-gray-400 hover:text-white transition">Privacy Policy</a></li>
                        <li><a href="{{ route('terms') }}" class="text-sm text-gray-400 hover:text-white transition">Terms of Service</a></li>
                    </ul>
                </div>

                {{-- Contact --}}
                <div>
                    <h3 class="text-sm font-bold text-white tracking-wider uppercase mb-4">Contact Us</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="tel:+18001234567" class="flex items-start gap-2 text-sm text-gray-400 hover:text-white transition group">
                                <svg class="w-5 h-5 mt-0.5 text-primary group-hover:text-secondary transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <div>
                                    <div class="font-semibold text-white">(800) 123-4567</div>
                                    <div class="text-xs">Monday - Sunday: 7AM - 9PM</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@smartservice.com" class="flex items-start gap-2 text-sm text-gray-400 hover:text-white transition group">
                                <svg class="w-5 h-5 mt-0.5 text-primary group-hover:text-secondary transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <div class="font-semibold text-white">info@smartservice.com</div>
                                    <div class="text-xs">We reply within 24 hours</div>
                                </div>
                            </a>
                        </li>
                        <li class="flex items-start gap-2 text-sm text-gray-400">
                            <svg class="w-5 h-5 mt-0.5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div>
                                <div class="font-semibold text-white">123 Main Street</div>
                                <div class="text-xs">Your City, ST 12345</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Bottom Bar --}}
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-sm text-gray-400 mb-4 md:mb-0">&copy; {{ date('Y') }} SmartService. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition" aria-label="Facebook">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition" aria-label="Twitter">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition" aria-label="LinkedIn">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Custom Scripts Stack -->
    @stack('scripts')
</body>

</html>