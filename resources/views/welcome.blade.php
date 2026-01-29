<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="SmartService - Professional home service booking platform. Connect with trusted professionals for cleaning, plumbing, electrical, and more.">
        <meta name="keywords" content="home services, booking platform, professional services, smartservice">
        <meta name="author" content="SmartService">
        
        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="SmartService - Professional Home Services">
        <meta property="og:description" content="Connect with trusted professionals for all your home service needs. Quality guaranteed, every time.">
        <meta property="og:type" content="website">
        <meta property="og:image" content="{{ asset('images/og-home.jpg') }}">
        
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <!-- Custom Styles -->
        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
            .font-display {
                font-family: 'Outfit', sans-serif;
            }
        </style>
        
        <!-- Theme Color -->
        <meta name="theme-color" content="#6366f1">
        
        <!-- Apple Touch Icon -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        
        <title>{{ config('app.name', 'SmartService') }}</title>
    </head>
    <body class="font-sans antialiased bg-gray-50 text-gray-900 min-h-screen flex flex-col">
        <!-- Skip to main content for accessibility -->
        <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-indigo-600 text-white px-4 py-2 rounded-lg z-50">
            Skip to main content
        </a>
        
        <!-- Navigation -->
        <x-navigation />

    <!-- Page Content -->

    <!-- Hero Section -->
    <div class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden bg-white">
        <!-- Abstract Background -->
        <div class="absolute inset-0 z-0 opacity-30">
            <div class="absolute top-0 right-0 -mr-20 -mt-20 w-[600px] h-[600px] bg-gradient-to-br from-indigo-100 to-purple-100 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[500px] h-[500px] bg-gradient-to-tr from-sky-100 to-blue-100 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-indigo-50 border border-indigo-100 text-indigo-700 text-sm font-semibold mb-8 animate-fade-in-up shadow-sm">
                <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                Trusted by 10,000+ Happy Customers
            </div>

            <h1 class="text-6xl md:text-8xl font-black tracking-tight text-gray-900 mb-8 leading-tight">
                Your Home, <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">Perfected.</span>
            </h1>

            <p class="mt-4 text-xl md:text-2xl text-gray-500 max-w-2xl mx-auto mb-12 font-light leading-relaxed">
                Connect with top-rated professionals for cleaning, repair, and maintenance. Reliable service at the tap of a button.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4 max-w-lg mx-auto relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                <div class="relative flex-grow flex bg-white rounded-full p-1.5 shadow-xl ring-1 ring-gray-900/5 items-center">
                    <div class="pl-4 text-gray-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="text" class="block w-full p-3 text-lg text-gray-900 bg-transparent border-none focus:ring-0 placeholder-gray-400" placeholder="What service do you need?">
                    <button class="px-8 py-3 bg-gray-900 hover:bg-black text-white font-semibold rounded-full transition shadow-md">Search</button>
                </div>
            </div>

            <!-- Trust Badges -->
            <div class="mt-16 flex flex-wrap justify-center gap-8 opacity-60 grayscale hover:grayscale-0 transition duration-500">
                <!-- Simple placeholders for logos -->
                <div class="text-xl font-bold font-serif text-gray-400">VOGUE</div>
                <div class="text-xl font-bold font-sans text-gray-400">FORBES</div>
                <div class="text-xl font-bold font-mono text-gray-400">WIRED</div>
                <div class="text-xl font-bold font-serif text-gray-400">Elle Decor</div>
            </div>
        </div>
    </div>

    <!-- Categories Section -->
    <div class="py-24 bg-gray-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Explore Categories</h2>
                <p class="text-lg text-gray-500">Everything you need for your home, all in one place.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                @foreach (['Cleaning', 'Plumbing', 'Electrical', 'Moving', 'Painting', 'Gardening'] as $index => $category)
                <a href="{{ route('services.index') }}" class="group block p-8 bg-white rounded-3xl hover:bg-indigo-600 transition duration-300 shadow-sm hover:shadow-xl border border-gray-100 hover:border-indigo-600 text-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent opacity-0 group-hover:opacity-20 transition"></div>
                    <div class="w-16 h-16 mx-auto bg-indigo-50 rounded-2xl flex items-center justify-center text-indigo-600 group-hover:bg-white group-hover:text-indigo-600 transition duration-300 mb-4 shadow-inner">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 group-hover:text-white transition">{{ $category }}</h3>
                </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Featured Services -->
    <div class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-16">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-2">Popular Services</h2>
                    <p class="text-lg text-gray-500">Most booked services this week.</p>
                </div>
                <a href="{{ route('services.index') }}" class="hidden md:inline-flex items-center font-semibold text-indigo-600 hover:text-indigo-700 transition">
                    View all services
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="group bg-white rounded-3xl shadow-lg shadow-gray-100 hover:shadow-2xl hover:shadow-indigo-100 transition duration-300 overflow-hidden border border-gray-100 relative">
                    <div class="absolute top-4 right-4 z-10 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-gray-900 shadow-sm border border-gray-100 flex items-center">
                        <svg class="w-3 h-3 text-amber-400 mr-1 fill-current" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg> 4.9
                    </div>
                    <div class="h-64 bg-gray-200 relative overflow-hidden">
                        <div class="absolute inset-0 bg-indigo-900/10 group-hover:bg-indigo-900/0 transition duration-500"></div>
                        <div class="absolute inset-0 flex items-center justify-center text-gray-400 font-medium">Service Image</div>
                    </div>
                    <div class="p-8">
                        <div class="mb-4">
                            <span class="text-xs font-bold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full uppercase tracking-wide">Cleaning</span>
                        </div>
                        <h3 class="font-bold text-2xl text-gray-900 mb-2 group-hover:text-indigo-600 transition">Deep Home Cleaning</h3>
                        <p class="text-gray-500 mb-6 line-clamp-2">Complete home sanitization and deep cleaning service for all rooms.</p>
                        <div class="flex justify-between items-center pt-6 border-t border-gray-50">
                            <div>
                                <span class="block text-xs text-gray-400 uppercase font-bold">Starts at</span>
                                <span class="font-bold text-xl text-gray-900">$80<span class="text-sm text-gray-400 font-normal">/hr</span></span>
                            </div>
                            <button class="w-12 h-12 bg-gray-900 rounded-full flex items-center justify-center text-white group-hover:bg-indigo-600 transition shadow-lg transform group-hover:rotate-45">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="group bg-white rounded-3xl shadow-lg shadow-gray-100 hover:shadow-2xl hover:shadow-indigo-100 transition duration-300 overflow-hidden border border-gray-100 relative">
                    <div class="absolute top-4 right-4 z-10 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-gray-900 shadow-sm border border-gray-100 flex items-center">
                        <svg class="w-3 h-3 text-amber-400 mr-1 fill-current" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg> 4.8
                    </div>
                    <div class="h-64 bg-gray-200 relative overflow-hidden">
                        <div class="absolute inset-0 bg-indigo-900/10 group-hover:bg-indigo-900/0 transition duration-500"></div>
                        <div class="absolute inset-0 flex items-center justify-center text-gray-400 font-medium">Service Image</div>
                    </div>
                    <div class="p-8">
                        <div class="mb-4">
                            <span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-3 py-1 rounded-full uppercase tracking-wide">Plumbing</span>
                        </div>
                        <h3 class="font-bold text-2xl text-gray-900 mb-2 group-hover:text-emerald-600 transition">Leak Repair</h3>
                        <p class="text-gray-500 mb-6 line-clamp-2">Fast and reliable fix for any leaks in your kitchen or bathroom.</p>
                        <div class="flex justify-between items-center pt-6 border-t border-gray-50">
                            <div>
                                <span class="block text-xs text-gray-400 uppercase font-bold">Starts at</span>
                                <span class="font-bold text-xl text-gray-900">$50<span class="text-sm text-gray-400 font-normal">/hr</span></span>
                            </div>
                            <button class="w-12 h-12 bg-gray-900 rounded-full flex items-center justify-center text-white group-hover:bg-emerald-600 transition shadow-lg transform group-hover:rotate-45">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="group bg-white rounded-3xl shadow-lg shadow-gray-100 hover:shadow-2xl hover:shadow-indigo-100 transition duration-300 overflow-hidden border border-gray-100 relative">
                    <div class="absolute top-4 right-4 z-10 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-gray-900 shadow-sm border border-gray-100 flex items-center">
                        <svg class="w-3 h-3 text-amber-400 mr-1 fill-current" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg> 5.0
                    </div>
                    <div class="h-64 bg-gray-200 relative overflow-hidden">
                        <div class="absolute inset-0 bg-indigo-900/10 group-hover:bg-indigo-900/0 transition duration-500"></div>
                        <div class="absolute inset-0 flex items-center justify-center text-gray-400 font-medium">Service Image</div>
                    </div>
                    <div class="p-8">
                        <div class="mb-4">
                            <span class="text-xs font-bold text-rose-600 bg-rose-50 px-3 py-1 rounded-full uppercase tracking-wide">Maintenance</span>
                        </div>
                        <h3 class="font-bold text-2xl text-gray-900 mb-2 group-hover:text-rose-600 transition">AC Service</h3>
                        <p class="text-gray-500 mb-6 line-clamp-2">Seasonal maintenance to keep your air conditioning running efficiently.</p>
                        <div class="flex justify-between items-center pt-6 border-t border-gray-50">
                            <div>
                                <span class="block text-xs text-gray-400 uppercase font-bold">Starts at</span>
                                <span class="font-bold text-xl text-gray-900">$65<span class="text-sm text-gray-400 font-normal">/hr</span></span>
                            </div>
                            <button class="w-12 h-12 bg-gray-900 rounded-full flex items-center justify-center text-white group-hover:bg-rose-600 transition shadow-lg transform group-hover:rotate-45">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center md:hidden">
                <a href="{{ route('services.index') }}" class="inline-flex items-center font-bold text-indigo-600 hover:text-indigo-700 transition border border-indigo-200 bg-indigo-50 px-6 py-3 rounded-xl">
                    View all services
                </a>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-24 bg-gray-900 relative overflow-hidden">
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-[600px] h-[600px] bg-indigo-900 rounded-full opacity-50 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[500px] h-[500px] bg-purple-900 rounded-full opacity-30 blur-3xl"></div>

        <div class="max-w-5xl mx-auto text-center px-4 relative z-10">
            <h2 class="text-4xl md:text-6xl font-black text-white mb-8 leading-tight">Ready to simplify your life?</h2>
            <p class="text-gray-400 text-xl mb-12 max-w-2xl mx-auto">Join thousands of satisfied customers who have found reliable help for their daily needs. Get started in minutes.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('register') }}" class="inline-block px-10 py-4 bg-white text-gray-900 font-bold text-lg rounded-full hover:bg-gray-100 transition shadow-lg hover:shadow-xl hover:scale-105 transform">Get Started Today</a>
                <a href="{{ route('services.index') }}" class="inline-block px-10 py-4 bg-transparent border-2 border-white/20 text-white font-bold text-lg rounded-full hover:bg-white/10 transition">Browse Services</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black text-gray-400 py-16 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 border-b border-gray-800 pb-12 mb-12">
                <div class="col-span-1 md:col-span-1">
                    <span class="text-3xl font-bold text-white tracking-tight">Smart<span class="text-indigo-500">Service</span></span>
                    <p class="mt-4 text-sm leading-relaxed text-gray-500">The most reliable platform for home services. We connect you with verified professionals.</p>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6">Company</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="hover:text-white transition">About Us</a></li>
                        <li><a href="#" class="hover:text-white transition">Careers</a></li>
                        <li><a href="#" class="hover:text-white transition">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6">Support</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="hover:text-white transition">Help Center</a></li>
                        <li><a href="#" class="hover:text-white transition">Safety</a></li>
                        <li><a href="#" class="hover:text-white transition">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6">Social</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-indigo-600 hover:text-white transition">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-indigo-600 hover:text-white transition">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772 4.902 4.902 0 011.772-1.153c.636-.247 1.363-.416 2.427-.465 1.067-.047 1.409-.06 3.809-.06h.63zm1.118 2.058c-2.607 0-2.937.01-4.044.061-.926.043-1.554.195-2.164.432a2.895 2.895 0 00-1.085.708 2.893 2.893 0 00-.709 1.085c-.236.61-.389 1.238-.431 2.164-.05 1.107-.061 1.437-.061 4.044v.936c0 2.607.01 2.937.061 4.044.043.926.195 1.554.432 2.164a2.917 2.917 0 001.794 1.794c.61.237 1.238.389 2.164.432 1.107.05 1.437.061 4.044.061h.936c2.607 0 2.937-.01 4.044-.061.926-.043 1.554-.195 2.164-.432a2.915 2.915 0 001.085-.709 2.914 2.914 0 00.709-1.085c.236-.61.389-1.238.431-2.164.05-1.107.061-1.437.061-4.044v-.936c0-2.607-.01-2.937-.061-4.044-.043-.926-.195-1.554-.432-2.164a2.914 2.914 0 00-.709-1.085 2.91 2.91 0 00-1.085-.708c-.61-.236-1.238-.389-2.164-.431-1.107-.05-1.437-.061-4.044-.061h-.936zm-1.85 4.86a3.91 3.91 0 110 7.82 3.91 3.91 0 010-7.82zm0 1.94a1.97 1.97 0 100 3.94 1.97 1.97 0 000-3.94zm5.336-6.198a.98.98 0 010 1.96.98.98 0 010-1.96z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <!-- Footer -->
        @include('layouts.footer')
        
        <!-- Loading Overlay -->
        <div id="loading-overlay" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden items-center justify-center">
            <div class="loading-spinner w-12 h-12"></div>
        </div>
        
        <!-- Toast Container -->
        <div id="toast-container" class="fixed top-4 right-4 z-50 space-y-2"></div>
        
        <!-- Global Scripts -->
        <script>
            // Loading states
            window.showLoading = function() {
                document.getElementById('loading-overlay').classList.remove('hidden');
                document.getElementById('loading-overlay').classList.add('flex');
            };
            
            window.hideLoading = function() {
                document.getElementById('loading-overlay').classList.add('hidden');
                document.getElementById('loading-overlay').classList.remove('flex');
            };
            
            // Toast notifications
            window.showToast = function(message, type = 'info') {
                const container = document.getElementById('toast-container');
                const toast = document.createElement('div');
                const bgColor = type === 'success' ? 'bg-green-500' : 
                               type === 'error' ? 'bg-red-500' : 
                               type === 'warning' ? 'bg-yellow-500' : 'bg-blue-500';
                
                toast.className = `${bgColor} text-white px-6 py-3 rounded-lg shadow-lg transform transition-all duration-300 translate-x-full`;
                toast.textContent = message;
                
                container.appendChild(toast);
                
                // Animate in
                setTimeout(() => {
                    toast.classList.remove('translate-x-full');
                    toast.classList.add('translate-x-0');
                }, 100);
                
                // Remove after 3 seconds
                setTimeout(() => {
                    toast.classList.add('translate-x-full');
                    setTimeout(() => {
                        container.removeChild(toast);
                    }, 300);
                }, 3000);
            };
            
            // Smooth scroll for anchor links
            document.addEventListener('DOMContentLoaded', function() {
                const links = document.querySelectorAll('a[href^="#"]');
                links.forEach(link => {
                    link.addEventListener('click', function(e) {
                        const href = this.getAttribute('href');
                        if (href !== '#') {
                            e.preventDefault();
                            const target = document.querySelector(href);
                            if (target) {
                                target.scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'start'
                                });
                            }
                        }
                    });
                });
            });
        </script>
    </body>
</html>