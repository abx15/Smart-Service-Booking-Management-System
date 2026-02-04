<x-main-layout>
    <x-slot name="title">
        {{ $serviceData['name'] ?? 'Service Detail' }}
    </x-slot>

    <!-- Breadcrumb -->
    <div class="bg-gray-50 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-2">
                    <li>
                        <a href="{{ url('/') }}" class="text-gray-500 hover:text-gray-700">Home</a>
                    </li>
                    <li>
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </li>
                    <li>
                        <a href="{{ route('services.index') }}" class="text-gray-500 hover:text-gray-700">Services</a>
                    </li>
                    <li>
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </li>
                    <li>
                        <a href="{{ route('services.category', $category) }}" class="text-gray-500 hover:text-gray-700">{{ ucfirst($category) }}</a>
                    </li>
                    <li>
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </li>
                    <li class="text-gray-900 font-medium">{{ $serviceData['name'] ?? 'Service' }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Service Hero Section -->
    <div class="relative py-16 bg-gradient-to-br from-primary/10 to-secondary/10 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 right-0 -mr-20 -mt-20 w-[600px] h-[600px] bg-primary/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[500px] h-[500px] bg-secondary/10 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center px-4 py-2 bg-white/80 backdrop-blur rounded-full text-sm font-semibold text-primary mb-6">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        {{ ucfirst($category) }} Service
                    </div>
                    <h1 class="text-4xl md:text-5xl font-black text-text-heading mb-6 leading-tight">
                        {{ $serviceData['name'] ?? 'Professional Service' }}
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        {{ $serviceData['description'] ?? 'Professional service delivered by experienced and verified experts.' }}
                    </p>
                    
                    <div class="flex items-center gap-6 mb-8">
                        <div class="flex items-center">
                            <div class="flex text-warning">
                                @for($i = 1; $i <= 5; $i++)
                                    <svg class="w-5 h-5 {{ $i <= floor($serviceData['rating'] ?? 4.8) ? 'text-warning' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                            </div>
                            <span class="ml-2 text-gray-600 font-medium">{{ $serviceData['rating'] ?? '4.8' }} (234 reviews)</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $serviceData['duration'] ?? '2-3 hours' }}
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <a href="{{ route('bookings.create') }}" class="inline-flex items-center px-8 py-4 bg-primary hover:bg-primary-dark text-white font-bold rounded-full transition shadow-lg hover:shadow-xl hover:scale-105 transform">
                            Book Now
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <button class="inline-flex items-center px-8 py-4 bg-white border-2 border-gray-200 text-gray-700 font-bold rounded-full hover:border-primary hover:text-primary transition">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m9.032 4.026a9.001 9.001 0 01-7.432 0m9.032-4.026A9.001 9.001 0 0112 3c-4.474 0-8.268 3.12-9.032 7.326m0 0A9.001 9.001 0 0012 21c4.474 0 8.268-3.12 9.032-7.326"></path>
                            </svg>
                            Contact Provider
                        </button>
                    </div>
                </div>

                <div class="relative">
                    <div class="aspect-w-16 aspect-h-12 rounded-3xl overflow-hidden shadow-2xl">
                        <img src="https://picsum.photos/seed/{{ $service }}/800/600" alt="{{ $serviceData['name'] }}" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-4">
                        <div class="text-center">
                            <div class="text-3xl font-black text-primary">${{ $serviceData['price'] ?? '100' }}</div>
                            <div class="text-sm text-gray-500">{{ $serviceData['unit'] ?? '/session' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- What's Included -->
    <div class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-text-heading mb-4">What's Included</h2>
                <p class="text-lg text-gray-600">Everything you get with this service</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($serviceData['whats_included'] ?? ['Professional service', 'Quality materials', 'Timely completion', 'Satisfaction guarantee'] as $item)
                <div class="flex items-start p-6 bg-gray-50 rounded-2xl hover:bg-gray-100 transition">
                    <div class="flex-shrink-0 w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center text-primary mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">{{ $item }}</h3>
                        <p class="text-sm text-gray-600 mt-1">Included in the service package</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Service Features -->
    <div class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-text-heading mb-4">Service Features</h2>
                <p class="text-lg text-gray-600">Why choose this service</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($serviceData['features'] ?? ['Feature 1', 'Feature 2', 'Feature 3', 'Feature 4'] as $feature)
                <div class="flex items-center p-6 bg-white rounded-2xl shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-gradient-to-br from-primary to-secondary rounded-xl flex items-center justify-center text-white mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">{{ $feature }}</h3>
                        <p class="text-sm text-gray-600 mt-1">Professional quality guaranteed</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Related Services -->
    <div class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-text-heading mb-4">Related Services</h2>
                <p class="text-lg text-gray-600">You might also be interested in</p>
            </div>

            <!-- Related Services Swiper -->
            <div class="swiper related-services-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 overflow-hidden">
                            <div class="h-40 bg-gradient-to-br from-blue-400 to-blue-600"></div>
                            <div class="p-6">
                                <h3 class="font-bold text-gray-900 mb-2">Related Service 1</h3>
                                <p class="text-gray-600 text-sm mb-4">Similar service you might like</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-lg font-bold text-primary">$80</span>
                                    <a href="#" class="text-primary font-semibold hover:text-primary-dark">View Details →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 overflow-hidden">
                            <div class="h-40 bg-gradient-to-br from-cyan-400 to-cyan-600"></div>
                            <div class="p-6">
                                <h3 class="font-bold text-gray-900 mb-2">Related Service 2</h3>
                                <p class="text-gray-600 text-sm mb-4">Similar service you might like</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-lg font-bold text-primary">$120</span>
                                    <a href="#" class="text-primary font-semibold hover:text-primary-dark">View Details →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 overflow-hidden">
                            <div class="h-40 bg-gradient-to-br from-green-400 to-green-600"></div>
                            <div class="p-6">
                                <h3 class="font-bold text-gray-900 mb-2">Related Service 3</h3>
                                <p class="text-gray-600 text-sm mb-4">Similar service you might like</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-lg font-bold text-primary">$150</span>
                                    <a href="#" class="text-primary font-semibold hover:text-primary-dark">View Details →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination mt-8"></div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-20 bg-gradient-to-r from-primary to-secondary">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Ready to Get Started?</h2>
            <p class="text-xl text-white/90 mb-8">Book this service now and get professional help at your doorstep</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('bookings.create') }}" class="inline-block px-8 py-4 bg-white text-primary font-bold rounded-full hover:bg-gray-100 transition shadow-xl">
                    Book This Service
                </a>
                <a href="{{ route('services.category', $category) }}" class="inline-block px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-full hover:bg-white/10 transition">
                    View More Services
                </a>
            </div>
        </div>
    </div>

    <x-swiper-init />
</x-main-layout>