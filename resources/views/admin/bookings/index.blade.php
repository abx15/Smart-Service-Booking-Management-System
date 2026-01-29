<x-admin-layout>
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">Manage Bookings</h1>
        <p class="text-gray-500">View and update status of customer bookings.</p>
    </div>

    @if(session('success'))
    <div class="mb-6 p-4 bg-green-50 text-green-700 rounded-xl border border-green-200 flex items-center">
        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        {{ session('success') }}
    </div>
    @endif

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-600">
                <thead class="bg-gray-50 text-gray-900 font-semibold uppercase tracking-wider text-xs">
                    <tr>
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">Customer</th>
                        <th class="px-6 py-4">Service</th>
                        <th class="px-6 py-4">Date & Time</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4">Amount</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($bookings as $booking)
                    <tr class="hover:bg-gray-50 transition group">
                        <td class="px-6 py-4 font-mono text-xs text-gray-500">#{{ $booking->id }}</td>
                        <td class="px-6 py-4">
                            <div class="font-medium text-gray-900">{{ $booking->user->name }}</div>
                            <div class="text-xs text-gray-500">{{ $booking->user->email }}</div>
                        </td>
                        <td class="px-6 py-4">{{ $booking->service->name }}</td>
                        <td class="px-6 py-4">
                            <div>{{ \Carbon\Carbon::parse($booking->scheduled_date)->format('M d, Y') }}</div>
                            <div class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($booking->scheduled_time)->format('h:i A') }}</div>
                        </td>
                        <td class="px-6 py-4">
                            @if($booking->status == 'pending')
                            <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full text-xs font-bold">Pending</span>
                            @elseif($booking->status == 'confirmed')
                            <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-xs font-bold">Confirmed</span>
                            @elseif($booking->status == 'completed')
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs font-bold">Completed</span>
                            @else
                            <span class="bg-red-100 text-red-700 px-2 py-1 rounded-full text-xs font-bold">{{ ucfirst($booking->status) }}</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 font-semibold">${{ number_format($booking->total_amount, 2) }}</td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('admin.bookings.show', $booking) }}" class="text-primary hover:text-primary-dark font-medium">View Details</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="px-6 py-12 text-center text-gray-500">
                            No bookings found.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="px-6 py-4 border-t border-gray-100">
            {{ $bookings->links() }}
        </div>
    </div>
</x-admin-layout>