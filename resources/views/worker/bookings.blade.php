<x-worker-layout>
    <div class="mb-8 animate-on-scroll">
        <div class="bg-gradient-to-r from-teal-600 to-emerald-600 rounded-3xl p-8 text-white relative overflow-hidden shadow-2xl">
            <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-60 h-60 bg-white/10 rounded-full blur-3xl"></div>

            <div class="relative z-10">
                <h1 class="text-3xl md:text-4xl font-black mb-2">My Bookings</h1>
                <p class="text-teal-100 text-lg">Manage and track your service appointments</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-3xl shadow-xl border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-600">
                <thead class="bg-gray-50 text-gray-900 font-semibold uppercase tracking-wider text-xs">
                    <tr>
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">Service</th>
                        <th class="px-6 py-4">Customer</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4">Scheduled Date</th>
                        <th class="px-6 py-4">Amount</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($bookings as $booking)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 font-mono text-xs text-gray-500">#{{ $booking->id }}</td>
                        <td class="px-6 py-4">
                            <div class="font-bold text-gray-900">{{ $booking->service->name }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="font-medium text-gray-900">{{ $booking->user->name ?? 'Guest' }}</div>
                            <div class="text-xs text-gray-500">{{ $booking->user->phone ?? 'N/A' }}</div>
                        </td>
                        <td class="px-6 py-4">
                            @if($booking->status === 'completed')
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700">Completed</span>
                            @elseif($booking->status === 'cancelled')
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-red-100 text-red-700">Cancelled</span>
                            @else
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-yellow-100 text-yellow-700">Pending</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="font-medium text-gray-900">{{ $booking->scheduled_at->format('M d, Y') }}</div>
                            <div class="text-xs text-gray-500">{{ $booking->scheduled_at->format('h:i A') }}</div>
                        </td>
                        <td class="px-6 py-4 font-bold text-gray-900">
                            ${{ number_format($booking->total_amount, 2) }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-teal-600 hover:text-teal-800 font-medium text-sm">View Details</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="px-6 py-12 text-center text-gray-500">
                            <div class="flex flex-col items-center justify-center">
                                <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <p class="text-lg font-medium text-gray-900">No bookings found</p>
                                <p class="text-sm">New bookings will appear here.</p>
                            </div>
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
</x-worker-layout>