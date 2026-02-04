{{--
    Trust Bar Component
    
    Horizontal strip showcasing key trust indicators
--}}

<div class="section-full-width bg-gradient-to-r from-gray-50 to-gray-100 border-y border-gray-200">
    <div class="section-content-contained py-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            {{-- Fully Insured --}}
            <div class="flex flex-col items-center text-center group">
                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-3 shadow-lg group-hover:shadow-xl transition-shadow">
                    <svg class="w-8 h-8 text-trust-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-1">Fully Insured</h3>
                <p class="text-sm text-gray-600">Comprehensive coverage</p>
            </div>

            {{-- Background Checked --}}
            <div class="flex flex-col items-center text-center group">
                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-3 shadow-lg group-hover:shadow-xl transition-shadow">
                    <svg class="w-8 h-8 text-trust-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-1">Background Checked</h3>
                <p class="text-sm text-gray-600">Verified professionals</p>
            </div>

            {{-- Satisfaction Guaranteed --}}
            <div class="flex flex-col items-center text-center group">
                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-3 shadow-lg group-hover:shadow-xl transition-shadow">
                    <svg class="w-8 h-8 text-trust-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-1">100% Satisfaction</h3>
                <p class="text-sm text-gray-600">Guaranteed workmanship</p>
            </div>

            {{-- Experience --}}
            <div class="flex flex-col items-center text-center group">
                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-3 shadow-lg group-hover:shadow-xl transition-shadow">
                    <svg class="w-8 h-8 text-trust-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-1">10+ Years Experience</h3>
                <p class="text-sm text-gray-600">Trusted since 2014</p>
            </div>
        </div>
    </div>
</div>