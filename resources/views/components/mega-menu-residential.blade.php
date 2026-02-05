{{--
    Residential Mega Menu Component
    
    Full-width dropdown with 5 columns of residential services
--}}

<div x-show="open"
    @click.outside="open = false"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 translate-y-1"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 translate-y-1"
    style="display: none;"
    x-cloak
    class="fixed left-0 right-0 top-20 z-50 bg-white shadow-2xl border-t-4 border-primary"
    {{ $attributes }}>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">

            {{-- Column 1: Repairs --}}
            <div>
                <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Repairs
                </h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('services.category', 'cleaning') }}" class="text-gray-700 hover:text-primary transition-colors">Drywall Repair</a></li>
                    <li><a href="{{ route('services.category', 'plumbing') }}" class="text-gray-700 hover:text-primary transition-colors">Door Repair</a></li>
                    <li><a href="{{ route('services.category', 'electrical') }}" class="text-gray-700 hover:text-primary transition-colors">Window Repair</a></li>
                    <li><a href="{{ route('services.category', 'cleaning') }}" class="text-gray-700 hover:text-primary transition-colors">Furniture Assembly</a></li>
                    <li><a href="{{ route('services.category', 'plumbing') }}" class="text-gray-700 hover:text-primary transition-colors">Deck Repair</a></li>
                </ul>
            </div>

            {{-- Column 2: Installations --}}
            <div>
                <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                    Installations
                </h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('services.category', 'electrical') }}" class="text-gray-700 hover:text-primary transition-colors">Cabinet Installation</a></li>
                    <li><a href="{{ route('services.category', 'cleaning') }}" class="text-gray-700 hover:text-primary transition-colors">Shelving</a></li>
                    <li><a href="{{ route('services.category', 'electrical') }}" class="text-gray-700 hover:text-primary transition-colors">Lighting Fixtures</a></li>
                    <li><a href="{{ route('services.category', 'electrical') }}" class="text-gray-700 hover:text-primary transition-colors">Ceiling Fans</a></li>
                    <li><a href="{{ route('services.category', 'plumbing') }}" class="text-gray-700 hover:text-primary transition-colors">Faucet Installation</a></li>
                </ul>
            </div>

            {{-- Column 3: Maintenance --}}
            <div>
                <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    Maintenance
                </h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('services.category', 'cleaning') }}" class="text-gray-700 hover:text-primary transition-colors">Gutter Cleaning</a></li>
                    <li><a href="{{ route('services.category', 'cleaning') }}" class="text-gray-700 hover:text-primary transition-colors">Pressure Washing</a></li>
                    <li><a href="{{ route('services.category', 'gardening') }}" class="text-gray-700 hover:text-primary transition-colors">Lawn Care</a></li>
                    <li><a href="{{ route('services.category', 'painting') }}" class="text-gray-700 hover:text-primary transition-colors">Touch-Up Painting</a></li>
                    <li><a href="{{ route('services.category', 'plumbing') }}" class="text-gray-700 hover:text-primary transition-colors">HVAC Maintenance</a></li>
                </ul>
            </div>

            {{-- Column 4: Remodeling --}}
            <div>
                <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Remodeling
                </h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('services.category', 'painting') }}" class="text-gray-700 hover:text-primary transition-colors">Kitchen Updates</a></li>
                    <li><a href="{{ route('services.category', 'plumbing') }}" class="text-gray-700 hover:text-primary transition-colors">Bathroom Refresh</a></li>
                    <li><a href="{{ route('services.category', 'cleaning') }}" class="text-gray-700 hover:text-primary transition-colors">Flooring</a></li>
                    <li><a href="{{ route('services.category', 'painting') }}" class="text-gray-700 hover:text-primary transition-colors">Interior Painting</a></li>
                    <li><a href="{{ route('services.category', 'electrical') }}" class="text-gray-700 hover:text-primary transition-colors">Light Remodeling</a></li>
                </ul>
            </div>

            {{-- Column 5: Special Services --}}
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                    Seasonal
                </h3>
                <ul class="space-y-2 mb-4">
                    <li><a href="{{ route('services.category', 'electrical') }}" class="text-gray-700 hover:text-primary transition-colors">Holiday Lighting</a></li>
                    <li><a href="{{ route('services.category', 'cleaning') }}" class="text-gray-700 hover:text-primary transition-colors">Spring Cleanup</a></li>
                    <li><a href="{{ route('services.category', 'plumbing') }}" class="text-gray-700 hover:text-primary transition-colors">Winterization</a></li>
                </ul>
                <a href="{{ route('services.index') }}" class="inline-flex items-center gap-2 text-primary font-semibold hover:gap-3 transition-all">
                    View All Services
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

        </div>
    </div>
</div>