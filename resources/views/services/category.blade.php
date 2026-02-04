<x-main-layout>
    <x-slot name="title">
        {{ ucfirst($category) }} Services
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
                    <li class="text-gray-900 font-medium">{{ ucfirst($category) }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Category Hero -->
    <div class="relative py-16 bg-gradient-to-br from-primary/10 to-secondary/10 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 right-0 -mr-20 -mt-20 w-[600px] h-[600px] bg-primary/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[500px] h-[500px] bg-secondary/10 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <div class="w-24 h-24 mx-auto bg-gradient-to-br {{ $categoryColors[$category] ?? 'from-gray-400 to-gray-600' }} rounded-3xl flex items-center justify-center text-white mb-6 shadow-2xl">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $categoryIcons[$category] ?? 'M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4' }}"></path>
                    </svg>
                </div>
                <h1 class="text-4xl md:text-5xl font-black tracking-tight text-text-heading mb-6">
                    {{ ucfirst($category) }} Services
                </h1>
                <p class="text-xl text-text-body max-w-3xl mx-auto">
                    {{ $categoryDescriptions[$category] ?? 'Professional ' . $category . ' services delivered by experienced and verified experts.' }}
                </p>
            </div>
        </div>
    </div>

    <!-- Services Grid -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($services as $service)
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-gradient-to-br {{ $service['color'] ?? 'from-gray-400 to-gray-600' }} relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 text-white">
                            <h3 class="text-xl font-bold">{{ $service['name'] }}</h3>
                        </div>
                        <div class="absolute top-6 right-6 bg-white/90 backdrop-blur px-3 py-1 rounded-lg text-sm font-bold text-gray-900 flex items-center">
                            <svg class="w-4 h-4 text-warning mr-1 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            {{ $service['rating'] ?? '4.8' }}
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 mb-4">{{ $service['description'] ?? 'Professional service delivered by experienced experts.' }}</p>
                        
                        <div class="space-y-3 mb-6">
                            @if(isset($service['features']))
                                @foreach($service['features'] as $feature)
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    {{ $feature }}
                                </div>
                                @endforeach
                            @endif
                        </div>

                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                            <div>
                                <span class="text-2xl font-bold text-text-heading">${{ $service['price'] ?? '80' }}</span>
                                <span class="text-sm text-gray-500">{{ $service['unit'] ?? '/session' }}</span>
                            </div>
                            <a href="{{ route('services.show', ['category' => $category, 'service' => $service['slug']]) }}" 
                               class="inline-flex items-center px-4 py-2 bg-primary hover:bg-primary-dark text-white font-semibold rounded-lg transition">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-text-heading mb-4">Why Choose Our {{ ucfirst($category) }} Services?</h2>
                <p class="text-lg text-gray-600">We're committed to delivering excellence in every service</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto bg-primary/10 rounded-2xl flex items-center justify-center text-primary mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-text-heading mb-2">Verified Professionals</h3>
                    <p class="text-gray-600">All our experts are background-checked and highly experienced</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 mx-auto bg-primary/10 rounded-2xl flex items-center justify-center text-primary mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-text-heading mb-2">On-Time Service</h3>
                    <p class="text-gray-600">We respect your time and always arrive as scheduled</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 mx-auto bg-primary/10 rounded-2xl flex items-center justify-center text-primary mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-text-heading mb-2">Satisfaction Guaranteed</h3>
                    <p class="text-gray-600">We're not happy until you're completely satisfied</p>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
