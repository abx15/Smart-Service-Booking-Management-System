<x-worker-layout>
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Worker Dashboard</h1>
        <p class="text-gray-500">Manage your services and track earnings</p>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-blue-100 text-blue-600 rounded-xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2H9a2 2 0 00-2-2V5a2 2 0 00-2-2h2a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2H9z"></path>
                    </svg>
                </div>
            </div>
            <h3 class="text-2xl font-bold text-gray-900">{{ $stats['total_bookings'] }}</h3>
            <p class="text-gray-500 text-sm">Total Bookings</p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-green-100 text-green-600 rounded-xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <h3 class="text-2xl font-bold text-gray-900">{{ $stats['completed_bookings'] }}</h3>
            <p class="text-gray-500 text-sm">Completed</p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-yellow-100 text-yellow-600 rounded-xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <h3 class="text-2xl font-bold text-gray-900">{{ $stats['pending_bookings'] }}</h3>
            <p class="text-gray-500 text-sm">Pending</p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-purple-100 text-purple-600 rounded-xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <h3 class="text-2xl font-bold text-gray-900">${{ number_format($stats['total_earnings'], 2) }}</h3>
            <p class="text-gray-500 text-sm">Total Earnings</p>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-6 rounded-2xl shadow-lg text-white hover:shadow-xl transition-all duration-300">
            <h3 class="text-lg font-bold mb-2">View Bookings</h3>
            <p class="text-blue-100 mb-4">Manage your service bookings</p>
            <a href="{{ route('worker.bookings') }}" class="inline-block bg-white text-blue-600 px-4 py-2 rounded-lg font-semibold hover:bg-blue-50 transition">View Bookings</a>
        </div>

        <div class="bg-gradient-to-r from-green-500 to-green-600 p-6 rounded-2xl shadow-lg text-white hover:shadow-xl transition-all duration-300">
            <h3 class="text-lg font-bold mb-2">View Earnings</h3>
            <p class="text-green-100 mb-4">Track your earnings</p>
            <a href="{{ route('worker.earnings') }}" class="inline-block bg-white text-green-600 px-4 py-2 rounded-lg font-semibold hover:bg-green-50 transition">View Earnings</a>
        </div>

        <div class="bg-gradient-to-r from-purple-500 to-purple-600 p-6 rounded-2xl shadow-lg text-white hover:shadow-xl transition-all duration-300">
            <h3 class="text-lg font-bold mb-2">Edit Profile</h3>
            <p class="text-purple-100 mb-4">Update your information</p>
            <a href="{{ route('worker.profile') }}" class="inline-block bg-white text-purple-600 px-4 py-2 rounded-lg font-semibold hover:bg-purple-50 transition">Edit Profile</a>
        </div>
    </div>

    <!-- Recent Bookings -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden mb-8">
        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
            <h2 class="text-lg font-bold text-gray-900">Recent Bookings</h2>
            <a href="{{ route('worker.bookings') }}" class="text-primary text-sm font-semibold hover:underline">View All</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-600">
                <thead class="bg-gray-50 text-gray-900 font-semibold uppercase tracking-wider text-xs">
                    <tr>
                        <th class="px-6 py-4">Service</th>
                        <th class="px-6 py-4">Customer</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4">Date</th>
                        <th class="px-6 py-4">Amount</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($bookings as $booking)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4">
                            <div class="font-medium text-gray-900">{{ $booking->service->name ?? 'N/A' }}</div>
                        </td>
                        <td class="px-6 py-4 text-gray-600">{{ $booking->user->name ?? 'N/A' }}</td>
                        <td class="px-6 py-4">
                            @if($booking->status == 'pending')
                            <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full text-xs font-bold">Pending</span>
                            @elseif($booking->status == 'confirmed')
                            <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-xs font-bold">Confirmed</span>
                            @elseif($booking->status == 'completed')
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs font-bold">Completed</span>
                            @else
                            <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-xs font-bold">{{ ucfirst($booking->status) }}</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-gray-600">{{ $booking->created_at->format('M d, Y') }}</td>
                        <td class="px-6 py-4 font-semibold">${{ number_format($booking->total_amount ?? 0, 2) }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-6 py-8 text-center text-gray-500">No recent bookings found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-worker-layout>
