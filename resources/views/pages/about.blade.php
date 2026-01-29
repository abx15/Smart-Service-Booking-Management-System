@extends('layouts.app')

@section('title', 'About Us')

@section('content')
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
                About <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-200 to-pink-200">SmartService</span>
            </h1>
            <p class="text-xl text-indigo-100 max-w-3xl mx-auto mb-12 animate-fade-in-up leading-relaxed">
                We're revolutionizing the home service industry by connecting you with trusted professionals, making quality service accessible to everyone.
            </p>
        </div>
    </div>
</div>

<!-- Mission Section -->
<div class="section-padding bg-white">
    <div class="container-max container-padding">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="animate-on-scroll">
                <h2 class="text-heading mb-6">Our Mission</h2>
                <p class="text-body text-gray-600 mb-6 leading-relaxed">
                    To make quality home services accessible, affordable, and reliable for everyone. We believe that everyone deserves access to trusted professionals who can help maintain and improve their living spaces.
                </p>
                <p class="text-body text-gray-600 mb-8 leading-relaxed">
                    Through our innovative platform, we're bridging the gap between skilled service providers and customers who need their expertise, creating a community built on trust, quality, and exceptional service.
                </p>
                
                <div class="grid grid-cols-2 gap-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-indigo-600 mb-2">10,000+</div>
                        <p class="text-sm text-gray-600">Happy Customers</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-purple-600 mb-2">500+</div>
                        <p class="text-sm text-gray-600">Verified Professionals</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-pink-600 mb-2">50,000+</div>
                        <p class="text-sm text-gray-600">Services Completed</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-600 mb-2">4.9★</div>
                        <p class="text-sm text-gray-600">Average Rating</p>
                    </div>
                </div>
            </div>
            
            <div class="animate-on-scroll">
                <div class="relative">
                    <div class="aspect-video bg-gradient-to-br from-indigo-100 to-purple-100 rounded-3xl flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                                <svg class="w-12 h-12 text-indigo-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2L2 7v10c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-10-5z"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Trust & Quality</h3>
                            <p class="text-gray-600 mt-2">Our commitment to excellence</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Values Section -->
<div class="section-padding bg-gray-50">
    <div class="container-max container-padding">
        <div class="text-center mb-12">
            <h2 class="text-heading mb-4">Our Values</h2>
            <p class="text-body text-gray-600 max-w-2xl mx-auto">The principles that guide everything we do</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="card card-hover p-6 text-center animate-on-scroll">
                <div class="w-16 h-16 bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Quality First</h3>
                <p class="text-gray-600 text-sm">We never compromise on quality and ensure every service meets our high standards.</p>
            </div>
            
            <div class="card card-hover p-6 text-center animate-on-scroll">
                <div class="w-16 h-16 bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Customer Focus</h3>
                <p class="text-gray-600 text-sm">Your satisfaction is our priority, and we go above and beyond to exceed expectations.</p>
            </div>
            
            <div class="card card-hover p-6 text-center animate-on-scroll">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-50 to-orange-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Innovation</h3>
                <p class="text-gray-600 text-sm">We constantly innovate to improve our platform and enhance your experience.</p>
            </div>
            
            <div class="card card-hover p-6 text-center animate-on-scroll">
                <div class="w-16 h-16 bg-gradient-to-br from-pink-50 to-rose-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Community</h3>
                <p class="text-gray-600 text-sm">We're building a community where trust, respect, and collaboration thrive.</p>
            </div>
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="section-padding bg-white">
    <div class="container-max container-padding">
        <div class="text-center mb-12">
            <h2 class="text-heading mb-4">Meet Our Team</h2>
            <p class="text-body text-gray-600 max-w-2xl mx-auto">The passionate people behind SmartService</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center animate-on-scroll">
                <div class="w-32 h-32 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white font-bold text-2xl">
                    JD
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-1">John Doe</h3>
                <p class="text-sm text-indigo-600 mb-3">CEO & Founder</p>
                <p class="text-gray-600 text-sm">Visionary leader with 15+ years in tech and service industry.</p>
                <div class="flex justify-center space-x-3 mt-4">
                    <a href="#" class="text-gray-400 hover:text-indigo-600 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-32 h-32 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white font-bold text-2xl">
                    SJ
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-1">Sarah Johnson</h3>
                <p class="text-sm text-green-600 mb-3">CTO</p>
                <p class="text-gray-600 text-sm">Tech expert driving innovation and platform development.</p>
                <div class="flex justify-center space-x-3 mt-4">
                    <a href="#" class="text-gray-400 hover:text-green-600 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-32 h-32 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white font-bold text-2xl">
                    MC
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-1">Michael Chen</h3>
                <p class="text-sm text-yellow-600 mb-3">Head of Operations</p>
                <p class="text-gray-600 text-sm">Ensuring smooth operations and exceptional service delivery.</p>
                <div class="flex justify-center space-x-3 mt-4">
                    <a href="#" class="text-gray-400 hover:text-yellow-600 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-32 h-32 bg-gradient-to-br from-pink-500 to-rose-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white font-bold text-2xl">
                    EP
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-1">Emily Parker</h3>
                <p class="text-sm text-pink-600 mb-3">Head of Marketing</p>
                <p class="text-gray-600 text-sm">Building our brand and connecting with our community.</p>
                <div class="flex justify-center space-x-3 mt-4">
                    <a href="#" class="text-gray-400 hover:text-pink-600 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="section-padding bg-gradient-to-r from-indigo-600 to-purple-600">
    <div class="container-max container-padding text-center">
        <h2 class="text-3xl md:text-4xl font-black text-white mb-6">Join Our Mission</h2>
        <p class="text-indigo-100 text-lg mb-8 max-w-2xl mx-auto">Whether you're a service provider or looking for quality services, we'd love to have you as part of our community.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('register') }}" class="btn-primary bg-white text-indigo-600 hover:bg-gray-100">
                Join as Provider
            </a>
            <a href="{{ route('services.index') }}" class="btn-secondary border-white text-white hover:bg-white hover:text-indigo-600">
                Find Services
            </a>
        </div>
    </div>
</div>
@endsection
