{{--
    Top Utility Bar Component - Mobile First
--}}

<div class="section-full-width bg-gray-900 text-white text-sm border-b border-gray-800">
    <div class="w-full px-4 sm:px-6 lg:px-8">
        {{-- Mobile Version (< 768px): Just Phone --}}
        <div class="flex md:hidden items-center justify-center h-10">
            <a href="tel:+18001234567" class="flex items-center gap-2 text-white font-medium">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                (800) 123-4567
            </a>
        </div>

        {{-- Tablet/Desktop Version (>= 768px) --}}
        <div class="hidden md:flex items-center justify-between h-12">
            {{-- Left: Service Type Toggles --}}
            <div class="flex items-center gap-4">
                <a href="{{ url('/residential-services') }}"
                    class="px-3 py-1.5 rounded {{ request()->is('residential-services*') ? 'bg-primary text-white' : 'text-gray-300 hover:text-white' }} transition-colors font-medium">
                    Residential
                </a>
                <a href="{{ url('/commercial-services') }}"
                    class="px-3 py-1.5 rounded {{ request()->is('commercial-services*') ? 'bg-secondary text-white' : 'text-gray-300 hover:text-white' }} transition-colors font-medium">
                    Commercial
                </a>
            </div>

            {{-- Right: Info Links --}}
            <div class="flex items-center gap-6">
                {{-- Franchise Link --}}
                <a href="{{ url('/franchise') }}" class="text-gray-200 hover:text-white transition-colors flex items-center gap-1.5 font-medium">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span class="hidden lg:inline">Franchise Opportunities</span>
                    <span class="lg:hidden">Franchise</span>
                </a>

                {{-- Locally Hiring Badge --}}
                <a href="{{ route('careers.index') }}" class="hidden lg:flex items-center gap-1.5 text-gray-200 hover:text-white transition-colors font-medium">
                    <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                    </svg>
                    Hiring
                </a>
            </div>
        </div>
    </div>
</div>