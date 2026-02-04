{{--
    Top Utility Bar Component
    
    Displays above main navigation with:
    - Service type toggle (Residential/Commercial)
    - Franchise opportunities link
    - Local service finder
    - Trust badges
--}}

<div class="section-full-width bg-gray-900 text-white text-sm border-b border-gray-800">
    <div class="section-content-contained">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between py-2.5 gap-3">
            {{-- Left Side: Service Type Toggle --}}
            <div class="flex items-center gap-4 flex-wrap">
                {{-- Residential/Commercial Toggle --}}
                <div class="flex items-center gap-2 bg-gray-800 rounded-full p-1">
                    <a href="{{ url('/residential-services') }}"
                        class="px-4 py-1.5 rounded-full transition-all font-medium {{ request()->is('residential-services*') ? 'bg-primary text-white' : 'text-gray-200 hover:text-white' }}">
                        Residential
                    </a>
                    <a href="{{ url('/commercial-services') }}"
                        class="px-4 py-1.5 rounded-full transition-all font-medium {{ request()->is('commercial-services*') ? 'bg-secondary text-white' : 'text-gray-200 hover:text-white' }}">
                        Commercial
                    </a>
                </div>

                {{-- Franchise Link --}}
                <a href="{{ url('/franchise') }}" class="text-gray-200 hover:text-white transition-colors flex items-center gap-1.5 font-medium">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Franchise Opportunities
                </a>

                {{-- Locally Hiring Badge --}}
                <a href="{{ route('careers.index') }}" class="hidden lg:flex items-center gap-1.5 text-gray-200 hover:text-white transition-colors font-medium">
                    <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                    </svg>
                    Locally Hiring
                </a>

                {{-- Locally Owned Badge --}}
                <div class="hidden lg:flex items-center gap-1.5 text-gray-200 font-medium">
                    <svg class="w-4 h-4 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    Locally Owned & Operated
                </div>
            </div>

            {{-- Right Side: Service Finder --}}
            <div class="flex items-center gap-3">
                {{-- Find Local Service --}}
                <div class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <input
                        type="text"
                        placeholder="Enter ZIP code"
                        class="bg-gray-800 text-white placeholder-gray-400 border border-gray-700 rounded px-3 py-1.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent w-32">
                    <button class="bg-primary hover:bg-primary-dark text-white px-4 py-1.5 rounded transition-colors text-sm font-semibold">
                        Find
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>