<x-admin-layout>
    <div class="mb-8 animate-on-scroll">
        <div class="bg-gradient-to-r from-red-600 to-orange-600 rounded-3xl p-8 text-white relative overflow-hidden shadow-2xl">
            <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-60 h-60 bg-white/10 rounded-full blur-3xl"></div>

            <div class="relative z-10">
                <h1 class="text-3xl md:text-4xl font-black mb-2">
                    Admin Dashboard
                </h1>
                <p class="text-orange-100 text-lg">
                    Overview of your service booking platform performance
                </p>
            </div>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 card-hover">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-blue-100 text-blue-600 rounded-xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                </div>
                <span class="text-green-500 text-sm font-semibold">+12%</span>
            </div>
            <h3 class="text-3xl font-black text-gray-900">{{ $stats['total_bookings'] ?? 0 }}</h3>
            <p class="text-gray-500 text-sm font-medium">Total Bookings</p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 card-hover">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-yellow-100 text-yellow-600 rounded-xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <span class="text-xs font-bold bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full uppercase tracking-wide">Pending</span>
            </div>
            <h3 class="text-3xl font-black text-gray-900">{{ $stats['pending_bookings'] ?? 0 }}</h3>
            <p class="text-gray-500 text-sm font-medium">Requiring Approval</p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 card-hover">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-green-100 text-green-600 rounded-xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <span class="text-green-500 text-sm font-semibold">+8.2%</span>
            </div>
            <h3 class="text-3xl font-black text-gray-900">${{ number_format($stats['total_revenue'] ?? 0, 2) }}</h3>
            <p class="text-gray-500 text-sm font-medium">Total Revenue</p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 card-hover">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-purple-100 text-purple-600 rounded-xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
            </div>
            <h3 class="text-3xl font-black text-gray-900">{{ $stats['total_customers'] ?? 0 }}</h3>
            <p class="text-gray-500 text-sm font-medium">Active Customers</p>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <a href="{{ route('admin.services.index') }}" class="group bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl hover:border-blue-500 transition-all duration-300">
            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-blue-600 transition-colors">
                <svg class="w-6 h-6 text-blue-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-2">Manage Services</h3>
            <p class="text-gray-500 text-sm">Add, edit, or remove services</p>
        </a>

        <a href="{{ route('admin.workers.index') }}" class="group bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl hover:border-green-500 transition-all duration-300">
            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-green-600 transition-colors">
                <svg class="w-6 h-6 text-green-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-2">Manage Workers</h3>
            <p class="text-gray-500 text-sm">Verify and manage service providers</p>
        </a>

        <a href="{{ route('admin.bookings.index') }}" class="group bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl hover:border-purple-500 transition-all duration-300">
            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-purple-600 transition-colors">
                <svg class="w-6 h-6 text-purple-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2H9a2 2 0 00-2-2V5a2 2 0 00-2-2h2a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2H9z" />
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-2">View Bookings</h3>
            <p class="text-gray-500 text-sm">Monitor and manage all bookings</p>
        </a>
    </div>

    <!-- Recent Activity -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden mb-12">
        <div class="px-6 py-5 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
            <h2 class="text-lg font-bold text-gray-900">Recent Bookings</h2>
            <a href="{{ route('admin.bookings.index') }}" class="text-primary text-sm font-semibold hover:text-primary-dark transition-colors flex items-center gap-1">
                View All
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-600">
                <thead class="bg-gray-50 text-gray-900 font-semibold uppercase tracking-wider text-xs">
                    <tr>
                        <th class="px-6 py-4">Customer</th>
                        <th class="px-6 py-4">Service</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4">Date</th>
                        <th class="px-6 py-4">Amount</th>
                        <th class="px-6 py-4">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($recent_bookings as $booking)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center text-xs font-bold text-gray-600">
                                    {{ substr($booking->user->name ?? 'U', 0, 1) }}
                                </div>
                                <span class="font-medium text-gray-900">{{ $booking->user->name ?? 'N/A' }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">{{ $booking->service->name ?? 'N/A' }}</td>
                        <td class="px-6 py-4">
                            @if($booking->status == 'pending')
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                <span class="w-1.5 h-1.5 bg-yellow-400 rounded-full mr-1.5"></span>
                                Pending
                            </span>
                            @elseif($booking->status == 'confirmed')
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                <span class="w-1.5 h-1.5 bg-blue-400 rounded-full mr-1.5"></span>
                                Confirmed
                            </span>
                            @elseif($booking->status == 'completed')
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <span class="w-1.5 h-1.5 bg-green-400 rounded-full mr-1.5"></span>
                                Completed
                            </span>
                            @else
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                <span class="w-1.5 h-1.5 bg-red-400 rounded-full mr-1.5"></span>
                                {{ ucfirst($booking->status) }}
                            </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-gray-500">{{ $booking->created_at->format('M d, Y') }}</td>
                        <td class="px-6 py-4 font-bold text-gray-900">${{ number_format($booking->total_amount ?? 0, 2) }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('admin.bookings.show', $booking) }}" class="text-primary hover:text-primary-dark font-medium text-sm transition-colors">Manage</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-6 py-12 text-center">
                            <div class="flex flex-col items-center justify-center">
                                <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mb-3">
                                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2H9a2 2 0 00-2-2V5a2 2 0 00-2-2h2a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2H9z" />
                                    </svg>
                                </div>
                                <span class="text-gray-500 font-medium">No recent bookings found</span>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>