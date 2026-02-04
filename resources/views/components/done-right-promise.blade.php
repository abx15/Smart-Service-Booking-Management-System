{{--
    Done Right Promise Component
    
    Dedicated guarantee section showcasing service promise
--}}

<section class="section-full-width py-20 md:py-28 bg-gradient-to-br from-primary/5 via-white to-secondary/5">
    <div class="section-content-contained">
        <div class="max-w-5xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                {{-- Left: Shield Icon & Promise --}}
                <div class="text-center md:text-left">
                    <div class="inline-flex items-center justify-center w-32 h-32 bg-gradient-to-br from-primary to-secondary rounded-full mb-6 shadow-2xl">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                        The Done Right<br>Promise
                    </h2>
                    <p class="text-xl text-gray-600 leading-relaxed">
                        We stand behind every job with our <strong>100% Satisfaction Guarantee</strong>. If you're not completely satisfied, we'll make it right.
                    </p>
                </div>

                {{-- Right: Benefits List --}}
                <div class="space-y-6">
                    <div class="flex items-start gap-4 p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-trust-green/10 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-2">Quality Workmanship</h3>
                            <p class="text-gray-600">Every technician is licensed, trained, and committed to excellence.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-trust-green/10 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-2">On-Time Arrival</h3>
                            <p class="text-gray-600">We respect your time. Arrive when scheduled or notify you in advance.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-trust-green/10 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-2">Warranty Protection</h3>
                            <p class="text-gray-600">All work backed by our comprehensive warranty for your peace of mind.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-trust-green/10 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-2">No Surprises Pricing</h3>
                            <p class="text-gray-600">Upfront quotes with no hidden fees. You'll know the cost before we start.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- CTA --}}
            <div class="mt-12 text-center">
                <a href="{{ route('bookings.create') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-primary to-secondary hover:from-primary-dark hover:to-secondary-dark text-white font-bold rounded-lg shadow-xl shadow-primary/30 transition transform hover:-translate-y-1 text-lg">
                    Experience the Difference
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>