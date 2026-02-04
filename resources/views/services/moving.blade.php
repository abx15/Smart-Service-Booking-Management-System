<x-main-layout>
    <x-slot name="title">Professional Moving Services | SmartService</x-slot>

    {{-- Hero Section --}}
    <section class="section-full-width relative pt-24 pb-20 md:pt-32 md:pb-28 bg-gradient-to-br from green-50 via-white to-emerald-50">
        <div class="section-content-contained">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-block px-4 py-2 bg-green-100 text-green-700 rounded-full text-sm font-semibold mb-4">
                        Professional Moving Services
                    </div>
                    <h1 class="text-4xl md:text-6xl font-black text-gray-900 mb-6">
                        Stress-Free Moving,
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-emerald-600">Easy Transitions</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-600 mb-8 leading-relaxed">
                        From furniture moving to full-service relocation, our experienced movers handle your belongings with care for a smooth, hassle-free move.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <x-button href="{{ route('bookings.create') }}" variant="primary" size="lg">
                            Get Moving Quote
                        </x-button>
                        <x-button href="tel:+18001234567" variant="outline" size="lg">
                            Call for Estimate
                        </x-button>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-green-500 to-emerald-500 rounded-3xl p-8 shadow-2xl">
                        <div class="grid grid-cols-2 gap-4 text-white">
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">3K+</div>
                                <div class="text-sm opacity-90">Moves Completed</div>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">98%</div>
                                <div class="text-sm opacity-90">Damage-Free</div>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">Insured</div>
                                <div class="text-sm opacity-90">& Bonded</div>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">Fast</div>
                                <div class="text-sm opacity-90">& Reliable</div>
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
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Moving Services</h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                    Complete moving solutions for residential and commercial relocations.
                </p>
            </div>

            @php
            $subServices = [
            ['name' => 'Furniture Moving', 'description' => 'Safe transport of heavy furniture and appliances'],
            ['name' => 'Home Relocation', 'description' => 'Complete house moving services'],
            ['name' => 'Apartment Moving', 'description' => 'Specialized apartment and condo moves'],
            ['name' => 'Office Relocation', 'description' => 'Business and office moving services'],
            ['name' => 'Packing Services', 'description' => 'Professional packing with quality materials'],
            ['name' => 'Unpacking Services', 'description' => 'Organized unpacking and setup'],
            ['name' => 'Loading & Unloading', 'description' => 'Help with truck loading/unloading only'],
            ['name' => 'Storage Solutions', 'description' => 'Temporary and long-term storage options'],
            ['name' => 'Moving Supplies', 'description' => 'Boxes, tape, and packing materials'],
            ];
            @endphp

            <x-sub-services-list :services="$subServices" />
        </div>
    </section>

    {{-- Benefits --}}
    <section class="section-full-width py-20 md:py-28 bg-gray-50">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Why Choose Our Moving Services?</h2>
            </div>

            @php
            $benefits = [
            [
            'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>',
            'title' => 'Fully Insured',
            'description' => 'Comprehensive insurance coverage protects your belongings during the move.',
            'iconBg' => 'from-green-500 to-emerald-600'
            ],
            [
            'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>',
            'title' => 'Experienced Team',
            'description' => 'Trained professionals who handle your items with care and efficiency.',
            'iconBg' => 'from-cyan-500 to-blue-500'
            ],
            [
            'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>',
            'title' => 'Transparent Pricing',
            'description' => 'Clear quotes with no hidden fees. Know exactly what you\'ll pay.',
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
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Moving Rates</h2>
                <p class="text-lg text-gray-600">Competitive pricing for quality service</p>
            </div>

            <div class="max-w-4xl mx-auto bg-white rounded-2xl border-2 border-gray-200 p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-green-600 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">Hourly Rate: $120-$180</h4>
                            <p class="text-sm text-gray-600">2 movers + truck (3hr minimum)</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-green-600 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">Flat Rate Moves: From $450</h4>
                            <p class="text-sm text-gray-600">Based on inventory and distance</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-green-600 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">Packing: $50-$80/hour</h4>
                            <p class="text-sm text-gray-600">Professional packing services</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-green-600 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">Storage: From $75/month</h4>
                            <p class="text-sm text-gray-600">Climate-controlled units available</p>
                        </div>
                    </div>
                </div>
                <div class="mt-8 p-4 bg-green-50 rounded-xl">
                    <p class="text-sm text-gray-700"><strong>Free Quote:</strong> Contact us for a detailed estimate based on your specific needs!</p>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="section-full-width py-20 md:py-28 bg-gray-50">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Moving FAQs</h2>
            </div>

            <div class="max-w-3xl mx-auto">
                @php
                $faqs = [
                ['question' => 'How far in advance should I book movers?', 'answer' => 'We recommend booking at least 2-3 weeks in advance, especially during peak moving season (May-September). However, we can often accommodate last-minute moves based on availability.'],
                ['question' => 'Do you provide packing materials?', 'answer' => 'Yes! We offer boxes, tape, bubble wrap, and other packing materials for purchase. We can also provide full packing services if you prefer professionals to handle it.'],
                ['question' => 'Are you insured?', 'answer' => 'Yes, we are fully licensed and insured. We carry both liability and cargo insurance to protect your belongings during the move.'],
                ['question' => 'What items can\'t you move?', 'answer' => 'We cannot move hazardous materials (paint, chemicals, propane), perishable foods, plants, or valuables like cash and jewelry. We\'ll provide a complete list during your consultation.'],
                ['question' => 'Do you disassemble and reassemble furniture?', 'answer' => 'Yes, we can disassemble large furniture items for transport and reassemble them at your new location as part of our service.'],
                ];
                @endphp

                <x-faq-accordion :faqs="$faqs" />
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="section-full-width py-20 md:py-28 bg-gradient-to-r from-green-600 to-emerald-600">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                    Ready to Make Your Move?
                </h2>
                <p class="text-xl text-white/90 mb-10">
                    Get a free quote and experience stress-free moving!
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <x-button href="{{ route('bookings.create') }}" variant="secondary" size="xl" class="!bg-white !text-green-600 hover:!bg-gray-100">
                        Get Free Quote
                    </x-button>
                    <x-button href="tel:+18001234567" variant="outline" size="xl" class="!border-white !text-white hover:!bg-white/10">
                        Call for Estimate
                    </x-button>
                </div>
            </div>
        </div>
    </section>

</x-main-layout>