<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Smart Service Booking Management System - Connect with top-rated professionals for all your home service needs.">
        <meta name="keywords" content="home services, booking, professionals, cleaning, plumbing, electrical">
        <meta name="author" content="Smart Service">
        
        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="{{ config('app.name', 'Smart Service') }}">
        <meta property="og:description" content="Connect with top-rated professionals for all your home service needs.">
        <meta property="og:type" content="website">
        <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
        
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
        
        <title>{{ config('app.name', 'Smart Service') }} - {{ $pageTitle ?? 'Home Service Booking' }}</title>
    </head>
    <body class="font-sans antialiased bg-gray-50 text-gray-900 min-h-screen flex flex-col">
        <!-- Skip to main content for accessibility -->
        <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-indigo-600 text-white px-4 py-2 rounded-lg z-50">
            Skip to main content
        </a>
        
        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow-sm border-b border-gray-100 fade-in">
                <div class="container-max container-padding py-6">
                    <div class="fade-in-up">
                        {{ $header }}
                    </div>
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main id="main-content" class="flex-grow">
            <div class="fade-in">
                {{ $slot }}
            </div>
        </main>
        
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
                
                // Add fade-in animation to elements
                const observerOptions = {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                };
                
                const observer = new IntersectionObserver(function(entries) {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('fade-in-up');
                        }
                    });
                }, observerOptions);
                
                // Observe elements with animation classes
                document.querySelectorAll('.animate-on-scroll').forEach(el => {
                    observer.observe(el);
                });
            });
        </script>
    </body>
</html>
