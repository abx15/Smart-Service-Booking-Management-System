<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Services') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<!-- Hero Section -->
<div class="relative py-20 lg:py-32 overflow-hidden bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600">
    <!-- Background Effects -->
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-[600px] h-[600px] bg-white/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[500px] h-[500px] bg-white/10 rounded-full blur-3xl"></div>
    </div>
    
    <div class="container-max container-padding relative z-10">
        <div class="text-center text-white">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 text-sm font-semibold mb-8 animate-fade-in-up">
                <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                {{ $services->count() }} Professional Services Available
            </div>
            
            <h1 class="text-display text-white mb-6 animate-fade-in-up">
                Find Your Perfect <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-200 to-pink-200">Service</span>
            </h1>
            
            <p class="text-xl text-indigo-100 max-w-3xl mx-auto mb-12 animate-fade-in-up leading-relaxed">
                Connect with verified professionals for all your home service needs. Quality guaranteed, every time.
            </p>
            
            <!-- Search Bar -->
            <div class="max-w-2xl mx-auto animate-fade-in-up">
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-yellow-400 to-pink-400 rounded-full blur opacity-25 group-hover:opacity-40 transition duration-1000"></div>
                    <div class="relative flex bg-white rounded-full p-2 shadow-2xl">
                        <div class="pl-6 pr-2 py-3 flex-1">
                            <input type="text" placeholder="Search for services..." class="w-full text-gray-900 placeholder-gray-400 focus:outline-none text-lg">
                        </div>
                        <button class="px-8 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-bold rounded-full hover:shadow-lg transition-all duration-200 hover:scale-105">
                            Search
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Categories Section -->
<div class="section-padding bg-gray-50">
    <div class="container-max container-padding">
        <div class="text-center mb-12">
            <h2 class="text-heading mb-4">Browse Categories</h2>
            <p class="text-body text-gray-600 max-w-2xl mx-auto">Find exactly what you need from our wide range of professional services</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            @foreach(['Cleaning', 'Plumbing', 'Electrical', 'Moving', 'Painting', 'Gardening'] as $category)
            <a href="#" class="card card-hover p-6 text-center group animate-on-scroll">
                <div class="w-16 h-16 mx-auto bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl flex items-center justify-center text-indigo-600 group-hover:scale-110 transition-transform duration-300 mb-4 shadow-inner">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 group-hover:text-indigo-600 transition">{{ $category }}</h3>
                <p class="text-xs text-gray-500 mt-1">12 services</p>
            </a>
            @endforeach
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="section-padding">
    <div class="container-max container-padding">
        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Sidebar / Filters -->
            <div class="w-full lg:w-1/4">
                <div class="card-glass p-6 sticky top-24 animate-on-scroll">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-subheading font-display">Filters</h3>
                        <button class="text-sm text-indigo-600 font-semibold hover:text-indigo-700 transition">Reset All</button>
                    </div>

                    <div class="space-y-8">
                        <!-- Category Filter -->
                        <div>
                            <label class="block text-sm font-bold text-gray-400 uppercase tracking-wider mb-4">Category</label>
                            <div class="space-y-3">
                                @foreach(['Cleaning', 'Plumbing', 'Electrical', 'Moving', 'Painting', 'Gardening'] as $category)
                                <label class="flex items-center space-x-3 cursor-pointer group p-2 rounded-xl hover:bg-gray-50 transition">
                                    <input type="checkbox" class="checkbox">
                                    <span class="text-gray-600 group-hover:text-gray-900 transition font-medium">{{ $category }}</span>
                                    <span class="text-xs text-gray-400 ml-auto">({{ rand(5, 20) }})</span>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <!-- Price Range -->
                        <div>
                            <label class="block text-sm font-bold text-gray-400 uppercase tracking-wider mb-4">Price Range</label>
                            <div class="space-y-4">
                                <div class="flex items-center gap-3">
                                    <input type="number" placeholder="Min" class="input text-sm">
                                    <span class="text-gray-400">-</span>
                                    <input type="number" placeholder="Max" class="input text-sm">
                                </div>
                                <input type="range" class="w-full" min="0" max="500" value="250">
                                <div class="flex justify-between text-xs text-gray-500">
                                    <span>$0</span>
                                    <span>$500+</span>
                                </div>
                            </div>
                        </div>

                        <!-- Rating Filter -->
                        <div>
                            <label class="block text-sm font-bold text-gray-400 uppercase tracking-wider mb-4">Rating</label>
                            <div class="space-y-2">
                                @for($i = 5; $i >= 1; $i--)
                                <label class="flex items-center space-x-2 cursor-pointer group p-2 rounded-xl hover:bg-gray-50 transition">
                                    <input type="checkbox" class="checkbox">
                                    <div class="flex items-center">
                                        @for($j = 1; $j <= 5; $j++)
                                        <svg class="w-4 h-4 {{ $j <= $i ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        @endfor
                                        <span class="text-sm text-gray-600 ml-2">& Up</span>
                                    </div>
                                </label>
                                @endfor
                            </div>
                        </div>

                        <!-- Availability -->
                        <div>
                            <label class="block text-sm font-bold text-gray-400 uppercase tracking-wider mb-4">Availability</label>
                            <div class="space-y-2">
                                <label class="flex items-center space-x-3 cursor-pointer group p-2 rounded-xl hover:bg-gray-50 transition">
                                    <input type="checkbox" class="checkbox">
                                    <span class="text-gray-600 group-hover:text-gray-900 transition font-medium">Available Today</span>
                                </label>
                                <label class="flex items-center space-x-3 cursor-pointer group p-2 rounded-xl hover:bg-gray-50 transition">
                                    <input type="checkbox" class="checkbox">
                                    <span class="text-gray-600 group-hover:text-gray-900 transition font-medium">Available This Week</span>
                                </label>
                            </div>
                        </div>

                        <button class="btn-primary w-full">Apply Filters</button>
                    </div>
                </div>
            </div>

            <!-- Service Grid -->
            <div class="w-full lg:w-3/4">
                <!-- Results Header -->
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h2 class="text-subheading">{{ $services->count() }} Services Found</h2>
                        <p class="text-caption">Showing most relevant results</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <select class="input text-sm">
                            <option>Sort by: Relevance</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Rating: High to Low</option>
                        </select>
                    </div>
                </div>

                @if($services->isEmpty())
                <div class="card p-16 text-center animate-on-scroll">
                    <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">No services found</h3>
                    <p class="text-gray-500 mb-8 max-w-md mx-auto">Try adjusting your filters or search terms to find what you're looking for.</p>
                    <button class="btn-secondary">Clear Filters</button>
                </div>
                @else
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach($services as $service)
                    <div class="card card-hover overflow-hidden animate-on-scroll group">
                        <!-- Service Image -->
                        <div class="relative h-56 overflow-hidden">
                            @if($service->image)
                            <img src="{{ asset($service->image) }}" alt="{{ $service->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            @else
                            <div class="w-full h-full bg-gradient-to-br from-indigo-100 to-purple-100 flex items-center justify-center">
                                <svg class="w-16 h-16 text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                </svg>
                            </div>
                            @endif
                            
                            <!-- Rating Badge -->
                            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-sm font-bold text-gray-900 shadow-lg flex items-center">
                                <svg class="w-4 h-4 text-amber-400 mr-1 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                4.8
                            </div>
                            
                            <!-- Quick Actions -->
                            <div class="absolute top-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                <button class="w-10 h-10 bg-white/90 backdrop-blur rounded-full flex items-center justify-center text-gray-600 hover:text-red-500 transition shadow-lg">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Service Details -->
                        <div class="p-6">
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex-1">
                                    <span class="badge badge-primary mb-2">{{ $service->category->name ?? 'General' }}</span>
                                    <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-indigo-600 transition">{{ $service->name }}</h3>
                                    <p class="text-gray-600 text-sm leading-relaxed line-clamp-2">{{ $service->description ?? 'Professional service with guaranteed quality and customer satisfaction.' }}</p>
                                </div>
                            </div>
                            
                            <!-- Provider Info -->
                            <div class="flex items-center mb-4 pb-4 border-b border-gray-100">
                                <div class="w-10 h-10 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center text-white font-semibold text-sm mr-3">
                                    {{ substr($service->provider->name ?? 'Provider', 0, 1) }}
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-medium text-gray-900">{{ $service->provider->name ?? 'Professional Provider' }}</p>
                                    <p class="text-xs text-gray-500">{{ rand(50, 500) }} completed jobs</p>
                                </div>
                            </div>
                            
                            <!-- Price and Action -->
                            <div class="flex items-center justify-between">
                                <div>
                                    <span class="text-xs text-gray-400 uppercase font-bold">Starting from</span>
                                    <div class="text-2xl font-bold text-gray-900">${{ number_format($service->price ?? rand(50, 200), 2) }}</div>
                                    <span class="text-xs text-gray-400">per hour</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <a href="{{ route('services.show', $service) }}" class="btn-ghost btn-sm">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </a>
                                    <a href="{{ route('bookings.create', $service) }}" class="btn-primary btn-sm">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

                <!-- Pagination -->
                <div class="mt-12 flex justify-center">
                    <div class="flex items-center space-x-2">
                        <button class="px-4 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-xl transition">Previous</button>
                        <button class="px-4 py-2 bg-indigo-600 text-white rounded-xl">1</button>
                        <button class="px-4 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-xl transition">2</button>
                        <button class="px-4 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-xl transition">3</button>
                        <button class="px-4 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-xl transition">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="section-padding bg-gradient-to-r from-indigo-600 to-purple-600">
    <div class="container-max container-padding text-center">
        <h2 class="text-3xl md:text-4xl font-black text-white mb-6">Can't find what you're looking for?</h2>
        <p class="text-indigo-100 text-lg mb-8 max-w-2xl mx-auto">Get personalized recommendations from our AI-powered service matching system.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <button class="px-8 py-4 bg-white text-indigo-600 font-bold rounded-xl hover:bg-gray-100 transition shadow-lg hover:shadow-xl hover:scale-105">
                Get Recommendations
            </button>
            <button class="px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-xl hover:bg-white/10 transition">
                Contact Support
            </button>
        </div>
        </div>
    </div>
</div>
</x-app-layout>