<x-main-layout>
    <x-slot name="title">Licensed Electrical Services | SmartService</x-slot>

    {{-- Hero Section --}}
    <section class="section-full-width relative pt-24 pb-20 md:pt-32 md:pb-28 bg-gradient-to-br from-yellow-50 via-white to-orange-50">
        <div class="section-content-contained">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-block px-4 py-2 bg-yellow-100 text-yellow-700 rounded-full text-sm font-semibold mb-4">
                        Certified Electrical Services
                    </div>
                    <h1 class="text-4xl md:text-6xl font-black text-gray-900 mb-6">
                        Safe, Reliable
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-600 to-orange-600">Electrical Solutions</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-600 mb-8 leading-relaxed">
                        From installations to repairs and upgrades, our certified electricians ensure your home's electrical system is safe, efficient, and up to code.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <x-button href="{{ route('bookings.create') }}" variant="primary" size="lg">
                            Book Electrician
                        </x-button>
                        <x-button href="tel:+18001234567" variant="outline" size="lg">
                            Emergency Service
                        </x-button>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-yellow-500 to-orange-500 rounded-3xl p-8 shadow-2xl">
                        <div class="grid grid-cols-2 gap-4 text-white">
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">8K+</div>
                                <div class="text-sm opacity-90">Projects Done</div>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">100%</div>
                                <div class="text-sm opacity-90">Code Compliant</div>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">Licensed</div>
                                <div class="text-sm opacity-90">Electricians</div>
                            </div>
                            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 text-center">
                                <div class="text-3xl font-black mb-2">Safe</div>
                                <div class="text-sm opacity-90">Guaranteed</div>
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
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Electrical Services</h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                    Complete electrical solutions for safety, efficiency, and convenience.
                </p>
            </div>

            @php
            $subServices = [
            ['name' => 'Electrical Wiring & Rewiring', 'description' => 'New installations and complete rewiring services'],
            ['name' => 'Panel Upgrades', 'description' => 'Upgrade your electrical panel for modern demands'],
            ['name' => 'Lighting Installation', 'description' => 'Indoor and outdoor lighting solutions'],
            ['name' => 'Outlet & Switch Installation', 'description' => 'Add or replace outlets and switches'],
            ['name' => 'Ceiling Fan Installation', 'description' => 'Professional ceiling fan installation and repair'],
            ['name' => 'Home Automation', 'description' => 'Smart home electrical installations'],
            ['name' => 'Surge Protection', 'description' => 'Whole-home surge protection systems'],
            ['name' => 'Electrical Safety Inspections', 'description' => 'Comprehensive electrical safety audits'],
            ['name' => 'EV Charger Installation', 'description' => 'Electric vehicle charging station setup'],
            ];
            @endphp

            <x-sub-services-list :services="$subServices" />
        </div>
    </section>

    {{-- Benefits --}}
    <section class="section-full-width py-20 md:py-28 bg-gray-50">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Why Choose Our Electrical Services?</h2>
            </div>

            @php
            $benefits = [
            [
            'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>',
            'title' => 'Safety First Approach',
            'description' => 'All work meets or exceeds local electrical codes and safety standards.',
            'iconBg' => 'from-yellow-500 to-orange-500'
            ],
            [
            'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>',
            'title' => 'Licensed & Certified',
            'description' => 'Fully licensed electricians with ongoing training and certification.',
            'iconBg' => 'from-orange-500 to-red-500'
            ],
            [
            'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>',
            'title' => 'Warranty Backed',
            'description' => '2-year warranty on all electrical work and installations.',
            'iconBg' => 'from-cyan-500 to-blue-500'
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
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Electrical FAQs</h2>
            </div>

            <div class="max-w-3xl mx-auto">
                @php
                $faqs = [
                ['question' => 'Are your electricians licensed and insured?', 'answer' => 'Yes, all our electricians are fully licensed, bonded, and insured. We meet all local and state requirements for electrical contractors.'],
                ['question' => 'Do you handle both residential and commercial electrical work?', 'answer' => 'Yes, we provide electrical services for both residential homes and commercial properties, from small repairs to large-scale installations.'],
                ['question' => 'Can you upgrade my old electrical panel?', 'answer' => 'Absolutely. Panel upgrades are one of our specialties. We can assess your current panel and recommend the right upgrade to meet your electrical needs safely.'],
                ['question' => 'How do I know if my home needs electrical rewiring?', 'answer' => 'Signs include frequent breaker trips, flickering lights, burning smells, or if your home is over 40 years old. We offer free safety inspections to evaluate your system.'],
                ['question' => 'Do you install EV charging stations?', 'answer' => 'Yes, we install both Level 2 and Level 3 EV charging stations for residential and commercial properties.'],
                ];
                @endphp

                <x-faq-accordion :faqs="$faqs" />
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="section-full-width py-20 md:py-28 bg-gradient-to-r from-yellow-600 to-orange-600">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                    Power Your Home Safely
                </h2>
                <p class="text-xl text-white/90 mb-10">
                    Trust our certified electricians for all your electrical needs.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <x-button href="{{ route('bookings.create') }}" variant="secondary" size="xl" class="!bg-white !text-yellow-600 hover:!bg-gray-100">
                        Book Service
                    </x-button>
                    <x-button href="{{ route('services.index') }}" variant="outline" size="xl" class="!border-white !text-white hover:!bg-white/10">
                        View All Services
                    </x-button>
                </div>
            </div>
        </div>
    </section>

</x-main-layout>