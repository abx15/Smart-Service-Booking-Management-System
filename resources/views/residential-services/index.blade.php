<x-main-layout>
    <x-slot name="title">Residential Services - Expert Home Repairs & Maintenance</x-slot>

    {{-- Hero Section --}}
    <section class="section-full-width relative pt-24 pb-20 md:pt-32 md:pb-28 bg-gradient-to-br from-primary/10 via-white to-secondary/5">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-flex items-center gap-2 px-6 py-3 bg-primary/10 rounded-full mb-6">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="text-primary font-semibold">Residential Services</span>
                </div>

                <h1 class="text-4xl md:text-6xl font-black text-gray-900 mb-6 leading-tight">
                    Expert Home Services<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">For Every Room</span>
                </h1>

                <p class="text-lg md:text-xl text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed">
                    From minor repairs to major remodeling, our licensed professionals handle all your home service needs with expertise and care.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <x-button href="{{ route('bookings.create') }}" variant="primary" size="xl">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Schedule Service
                    </x-button>
                    <x-button href="tel:+18001234567" variant="outline" size="xl">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        (800) 123-4567
                    </x-button>
                </div>
            </div>
        </div>
    </section>

    {{-- Service Categories Grid --}}
    <section class="section-full-width py-20 md:py-28 bg-white">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">Our Residential Services</h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                    Comprehensive home services for repair, maintenance, and improvement
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Cleaning Services --}}
                <a href="{{ route('services.category', 'cleaning') }}" class="group p-8 bg-gray-50 hover:bg-white rounded-2xl border-2 border-gray-200 hover:border-primary hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Cleaning Services</h3>
                    <p class="text-gray-600 mb-4">Professional deep cleaning, regular maintenance, and specialized cleaning solutions.</p>
                    <span class="inline-flex items-center gap-2 text-primary font-semibold group-hover:gap-3 transition-all">
                        Learn More
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </span>
                </a>

                {{-- Plumbing --}}
                <a href="{{ route('services.category', 'plumbing') }}" class="group p-8 bg-gray-50 hover:bg-white rounded-2xl border-2 border-gray-200 hover:border-primary hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Plumbing</h3>
                    <p class="text-gray-600 mb-4">Leak repairs, installations, drain cleaning, and 24/7 emergency plumbing services.</p>
                    <span class="inline-flex items-center gap-2 text-primary font-semibold group-hover:gap-3 transition-all">
                        Learn More
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </span>
                </a>

                {{-- Electrical --}}
                <a href="{{ route('services.category', 'electrical') }}" class="group p-8 bg-gray-50 hover:bg-white rounded-2xl border-2 border-gray-200 hover:border-primary hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Electrical Work</h3>
                    <p class="text-gray-600 mb-4">Wiring, installations, repairs, upgrades, and electrical safety inspections.</p>
                    <span class="inline-flex items-center gap-2 text-primary font-semibold group-hover:gap-3 transition-all">
                        Learn More
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </span>
                </a>

                {{-- Painting --}}
                <a href="{{ route('services.category', 'painting') }}" class="group p-8 bg-gray-50 hover:bg-white rounded-2xl border-2 border-gray-200 hover:border-primary hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Interior & Exterior Painting</h3>
                    <p class="text-gray-600 mb-4">Professional painting services for walls, ceilings, trim, and exterior surfaces.</p>
                    <span class="inline-flex items-center gap-2 text-primary font-semibold group-hover:gap-3 transition-all">
                        Learn More
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </span>
                </a>

                {{-- Gardening --}}
                <a href="{{ route('services.category', 'gardening') }}" class="group p-8 bg-gray-50 hover:bg-white rounded-2xl border-2 border-gray-200 hover:border-primary hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Lawn & Gardening</h3>
                    <p class="text-gray-600 mb-4">Lawn care, landscaping, tree trimming, and seasonal garden maintenance.</p>
                    <span class="inline-flex items-center gap-2 text-primary font-semibold group-hover:gap-3 transition-all">
                        Learn More
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </span>
                </a>

                {{-- Moving --}}
                <a href="{{ route('services.category', 'moving') }}" class="group p-8 bg-gray-50 hover:bg-white rounded-2xl border-2 border-gray-200 hover:border-primary hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Moving Services</h3>
                    <p class="text-gray-600 mb-4">Residential moving, packing, furniture assembly, and local/long-distance relocation.</p>
                    <span class="inline-flex items-center gap-2 text-primary font-semibold group-hover:gap-3 transition-all">
                        Learn More
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </section>

    {{-- Why Choose Us --}}
    <x-why-choose-us-expanded />

    {{-- CTA Section --}}
    <section class="section-full-width py-20 md:py-28 bg-gradient-to-br from-primary to-secondary">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                    Ready to Improve Your Home?
                </h2>
                <p class="text-xl text-white/90 mb-10">
                    Get started with a free quote or call us for immediate assistance.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('bookings.create') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white hover:bg-gray-100 text-primary font-bold rounded-lg shadow-xl transition text-lg">
                        Get Free Quote
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="tel:+18001234567" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white/10 backdrop-blur-md hover:bg-white/20 border-2 border-white text-white font-bold rounded-lg transition text-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        Call Now
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-main-layout>