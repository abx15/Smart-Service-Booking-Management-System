<x-customer-layout>
    <div class="mb-4" x-data="{ 
        step: 1,
        date: '',
        time: '',
        addressType: 'profile',
        paymentMethod: 'cod',
        notes: '',
        validateStep1() {
            if (!this.date || !this.time || !this.notes) {
                alert('Please fill in all required fields (Problem details, Date, Time).');
                return false;
            }
            this.step = 2;
        },
        submitForm() {
            this.$refs.bookingForm.submit();
        }
    }">
        <!-- Progress Bar -->
        <div class="max-w-3xl mx-auto mb-8">
            <div class="flex items-center justify-between relative">
                <div class="absolute w-full h-1 bg-gray-200 top-1/2 transform -translate-y-1/2 z-0"></div>
                <!-- Step 1 Indicator -->
                <div class="relative z-10 bg-white px-2">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-white transition-colors"
                        :class="step >= 1 ? 'bg-indigo-600' : 'bg-gray-300'">1</div>
                    <div class="absolute top-12 left-1/2 transform -translate-x-1/2 text-xs font-medium text-gray-600 w-24 text-center">Details</div>
                </div>
                <!-- Step 2 Indicator -->
                <div class="relative z-10 bg-white px-2">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-white transition-colors"
                        :class="step >= 2 ? 'bg-indigo-600' : 'bg-gray-300'">2</div>
                    <div class="absolute top-12 left-1/2 transform -translate-x-1/2 text-xs font-medium text-gray-600 w-24 text-center">Payment</div>
                </div>
            </div>
        </div>

        <div class="max-w-3xl mx-auto mt-12">
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                <div class="p-8 border-b border-gray-100 bg-gray-50">
                    <h1 class="text-2xl font-bold text-gray-900">Book {{ $service->name }}</h1>
                    <p class="text-gray-500 text-sm">Step <span x-text="step"></span> of 2</p>
                </div>

                <form action="{{ route('bookings.store') }}" method="POST" x-ref="bookingForm" class="p-8">
                    @csrf
                    <input type="hidden" name="service_id" value="{{ $service->id }}">

                    <!-- STEP 1: Details -->
                    <div x-show="step === 1" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-x-4" x-transition:enter-end="opacity-100 transform translate-x-0">

                        <!-- Problem Description -->
                        <div class="mb-6">
                            <label for="notes" class="block text-lg font-bold text-gray-900 mb-2">What is the problem? <span class="text-red-500">*</span></label>
                            <p class="text-sm text-gray-500 mb-2">Describe the issue in detail so the worker can come prepared.</p>
                            <textarea name="notes" id="notes" x-model="notes" rows="4" class="w-full border-gray-300 rounded-xl shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="E.g., Tap is leaking from the handle..." required></textarea>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="scheduled_date" class="block text-sm font-medium text-gray-700 mb-2">Select Date <span class="text-red-500">*</span></label>
                                <input type="date" name="scheduled_date" id="scheduled_date" x-model="date" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required min="{{ date('Y-m-d') }}">
                            </div>
                            <div>
                                <label for="scheduled_time" class="block text-sm font-medium text-gray-700 mb-2">Select Time <span class="text-red-500">*</span></label>
                                <input type="time" name="scheduled_time" id="scheduled_time" x-model="time" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Where should the worker come?</label>

                            <div class="space-y-3">
                                <label class="flex items-center p-4 border rounded-xl cursor-pointer hover:bg-indigo-50 transition" :class="addressType === 'profile' ? 'border-indigo-500 bg-indigo-50' : 'border-gray-200'">
                                    <input type="radio" name="address_type" value="profile" x-model="addressType" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300">
                                    <div class="ml-3">
                                        <span class="block text-sm font-medium text-gray-900">Home Address</span>
                                        <span class="block text-sm text-gray-500">{{ Auth::user()->address }}</span>
                                    </div>
                                </label>

                                <label class="flex items-start p-4 border rounded-xl cursor-pointer hover:bg-indigo-50 transition" :class="addressType === 'new' ? 'border-indigo-500 bg-indigo-50' : 'border-gray-200'">
                                    <input type="radio" name="address_type" value="new" x-model="addressType" class="mt-1 h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300">
                                    <div class="ml-3 w-full">
                                        <span class="block text-sm font-medium text-gray-900">New Address</span>
                                        <div x-show="addressType === 'new'" class="mt-2">
                                            <textarea name="custom_address" rows="2" class="w-full border-gray-300 rounded-lg text-sm" placeholder="Enter full address..."></textarea>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="flex justify-end mt-8">
                            <button type="button" @click="validateStep1()" class="bg-indigo-600 text-white px-8 py-3 rounded-xl font-bold hover:bg-indigo-700 transition shadow-lg shadow-indigo-200 flex items-center">
                                Next Step
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- STEP 2: Payment -->
                    <div x-show="step === 2" style="display: none;" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-x-4" x-transition:enter-end="opacity-100 transform translate-x-0">

                        <h3 class="text-xl font-bold text-gray-900 mb-6">Payment Method</h3>

                        <label class="flex items-center p-6 border-2 border-green-500 bg-green-50 rounded-2xl cursor-pointer mb-8 relative overflow-hidden">
                            <div class="absolute top-0 right-0 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-bl-xl">Recommmended</div>
                            <input type="radio" name="payment_method" value="cod" x-model="paymentMethod" class="h-6 w-6 text-green-600 focus:ring-green-500 border-gray-300" checked>
                            <div class="ml-4">
                                <span class="block text-lg font-bold text-gray-900">Cash on Service</span>
                                <span class="block text-sm text-green-700 font-medium">Pay cash to the worker after job is done</span>
                            </div>
                        </label>

                        <div class="bg-gray-50 rounded-xl p-6 mb-8">
                            <h4 class="text-sm font-bold text-gray-500 uppercase tracking-wider mb-4">Booking Summary</h4>
                            <div class="space-y-3 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Service</span>
                                    <span class="font-medium text-gray-900">{{ $service->name }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Date & Time</span>
                                    <span class="font-medium text-gray-900"><span x-text="date"></span> at <span x-text="time"></span></span>
                                </div>
                                <div class="flex justify-between pt-3 border-t border-gray-200">
                                    <span class="text-lg font-bold text-gray-900">Total Amount</span>
                                    <span class="text-lg font-bold text-indigo-600">${{ number_format($service->price, 2) }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-between items-center mt-8">
                            <button type="button" @click="step = 1" class="text-gray-500 hover:text-gray-700 font-medium">
                                Back to Details
                            </button>
                            <button type="button" @click="submitForm()" class="bg-green-600 text-white px-8 py-3 rounded-xl font-bold hover:bg-green-700 transition shadow-lg shadow-green-200 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                Submit Booking
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-customer-layout>