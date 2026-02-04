{{--
    Popular Services Grid Component
    
    Expanded grid showcasing 12-16 most popular services
--}}

@props([
'title' => 'Our Most Popular Services',
'subtitle' => 'Quick access to the services our customers request most'
])

<section class="section-full-width py-20 md:py-28 bg-gray-50">
    <div class="section-content-contained">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">{{ $title }}</h2>
            <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">{{ $subtitle }}</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @php
            $popularServices = [
            ['name' => 'Home Cleaning', 'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6', 'link' => route('services.category', 'cleaning')],
            ['name' => 'Plumbing Repair', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'link' => route('services.category', 'plumbing')],
            ['name' => 'Electrical Work', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'link' => route('services.category', 'electrical')],
            ['name' => 'Interior Painting', 'icon' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01', 'link' => route('services.category', 'painting')],
            ['name' => 'Lawn Care', 'icon' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4', 'link' => route('services.category', 'gardening')],
            ['name' => 'Moving Services', 'icon' => 'M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4', 'link' => route('services.category', 'moving')],
            ['name' => 'Drywall Repair', 'icon' => 'M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z', 'link' => route('services.category', 'cleaning')],
            ['name' => 'Cabinet Installation', 'icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10', 'link' => route('services.category', 'cleaning')],
            ['name' => 'Gutter Cleaning', 'icon' => 'M19 14l-7 7m0 0l-7-7m7 7V3', 'link' => route('services.category', 'cleaning')],
            ['name' => 'Fence Repair', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'link' => route('services.category', 'gardening')],
            ['name' => 'Ceiling Fan Installation', 'icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z', 'link' => route('services.category', 'electrical')],
            ['name' => 'Pressure Washing', 'icon' => 'M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5', 'link' => route('services.category', 'cleaning')],
            ];
            @endphp

            @foreach($popularServices as $service)
            <a href="{{ $service['link'] }}" class="group p-6 bg-white rounded-xl shadow-md hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary/10 to-secondary/10 rounded-lg flex items-center justify-center mb-4 group-hover:from-primary/20 group-hover:to-secondary/20 transition-colors">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $service['icon'] }}" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 group-hover:text-primary transition-colors">{{ $service['name'] }}</h3>
                    <div class="mt-2 text-primary opacity-0 group-hover:opacity-100 transition-opacity">
                        <svg class="w-5 h-5 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        {{-- View All CTA --}}
        <div class="mt-12 text-center">
            <a href="{{ route('services.index') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-gray-900 hover:bg-gray-800 text-white font-bold rounded-lg transition transform hover:-translate-y-1 text-lg shadow-xl">
                View All Services
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</section>