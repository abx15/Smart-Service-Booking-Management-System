<x-public-layout>
    <!-- Header -->
    <div class="bg-gray-900 py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-900 via-gray-900 to-black opacity-90"></div>
        <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 brightness-100 contrast-150 mix-blend-overlay"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-black text-white mb-4 tracking-tight">Our Services</h1>
            <p class="text-indigo-200 text-lg md:text-xl max-w-2xl mx-auto font-light">Find the perfect professional for your needs. Trusted, verified, and ready to help.</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Sidebar / Filters -->
            <div class="w-full lg:w-1/4">
                <div class="bg-white p-6 rounded-3xl shadow-lg shadow-gray-100 border border-gray-100 sticky top-24">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-bold text-gray-900">Filters</h3>
                        <button class="text-xs text-indigo-600 font-semibold hover:underline">Reset</button>
                    </div>

                    <div class="space-y-6">
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-3">Category</label>
                            <div class="space-y-2">
                                <label class="flex items-center space-x-3 cursor-pointer group">
                                    <input type="checkbox" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 transition">
                                    <span class="text-gray-600 group-hover:text-indigo-600 transition">Cleaning</span>
                                </label>
                                <label class="flex items-center space-x-3 cursor-pointer group">
                                    <input type="checkbox" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 transition">
                                    <span class="text-gray-600 group-hover:text-indigo-600 transition">Plumbing</span>
                                </label>
                                <label class="flex items-center space-x-3 cursor-pointer group">
                                    <input type="checkbox" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 transition">
                                    <span class="text-gray-600 group-hover:text-indigo-600 transition">Electrical</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-3">Price Range</label>
                            <div class="flex items-center gap-2">
                                <input type="number" placeholder="Min" class="w-full bg-gray-50 border-gray-200 rounded-xl text-sm focus:ring-indigo-500 focus:border-indigo-500 transition">
                                <span class="text-gray-400">-</span>
                                <input type="number" placeholder="Max" class="w-full bg-gray-50 border-gray-200 rounded-xl text-sm focus:ring-indigo-500 focus:border-indigo-500 transition">
                            </div>
                        </div>

                        <button class="w-full py-3 bg-gray-900 text-white font-bold rounded-xl hover:bg-indigo-600 transition shadow-lg shadow-gray-200 hover:shadow-indigo-200">Apply Filters</button>
                    </div>
                </div>
            </div>

            <!-- Service Grid -->
            <div class="w-full lg:w-3/4">
                @if($services->isEmpty())
                <div class="text-center py-32 bg-white rounded-3xl border border-dashed border-gray-200">
                    <svg class="w-16 h-16 mx-auto text-gray-200 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="text-xl font-bold text-gray-900">No services found</h3>
                    <p class="text-gray-500 mt-2">Try adjusting your filters or search query.</p>
                </div>
                @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($services as $service)
                    <div class="group bg-white rounded-3xl shadow-sm hover:shadow-2xl hover:shadow-indigo-100 transition duration-300 overflow-hidden border border-gray-100 flex flex-col h-full">
                        <div class="h-48 bg-gray-200 relative overflow-hidden">
                            <div class="absolute inset-0 bg-indigo-900/10 group-hover:bg-indigo-900/0 transition duration-500"></div>
                            <div class="absolute inset-0 flex items-center justify-center text-gray-400 bg-gray-100 group-hover:scale-105 transition duration-700">
                                @if($service->image)
                                <img src="{{ asset($service->image) }}" alt="{{ $service->name }}" class="w-full h-full object-cover">
                                @else
                                <span class="text-gray-400 font-medium">No Image</span>
                                @endif
                            </div>
                            <div class="absolute top-3 right-3 bg-white/90 backdrop-blur px-2 py-1 rounded-lg text-xs font-bold text-gray-900 shadow-sm flex items-center">
                                <svg class="w-3 h-3 text-amber-400 mr-1 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg> 4.5
                            </div>
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <div class="mb-3">
                                <span class="inline-block text-[10px] font-bold text-indigo-600 bg-indigo-50 px-2.5 py-1 rounded-full uppercase tracking-wide border border-indigo-100">{{ $service->category->name ?? 'Uncategorized' }}</span>
                            </div>
                            <h3 class="font-bold text-lg text-gray-900 mb-2 group-hover:text-indigo-600 transition truncate">{{ $service->name }}</h3>
                            <p class="text-sm text-gray-500 mb-6 line-clamp-2 leading-relaxed">{{ $service->description }}</p>

                            <div class="mt-auto flex justify-between items-center pt-4 border-t border-gray-50">
                                <div>
                                    <span class="block text-[10px] text-gray-400 uppercase font-bold">Rate</span>
                                    <span class="font-bold text-lg text-gray-900">${{ $service->price }}<span class="text-xs text-gray-400 font-normal">/hr</span></span>
                                </div>
                                <a href="{{ route('services.show', $service) }}" class="px-5 py-2.5 bg-gray-900 text-white text-sm font-bold rounded-xl hover:bg-indigo-600 transition shadow-lg hover:shadow-indigo-200">
                                    Book
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

                <div class="mt-12">
                    {{ $services->links() }}
                </div>
            </div>
        </div>
    </div>
</x-public-layout>