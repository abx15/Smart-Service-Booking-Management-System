<x-main-layout>
    <x-slot name="title">Professional Cleaning Services | SmartService</x-slot>

    {{-- Hero Section --}}
    <section class="section-full-width relative pt-24 pb-20 md:pt-32 md:pb-28 bg-gradient-to-br from-blue-50 via-white to-blue-50">
        <div class="section-content-contained">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold mb-4">
                        Professional Cleaning Services
                    </div>
                    <h1 class="text-4xl md:text-6xl font-black text-gray-900 mb-6">
                        Spotless Clean,
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-600">Every Time</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-600 mb-8 leading-relaxed">
                        From deep cleaning to regular maintenance, our professional cleaning services ensure your home is spotless, sanitized, and welcoming.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <x-button href="#available-packages" variant="primary" size="lg">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Book Cleaning Service
                        </x-button>
                        <x-button href="tel:+18001234567" variant="outline" size="lg">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            Call Now
                        </x-button>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-blue-500 to-cyan-500 rounded-3xl p-8 shadow-2xl">
                        <div class="grid grid-cols-2 gap-4 text-white">
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">10K+</div>
                                <div class="text-sm opacity-90">Happy Clients</div>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">99%</div>
                                <div class="text-sm opacity-90">Satisfaction</div>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">24/7</div>
                                <div class="text-sm opacity-90">Availability</div>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">10+</div>
                                <div class="text-sm opacity-90">Years Experience</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- NEW: Available Packages (DB Driven) --}}
    <section id="available-packages" class="section-full-width py-16 bg-blue-50">
        <div class="section-content-contained">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Book a Cleaning Service</h2>
                <p class="text-gray-600">Select a package below to book immediately.</p>
            </div>

            @if(isset($services) && $services->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($services as $service)
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition flex flex-col">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $service->name }}</h3>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">{{ $service->short_description ?? 'Professional cleaning service.' }}</p>
                    <div class="flex items-end justify-between mt-4">
                        <div>
                            <span class="text-2xl font-bold text-cyan-600">${{ $service->price }}</span>
                        </div>
                        <a href="{{ route('bookings.create', ['service_id' => $service->id]) }}" class="px-6 py-2 bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-bold rounded-lg hover:from-blue-700 hover:to-cyan-700 transition">
                            Book Now
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="text-center py-8 bg-white rounded-xl shadow border border-gray-100">
                <p class="text-gray-500">No specific packages available online right now. Please call for a custom quote.</p>
                <a href="tel:+18001234567" class="inline-block mt-4 px-6 py-3 bg-cyan-600 text-white font-bold rounded-lg">Call Us</a>
            </div>
            @endif
        </div>
    </section>

    {{-- Sub-Services --}}
    <section class="section-full-width py-20 md:py-28 bg-white">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Cleaning Services</h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                    Comprehensive cleaning solutions tailored to your specific needs.
                </p>
            </div>

            @php
            $subServices = [
            ['name' => 'Deep Cleaning', 'description' => 'Thorough top-to-bottom cleaning of your entire home'],
            ['name' => 'Regular Maintenance Cleaning', 'description' => 'Weekly or bi-weekly cleaning to keep your home fresh'],
            ['name' => 'Move-In/Move-Out Cleaning', 'description' => 'Comprehensive cleaning for moving transitions'],
            ['name' => 'Spring Cleaning', 'description' => 'Seasonal deep cleaning and organization'],
            ['name' => 'Post-Construction Cleaning', 'description' => 'Remove dust and debris after renovations'],
            ['name' => 'Carpet & Upholstery Cleaning', 'description' => 'Professional steam cleaning for carpets and furniture'],
            ['name' => 'Window Cleaning', 'description' => 'Interior and exterior window washing'],
            ['name' => 'Kitchen Deep Clean', 'description' => 'Appliances, cabinets, and thorough sanitization'],
            ['name' => 'Bathroom Sanitization', 'description' => 'Complete bathroom cleaning and disinfection'],
            ];
            @endphp

            <x-sub-services-list :services="$subServices" />
        </div>
    </section>

    {{-- Benefits --}}
    <section class="section-full-width py-20 md:py-28 bg-gray-50">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Why Choose Our Cleaning Services?</h2>
            </div>

            @php
            $benefits = [
            [
            'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>',
            'title' => 'Eco-Friendly Products',
            'description' => 'We use safe, non-toxic cleaning products that are gentle on your family and pets.',
            'iconBg' => 'from-green-500 to-emerald-600'
            ],
            [
            'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>',
            'title' => 'Flexible Scheduling',
            'description' => 'Book cleanings that fit your schedule, including evenings and weekends.',
            'iconBg' => 'from-blue-500 to-cyan-500'
            ],
            [
            'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>',
            'title' => '100% Satisfaction Guaranteed',
            'description' => "Not happy? We'll re-clean the area at no additional cost within 24 hours.",
            'iconBg' => 'from-purple-500 to-pink-500'
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
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Transparent Pricing</h2>
                <p class="text-lg text-gray-600">No hidden fees. No surprises.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                {{-- Basic Package --}}
                <div class="bg-white rounded-2xl p-8 border-2 border-gray-200 hover:border-primary/50 transition-all">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Basic Clean</h3>
                    <div class="text-4xl font-black text-primary mb-6">$89<span class="text-lg text-gray-600 font-normal">/visit</span></div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-trust-green mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-600">Vacuum & mop floors</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-trust-green mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-600">Dust all surfaces</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-trust-green mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-600">Clean bathrooms</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-trust-green mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-600">Clean kitchen surfaces</span>
                        </li>
                    </ul>
                    <x-button href="{{ route('bookings.create') }}" variant="outline" size="lg" full-width="true">
                        Select Basic
                    </x-button>
                </div>

                {{-- Standard Package --}}
                <div class="bg-gradient-to-br from-primary to-secondary rounded-2xl p-8 text-white relative transform scale-105 shadow-2xl">
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-warning text-gray-900 px-4 py-1 rounded-full text-sm font-bold">
                        MOST POPULAR
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Deep Clean</h3>
                    <div class="text-4xl font-black mb-6">$149<span class="text-lg opacity-80 font-normal">/visit</span></div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Everything in Basic</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Inside oven & fridge</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Window cleaning (interior)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Baseboards & door frames</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Light fixture cleaning</span>
                        </li>
                    </ul>
                    <x-button href="{{ route('bookings.create') }}" variant="secondary" size="lg" full-width="true" class="!bg-white !text-primary hover:!bg-gray-100">
                        Select Deep Clean
                    </x-button>
                </div>

                {{-- Premium Package --}}
                <div class="bg-white rounded-2xl p-8 border-2 border-gray-200 hover:border-primary/50 transition-all">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Move-Out Clean</h3>
                    <div class="text-4xl font-black text-primary mb-6">$249<span class="text-lg text-gray-600 font-normal">/visit</span></div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-trust-green mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-600">Everything in Deep Clean</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-trust-green mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-600">Inside all cabinets</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-trust-green mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-600">Carpet steam cleaning</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-trust-green mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-600">Garage cleaning</span>
                        </li>
                    </ul>
                    <x-button href="{{ route('bookings.create') }}" variant="outline" size="lg" full-width="true">
                        Select Move-Out
                    </x-button>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="section-full-width py-20 md:py-28 bg-gray-50">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
            </div>

            <div class="max-w-3xl mx-auto">
                @php
                $faqs = [
                ['question' => 'Do I need to provide cleaning supplies?', 'answer' => 'No, we bring all necessary cleaning supplies and equipment. We use professional-grade, eco-friendly products that are safe for your family and pets.'],
                ['question' => 'How long does a cleaning session take?', 'answer' => 'A basic clean typically takes 2-3 hours, while a deep clean can take 4-6 hours depending on the size of your home and its current condition.'],
                ['question' => 'Are your cleaners background-checked?', 'answer' => 'Yes, all our cleaning professionals undergo thorough background checks and are fully insured and bonded for your peace of mind.'],
                ['question' => 'What if I\'m not satisfied with the cleaning?', 'answer' => 'We offer a 100% satisfaction guarantee. If you\'re not happy with any area we cleaned, contact us within 24 hours and we\'ll re-clean it at no additional cost.'],
                ['question' => 'Can I schedule regular recurring cleanings?', 'answer' => 'Absolutely! We offer flexible recurring schedules including weekly, bi-weekly, and monthly cleanings at discounted rates.'],
                ];
                @endphp

                <x-faq-accordion :faqs="$faqs" />
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="section-full-width py-20 md:py-28 bg-gradient-to-r from-blue-600 to-cyan-600">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                    Ready for a Spotless Home?
                </h2>
                <p class="text-xl text-white/90 mb-10">
                    Book your cleaning service today and experience the difference!
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <x-button href="{{ route('bookings.create') }}" variant="secondary" size="xl" class="!bg-white !text-blue-600 hover:!bg-gray-100">
                        Book Now
                    </x-button>
                    <x-button href="{{ route('services.index') }}" variant="outline" size="xl" class="!border-white !text-white hover:!bg-white/10">
                        View All Services
                    </x-button>
                </div>
            </div>
        </div>
    </section>

</x-main-layout>