{{--
    Why Choose Us Component
    
    Expanded section with 6 reasons to choose SmartService
--}}

@props([
'title' => 'Why Choose SmartService',
'subtitle' => 'What makes us the trusted choice for thousands of customers'
])

<section class="section-full-width py-16 md:py-24 bg-white">
    <div class="w-full px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-3xl md:text-5xl font-black text-gray-900 mb-4">{{ $title }}</h2>
            <p class="text-base md:text-xl text-gray-600 max-w-3xl mx-auto">{{ $subtitle }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            {{-- Certified Professionals --}}
            <div class="p-6 md:p-8 bg-gradient-to-br from-gray-50 to-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 group">
                <div class="w-12 h-12 md:w-14 md:h-14 bg-gradient-to-br from-primary to-secondary rounded-xl flex items-center justify-center mb-5 md:mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 md:w-7 md:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-3">Certified Professionals</h3>
                <p class="text-sm md:text-base text-gray-600 leading-relaxed">All technicians are licensed, background-checked, and undergo continuous training to deliver exceptional service.</p>
            </div>

            {{-- Upfront Pricing --}}
            <div class="p-6 md:p-8 bg-gradient-to-br from-gray-50 to-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 group">
                <div class="w-12 h-12 md:w-14 md:h-14 bg-gradient-to-br from-primary to-secondary rounded-xl flex items-center justify-center mb-5 md:mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 md:w-7 md:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-3">Transparent Pricing</h3>
                <p class="text-sm md:text-base text-gray-600 leading-relaxed">Know exactly what you'll pay before work begins. No hidden fees, no surprises—just honest, upfront pricing.</p>
            </div>

            {{-- Same-Day Service --}}
            <div class="p-6 md:p-8 bg-gradient-to-br from-gray-50 to-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 group">
                <div class="w-12 h-12 md:w-14 md:h-14 bg-gradient-to-br from-primary to-secondary rounded-xl flex items-center justify-center mb-5 md:mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 md:w-7 md:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-3">Same-Day Service Available</h3>
                <p class="text-sm md:text-base text-gray-600 leading-relaxed">Need urgent help? We offer same-day service for most requests. Book online or call today.</p>
            </div>

            {{-- Warranty Protection --}}
            <div class="p-6 md:p-8 bg-gradient-to-br from-gray-50 to-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 group">
                <div class="w-12 h-12 md:w-14 md:h-14 bg-gradient-to-br from-primary to-secondary rounded-xl flex items-center justify-center mb-5 md:mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 md:w-7 md:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-3">Warranty on All Work</h3>
                <p class="text-sm md:text-base text-gray-600 leading-relaxed">Every job is backed by our comprehensive warranty. Your peace of mind is our priority.</p>
            </div>

            {{-- Locally Owned --}}
            <div class="p-6 md:p-8 bg-gradient-to-br from-gray-50 to-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 group">
                <div class="w-12 h-12 md:w-14 md:h-14 bg-gradient-to-br from-primary to-secondary rounded-xl flex items-center justify-center mb-5 md:mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 md:w-7 md:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-3">Locally Owned</h3>
                <p class="text-sm md:text-base text-gray-600 leading-relaxed">We're part of your community. Supporting local families and businesses is what we do best.</p>
            </div>

            {{-- 24/7 Support --}}
            <div class="p-6 md:p-8 bg-gradient-to-br from-gray-50 to-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 group">
                <div class="w-12 h-12 md:w-14 md:h-14 bg-gradient-to-br from-primary to-secondary rounded-xl flex items-center justify-center mb-5 md:mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 md:w-7 md:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-3">24/7 Customer Support</h3>
                <p class="text-sm md:text-base text-gray-600 leading-relaxed">Questions? Emergencies? We're here around the clock to assist you whenever you need us.</p>
            </div>
        </div>
    </div>
</section>