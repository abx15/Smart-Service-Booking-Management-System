<x-main-layout>
    <x-slot name="title">
        About Us - {{ config('app.name', 'SmartService') }}
    </x-slot>

    <!-- Hero Section -->
    <div class="relative py-20 lg:py-32 overflow-hidden bg-gradient-to-br from-primary via-secondary to-accent">
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 -mr-20 -mt-20 w-[600px] h-[600px] bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[500px] h-[500px] bg-white/10 rounded-full blur-3xl"></div>
        </div>
        
        <div class="w-full px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center text-white max-w-7xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-black mb-6">
                    About <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-200 to-pink-200">SmartService</span>
                </h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto mb-12 leading-relaxed">
                    We're revolutionizing the home service industry by connecting you with trusted professionals, making quality service accessible to everyone.
                </p>
            </div>
        </div>
    </div>

    <!-- Mission Section -->
    <div class="py-20 bg-white w-full">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center max-w-7xl mx-auto">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">Our Mission</h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        To make quality home services accessible, affordable, and reliable for everyone. We believe that everyone deserves access to trusted professionals who can help maintain and improve their living spaces.
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Through our innovative platform, we're bridging the gap between skilled service providers and customers who need their expertise, creating a community built on trust, quality, and exceptional service.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary mb-2">10,000+</div>
                            <p class="text-sm text-gray-600">Happy Customers</p>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-secondary mb-2">500+</div>
                            <p class="text-sm text-gray-600">Verified Professionals</p>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent mb-2">50,000+</div>
                            <p class="text-sm text-gray-600">Services Completed</p>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-success mb-2">4.9★</div>
                            <p class="text-sm text-gray-600">Average Rating</p>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="relative">
                        <div class="aspect-video bg-gradient-to-br from-primary/10 to-secondary/10 rounded-3xl flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                                    <svg class="w-12 h-12 text-primary" fill="currentColor" viewBox="0 0 24 24">
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
    <div class="py-20 bg-gray-50 w-full">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 max-w-7xl mx-auto">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Values</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">The principles that guide everything we do</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary/10 to-primary/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Quality First</h3>
                    <p class="text-gray-600 text-sm">We never compromise on quality and ensure every service meets our high standards.</p>
                </div>
                
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-success/10 to-success/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Customer Focus</h3>
                    <p class="text-gray-600 text-sm">Your satisfaction is our priority, and we go above and beyond to exceed expectations.</p>
                </div>
                
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-warning/10 to-warning/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-warning" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Innovation</h3>
                    <p class="text-gray-600 text-sm">We constantly innovate to improve our platform and enhance your experience.</p>
                </div>
                
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-accent/10 to-accent/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
    <div class="py-20 bg-white w-full">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 max-w-7xl mx-auto">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Meet Our Team</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">The passionate people behind SmartService</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
                <div class="text-center">
                    <div class="w-32 h-32 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center mx-auto mb-4 text-white font-bold text-2xl shadow-lg">
                        JD
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-1">John Doe</h3>
                    <p class="text-sm text-primary mb-3">CEO & Founder</p>
                    <p class="text-gray-600 text-sm">Visionary leader with 15+ years in tech and service industry.</p>
                </div>
                
                <div class="text-center">
                    <div class="w-32 h-32 bg-gradient-to-br from-success to-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white font-bold text-2xl shadow-lg">
                        SJ
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-1">Sarah Johnson</h3>
                    <p class="text-sm text-success mb-3">CTO</p>
                    <p class="text-gray-600 text-sm">Tech expert driving innovation and platform development.</p>
                </div>
                
                <div class="text-center">
                    <div class="w-32 h-32 bg-gradient-to-br from-warning to-orange-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white font-bold text-2xl shadow-lg">
                        MC
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-1">Michael Chen</h3>
                    <p class="text-sm text-warning mb-3">Head of Operations</p>
                    <p class="text-gray-600 text-sm">Ensuring smooth operations and exceptional service delivery.</p>
                </div>
                
                <div class="text-center">
                    <div class="w-32 h-32 bg-gradient-to-br from-accent to-pink-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white font-bold text-2xl shadow-lg">
                        EP
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-1">Emily Parker</h3>
                    <p class="text-sm text-accent mb-3">Head of Marketing</p>
                    <p class="text-gray-600 text-sm">Building our brand and connecting with our community.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-20 bg-gradient-to-r from-primary to-secondary w-full">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-black text-white mb-6">Join Our Mission</h2>
                <p class="text-white/90 text-lg mb-8">Whether you're a service provider or looking for quality services, we'd love to have you as part of our community.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('register') }}" class="inline-block px-8 py-4 bg-white text-primary font-bold rounded-full hover:bg-gray-100 transition shadow-xl">
                        Join as Provider
                    </a>
                    <a href="{{ route('services.index') }}" class="inline-block px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-primary transition">
                        Find Services
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
