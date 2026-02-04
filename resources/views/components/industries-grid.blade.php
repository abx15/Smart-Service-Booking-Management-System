{{--
    Industries Grid Component
    
    Showcases commercial industries served
--}}

@props([
'title' => 'Industries We Serve',
'subtitle' => 'Professional commercial services for businesses of all sizes'
])

<section class="section-full-width py-20 md:py-28 bg-white">
    <div class="section-content-contained">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">{{ $title }}</h2>
            <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">{{ $subtitle }}</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-6">
            {{-- Healthcare --}}
            <div class="flex flex-col items-center text-center p-6 rounded-xl bg-gray-50 hover:bg-primary/5 hover:shadow-lg transition-all group">
                <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mb-4 shadow-md group-hover:shadow-xl transition-shadow">
                    <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 text-sm">Healthcare</h3>
            </div>

            {{-- Retail --}}
            <div class="flex flex-col items-center text-center p-6 rounded-xl bg-gray-50 hover:bg-primary/5 hover:shadow-lg transition-all group">
                <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mb-4 shadow-md group-hover:shadow-xl transition-shadow">
                    <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 text-sm">Retail</h3>
            </div>

            {{-- Hospitality --}}
            <div class="flex flex-col items-center text-center p-6 rounded-xl bg-gray-50 hover:bg-primary/5 hover:shadow-lg transition-all group">
                <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mb-4 shadow-md group-hover:shadow-xl transition-shadow">
                    <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 text-sm">Hotels</h3>
            </div>

            {{-- Office Buildings --}}
            <div class="flex flex-col items-center text-center p-6 rounded-xl bg-gray-50 hover:bg-primary/5 hover:shadow-lg transition-all group">
                <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mb-4 shadow-md group-hover:shadow-xl transition-shadow">
                    <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 text-sm">Offices</h3>
            </div>

            {{-- Restaurants --}}
            <div class="flex flex-col items-center text-center p-6 rounded-xl bg-gray-50 hover:bg-primary/5 hover:shadow-lg transition-all group">
                <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mb-4 shadow-md group-hover:shadow-xl transition-shadow">
                    <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 text-sm">Restaurants</h3>
            </div>

            {{-- Manufacturing --}}
            <div class="flex flex-col items-center text-center p-6 rounded-xl bg-gray-50 hover:bg-primary/5 hover:shadow-lg transition-all group">
                <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mb-4 shadow-md group-hover:shadow-xl transition-shadow">
                    <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 text-sm">Manufacturing</h3>
            </div>

            {{-- Government --}}
            <div class="flex flex-col items-center text-center p-6 rounded-xl bg-gray-50 hover:bg-primary/5 hover:shadow-lg transition-all group">
                <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mb-4 shadow-md group-hover:shadow-xl transition-shadow">
                    <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 text-sm">Government</h3>
            </div>

            {{-- Banks --}}
            <div class="flex flex-col items-center text-center p-6 rounded-xl bg-gray-50 hover:bg-primary/5 hover:shadow-lg transition-all group">
                <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mb-4 shadow-md group-hover:shadow-xl transition-shadow">
                    <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 text-sm">Banks</h3>
            </div>
        </div>

        {{-- CTA --}}
        <div class="mt-12 text-center">
            <a href="#" class="inline-flex items-center gap-2 text-secondary font-bold hover:gap-3 transition-all text-lg">
                Explore Commercial Services
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</section>