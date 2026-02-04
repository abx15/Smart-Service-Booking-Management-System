<x-main-layout>
    <x-slot name="title">About Us - SmartService</x-slot>

    {{-- Hero Section --}}
    <section class="section-full-width relative pt-24 pb-20 md:pt-32 md:pb-28 bg-gradient-to-br from-primary/10 via-white to-secondary/5">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-block px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-semibold mb-4">
                    About SmartService
                </div>
                <h1 class="text-4xl md:text-6xl font-black text-gray-900 mb-6">
                    Your Trusted Home
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">Service Partner</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-600 leading-relaxed">
                    For over a decade, we've been helping homeowners maintain, repair, and improve their homes with professional, reliable service you can count on.
                </p>
            </div>
        </div>
    </section>

    {{-- Company Story --}}
    <section class="section-full-width py-20 md:py-28 bg-white">
        <div class="section-content-contained">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">Our Story</h2>
                    <div class="space-y-4 text-gray-600 text-lg leading-relaxed">
                        <p>
                            SmartService was founded in 2013 with a simple mission: to provide homeowners with trustworthy, professional home service professionals they can rely on.
                        </p>
                        <p>
                            What started as a small team of dedicated craftsmen has grown into a comprehensive home services company serving thousands of satisfied customers across the region.
                        </p>
                        <p>
                            Today, we're proud to offer a full range of services from plumbing and electrical work to painting, cleaning, and landscaping - all backed by our 100% satisfaction guarantee.
                        </p>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-primary to-secondary rounded-3xl p-8 shadow-2xl">
                    <div class="grid grid-cols-2 gap-6 text-white">
                        <div class="text-center">
                            <div class="text-5xl font-black mb-2">10+</div>
                            <div class="text-sm opacity-90">Years in Business</div>
                        </div>
                        <div class="text-center">
                            <div class="text-5xl font-black mb-2">25K+</div>
                            <div class="text-sm opacity-90">Happy Customers</div>
                        </div>
                        <div class="text-center">
                            <div class="text-5xl font-black mb-2">100+</div>
                            <div class="text-sm opacity-90">Skilled Professionals</div>
                        </div>
                        <div class="text-center">
                            <div class="text-5xl font-black mb-2">99%</div>
                            <div class="text-sm opacity-90">Satisfaction Rate</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Mission & Values --}}
    <section class="section-full-width py-20 md:py-28 bg-gray-50">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Mission & Values</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    We're committed to excellence in everything we do.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- Quality --}}
                <div class="bg-white rounded-2xl p-8 text-center shadow-md hover:shadow-xl transition-all">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Quality First</h3>
                    <p class="text-gray-600">
                        We never compromise on quality. Every job is completed to the highest standards with meticulous attention to detail.
                    </p>
                </div>

                {{-- Trust --}}
                <div class="bg-white rounded-2xl p-8 text-center shadow-md hover:shadow-xl transition-all">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Trustworthy</h3>
                    <p class="text-gray-600">
                        All our professionals are background-checked, licensed, and insured. Your home is in safe hands.
                    </p>
                </div>

                {{-- Customer Focus --}}
                <div class="bg-white rounded-2xl p-8 text-center shadow-md hover:shadow-xl transition-all">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Customer Focused</h3>
                    <p class="text-gray-600">
                        Your satisfaction is our priority. We listen, communicate clearly, and ensure you're happy with every job.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Team Section --}}
    <section class="section-full-width py-20 md:py-28 bg-white">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Meet Our Leadership</h2>
                <p class="text-lg text-gray-600">
                    Experienced professionals dedicated to your satisfaction.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                {{-- Team Member 1 --}}
                <div class="text-center">
                    <div class="w-32 h-32 mx-auto mb-4 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center shadow-xl">
                        <span class="text-white text-4xl font-black">JD</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-1">John Davis</h3>
                    <p class="text-primary font-semibold mb-2">Founder & CEO</p>
                    <p class="text-gray-600 text-sm">
                        15+ years in home services with a passion for customer satisfaction.
                    </p>
                </div>

                {{-- Team Member 2 --}}
                <div class="text-center">
                    <div class="w-32 h-32 mx-auto mb-4 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-full flex items-center justify-center shadow-xl">
                        <span class="text-white text-4xl font-black">SM</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Sarah Mitchell</h3>
                    <p class="text-primary font-semibold mb-2">Operations Director</p>
                    <p class="text-gray-600 text-sm">
                        Ensures every job meets our high standards of excellence.
                    </p>
                </div>

                {{-- Team Member 3 --}}
                <div class="text-center">
                    <div class="w-32 h-32 mx-auto mb-4 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full flex items-center justify-center shadow-xl">
                        <span class="text-white text-4xl font-black">MC</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Mike Chen</h3>
                    <p class="text-primary font-semibold mb-2">Chief Technician</p>
                    <p class="text-gray-600 text-sm">
                        Master craftsman with expertise across all service categories.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Certifications --}}
    <section class="section-full-width py-20 md:py-28 bg-gray-50">
        <div class="section-content-contained">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Certified & Trusted</h2>
            </div>

            <x-trust-badges layout="grid" />

            <div class="mt-16 text-center">
                <div class="inline-flex items-center gap-8 flex-wrap justify-center">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-trust-green rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="text-left">
                            <div class="font-bold text-gray-900">BBB Accredited</div>
                            <div class="text-sm text-gray-600">A+ Rating</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-trust-green rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="text-left">
                            <div class="font-bold text-gray-900">Industry Certified</div>
                            <div class="text-sm text-gray-600">Multiple Awards</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="section-full-width py-20 md:py-28 bg-gradient-to-r from-primary via-secondary to-accent">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                    Experience the SmartService Difference
                </h2>
                <p class="text-xl text-white/90 mb-10">
                    Join thousands of satisfied homeowners who trust us with their home services.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <x-button href="{{ route('services.index') }}" variant="secondary" size="xl" class="!bg-white !text-primary hover:!bg-gray-100">
                        View Our Services
                    </x-button>
                    <x-button href="{{ route('contact') }}" variant="outline" size="xl" class="!border-white !text-white hover:!bg-white/10">
                        Contact Us
                    </x-button>
                </div>
            </div>
        </div>
    </section>

</x-main-layout>