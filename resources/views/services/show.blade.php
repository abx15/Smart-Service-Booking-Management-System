<x-public-layout>
    <div class="bg-gray-50 min-h-screen pb-12">
        <!-- Header Image area -->
        <div class="h-[300px] md:h-[400px] bg-gray-900 relative overflow-hidden">
            <div class="absolute inset-0 bg-indigo-900/30"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                @if($service->image)
                <img src="{{ asset($service->image) }}" class="w-full h-full object-cover opacity-50">
                @else
                <div class="text-gray-600 font-bold text-3xl"></div>
                @endif
            </div>
            <!-- Breadcrumb / Back -->
            <div class="absolute top-8 left-0 w-full z-10">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <a href="{{ route('services.index') }}" class="inline-flex items-center text-white/80 hover:text-white font-medium bg-black/20 backdrop-blur px-4 py-2 rounded-full transition">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Back to Services
                    </a>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-20 md:-mt-32 relative z-20">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-6">
                    <div class="bg-white p-8 md:p-10 rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-xs font-bold text-indigo-600 bg-indigo-50 px-3 py-1.5 rounded-full uppercase tracking-wide border border-indigo-100">{{ $service->category->name ?? 'Category' }}</span>
                            <div class="flex items-center text-amber-400 font-bold bg-amber-50 px-3 py-1 rounded-full border border-amber-100">
                                <svg class="w-4 h-4 mr-1.5 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <span class="text-amber-700 text-sm">4.8 (120 reviews)</span>
                            </div>
                        </div>

                        <h1 class="text-3xl md:text-4xl font-black text-gray-900 mb-6 leading-tight">{{ $service->name }}</h1>

                        <div class="prose prose-indigo max-w-none text-gray-600 leading-relaxed">
                            <p class="text-lg">{{ $service->description }}</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <div class="mt-10 pt-10 border-t border-gray-100">
                            <h3 class="text-xl font-bold text-gray-900 mb-6">Service Features</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex items-start p-4 bg-gray-50 rounded-2xl">
                                    <div class="flex-shrink-0 w-10 h-10 bg-white rounded-full flex items-center justify-center text-green-500 shadow-sm mr-4">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900">Verified Service</h4>
                                        <p class="text-sm text-gray-500 mt-1">Provider is vetted and verified.</p>
                                    </div>
                                </div>
                                <div class="flex items-start p-4 bg-gray-50 rounded-2xl">
                                    <div class="flex-shrink-0 w-10 h-10 bg-white rounded-full flex items-center justify-center text-green-500 shadow-sm mr-4">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900">On-Time Guarantee</h4>
                                        <p class="text-sm text-gray-500 mt-1">If we are late, you get a discount.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Booking Sidebar -->
                <div class="w-full">
                    <div class="bg-white p-8 rounded-3xl shadow-xl shadow-indigo-100 border border-gray-100 sticky top-24">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="w-14 h-14 bg-gradient-to-br from-gray-100 to-gray-200 rounded-2xl flex items-center justify-center text-gray-500 font-bold text-xl shadow-inner">
                                {{ substr($service->provider->name ?? 'P', 0, 1) }}
                            </div>
                            <div>
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Provided by</p>
                                <p class="font-bold text-lg text-gray-900 leading-none mt-1">{{ $service->provider->name ?? 'Provider Name' }}</p>
                            </div>
                        </div>

                        <div class="mb-8 p-6 bg-gray-50 rounded-2xl border border-gray-100">
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Pricing</p>
                            <div class="flex items-baseline gap-1">
                                <span class="text-4xl font-black text-gray-900 tracking-tight">${{ $service->price }}</span>
                                <span class="text-gray-500 font-medium">/ hour</span>
                            </div>
                            <p class="text-xs text-gray-400 mt-2">No hidden fees. Cancel anytime.</p>
                        </div>

                        <div class="space-y-4">
                            <a href="{{ route('bookings.create', ['service_id' => $service->id]) }}" class="block w-full py-4 bg-indigo-600 text-white font-bold text-center rounded-xl hover:bg-indigo-700 transition shadow-lg shadow-indigo-200 hover:shadow-indigo-300 transform hover:-translate-y-0.5">
                                Book This Service
                            </a>
                            <button class="block w-full py-4 bg-white text-gray-700 font-bold text-center rounded-xl border border-gray-200 hover:bg-gray-50 hover:border-gray-300 transition">
                                Contact Provider
                            </button>
                        </div>

                        <div class="mt-6 text-center">
                            <p class="text-xs text-gray-400 flex items-center justify-center gap-1">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                                Secure Booking
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>