<x-main-layout>
    <x-slot name="title">Professional Gardening & Landscaping Services | SmartService</x-slot>

    {{-- Hero Section --}}
    <section class="section-full-width relative pt-24 pb-20 md:pt-32 md:pb-28 bg-gradient-to-br from-lime-50 via-white to-green-50">
        <div class="section-content-contained">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-block px-4 py-2 bg-lime-100 text-lime-700 rounded-full text-sm font-semibold mb-4">
                        Professional Gardening Services
                    </div>
                    <h1 class="text-4xl md:text-6xl font-black text-gray-900 mb-6">
                        Beautiful Gardens,
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-lime-600 to-green-600">Maintained Perfectly</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-600 mb-8 leading-relaxed">
                        From lawn care to complete landscaping, our gardening experts keep your outdoor spaces beautiful, healthy, and thriving all year round.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <x-button href="{{ route('bookings.create') }}" variant="primary" size="lg">
                            Book Gardening Service
                        </x-button>
                        <x-button href="tel:+18001234567" variant="outline" size="lg">
                            Get Landscape Quote
                        </x-button>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-lime-500 to-green-500 rounded-3xl p-8 shadow-2xl">
                        <div class="grid grid-cols-2 gap-4 text-white">
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">500+</div>
                                <div class="text-sm opacity-90">Lawns Maintained</div>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">Eco</div>
                                <div class="text-sm opacity-90">Friendly</div>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">Year-Round</div>
                                <div class="text-sm opacity-90">Service</div>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">Expert</div>
                                <div class="text-sm opacity-90">Landscapers</div>
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
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Gardening Services</h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                    Complete lawn and garden care for beautiful outdoor living spaces.
                </p>
            </div>

            @php
            $subServices = [
            ['name' => 'Lawn Mowing & Edging', 'description' => 'Regular lawn maintenance and trimming'],
            ['name' => 'Landscaping Design', 'description' => 'Custom garden and yard design'],
            ['name' => 'Tree Trimming & Pruning', 'description' => 'Professional tree care services'],
            ['name' => 'Hedge Trimming', 'description' => 'Shape and maintain hedges and bushes'],
            ['name' => 'Garden Bed Maintenance', 'description' => 'Weeding, mulching, and planting'],
            ['name' => 'Seasonal Cleanup', 'description' => 'Spring and fall yard cleanup'],
            ['name' => 'Irrigation System Installation', 'description' => 'Sprinkler system setup and repair'],
            ['name' => 'Fertilization & Weed Control', 'description' => 'Lawn treatment programs'],
            ['name' => 'Sod Installation', 'description' => 'New lawn installation services'],
            ];
            @endphp

            <x-sub-services-list :services="$subServices" />
        </div>
    </section>

    {{-- Benefits --}}
    <section class="section-full-width py-20 md:py-28 bg-gray-50">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Why Choose Our Gardening Services?</h2>
            </div>

            @php
            $benefits = [
            [
            'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>',
            'title' => 'Eco-Friendly Practices',
            'description' => 'We use sustainable methods and organic products to protect the environment.',
            'iconBg' => 'from-lime-500 to-green-600'
            ],
            [
            'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>',
            'title' => 'Flexible Scheduling',
            'description' => 'Weekly, bi-weekly, or monthly service plans to fit your needs.',
            'iconBg' => 'from-blue-500 to-cyan-500'
            ],
            [
            'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>',
            'title' => 'Professional Expertise',
            'description' => 'Certified landscapers with extensive knowledge of plants and design.',
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
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Service Plans</h2>
                <p class="text-lg text-gray-600">Choose the plan that works for you</p>
            </div>

            <div class="max-w-4xl mx-auto bg-white rounded-2xl border-2 border-gray-200 p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-lime-600 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">Basic Lawn Care: $45-$65</h4>
                            <p class="text-sm text-gray-600">Per visit (mowing & edging)</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-lime-600 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">Full Service: $85-$120</h4>
                            <p class="text-sm text-gray-600">Includes trimming & cleanup</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-lime-600 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">Tree Services: From $150</h4>
                            <p class="text-sm text-gray-600">Trimming and pruning</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-lime-600 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-1">Landscaping: Custom Quote</h4>
                            <p class="text-sm text-gray-600">Based on project scope</p>
                        </div>
                    </div>
                </div>
                <div class="mt-8 p-4 bg-lime-50 rounded-xl">
                    <p class="text-sm text-gray-700"><strong>Save 15%:</strong> Subscribe to monthly or seasonal plans and save on every visit!</p>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="section-full-width py-20 md:py-28 bg-gray-50">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Gardening FAQs</h2>
            </div>

            <div class="max-w-3xl mx-auto">
                @php
                $faqs = [
                ['question' => 'How often should I have my lawn mowed?', 'answer' => 'During the growing season (spring/summer), weekly mowing is ideal. In fall, bi-weekly is usually sufficient. We can create a custom schedule based on your lawn\'s needs.'],
                ['question' => 'Do you provide your own equipment?', 'answer' => 'Yes, we bring all necessary professional equipment including mowers, trimmers, blowers, and more.'],
                ['question' => 'What if it rains on my scheduled day?', 'answer' => 'We\'ll reschedule to the next available day. We don\'t mow wet grass as it can damage your lawn and our equipment.'],
                ['question' => 'Can you help with landscape design?', 'answer' => 'Absolutely! We offer complete landscape design services including plant selection, hardscaping ideas, and ongoing maintenance plans.'],
                ['question' => 'Are your products safe for pets and children?', 'answer' => 'Yes, we use eco-friendly and organic products that are safe for families and pets. We can also provide pet-safe alternatives for all treatments.'],
                ];
                @endphp

                <x-faq-accordion :faqs="$faqs" />
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="section-full-width py-20 md:py-28 bg-gradient-to-r from-lime-600 to-green-600">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                    Ready for a Beautiful Lawn?
                </h2>
                <p class="text-xl text-white/90 mb-10">
                    Get professional gardening services that make your neighbors jealous!
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <x-button href="{{ route('bookings.create') }}" variant="secondary" size="xl" class="!bg-white !text-lime-600 hover:!bg-gray-100">
                        Schedule Service
                    </x-button>
                    <x-button href="{{ route('services.index') }}" variant="outline" size="xl" class="!border-white !text-white hover:!bg-white/10">
                        View All Services
                    </x-button>
                </div>
            </div>
        </div>
    </section>

</x-main-layout>