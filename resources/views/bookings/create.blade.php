<x-public-layout>
    <div class="bg-gray-50 py-20 min-h-screen">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-black text-gray-900 mb-8 text-center">Complete Your Booking</h1>

            <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden flex flex-col md:flex-row">
                <!-- Service Summary Column -->
                <div class="md:w-1/3 bg-gray-900 p-8 text-white relative flex flex-col justify-between overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-900 to-purple-900 opacity-50"></div>
                    <div class="absolute inset-0  bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 brightness-100 contrast-150 mix-blend-overlay"></div>
                    <div class="relative z-10">
                        <div class="uppercase tracking-widest text-xs font-bold text-gray-400 mb-2">Service Details</div>
                        <h2 class="text-2xl font-bold mb-2">{{ $service->name }}</h2>
                        <div class="flex items-center gap-2 mb-6">
                            <span class="px-2 py-1 bg-white/10 rounded-lg text-xs font-bold backdrop-blur">{{ $service->category->name }}</span>
                        </div>

                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center font-bold text-lg">
                                {{ substr($service->provider->name ?? 'P', 0, 1) }}
                            </div>
                            <div>
                                <p class="text-xs text-gray-400">Provider</p>
                                <p class="font-bold">{{ $service->provider->name ?? 'Provider Name' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative z-10 border-t border-white/10 pt-6 mt-6">
                        <div class="flex justify-between items-end">
                            <span class="text-gray-400 text-sm">Total per hour</span>
                            <span class="text-3xl font-bold">${{ $service->price }}</span>
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="md:w-2/3 p-8 md:p-10">
                    <form action="{{ route('bookings.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <input type="hidden" name="service_id" value="{{ $service->id }}">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Date</label>
                                <input type="date" name="scheduled_date" class="w-full bg-gray-50 border-gray-200 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 transition" required min="{{ date('Y-m-d') }}">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Time</label>
                                <input type="time" name="scheduled_time" class="w-full bg-gray-50 border-gray-200 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 transition" required>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Location</label>
                            @if($addresses->count() > 0)
                            <div class="relative">
                                <select name="address_id" class="w-full bg-gray-50 border-gray-200 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 appearance-none transition py-3 px-4">
                                    @foreach($addresses as $address)
                                    <option value="{{ $address->id }}">{{ $address->street }}, {{ $address->city }}</option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </div>
                            @else
                            <div class="p-4 bg-yellow-50 text-yellow-800 rounded-xl text-sm mb-2 border border-yellow-100 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                </svg>
                                No address found.
                            </div>
                            @endif
                            <a href="#" class="inline-flex items-center text-xs font-bold text-indigo-600 hover:text-indigo-800 mt-2">
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                                Add New Address
                            </a>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Notes (Optional)</label>
                            <textarea name="notes" rows="3" class="w-full bg-gray-50 border-gray-200 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 transition" placeholder="Gate code, special instructions..."></textarea>
                        </div>

                        <div class="pt-4">
                            <button type="submit" class="w-full py-4 bg-indigo-600 text-white font-bold rounded-xl hover:bg-indigo-700 transition shadow-lg shadow-indigo-200 transform hover:-translate-y-0.5">Confirm Booking</button>
                            <p class="text-xs text-center text-gray-400 mt-4">By booking, you agree to our Terms of Service.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>