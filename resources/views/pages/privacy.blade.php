<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Privacy Policy - SmartService - Learn how we collect, use, and protect your information on our service booking platform.">
        <meta name="keywords" content="privacy policy, data protection, smartservice, security">
        <meta name="author" content="SmartService">
        
        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="Privacy Policy - SmartService">
        <meta property="og:description" content="Learn how we collect, use, and protect your information on our service booking platform.">
        <meta property="og:type" content="website">
        <meta property="og:image" content="{{ asset('images/og-privacy.jpg') }}">
        
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
        
        <title>Privacy Policy - {{ config('app.name', 'SmartService') }}</title>
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
                    <h1 class="text-3xl font-bold text-gray-900">Privacy Policy</h1>
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
                Privacy <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-200 to-pink-200">Policy</span>
            </h1>
            <p class="text-xl text-indigo-100 max-w-3xl mx-auto mb-12 animate-fade-in-up leading-relaxed">
                Your privacy is important to us. This policy explains how we collect, use, and protect your information.
            </p>
        </div>
    </div>
</div>

<!-- Privacy Content -->
<div class="section-padding bg-white">
    <div class="container-max container-padding">
        <div class="max-w-4xl mx-auto">
            <div class="prose prose-lg">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Information We Collect</h2>
                <p class="text-gray-600 mb-6">
                    We collect information you provide directly to us, such as when you create an account, book a service, or contact us for support.
                </p>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Personal Information</h3>
                <ul class="list-disc pl-6 text-gray-600 mb-6 space-y-2">
                    <li>Name and contact details</li>
                    <li>Email address and phone number</li>
                    <li>Payment information</li>
                    <li>Service preferences and requirements</li>
                    <li>Communication history</li>
                </ul>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Automatically Collected Information</h3>
                <ul class="list-disc pl-6 text-gray-600 mb-6 space-y-2">
                    <li>IP address and device information</li>
                    <li>Browser type and operating system</li>
                    <li>Pages visited and time spent on our site</li>
                    <li>Referring website information</li>
                </ul>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">How We Use Your Information</h2>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Service Provision</h3>
                <ul class="list-disc pl-6 text-gray-600 mb-6 space-y-2">
                    <li>To facilitate service bookings</li>
                    <li>To connect customers with service providers</li>
                    <li>To process payments and transactions</li>
                    <li>To send booking confirmations and updates</li>
                </ul>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Communication</h3>
                <ul class="list-disc pl-6 text-gray-600 mb-6 space-y-2">
                    <li>To respond to your inquiries</li>
                    <li>To send important updates about our services</li>
                    <li>To provide customer support</li>
                    <li>To share promotional offers (with your consent)</li>
                </ul>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Platform Improvement</h3>
                <ul class="list-disc pl-6 text-gray-600 mb-6 space-y-2">
                    <li>To analyze usage patterns and improve our services</li>
                    <li>To develop new features and functionalities</li>
                    <li>To ensure platform security and prevent fraud</li>
                    <li>To personalize your experience</li>
                </ul>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Information Sharing</h2>
                <p class="text-gray-600 mb-6">
                    We may share your information with service providers you book through our platform to facilitate service delivery. We only share information necessary for the service to be provided.
                </p>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Service Providers</h3>
                <p class="text-gray-600 mb-4">
                    When you book a service, we share your contact information and booking details with the assigned service provider. This enables them to:
                </p>
                <ul class="list-disc pl-6 text-gray-600 mb-6 space-y-2">
                    <li>Contact you about the booking</li>
                    <li>Provide the agreed-upon service</li>
                    <li>Handle payment processing</li>
                    <li>Send service-related communications</li>
                </ul>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Third-Party Services</h3>
                <p class="text-gray-600 mb-6">
                    We may share information with third-party service providers for:
                </p>
                <ul class="list-disc pl-6 text-gray-600 mb-6 space-y-2">
                    <li>Payment processing</li>
                    <li>Email delivery services</li>
                    <li>Analytics and performance monitoring</li>
                    <li>Customer support tools</li>
                </ul>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Data Security</h2>
                <p class="text-gray-600 mb-6">
                    We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.
                </p>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Security Measures</h3>
                <ul class="list-disc pl-6 text-gray-600 mb-6 space-y-2">
                    <li>SSL/TLS encryption for data transmission</li>
                    <li>Secure payment processing</li>
                    <li>Regular security audits and testing</li>
                    <li>Employee training on data protection</li>
                    <li>Access controls and authentication</li>
                </ul>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Data Retention</h2>
                <p class="text-gray-600 mb-6">
                    We retain your personal information only as long as necessary to provide our services and fulfill the purposes outlined in this privacy policy.
                </p>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Retention Periods</h3>
                <ul class="list-disc pl-6 text-gray-600 mb-6 space-y-2">
                    <li>Account information: Until account deletion</li>
                    <li>Booking records: 2 years after service completion</li>
                    <li>Payment information: 7 years for tax purposes</li>
                <li>Communication logs: 1 year</li>
                <li>Analytics data: 26 months</li>
                </ul>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Your Rights</h2>
                <p class="text-gray-600 mb-6">
                    You have certain rights regarding your personal information under applicable privacy laws.
                </p>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Access and Correction</h3>
                <p class="text-gray-600 mb-6">
                    You can access, update, or delete your personal information through your account settings or by contacting our support team.
                </p>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Data Portability</h3>
                <p class="text-gray-600 mb-6">
                    You have the right to request a copy of your personal information in a structured, machine-readable format.
                </p>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Right to Erasure</h3>
                <p class="text-gray-600 mb-6">
                    You can request deletion of your personal information, subject to certain legal obligations.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Cookies and Tracking</h2>
                <p class="text-gray-600 mb-6">
                    We use cookies and similar tracking technologies to enhance your experience on our platform.
                </p>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Essential Cookies</h3>
                <p class="text-gray-600 mb-6">
                    These are necessary for our platform to function properly, including security, authentication, and core functionality.
                </p>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Analytics Cookies</h3>
                <p class="gray-600 mb-6">
                    We use analytics cookies to understand how our platform is used and to improve our services.
                </p>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Marketing Cookies</h3>
                <p class="text-gray-600 mb-6">
                    With your consent, we may use marketing cookies to show you personalized advertisements and promotions.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Children's Privacy</h2>
                <p class="text-gray-600 mb-6">
                    Our service is not intended for children under 13 years of age. We do not knowingly collect personal information from children under 13.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">International Data Transfers</h2>
                <p class="text-gray-600 mb-6">
                    Your information may be transferred to and processed in countries other than your own. We ensure appropriate safeguards are in place for international data transfers.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Changes to This Policy</h2>
                <p class="text-gray-600 mb-6">
                    We may update this privacy policy from time to time. We will notify you of any changes by posting the new policy on our website and updating the "Last Updated" date.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Contact Us</h2>
                <p class="text-gray-600 mb-6">
                    If you have any questions about this Privacy Policy, please contact us at:
                </p>
                
                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-600 mb-2"><strong>Email:</strong> privacy@smartservice.com</p>
                    <p class="text-gray-600 mb-2"><strong>Phone:</strong> +1 (555) 123-4567</p>
                    <p class="text-gray-600"><strong>Address:</strong> 123 Business Ave, New York, NY 10001</p>
                </div>
                
                <div class="mt-12 p-6 bg-indigo-50 rounded-lg">
                    <p class="text-sm text-indigo-800">
                        <strong>Last Updated:</strong> {{ date('F j, Y') }}<br>
                        <strong>Effective Date:</strong> January 1, 2024
                    </p>
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
