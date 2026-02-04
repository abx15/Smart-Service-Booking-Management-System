{{--
    Commercial Mega Menu Component
    
    Full-width dropdown with commercial services and industries
--}}

<div x-show="open"
    @click.outside="open = false"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 translate-y-1"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 translate-y-1"
    style="display: none;"
    x-cloak
    class="absolute left-0 right-0 z-50 mt-2 w-full bg-white shadow-2xl border-t-4 border-secondary">

    <div class="section-content-contained py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            {{-- Column 1: Industries We Serve --}}
            <div>
                <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    Industries
                </h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-700 hover:text-secondary transition-colors">Healthcare Facilities</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-secondary transition-colors">Retail Stores</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-secondary transition-colors">Hotels & Hospitality</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-secondary transition-colors">Office Buildings</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-secondary transition-colors">Restaurants</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-secondary transition-colors">Manufacturing</a></li>
                </ul>
            </div>

            {{-- Column 2: Commercial Services --}}
            <div>
                <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Services
                </h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-700 hover:text-secondary transition-colors">Facility Maintenance</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-secondary transition-colors">Commercial Repairs</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-secondary transition-colors">Preventive Maintenance</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-secondary transition-colors">Emergency Services</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-secondary transition-colors">Property Management</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-secondary transition-colors">Tenant Make-Ready</a></li>
                </ul>
            </div>

            {{-- Column 3: Specialized Services --}}
            <div>
                <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                    Compliance
                </h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-700 hover:text-secondary transition-colors">ADA Compliance</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-secondary transition-colors">Code Compliance</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-secondary transition-colors">Safety Inspections</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-secondary transition-colors">Fire Safety</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-secondary transition-colors">Building Maintenance</a></li>
                </ul>
            </div>

            {{-- Column 4: CTA Column --}}
            <div class="bg-gradient-to-br from-secondary/10 to-secondary/5 p-6 rounded-lg">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Business Solutions</h3>
                <p class="text-gray-700 mb-6 text-sm leading-relaxed">
                    Comprehensive facility maintenance and repair services tailored for commercial properties and businesses of all sizes.
                </p>
                <div class="space-y-3">
                    <a href="#" class="block w-full bg-secondary hover:bg-secondary-600 text-white px-4 py-2 rounded-lg text-center font-semibold transition-colors">
                        Get Business Quote
                    </a>
                    <a href="#" class="inline-flex items-center gap-2 text-secondary font-semibold hover:gap-3 transition-all">
                        View All Commercial Services
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                {{-- Trust Indicators --}}
                <div class="mt-6 pt-6 border-t border-gray-300">
                    <div class="space-y-2 text-sm text-gray-600">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Licensed & Insured
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            24/7 Emergency Service
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Competitive Pricing
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>