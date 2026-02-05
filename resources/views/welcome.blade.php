<x-main-layout>
    <x-slot name="title">Professional Home Services You Can Trust</x-slot>

    {{-- 1. Hero Section - Full Width --}}
    <section class="section-full-width relative pt-16 pb-20 md:pt-32 md:pb-40 overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900">
        {{-- Background Pattern --}}
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <div class="w-full px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                {{-- Trust Badge Above Headline --}}
                <div class="inline-flex items-center gap-2 px-4 py-2 md:px-6 md:py-3 bg-white/10 backdrop-blur-md rounded-full border border-white/20 mb-6 md:mb-8">
                    <x-guarantee-badge size="sm" />
                    <span class="text-white font-semibold text-xs md:text-base">Trusted by 10,000+</span>
                </div>

                {{-- Main Headline --}}
                <h1 class="text-3xl sm:text-4xl md:text-6xl lg:text-7xl font-black text-white mb-4 md:mb-6 leading-tight px-2 break-words text-wrap">
                    Your Trusted Home Repair<br class="hidden sm:block">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-300 via-secondary-300 to-accent-300">Experts</span>
                </h1>

                {{-- Subheadline --}}
                <p class="text-base md:text-lg lg:text-xl text-gray-300 mb-6 md:mb-10 max-w-2xl mx-auto leading-relaxed px-4">
                    Licensed, insured, and background-checked professionals ready to help.
                </p>

                {{-- ZIP Code Search - Mobile Friendly --}}
                <div class="max-w-md mx-auto mb-6 md:mb-8 px-4 w-full">
                    <div class="flex flex-col sm:flex-row gap-3">
                        <input
                            type="text"
                            placeholder="Enter ZIP code"
                            class="w-full flex-1 px-4 py-3 md:px-6 md:py-4 text-base md:text-lg rounded-lg border-2 border-white/20 bg-white/10 backdrop-blur-md text-white placeholder-gray-400 focus:outline-none focus:border-primary focus:bg-white/20 transition">
                        <button class="w-full sm:w-auto px-6 py-3 md:px-8 md:py-4 bg-gradient-to-r from-primary to-secondary hover:from-primary-dark hover:to-secondary-dark text-white font-bold rounded-lg shadow-xl transition">
                            Find
                        </button>
                    </div>
                </div>

                {{-- CTAs --}}
                <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12 animate-float-in-up">
                    <x-button
                        href="{{ route('services.index') }}"
                        variant="primary"
                        size="xl"
                        class="group">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Request Service
                    </x-button>

                    <x-button
                        href="tel:+18001234567"
                        variant="outline"
                        size="xl"
                        class="!border-white !text-white hover:!bg-white hover:!text-gray-900">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        Call (800) 123-4567
                    </x-button>
                </div>

                {{-- Trust Indicators --}}
                <div class="flex flex-wrap justify-center gap-4 md:gap-8 text-white/80 text-sm">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Licensed & Insured</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>10+ Years Experience</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Same-Day Service Available</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 2. Trust Bar (NEW) --}}
    <x-trust-bar />

    {{-- 3. Service Categories - Residential & Commercial --}}
    <section class="section-full-width py-20 md:py-28 bg-white">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">Services for Every Need</h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                    Whether you're a homeowner or business, we have the expertise to deliver exceptional results.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                {{-- Residential Services Card --}}
                <div class="group relative overflow-hidden rounded-2xl bg-gradient-to-br from-primary/10 to-primary/5 p-8 border-2 border-primary/20 hover:border-primary hover:shadow-2xl hover:-translate-y-2 active:scale-95 transition-all duration-300">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-primary/10 rounded-full -mr-16 -mt-16"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Residential Services</h3>
                        <p class="text-gray-600 mb-6">Expert home repairs, remodeling, and maintenance for homeowners.</p>
                        <a href="/residential-services" class="inline-flex items-center gap-2 text-primary font-bold group-hover:gap-3 transition-all">
                            Explore Residential
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Commercial Services Card --}}
                <div class="group relative overflow-hidden rounded-2xl bg-gradient-to-br from-secondary/10 to-secondary/5 p-8 border-2 border-secondary/20 hover:border-secondary hover:shadow-2xl hover:-translate-y-2 active:scale-95 transition-all duration-300">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-secondary/10 rounded-full -mr-16 -mt-16"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-secondary to-secondary-dark rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Commercial Services</h3>
                        <p class="text-gray-600 mb-6">Professional facility maintenance and services for businesses.</p>
                        <a href="/commercial-services" class="inline-flex items-center gap-2 text-secondary font-bold group-hover:gap-3 transition-all">
                            Explore Commercial
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Emergency Services Card --}}
                <div class="group relative overflow-hidden rounded-2xl bg-gradient-to-br from-accent/10 to-accent/5 p-8 border-2 border-accent/20 hover:border-accent hover:shadow-2xl hover:-translate-y-2 active:scale-95 transition-all duration-300">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-accent/10 rounded-full -mr-16 -mt-16"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-accent to-accent-dark rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Emergency Repairs</h3>
                        <p class="text-gray-600 mb-6">24/7 emergency response for urgent home and facility repairs.</p>
                        <a href="tel:+18001234567" class="inline-flex items-center gap-2 text-accent font-bold group-hover:gap-3 transition-all">
                            Call Now
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 4. Popular Services Grid (NEW - Expanded) --}}
    <x-popular-services-grid />

    {{-- 5. Done Right Promise (NEW) --}}
    <x-done-right-promise />

    {{-- 6. Industries We Serve (NEW) --}}
    <x-industries-grid />

    {{-- 7. How It Works --}}
    <x-how-it-works />

    {{-- 8. Why Choose Us (Expanded - NEW) --}}
    <x-why-choose-us-expanded />

    {{-- 9. Testimonials Slider --}}
    <section class="section-full-width py-20 md:py-28 bg-white">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">Hear From Our Customers</h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                    Real people, real results. See why thousands trust SmartService for their home needs.
                </p>
            </div>
            <x-testimonials-slider />
        </div>
    </section>

    {{-- 10. Service Areas / Coverage (NEW) --}}
    <section class="section-full-width py-20 md:py-28 bg-gradient-to-br from-gray-50 to-white">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">Proudly Serving Your Community</h2>
                <p class="text-lg md:text-xl text-gray-600 mb-12">
                    Local expertise, national standards. Find out if we serve your area.
                </p>

                <div class="max-w-md mx-auto mb-12 w-full">
                    <div class="flex flex-col sm:flex-row gap-3">
                        <input
                            type="text"
                            placeholder="Enter city or ZIP"
                            class="w-full flex-1 px-4 py-3 md:px-6 md:py-4 text-base md:text-lg rounded-lg border-2 border-gray-300 focus:border-primary focus:outline-none transition">
                        <button class="w-full sm:w-auto px-6 py-3 md:px-8 md:py-4 bg-primary hover:bg-primary-dark text-white font-bold rounded-lg transition">
                            Search
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-left">
                    <div class="flex items-center gap-2 text-gray-700">
                        <svg class="w-5 h-5 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                        <span>Downtown Area</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-700">
                        <svg class="w-5 h-5 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                        <span>Suburbs</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-700">
                        <svg class="w-5 h-5 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                        <span>Metro Region</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-700">
                        <svg class="w-5 h-5 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                        <span>Nearby Cities</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 11. Partners & Certifications (NEW) --}}
    <section class="section-full-width py-20 md:py-28 bg-white border-y border-gray-200">
        <div class="section-content-contained">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-black text-gray-900 mb-4">Trusted Partners & Certifications</h2>
                <p class="text-gray-600">Working with industry-leading brands and certified professionals</p>
            </div>
            <x-partners-slider />
        </div>
    </section>

    {{-- 12. FAQ Section (Inline - NEW) --}}
    <section class="section-full-width py-20 md:py-28 bg-gray-50">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">Frequently Asked Questions</h2>
                    <p class="text-lg md:text-xl text-gray-600">
                        Quick answers to common questions about our services
                    </p>
                </div>

                <div class="space-y-4">
                    <x-faq-accordion
                        question="What areas do you serve?"
                        answer="We serve the entire metro area and surrounding suburbs. Enter your ZIP code above to confirm service availability in your location." />
                    <x-faq-accordion
                        question="How quickly can you respond?"
                        answer="We offer same-day service for most requests. Emergency repairs are available 24/7. Standard appointments can be scheduled at your convenience." />
                    <x-faq-accordion
                        question="Are your technicians licensed and insured?"
                        answer="Yes! All our technicians are fully licensed, insured, and undergo comprehensive background checks. We maintain all necessary certifications and insurance coverage." />
                    <x-faq-accordion
                        question="Do you offer warranties on your work?"
                        answer="Absolutely. All work is backed by our comprehensive warranty. Specific warranty terms depend on the service provided." />
                    <x-faq-accordion
                        question="How much do services cost?"
                        answer="We provide upfront, transparent pricing before any work begins. Request a free quote online or call us for an estimate." />
                </div>

                <div class="mt-12 text-center">
                    <a href="{{ route('faq') }}" class="inline-flex items-center gap-2 text-primary font-bold hover:gap-3 transition-all text-lg">
                        View All FAQs
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- 13. Final Strong CTA Section --}}
    <section class="section-full-width py-24 md:py-32 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <div class="section-content-contained relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-6xl font-black text-white mb-6 leading-tight">
                    Ready to Get Started?
                </h2>
                <p class="text-xl text-gray-300 mb-10 max-w-2xl mx-auto">
                    Join thousands of satisfied customers who trust SmartService for quality, reliability, and professionalism.
                </p>

                <div class="flex flex-col sm:flex-row gap-6 justify-center mb-12">
                    <a href="{{ route('bookings.create') }}" class="inline-flex items-center justify-center gap-3 px-10 py-5 bg-gradient-to-r from-primary to-secondary hover:from-primary-dark hover:to-secondary-dark text-white text-lg font-bold rounded-lg shadow-2xl shadow-primary/50 transition transform hover:-translate-y-1">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Request Service Now
                    </a>
                    <a href="tel:+18001234567" class="inline-flex items-center justify-center gap-3 px-10 py-5 bg-white/10 backdrop-blur-md hover:bg-white/20 border-2 border-white text-white text-lg font-bold rounded-lg transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        (800) 123-4567
                    </a>
                </div>

                <div class="flex flex-wrap justify-center gap-8 text-white/70 text-sm">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Emergency Service Available</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Free Quotes</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span>Satisfaction Guaranteed</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-main-layout>