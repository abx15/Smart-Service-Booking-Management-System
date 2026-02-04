<x-main-layout>
    <x-slot name="title">Commercial Services - Professional Facility Maintenance & Repairs</x-slot>

    {{-- Hero Section --}}
    <section class="section-full-width relative pt-24 pb-20 md:pt-32 md:pb-28 bg-gradient-to-br from-secondary/10 via-white to-secondary/5">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-flex items-center gap-2 px-6 py-3 bg-secondary/10 rounded-full mb-6">
                    <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    <span class="text-secondary font-semibold">Commercial Services</span>
                </div>

                <h1 class="text-4xl md:text-6xl font-black text-gray-900 mb-6 leading-tight">
                    Professional Services<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-secondary to-secondary-dark">For Your Business</span>
                </h1>

                <p class="text-lg md:text-xl text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed">
                    Comprehensive facility maintenance, repairs, and commercial property services for businesses of all sizes. Licensed, insured, and available 24/7.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <x-button href="{{ route('bookings.create') }}" variant="secondary" size="xl">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Get Business Quote
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

    {{-- Industries We Serve --}}
    <x-industries-grid
        title="Industries We Serve"
        subtitle="Trusted commercial services for every sector" />

    {{-- Commercial Services Grid --}}
    <section class="section-full-width py-20 md:py-28 bg-gray-50">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">Our Commercial Services</h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                    Complete facility maintenance solutions for your business needs
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Facility Maintenance --}}
                <div class="group p-8 bg-white rounded-2xl border-2 border-gray-200 hover:border-secondary hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-gradient-to-br from-secondary to-secondary-dark rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-secondary transition-colors">Facility Maintenance</h3>
                    <p class="text-gray-600 mb-4">Regular maintenance programs, preventive care, and emergency repairs for commercial properties.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            24/7 Emergency Response
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Preventive Maintenance Plans
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Customized Service Contracts
                        </li>
                    </ul>
                </div>

                {{-- Commercial Repairs --}}
                <div class="group p-8 bg-white rounded-2xl border-2 border-gray-200 hover:border-secondary hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-gradient-to-br from-secondary to-secondary-dark rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-secondary transition-colors">Commercial Repairs</h3>
                    <p class="text-gray-600 mb-4">Quick response technical repairs for HVAC, plumbing, electrical, and structural issues.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Licensed Master Technicians
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Minimal Business Disruption
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Same-Day Service Available
                        </li>
                    </ul>
                </div>

                {{-- Compliance Services --}}
                <div class="group p-8 bg-white rounded-2xl border-2 border-gray-200 hover:border-secondary hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-gradient-to-br from-secondary to-secondary-dark rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-secondary transition-colors">Code Compliance</h3>
                    <p class="text-gray-600 mb-4">ADA compliance, building codes, safety inspections, and regulatory requirements.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            ADA Compliance Expertise
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Fire & Safety Inspections
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Building Code Experts
                        </li>
                    </ul>
                </div>

                {{-- Property Management --}}
                <div class="group p-8 bg-white rounded-2xl border-2 border-gray-200 hover:border-secondary hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-gradient-to-br from-secondary to-secondary-dark rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-secondary transition-colors">Property Management Support</h3>
                    <p class="text-gray-600 mb-4">Dedicated services for property management companies and multi-unit facilities.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Tenant Make-Ready
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Common Area Maintenance
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Bulk Service Discounts
                        </li>
                    </ul>
                </div>

                {{-- Emergency Services --}}
                <div class="group p-8 bg-white rounded-2xl border-2 border-gray-200 hover:border-secondary hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-gradient-to-br from-accent to-accent-dark rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-accent transition-colors">24/7 Emergency Response</h3>
                    <p class="text-gray-600 mb-4">Immediate response for critical facility emergencies, any time day or night.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Always Available
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Rapid Response Teams
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Priority Service
                        </li>
                    </ul>
                </div>

                {{-- Preventive Maintenance --}}
                <div class="group p-8 bg-white rounded-2xl border-2 border-gray-200 hover:border-secondary hover:shadow-xl transition-all">
                    <div class="w-16 h-16 bg-gradient-to-br from-secondary to-secondary-dark rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-secondary transition-colors">Preventive Maintenance</h3>
                    <p class="text-gray-600 mb-4">Scheduled maintenance programs to prevent costly breakdowns and extend equipment life.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Scheduled Inspections
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Cost-Saving Programs
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Extended Equipment Life
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Why Choose Us for Commercial --}}
    <section class="section-full-width py-20 md:py-28 bg-white">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">Why Businesses Trust Us</h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                    Professional, reliable, and business-focused service delivery
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-secondary to-secondary-dark rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Minimal Disruption</h3>
                    <p class="text-gray-600">We work around your business hours to minimize operational impact.</p>
                </div>

                <div class="text-center p-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-secondary to-secondary-dark rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Competitive Pricing</h3>
                    <p class="text-gray-600">Volume discounts and customized contracts for long-term partnerships.</p>
                </div>

                <div class="text-center p-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-secondary to-secondary-dark rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Licensed & Certified</h3>
                    <p class="text-gray-600">Fully licensed, insured, and certified for commercial work in all industries.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="section-full-width py-20 md:py-28 bg-gradient-to-br from-secondary to-secondary-dark">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                    Partner With Us for Your Business Needs
                </h2>
                <p class="text-xl text-white/90 mb-10">
                    Get a customized quote tailored to your facility and budget.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('bookings.create') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white hover:bg-gray-100 text-secondary font-bold rounded-lg shadow-xl transition text-lg">
                        Request Business Quote
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="tel:+18001234567" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white/10 backdrop-blur-md hover:bg-white/20 border-2 border-white text-white font-bold rounded-lg transition text-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        Call for Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-main-layout>