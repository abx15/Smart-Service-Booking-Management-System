<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Contact SmartService - Get in touch with our team for support, questions, or feedback. We're here to help you.">
    <meta name="keywords" content="contact smartservice, support, help, feedback">
    <meta name="author" content="SmartService">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Contact Us - SmartService">
    <meta property="og:description" content="Get in touch with our team for support, questions, or feedback. We're here to help you.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('images/og-contact.jpg') }}">

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

    <title>Contact Us - {{ config('app.name', 'SmartService') }}</title>
</head>

<body class="font-sans antialiased bg-gray-50 text-gray-900 min-h-screen flex flex-col">
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-indigo-600 text-white px-4 py-2 rounded-lg z-50">
        Skip to main content
    </a>

    <!-- Navigation -->
    <x-navigation />

    <!-- Page Heading -->
    <header class="bg-white shadow-sm border-b border-gray-100 fade-in">
        <div class="container-max container-padding py-6">
            <div class="fade-in-up">
                <h1 class="text-3xl font-bold text-gray-900">Contact Us</h1>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <main id="main-content" class="flex-grow">
        <div class="fade-in">
            <!-- Hero Section -->
            <div class="relative py-20 lg:py-32 overflow-hidden bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600">
                <!-- Background Effects -->
                <div class="absolute inset-0">
                    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-[600px] h-[600px] bg-white/10 rounded-full blur-3xl"></div>
                    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[500px] h-[500px] bg-white/10 rounded-full blur-3xl"></div>
                </div>

                <div class="container-max container-padding relative z-10">
                    <div class="text-center text-white">
                        <h1 class="text-display text-white mb-6 animate-fade-in-up">
                            Get in <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-200 to-pink-200">Touch</span>
                        </h1>
                        <p class="text-xl text-indigo-100 max-w-3xl mx-auto mb-12 animate-fade-in-up leading-relaxed">
                            Have questions? Need support? We're here to help. Reach out to our team and we'll get back to you as soon as possible.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Contact Info Section -->
            <div class="section-padding bg-white">
                <div class="container-max container-padding">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                        <div class="text-center animate-on-scroll">
                            <div class="w-16 h-16 bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502.1l-2.907-.732a1 1 0 01-.616-.616l-.732-2.907a1 1 0 01.1-.502L5.284 3.28A1 1 0 015.28 3H7a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2V5z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Email Us</h3>
                            <p class="text-gray-600 mb-2">support@smartservice.com</p>
                            <p class="text-gray-500 text-sm">We'll respond within 24 hours</p>
                        </div>

                        <div class="text-center animate-on-scroll">
                            <div class="w-16 h-16 bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502.1l-2.907-.732a1 1 0 01-.616-.616l-.732-2.907a1 1 0 01.1-.502L5.284 3.28A1 1 0 015.28 3H7a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2V5z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Call Us</h3>
                            <p class="text-gray-600 mb-2">+1 (555) 123-4567</p>
                            <p class="text-gray-500 text-sm">Mon-Fri: 9AM-6PM EST</p>
                        </div>

                        <div class="text-center animate-on-scroll">
                            <div class="w-16 h-16 bg-gradient-to-br from-yellow-50 to-orange-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Visit Us</h3>
                            <p class="text-gray-600 mb-2">123 Business Ave</p>
                            <p class="text-gray-500 text-sm">New York, NY 10001</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form Section -->
            <div class="section-padding bg-gray-50">
                <div class="container-max container-padding">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                        <!-- Contact Form -->
                        <div class="animate-on-scroll">
                            <h2 class="text-heading mb-6">Send us a Message</h2>
                            <p class="text-gray-600 mb-8">Fill out the form below and we'll get back to you as soon as possible.</p>

                            <form class="space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                                        <input type="text" class="input" placeholder="John">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                        <input type="text" class="input" placeholder="Doe">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                                    <input type="email" class="input" placeholder="john@example.com">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                    <input type="tel" class="input" placeholder="+1 (555) 123-4567">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                                    <select class="input">
                                        <option>General Inquiry</option>
                                        <option>Technical Support</option>
                                        <option>Billing Question</option>
                                        <option>Partnership</option>
                                        <option>Other</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                                    <textarea class="input textarea" rows="5" placeholder="Tell us how we can help you..."></textarea>
                                </div>

                                <div class="flex items-center">
                                    <input type="checkbox" class="checkbox mr-2">
                                    <label class="text-sm text-gray-600">I agree to the privacy policy and terms of service</label>
                                </div>

                                <button type="submit" class="btn-primary w-full">
                                    Send Message
                                </button>
                            </form>
                        </div>

                        <!-- Map & Additional Info -->
                        <div class="animate-on-scroll">
                            <h2 class="text-heading mb-6">Find Us</h2>

                            <!-- Map Placeholder -->
                            <div class="bg-gray-200 rounded-2xl h-96 mb-8 relative overflow-hidden">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="text-center">
                                        <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <p class="text-gray-600">Interactive Map</p>
                                        <p class="text-gray-500 text-sm">123 Business Ave, New York, NY</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Office Hours -->
                            <div class="card p-6">
                                <h3 class="text-lg font-bold text-gray-900 mb-4">Office Hours</h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Monday - Friday</span>
                                        <span class="font-medium text-gray-900">9:00 AM - 6:00 PM</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Saturday</span>
                                        <span class="font-medium text-gray-900">10:00 AM - 4:00 PM</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Sunday</span>
                                        <span class="font-medium text-gray-900">Closed</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Social Media -->
                            <div class="mt-8">
                                <h3 class="text-lg font-bold text-gray-900 mb-4">Follow Us</h3>
                                <div class="flex space-x-4">
                                    <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-indigo-100 hover:text-indigo-600 transition">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                        </svg>
                                    </a>
                                    <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-indigo-100 hover:text-indigo-600 transition">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.048 1.407.06 4.123.06h.08c2.643 0 2.987-.012 4.043-.06 1.064-.049 1.791-.218 2.427-.465a4.902 4.902 0 001.772-1.153 4.902 4.902 0 001.153-1.772c.247-.636.416-1.363.465-2.427.048-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987.012-4.043.06-1.064.049-1.791.218-2.427.465a4.902 4.902 0 00-1.772-1.153 4.902 4.902 0 00-1.772-1.153c-.636-.247-1.363-.416-2.427-.465-1.067-.047-1.409-.06-3.809-.06h-.63zm1.118 2.058c-2.607 0-2.937.01-4.044.061-.926.043-1.554.195-2.164.432a2.895 2.895 0 00-1.085.708 2.893 2.893 0 00-.709 1.085c-.236.61-.389 1.238-.431 2.164-.05 1.107-.061 1.437-.061 4.044v.936c0 2.607.01 2.937.061 4.044.043.926.195 1.554.432 2.164a2.917 2.917 0 001.794 1.794c.61.237 1.238.389 2.164.432 1.107.05 1.437.061 4.044.061h.936c2.607 0 2.937-.01 4.044-.061.926-.043 1.554-.195 2.164-.432a2.915 2.915 0 001.085-.709 2.914 2.914 0 00.709-1.085c.236-.61.389-1.238.431-2.164.05-1.107.061-1.437.061-4.044v-.936c0-2.607-.01-2.937-.061-4.044-.043-.926-.195-1.554-.432-2.164a2.914 2.914 0 00-.709-1.085 2.91 2.91 0 00-1.085-.708c-.61-.236-1.238-.389-2.164-.431-1.107-.05-1.437-.061-4.044-.061h-.936zm-1.85 4.86a3.91 3.91 0 110 7.82 3.91 3.91 0 010-7.82zm0 1.94a1.97 1.97 0 100 3.94 1.97 1.97 0 000-3.94zm5.336-6.198a.98.98 0 010 1.96.98.98 0 010-1.96z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-indigo-100 hover:text-indigo-600 transition">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.064-2.063 2.064z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="section-padding bg-white">
                <div class="container-max container-padding">
                    <div class="text-center mb-12">
                        <h2 class="text-heading mb-4">Frequently Asked Questions</h2>
                        <p class="text-body text-gray-600 max-w-2xl mx-auto">Quick answers to common questions about SmartService</p>
                    </div>

                    <div class="max-w-3xl mx-auto">
                        <div class="space-y-4">
                            <div class="card animate-on-scroll">
                                <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition">
                                    <h3 class="text-lg font-semibold text-gray-900">How do I book a service?</h3>
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="px-6 pb-6 text-gray-600">
                                    Simply browse our services, select what you need, choose a time slot, and confirm your booking. You'll receive confirmation and updates via email.
                                </div>
                            </div>

                            <div class="card animate-on-scroll">
                                <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition">
                                    <h3 class="text-lg font-semibold text-gray-900">Are the service providers verified?</h3>
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="px-6 pb-6 text-gray-600">
                                    Yes! All our service providers go through a thorough verification process including background checks and skill verification.
                                </div>
                            </div>

                            <div class="card animate-on-scroll">
                                <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition">
                                    <h3 class="text-lg font-semibold text-gray-900">What if I need to cancel my booking?</h3>
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="px-6 pb-6 text-gray-600">
                                    You can cancel your booking up to 24 hours before the scheduled time for a full refund. Late cancellations may incur a fee.
                                </div>
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