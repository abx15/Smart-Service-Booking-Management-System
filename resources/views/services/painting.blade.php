<x-main-layout>
    <x-slot name="title">Professional Painting Services | SmartService</x-slot>

    {{-- Hero Section --}}
    <section class="section-full-width relative pt-24 pb-20 md:pt-32 md:pb-28 bg-gradient-to-br from-purple-50 via-white to-pink-50">
        <div class="section-content-contained">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-block px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-semibold mb-4">
                        Expert Painting Services
                    </div>
                    <h1 class="text-4xl md:text-6xl font-black text-gray-900 mb-6">
                        Transform Your Space,
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">One Brush at a Time</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-600 mb-8 leading-relaxed">
                        Professional interior and exterior painting services that bring color, protection, and beauty to your home or business.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <x-button href="#available-packages" variant="primary" size="lg">
                            Get Color Consultation
                        </x-button>
                        <x-button href="tel:+18001234567" variant="outline" size="lg">
                            Request Quote
                        </x-button>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-purple-500 to-pink-500 rounded-3xl p-8 shadow-2xl">
                        <div class="grid grid-cols-2 gap-4 text-white">
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">6K+</div>
                                <div class="text-sm opacity-90">Rooms Painted</div>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">100%</div>
                                <div class="text-sm opacity-90">Satisfaction</div>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">Premium</div>
                                <div class="text-sm opacity-90">Paints</div>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">Clean</div>
                                <div class="text-sm opacity-90">Finish</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- NEW: Available Packages (DB Driven) --}}
    <section id="available-packages" class="section-full-width py-16 bg-pink-50">
        <div class="section-content-contained">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Book Painting Service</h2>
                <p class="text-gray-600">Select a package to get started.</p>
            </div>

            @if(isset($services) && $services->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($services as $service)
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition flex flex-col">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $service->name }}</h3>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">{{ $service->short_description ?? 'Professional painting service.' }}</p>
                    <div class="flex items-end justify-between mt-4">
                        <div>
                            <span class="text-2xl font-bold text-purple-600">${{ $service->price }}</span>
                        </div>
                        <a href="{{ route('bookings.create', ['service_id' => $service->id]) }}" class="px-6 py-2 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-bold rounded-lg hover:from-purple-700 hover:to-pink-700 transition">
                            Book Now
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="text-center py-8 bg-white rounded-xl shadow border border-gray-100">
                <p class="text-gray-500">No specific packages available online right now. Please call for a custom quote.</p>
                <a href="tel:+18001234567" class="inline-block mt-4 px-6 py-3 bg-purple-600 text-white font-bold rounded-lg">Call Us</a>
            </div>
            @endif
        </div>
    </section>

    {{-- Sub-Services --}}
    <section class="section-full-width py-20 md:py-28 bg-white">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Painting Services</h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                    Complete painting solutions for every surface and style.
                </p>
            </div>

            @php
            $subServices = [
            ['name' => 'Interior Painting', 'description' => 'Walls, ceilings, trim, and more'],
            ['name' => 'Exterior Painting', 'description' => 'Siding, stucco, brick, and trim'],
            ['name' => 'Cabinet Painting & Refinishing', 'description' => 'Transform kitchens and bathrooms'],
            ['name' => 'Wallpaper Installation & Removal', 'description' => 'Professional wallpaper services'],
            ['name' => 'Ceiling Painting', 'description' => 'Smooth and textured ceiling painting'],
            ['name' => 'Trim & Molding Painting', 'description' => 'Detailed work on woodwork'],
            ['name' => 'Commercial Painting', 'description' => 'Office and retail space painting'],
            ['name' => 'Color Consultation', 'description' => 'Expert advice on color selection'],
            ['name' => 'Staining & Sealing', 'description' => 'Deck and fence staining services'],
            ];
            @endphp

            <x-sub-services-list :services="$subServices" />
        </div>
    </section>

    {{-- Benefits --}}
    <section class="section-full-width py-20 md:py-28 bg-gray-50">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Why Choose Our Painting Services?</h2>
            </div>

            @php
            $benefits = [
            [
            'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
            </svg>',
            'title' => 'Premium Paints',
            'description' => 'We use only top-quality paints from trusted brands for lasting results.',
            'iconBg' => 'from-purple-500 to-pink-500'
            ],
            [
            'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
            </svg>',
            'title' => 'Meticulous Preparation',
            'description' => 'Proper surface prep ensures a flawless, long-lasting finish.',
            'iconBg' => 'from-blue-500 to-cyan-500'
            ],
            [
            'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
            </svg>',
            'title' => 'Clean & Tidy',
            'description' => 'We protect your furniture and clean up thoroughly when done.',
            'iconBg' => 'from-green-500 to-emerald-600'
            ]
            ];
            @endphp

            <x-service-benefits :benefits="$benefits" />
        </div>
    </section>

    {{-- FAQ --}}
    <section class="section-full-width py-20 md:py-28 bg-white">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Painting FAQs</h2>
            </div>

            <div class="max-w-3xl mx-auto">
                @php
                $faqs = [
                ['question' => 'How long does it take to paint a room?', 'answer' => 'A standard 12x12 room typically takes 1-2 days, including prep work and drying time. Larger rooms or complex projects may take longer.'],
                ['question' => 'Do you move furniture?', 'answer' => 'Yes, we can move small to medium-sized furniture and will protect all items with drop cloths. For large furniture, we ask that you arrange for moving before we arrive.'],
                ['question' => 'What brands of paint do you use?', 'answer' => 'We use premium brands like Sherwin-Williams, Benjamin Moore, and Behr. We can also work with your preferred brand if requested.'],
                ['question' => 'How should I prepare for painters?', 'answer' => 'Clear the work area of small items, artwork, and fragile decorations. We\'ll handle the rest, including furniture protection and surface prep.'],
                ['question' => 'Do you offer color consultation?', 'answer' => 'Yes! We offer free color consultation to help you choose the perfect colors for your space.'],
                ];
                @endphp

                <x-faq-accordion :faqs="$faqs" />
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="section-full-width py-20 md:py-28 bg-gradient-to-r from-purple-600 to-pink-600">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                    Ready to Add Color to Your Life?
                </h2>
                <p class="text-xl text-white/90 mb-10">
                    Get a free quote and color consultation today!
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <x-button href="{{ route('bookings.create') }}" variant="secondary" size="xl" class="!bg-white !text-purple-600 hover:!bg-gray-100">
                        Get Free Quote
                    </x-button>
                    <x-button href="{{ route('services.index') }}" variant="outline" size="xl" class="!border-white !text-white hover:!bg-white/10">
                        View All Services
                    </x-button>
                </div>
            </div>
        </div>
    </section>

</x-main-layout>