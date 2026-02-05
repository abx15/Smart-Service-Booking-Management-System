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
                        <x-button href="#available-packages" variant="primary" size="lg">
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

    {{-- NEW: Available Packages (DB Driven) --}}
    <section id="available-packages" class="section-full-width py-16 bg-blue-50">
        <div class="section-content-contained">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Book a Service</h2>
                <p class="text-gray-600">Select a package below to book immediately.</p>
            </div>

            @if(isset($services) && $services->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($services as $service)
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition flex flex-col">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $service->name }}</h3>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">{{ $service->short_description ?? 'Professional plumbing service.' }}</p>
                    <div class="flex items-end justify-between mt-4">
                        <div>
                            <span class="text-2xl font-bold text-indigo-600">${{ $service->price }}</span>
                        </div>
                        <a href="{{ route('bookings.create', ['service_id' => $service->id]) }}" class="px-6 py-2 bg-indigo-600 text-white font-bold rounded-lg hover:bg-indigo-700 transition">
                            Book Now
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="text-center py-8 bg-white rounded-xl shadow border border-gray-100">
                <p class="text-gray-500">No specific packages available online right now. Please call for a custom quote.</p>
                <a href="tel:+18001234567" class="inline-block mt-4 px-6 py-3 bg-indigo-600 text-white font-bold rounded-lg">Call Us</a>
            </div>
            @endif
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
            {{-- ... existing subServices ... --}}
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
    {{-- ... benefits section ... --}}
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
                    <x-button href="#available-packages" variant="outline" size="xl" class="!border-white !text-white hover:!bg-white/10">
                        Schedule Appointment
                    </x-button>
                </div>
            </div>
        </div>
    </section>

</x-main-layout>