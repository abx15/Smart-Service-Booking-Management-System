<x-main-layout>
    <x-slot name="title">
        Service Categories
    </x-slot>

    <!-- Hero Section -->
    <div class="relative py-24 bg-gradient-to-br from-primary/10 to-secondary/10 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 right-0 -mr-20 -mt-20 w-[600px] h-[600px] bg-primary/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[500px] h-[500px] bg-secondary/10 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-5xl md:text-6xl font-black tracking-tight text-text-heading mb-6">
                Our Service <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">Categories</span>
            </h1>
            <p class="text-xl md:text-2xl text-text-body max-w-3xl mx-auto">
                Choose from our comprehensive range of professional services, each delivered by verified and experienced experts.
            </p>
        </div>
    </div>

    <!-- Categories Grid -->
    <div class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Cleaning Services -->
                <a href="{{ route('services.category', 'cleaning') }}" class="group block bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600 relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 text-white">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur rounded-2xl flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold">Cleaning Services</h3>
                        </div>
                        <div class="absolute top-6 right-6">
                            <span class="bg-white/90 backdrop-blur text-blue-600 px-3 py-1 rounded-full text-sm font-bold">12 Services</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Professional cleaning solutions for homes and offices. Deep cleaning, regular maintenance, and specialized services.</p>
                        <div class="flex items-center text-blue-600 font-semibold group-hover:text-blue-700">
                            Explore Cleaning Services
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Plumbing Services -->
                <a href="{{ route('services.category', 'plumbing') }}" class="group block bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-cyan-400 to-cyan-600 relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 text-white">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur rounded-2xl flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold">Plumbing Services</h3>
                        </div>
                        <div class="absolute top-6 right-6">
                            <span class="bg-white/90 backdrop-blur text-cyan-600 px-3 py-1 rounded-full text-sm font-bold">8 Services</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Expert plumbing solutions for repairs, installations, and emergencies. Available 24/7 for urgent issues.</p>
                        <div class="flex items-center text-cyan-600 font-semibold group-hover:text-cyan-700">
                            Explore Plumbing Services
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Electrical Services -->
                <a href="{{ route('services.category', 'electrical') }}" class="group block bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-yellow-400 to-orange-600 relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 text-white">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur rounded-2xl flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold">Electrical Services</h3>
                        </div>
                        <div class="absolute top-6 right-6">
                            <span class="bg-white/90 backdrop-blur text-orange-600 px-3 py-1 rounded-full text-sm font-bold">10 Services</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Licensed electricians for installations, repairs, and maintenance. All work is code-compliant and guaranteed.</p>
                        <div class="flex items-center text-orange-600 font-semibold group-hover:text-orange-700">
                            Explore Electrical Services
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Moving Services -->
                <a href="{{ route('services.category', 'moving') }}" class="group block bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-green-400 to-green-600 relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 text-white">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur rounded-2xl flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold">Moving Services</h3>
                        </div>
                        <div class="absolute top-6 right-6">
                            <span class="bg-white/90 backdrop-blur text-green-600 px-3 py-1 rounded-full text-sm font-bold">6 Services</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Professional moving services with careful packing, transportation, and unpacking. Local and long-distance moves.</p>
                        <div class="flex items-center text-green-600 font-semibold group-hover:text-green-700">
                            Explore Moving Services
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Painting Services -->
                <a href="{{ route('services.category', 'painting') }}" class="group block bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-purple-400 to-purple-600 relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 text-white">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur rounded-2xl flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold">Painting Services</h3>
                        </div>
                        <div class="absolute top-6 right-6">
                            <span class="bg-white/90 backdrop-blur text-purple-600 px-3 py-1 rounded-full text-sm font-bold">7 Services</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Professional painting services for interiors and exteriors. Premium quality paints and flawless finishes.</p>
                        <div class="flex items-center text-purple-600 font-semibold group-hover:text-purple-700">
                            Explore Painting Services
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Gardening Services -->
                <a href="{{ route('services.category', 'gardening') }}" class="group block bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-gradient-to-br from-emerald-400 to-emerald-600 relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 text-white">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur rounded-2xl flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold">Gardening Services</h3>
                        </div>
                        <div class="absolute top-6 right-6">
                            <span class="bg-white/90 backdrop-blur text-emerald-600 px-3 py-1 rounded-full text-sm font-bold">9 Services</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">Complete gardening and landscaping solutions. Lawn care, planting, maintenance, and garden design.</p>
                        <div class="flex items-center text-emerald-600 font-semibold group-hover:text-emerald-700">
                            Explore Gardening Services
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-text-heading mb-6">Can't Find What You're Looking For?</h2>
            <p class="text-lg text-gray-600 mb-8">We're always expanding our services. Contact us and we'll help you find the right solution.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('contact') }}" class="inline-block px-8 py-3 bg-primary hover:bg-primary-dark text-white font-semibold rounded-full transition shadow-lg hover:shadow-xl">
                    Contact Us
                </a>
                <a href="{{ route('faq') }}" class="inline-block px-8 py-3 bg-white border-2 border-gray-300 text-gray-700 font-semibold rounded-full hover:border-primary hover:text-primary transition">
                    Browse FAQs
                </a>
            </div>
        </div>
    </div>
</x-main-layout>
