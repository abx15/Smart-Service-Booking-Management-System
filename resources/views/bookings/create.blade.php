<x-customer-layout>
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Book Service</h1>
        <p class="text-gray-500">Schedule your {{ $service->name }} service</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Service Details Card -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6">
                <div class="aspect-w-16 aspect-h-9 mb-4 rounded-xl overflow-hidden bg-gray-100">
                    <!-- Placeholder for service image -->
                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-400">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
                <h2 class="text-xl font-bold text-gray-900 mb-2">{{ $service->name }}</h2>
                <div class="flex items-center text-sm text-gray-500 mb-4">
                    <span class="bg-indigo-50 text-indigo-700 px-2 py-1 rounded-md text-xs font-semibold mr-2">{{ $service->category->name }}</span>
                    <span>{{ $service->duration_minutes }} mins</span>
                </div>
                <p class="text-gray-600 text-sm mb-6">{{ $service->description }}</p>

                <div class="border-t border-gray-100 pt-4 flex justify-between items-center">
                    <span class="text-gray-500 text-sm">Price</span>
                    <span class="text-2xl font-bold text-indigo-600">${{ number_format($service->price, 2) }}</span>
                </div>
            </div>
        </div>

        <!-- Booking Form -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8">
                <form action="{{ route('bookings.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="service_id" value="{{ $service->id }}">

                    <!-- Date & Time Selection -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="scheduled_date" class="block text-sm font-medium text-gray-700 mb-2">Date</label>
                            <input type="date" name="scheduled_date" id="scheduled_date" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required min="{{ date('Y-m-d') }}">
                        </div>
                        <div>
                            <label for="scheduled_time" class="block text-sm font-medium text-gray-700 mb-2">Time</label>
                            <input type="time" name="scheduled_time" id="scheduled_time" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                        </div>
                    </div>

                    <!-- Address Selection -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Service Location</label>

                        <!-- Use Profile Address -->
                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 mb-3 flex items-start">
                            <div class="flex items-center h-5">
                                <input id="use_profile_address" name="address_type" value="profile" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" checked>
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="use_profile_address" class="font-medium text-gray-700">Use My Profile Address</label>
                                <p class="text-gray-500">{{ Auth::user()->address }}</p>
                            </div>
                        </div>

                        <!-- Custom Address -->
                        <div class="border border-gray-200 rounded-lg p-4 flex items-start">
                            <div class="flex items-center h-5">
                                <input id="use_new_address" name="address_type" value="new" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                            </div>
                            <div class="ml-3 w-full">
                                <label for="use_new_address" class="font-medium text-gray-700">Enter Different Address</label>
                                <textarea name="custom_address" id="custom_address" rows="2" class="mt-2 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter service address..."></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Notes -->
                    <div class="mb-8">
                        <label for="notes" class="block text-sm font-medium text-gray-700 mb-2">Additional Notes</label>
                        <textarea name="notes" id="notes" rows="3" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Any special instructions for the provider?"></textarea>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-indigo-700 transition shadow-lg shadow-indigo-200">
                            Confirm Booking
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-customer-layout>