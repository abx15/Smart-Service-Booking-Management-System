<x-customer-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="section-padding">
                <div class="container-max container-padding">
                    <!-- Welcome Header -->
                    <div class="mb-8 animate-on-scroll">
                        <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl p-8 text-white relative overflow-hidden">
                            <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-white/10 rounded-full blur-3xl"></div>
                            <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-60 h-60 bg-white/10 rounded-full blur-3xl"></div>

                            <div class="relative z-10">
                                <h1 class="text-3xl md:text-4xl font-black mb-2">
                                    Welcome back, {{ Auth::user()->name }}! 👋
                                </h1>
                                <p class="text-indigo-100 text-lg">
                                    @if(Auth::user()->isProvider())
                                    Manage your services and track your bookings
                                    @elseif(Auth::user()->isAdmin())
                                    Overview of your service booking platform
                                    @else
                                    Track your bookings and discover new services
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <!-- Total Bookings -->
                        <div class="card card-hover p-6 animate-on-scroll">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <span class="text-sm text-green-600 font-semibold">+12%</span>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">{{ $bookings->count() }}</h3>
                            <p class="text-gray-500 text-sm">Total Bookings</p>
                        </div>

                        <!-- Pending Bookings -->
                        <div class="card card-hover p-6 animate-on-scroll">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <span class="text-sm text-yellow-600 font-semibold">Pending</span>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">{{ $bookings->where('status', 'pending')->count() }}</h3>
                            <p class="text-gray-500 text-sm">Awaiting Confirmation</p>
                        </div>

                        <!-- Completed Bookings -->
                        <div class="card card-hover p-6 animate-on-scroll">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <span class="text-sm text-green-600 font-semibold">+8%</span>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">{{ $bookings->where('status', 'completed')->count() }}</h3>
                            <p class="text-gray-500 text-sm">Completed Services</p>
                        </div>

                        <!-- Total Revenue -->
                        <div class="card card-hover p-6 animate-on-scroll">
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <span class="text-sm text-green-600 font-semibold">+23%</span>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">${{ number_format($bookings->sum('total_amount'), 2) }}</h3>
                            <p class="text-gray-500 text-sm">Total Revenue</p>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    @if(!Auth::user()->isAdmin())
                    <div class="mb-8 animate-on-scroll">
                        <h2 class="text-heading mb-6">Quick Actions</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            @if(Auth::user()->isCustomer())
                            <a href="{{ route('services.index') }}" class="card card-hover p-6 text-center group">
                                <div class="w-16 h-16 bg-indigo-100 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>
                                <h3 class="font-bold text-lg text-gray-900 mb-2">Browse Services</h3>
                                <p class="text-gray-500 text-sm">Find the perfect service for your needs</p>
                            </a>

                            <a href="{{ route('bookings.create') }}" class="card card-hover p-6 text-center group">
                                <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                    </svg>
                                </div>
                                <h3 class="font-bold text-lg text-gray-900 mb-2">New Booking</h3>
                                <p class="text-gray-500 text-sm">Schedule a new service appointment</p>
                            </a>
                            @endif

                            @if(Auth::user()->isProvider())
                            <a href="#" class="card card-hover p-6 text-center group">
                                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                    </svg>
                                </div>
                                <h3 class="font-bold text-lg text-gray-900 mb-2">Manage Services</h3>
                                <p class="text-gray-500 text-sm">Update your service offerings</p>
                            </a>

                            <a href="#" class="card card-hover p-6 text-center group">
                                <div class="w-16 h-16 bg-yellow-100 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                                    <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <h3 class="font-bold text-lg text-gray-900 mb-2">View Calendar</h3>
                                <p class="text-gray-500 text-sm">Check your schedule and availability</p>
                            </a>
                            @endif

                            <a href="{{ route('profile.edit') }}" class="card card-hover p-6 text-center group">
                                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <h3 class="font-bold text-lg text-gray-900 mb-2">Edit Profile</h3>
                                <p class="text-gray-500 text-sm">Update your personal information</p>
                            </a>
                        </div>
                    </div>
                    @endif

                    <!-- Recent Bookings -->
                    <div class="animate-on-scroll">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-heading">Recent Bookings</h2>
                            @if(!$bookings->isEmpty())
                            <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium flex items-center">
                                View All
                                <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                            @endif
                        </div>

                        <div class="card overflow-hidden">
                            @if($bookings->isEmpty())
                            <div class="p-12 text-center">
                                <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">No bookings yet</h3>
                                <p class="text-gray-500 mb-6">Get started by booking your first service</p>
                                @if(Auth::user()->isCustomer())
                                <a href="{{ route('services.index') }}" class="btn-primary">
                                    Browse Services
                                </a>
                                @endif
                            </div>
                            @else
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead class="bg-gray-50 border-b border-gray-200">
                                        <tr>
                                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Service</th>
                                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Date & Time</th>
                                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Amount</th>
                                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200">
                                        @foreach($bookings->take(5) as $booking)
                                        <tr class="hover:bg-gray-50 transition-colors">
                                            <td class="px-6 py-4">
                                                <div class="flex items-center">
                                                    <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center mr-3">
                                                        <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <div class="text-sm font-medium text-gray-900">{{ $booking->service->name }}</div>
                                                        <div class="text-xs text-gray-500">{{ $booking->service->category->name ?? 'General' }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">{{ \Carbon\Carbon::parse($booking->scheduled_date)->format('M d, Y') }}</div>
                                                <div class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($booking->scheduled_time)->format('h:i A') }}</div>
                                            </td>
                                            <td class="px-6 py-4">
                                                @switch($booking->status)
                                                @case('pending')
                                                <span class="badge badge-warning">Pending</span>
                                                @break
                                                @case('confirmed')
                                                <span class="badge badge-primary">Confirmed</span>
                                                @break
                                                @case('completed')
                                                <span class="badge badge-success">Completed</span>
                                                @break
                                                @case('cancelled')
                                                <span class="badge badge-error">Cancelled</span>
                                                @break
                                                @default
                                                <span class="badge">{{ ucfirst($booking->status) }}</span>
                                                @endswitch
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm font-semibold text-gray-900">${{ number_format($booking->total_amount, 2) }}</div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex items-center space-x-2">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">View</a>
                                                    @if($booking->status === 'pending')
                                                    <a href="#" class="text-green-600 hover:text-green-900 text-sm font-medium">Confirm</a>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
</x-customer-layout>