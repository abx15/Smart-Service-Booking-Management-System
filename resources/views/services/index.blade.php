<x-main-layout>
    <x-slot name="title">
        Our Services
    </x-slot>

    <!-- Header -->
    <div class="bg-bg-clean py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-text-heading mb-4">
                Find the Perfect Service
            </h1>
            <p class="text-xl text-text-body max-w-2xl mx-auto">
                Choose from our wide range of professional services tailored to your needs.
            </p>
        </div>
    </div>

    <!-- Search & Filter -->
    <div class="sticky top-[5rem] z-40 bg-white border-b border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <form action="{{ route('services.index') }}" method="GET" class="flex flex-col md:flex-row gap-4">
                <div class="flex-grow relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="text" name="search" value="{{ request('search') }}"
                        class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary sm:text-sm"
                        placeholder="Search services (e.g. Cleaning, Repair)...">
                </div>
                <div class="md:w-64">
                    <select name="category" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm rounded-lg" onchange="this.form.submit()">
                        <option value="">All Categories</option>
                        @foreach(['Cleaning', 'Plumbing', 'Electrical', 'Moving', 'Painting', 'Gardening', 'AC Repair', 'Pest Control'] as $cat)
                        <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                        @endforeach
                    </select>
                </div>
            </form>
        </div>
    </div>

    <!-- Service Grid -->
    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Loop through services (Placeholder loop since we don't have DB access dynamically in this view generation) -->
                {{-- In a real scenario, $services would be passed from the controller. --}}
                {{-- Example static cards for design --}}
                @for ($i = 1; $i <= 6; $i++)
                    <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition duration-300 border border-gray-100 overflow-hidden group flex flex-col">
                    <div class="relative h-48 bg-gray-200 overflow-hidden">
                        <img src="https://source.unsplash.com/random/800x600/?service,house&sig={{ $i }}" alt="Service Image" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-2 py-1 rounded-lg text-xs font-bold text-gray-900 flex items-center shadow-sm">
                            <svg class="w-3 h-3 text-warning mr-1 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            4.{{ rand(5, 9) }}
                        </div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <div class="flex justify-between items-start mb-2">
                            <span class="text-xs font-bold text-primary bg-bg-clean px-2 py-1 rounded-md uppercase tracking-wide">Category</span>
                        </div>
                        <h3 class="text-xl font-bold text-text-heading mb-2 group-hover:text-primary transition">Service Name {{ $i }}</h3>
                        <p class="text-text-body text-sm mb-4 line-clamp-3 flex-grow">
                            This is a description of the service. It provides detailed info about what is included.
                        </p>

                        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                            <div class="flex flex-col">
                                <span class="text-xs text-gray-400 uppercase font-bold">Price</span>
                                <span class="text-lg font-bold text-text-heading">${{ rand(40, 150) }}</span>
                            </div>
                            <a href="{{ route('bookings.create', ['service_id' => $i]) }}" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg text-white bg-gray-900 hover:bg-primary transition shadow-md">
                                Book Now
                            </a>
                        </div>
                    </div>
            </div>
            @endfor
        </div>

        <!-- Pagination (Static style) -->
        <div class="mt-12 flex justify-center">
            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Previous</span>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" aria-current="page" class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">1</a>
                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">2</a>
                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">3</a>
                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Next</span>
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            </nav>
        </div>
    </div>
    </div>
    </div>
</x-main-layout>