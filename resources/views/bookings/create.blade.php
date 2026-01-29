<x-main-layout>
    <x-slot name="title">
        Book Service
    </x-slot>

    <div class="bg-gray-50 min-h-screen py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-8">
                <a href="{{ route('services.index') }}" class="flex items-center text-sm text-gray-500 hover:text-primary transition">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Back to Services
                </a>
                <h1 class="text-3xl font-bold text-gray-900 mt-2">Complete Your Booking</h1>
                <p class="text-gray-600">You're just a few steps away from a confirmed appointment.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Booking Form -->
                <div class="lg:col-span-2">
                    <form action="{{ route('bookings.store') }}" method="POST" class="space-y-6">
                        @csrf
                        {{-- If service_id is passed, hidden field, otherwise select --}}
                        @if(request('service_id'))
                        <input type="hidden" name="service_id" value="{{ request('service_id') }}">
                        @else
                        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                            <h2 class="text-lg font-semibold text-gray-900 mb-4">Select Service</h2>
                            <div>
                                <label for="service_id" class="block text-sm font-medium text-gray-700 mb-1">Service Type</label>
                                <select id="service_id" name="service_id" class="block w-full rounded-xl border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm h-12">
                                    <option value="">Choose a service...</option>
                                    <!-- Placeholder options -->
                                    <option value="1">Deep Home Cleaning ($80/hr)</option>
                                    <option value="2">Plumbing Leak Repair ($50/hr)</option>
                                    <option value="3">AC Service ($65/hr)</option>
                                    <option value="4">Electrical Wiring ($60/hr)</option>
                                </select>
                            </div>
                        </div>
                        @endif

                        <!-- Date & Time Selection -->
                        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                            <h2 class="text-lg font-semibold text-gray-900 mb-4">When should we arrive?</h2>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="date" class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                                    <input type="date" id="date" name="date" class="block w-full rounded-xl border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm h-12" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Time Slot</label>
                                    <div class="grid grid-cols-2 gap-2">
                                        <!-- Simple radio buttons styled as blocks -->
                                        <label class="cursor-pointer">
                                            <input type="radio" name="time" value="09:00" class="peer sr-only">
                                            <div class="rounded-lg border border-gray-200 px-3 py-2 text-center text-sm peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary hover:bg-gray-50 transition">
                                                09:00 AM
                                            </div>
                                        </label>
                                        <label class="cursor-pointer">
                                            <input type="radio" name="time" value="11:00" class="peer sr-only">
                                            <div class="rounded-lg border border-gray-200 px-3 py-2 text-center text-sm peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary hover:bg-gray-50 transition">
                                                11:00 AM
                                            </div>
                                        </label>
                                        <label class="cursor-pointer">
                                            <input type="radio" name="time" value="14:00" class="peer sr-only">
                                            <div class="rounded-lg border border-gray-200 px-3 py-2 text-center text-sm peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary hover:bg-gray-50 transition">
                                                02:00 PM
                                            </div>
                                        </label>
                                        <label class="cursor-pointer">
                                            <input type="radio" name="time" value="16:00" class="peer sr-only">
                                            <div class="rounded-lg border border-gray-200 px-3 py-2 text-center text-sm peer-checked:border-primary peer-checked:bg-primary/10 peer-checked:text-primary hover:bg-gray-50 transition">
                                                04:00 PM
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Address Details -->
                        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                            <h2 class="text-lg font-semibold text-gray-900 mb-4">Location Details</h2>
                            <div class="space-y-4">
                                <div>
                                    <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Service Address</label>
                                    <input type="text" id="address" name="address" class="block w-full rounded-xl border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm h-12" placeholder="123 Main St, Apartment 4B" required>
                                </div>
                                <div>
                                    <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Special Instructions (Optional)</label>
                                    <textarea id="notes" name="notes" rows="3" class="block w-full rounded-xl border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm" placeholder="Gate code, parking info, etc."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-end pt-4">
                            <button type="submit" class="w-full md:w-auto px-8 py-4 bg-gray-900 hover:bg-primary text-white font-bold rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transition transform duration-200 flex items-center justify-center">
                                <span>Confirm Booking</span>
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Order Summary -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 sticky top-24">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Order Summary</h3>

                        <div class="flex items-center gap-4 mb-6 pb-6 border-b border-gray-100">
                            <div class="w-16 h-16 bg-bg-clean rounded-xl flex items-center justify-center text-primary">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-gray-900">Deep Home Cleaning</p>
                                <p class="text-sm text-gray-500">2 Hours • Standard Plan</p>
                            </div>
                        </div>

                        <div class="space-y-3 mb-6">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Base Price</span>
                                <span class="font-medium text-gray-900">$80.00</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Service Fee</span>
                                <span class="font-medium text-gray-900">$5.00</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Taxes</span>
                                <span class="font-medium text-gray-900">$8.50</span>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-100">
                            <div class="flex justify-between items-center mb-6">
                                <span class="text-base font-bold text-gray-900">Total</span>
                                <span class="text-2xl font-black text-primary">$93.50</span>
                            </div>
                        </div>

                        <div class="bg-blue-50 p-4 rounded-xl flex items-start gap-3">
                            <svg class="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-xs text-blue-700 leading-relaxed">
                                You won't be charged until the service is completed. Cancellation is free up to 24 hours before the appointment.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>