<x-main-layout>
    <x-slot name="title">Professional Home Services | SmartService</x-slot>

    {{-- Hero Section --}}
    <section class="section-full-width relative pt-24 pb-20 md:pt-32 md:pb-28 bg-gradient-to-br from-primary/10 via-secondary/5 to-white">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-6xl font-black text-gray-900 mb-6">
                    Expert Home Services
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">For Every Need</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed">
                    From minor repairs to major remodeling, our certified professionals deliver quality workmanship and exceptional service for all your home improvement needs.
                </p>

                {{-- Trust Badges --}}
                <div class="flex flex-wrap justify-center gap-6 mb-8">
                    <div class="flex items-center gap-2 text-gray-700">
                        <svg class="w-6 h-6 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span class="font-semibold">Licensed & Insured</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-700">
                        <svg class="w-6 h-6 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span class="font-semibold">10+ Years Experience</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-700">
                        <svg class="w-6 h-6 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span class="font-semibold">Satisfaction Guaranteed</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Main Service Categories --}}
    <section class="section-full-width py-20 md:py-28 bg-white">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Service Categories</h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                    Choose from our comprehensive range of professional home services tailored to your needs.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Cleaning Services --}}
                <a href="{{ route('services.category', 'cleaning') }}" class="group block bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-primary/20 transform hover:-translate-y-2">
                    <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Cleaning Services</h3>
                    <p class="text-gray-600 mb-4">Deep cleaning, regular maintenance, move-out cleaning, and more for a spotless home.</p>
                    <div class="flex items-center text-primary font-semibold group-hover:gap-2 transition-all">
                        <span>View Services</span>
                        <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                </a>

                {{-- Plumbing Services --}}
                <a href="{{ route('services.category', 'plumbing') }}" class="group block bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-primary/20 transform hover:-translate-y-2">
                    <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Plumbing Services</h3>
                    <p class="text-gray-600 mb-4">Leak repairs, installations, drain cleaning, and emergency plumbing solutions.</p>
                    <div class="flex items-center text-primary font-semibold group-hover:gap-2 transition-all">
                        <span>View Services</span>
                        <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                </a>

                {{-- Electrical Services --}}
                <a href="{{ route('services.category', 'electrical') }}" class="group block bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-primary/20 transform hover:-translate-y-2">
                    <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Electrical Services</h3>
                    <p class="text-gray-600 mb-4">Wiring, installations, repairs, and electrical system upgrades by licensed electricians.</p>
                    <div class="flex items-center text-primary font-semibold group-hover:gap-2 transition-all">
                        <span>View Services</span>
                        <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                </a>

                {{-- Moving Services --}}
                <a href="{{ route('services.category', 'moving') }}" class="group block bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-primary/20 transform hover:-translate-y-2">
                    <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Moving Services</h3>
                    <p class="text-gray-600 mb-4">Furniture moving, packing, unpacking, and relocation services for stress-free moves.</p>
                    <div class="flex items-center text-primary font-semibold group-hover:gap-2 transition-all">
                        <span>View Services</span>
                        <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                </a>

                {{-- Painting Services --}}
                <a href="{{ route('services.category', 'painting') }}" class="group block bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-primary/20 transform hover:-translate-y-2">
                    <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Painting Services</h3>
                    <p class="text-gray-600 mb-4">Interior and exterior painting, wallpaper installation, and color consultation services.</p>
                    <div class="flex items-center text-primary font-semibold group-hover:gap-2 transition-all">
                        <span>View Services</span>
                        <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                </a>

                {{-- Gardening Services --}}
                <a href="{{ route('services.category', 'gardening') }}" class="group block bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-primary/20 transform hover:-translate-y-2">
                    <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-lime-500 to-green-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Gardening Services</h3>
                    <p class="text-gray-600 mb-4">Lawn care, landscaping, tree trimming, and garden maintenance for beautiful outdoor spaces.</p>
                    <div class="flex items-center text-primary font-semibold group-hover:gap-2 transition-all">
                        <span>View Services</span>
                        <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- How It Works --}}
    <section class="section-full-width py-20 md:py-28 bg-gray-50">
        <div class="section-content-contained">
            <x-how-it-works />
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="section-full-width py-20 md:py-28 bg-gradient-to-r from-primary via-secondary to-accent">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                    Ready to Get Started?
                </h2>
                <p class="text-xl text-white/90 mb-10 max-w-2xl mx-auto">
                    Book your service appointment online or call us today for same-day availability!
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <x-button
                        href="{{ route('services.index') }}"
                        variant="secondary"
                        size="xl"
                        class="!bg-white !text-primary hover:!bg-gray-100">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Book Service Now
                    </x-button>
                    <x-button
                        href="tel:+18001234567"
                        variant="outline"
                        size="xl"
                        class="!border-white !text-white hover:!bg-white/10">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        Call (800) 123-4567
                    </x-button>
                </div>
            </div>
        </div>
    </section>

</x-main-layout>