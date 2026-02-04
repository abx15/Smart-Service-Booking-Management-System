<x-main-layout>
    <x-slot name="title">Professional Plumbing Services | SmartService</x-slot>

    {{-- Hero Section --}}
    <section class="section-full-width relative pt-24 pb-20 md:pt-32 md:pb-28 bg-gradient-to-br from-cyan-50 via-white to-blue-50">
        <div class="section-content-contained">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-block px-4 py-2 bg-cyan-100 text-cyan-700 rounded-full text-sm font-semibold mb-4">
                        Licensed Plumbing Services
                    </div>
                    <h1 class="text-4xl md:text-6xl font-black text-gray-900 mb-6">
                        Expert Plumbing,
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-cyan-600 to-blue-600">Fast & Reliable</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-600 mb-8 leading-relaxed">
                        From quick leak repairs to complete plumbing installations, our licensed plumbers deliver quality workmanship and emergency services when you need them.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <x-button href="{{ route('bookings.create') }}" variant="primary" size="lg">
                            Book Plumber Now
                        </x-button>
                        <x-button href="tel:+18001234567" variant="outline" size="lg">
                            24/7 Emergency Service
                        </x-button>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-cyan-500 to-blue-500 rounded-3xl p-8 shadow-2xl">
                        <div class="grid grid-cols-2 gap-4 text-white">
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">5K+</div>
                                <div class="text-sm opacity-90">Jobs Completed</div>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">24/7</div>
                                <div class="text-sm opacity-90">Emergency Service</div>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">Licensed</div>
                                <div class="text-sm opacity-90">& Insured</div>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">15+</div>
                                <div class="text-sm opacity-90">Years Experience</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Sub-Services --}}
    <section class="section-full-width py-20 md:py-28 bg-white">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Plumbing Services</h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                    Complete plumbing solutions for residential and commercial properties.
                </p>
            </div>

            @php
            $subServices = [
            ['name' => 'Leak Detection & Repair', 'description' => 'Find and fix leaks before they cause major damage'],
            ['name' => 'Drain Cleaning & Unclogging', 'description' => 'Professional drain and sewer line cleaning'],
            ['name' => 'Water Heater Installation & Repair', 'description' => 'Tank and tankless water heater services'],
            ['name' => 'Pipe Repair & Replacement', 'description' => 'Fix or replace damaged pipes'],
            ['name' => 'Toilet Repair & Installation', 'description' => 'Toilet repairs, replacements, and upgrades'],
            ['name' => 'Faucet & Fixture Installation', 'description' => 'Install sinks, faucets, and bathroom fixtures'],
            ['name' => 'Garbage Disposal Services', 'description' => 'Installation and repair of garbage disposals'],
            ['name' => 'Sump Pump Services', 'description' => 'Installation and maintenance of sump pumps'],
            ['name' => 'Emergency Plumbing', 'description' => '24/7 emergency plumbing response'],
            ];
            @endphp

            <x-sub-services-list :services="$subServices" />
        </div>
    </section>

    {{-- Benefits --}}
    <section class="section-full-width py-20 md:py-28 bg-gray-50">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Why Choose Our Plumbing Services?</h2>
            </div>

            @php
            $benefits = [
            [
            'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>',
            'title' => '24/7 Emergency Service',
            'description' => 'Plumbing emergencies don\'t wait. We\'re available around the clock to help.',
            'iconBg' => 'from-red-500 to-orange-500'
            ],
            [
            'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>',
            'title' => 'Licensed & Certified',
            'description' => 'All our plumbers are fully licensed, certified, and continuously trained.',
            'iconBg' => 'from-cyan-500 to-blue-500'
            ],
            [
            'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>',
            'title' => 'Upfront Pricing',
            'description' => 'Transparent quotes before we start work. No hidden fees or surprises.',
            'iconBg' => 'from-green-500 to-emerald-600'
            ]
            ];
            @endphp

            <x-service-benefits :benefits="$benefits" />
        </div>
    </section>

    {{-- Pricing --}}
    <section class="section-full-width py-20 md:py-28 bg-white">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Service Pricing</h2>
                <p class="text-lg text-gray-600">Fair rates for quality plumbing work</p>
            </div>

            <div class="max-w-4xl mx-auto bg-white rounded-2xl border-2 border-gray-200 p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-cyan-600 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">Service Call Fee: $79</h4>
                            <p class="text-sm text-gray-600">Includes diagnosis and quote</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-cyan-600 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">Hourly Rate: $95-$125</h4>
                            <p class="text-sm text-gray-600">Depends on complexity</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-cyan-600 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">Emergency Rate: $150/hour</h4>
                            <p class="text-sm text-gray-600">After hours & weekends</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-cyan-600 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">Flat Rate Options</h4>
                            <p class="text-sm text-gray-600">Available for common repairs</p>
                        </div>
                    </div>
                </div>
                <div class="mt-8 p-4 bg-cyan-50 rounded-xl">
                    <p class="text-sm text-gray-700"><strong>Note:</strong> Service call fee is waived if you proceed with the repair!</p>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="section-full-width py-20 md:py-28 bg-gray-50">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Plumbing FAQs</h2>
            </div>

            <div class="max-w-3xl mx-auto">
                @php
                $faqs = [
                ['question' => 'Do you offer 24/7 emergency plumbing?', 'answer' => 'Yes! We provide 24/7 emergency plumbing services for urgent issues like burst pipes, severe leaks, and blocked drains. Call us anytime and we\'ll dispatch a plumber immediately.'],
                ['question' => 'Are your plumbers licensed?', 'answer' => 'Absolutely. All our plumbers are fully licensed, insured, and undergo continuous training to stay updated with the latest techniques and codes.'],
                ['question' => 'How quickly can a plumber arrive?', 'answer' => 'For emergencies, we typically arrive within 1-2 hours. For scheduled appointments, we offer same-day or next-day service based on availability.'],
                ['question' => 'Do you provide a warranty on plumbing work?', 'answer' => 'Yes, all our plumbing work comes with a 1-year warranty on labor and we honor manufacturer warranties on parts and fixtures.'],
                ['question' => 'Can you help with older homes and outdated plumbing?', 'answer' => 'Yes, we specialize in working with older homes. We can assess your plumbing system and recommend repairs or upgrades to improve efficiency and prevent issues.'],
                ];
                @endphp

                <x-faq-accordion :faqs="$faqs" />
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="section-full-width py-20 md:py-28 bg-gradient-to-r from-cyan-600 to-blue-600">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                    Plumbing Emergency? We're Here to Help!
                </h2>
                <p class="text-xl text-white/90 mb-10">
                    Call now for 24/7 emergency service or book your appointment online.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <x-button href="tel:+18001234567" variant="secondary" size="xl" class="!bg-white !text-cyan-600 hover:!bg-gray-100">
                        Call Emergency Line
                    </x-button>
                    <x-button href="{{ route('bookings.create') }}" variant="outline" size="xl" class="!border-white !text-white hover:!bg-white/10">
                        Schedule Appointment
                    </x-button>
                </div>
            </div>
        </div>
    </section>

</x-main-layout>