<x-worker-layout>
    <div class="mb-8 animate-on-scroll">
        <div class="bg-gradient-to-r from-teal-600 to-emerald-600 rounded-3xl p-8 text-white relative overflow-hidden shadow-2xl">
            <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-60 h-60 bg-white/10 rounded-full blur-3xl"></div>

            <div class="relative z-10">
                <h1 class="text-3xl md:text-4xl font-black mb-2">My Services</h1>
                <p class="text-teal-100 text-lg">Manage the services you offer to customers</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-3xl shadow-xl border border-gray-100 overflow-hidden">
        <div class="px-6 py-5 border-b border-gray-100 bg-gray-50/50 flex justify-between items-center">
            <h3 class="text-lg font-bold text-gray-900">Offered Services</h3>
            <!-- Future Feature: Add Service Button -->
            <!-- <button class="px-4 py-2 bg-teal-600 text-white text-sm font-bold rounded-lg hover:bg-teal-700 transition">Add Service</button> -->
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-600">
                <thead class="bg-gray-50 text-gray-900 font-semibold uppercase tracking-wider text-xs">
                    <tr>
                        <th class="px-6 py-4">Service Name</th>
                        <th class="px-6 py-4">Category</th>
                        <th class="px-6 py-4">Price</th>
                        <th class="px-6 py-4">Duration</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($services as $service)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="font-bold text-gray-900">{{ $service->name }}</div>
                            <div class="text-xs text-gray-500">{{ Str::limit($service->description, 50) }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-gray-100 text-gray-600">
                                {{ $service->category->name ?? 'Uncategorized' }}
                            </span>
                        </td>
                        <td class="px-6 py-4 font-bold text-gray-900">
                            ${{ number_format($service->price, 2) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $service->duration_minutes }} mins
                        </td>
                        <td class="px-6 py-4">
                            @if($service->is_active)
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700">Active</span>
                            @else
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-red-100 text-red-700">Inactive</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-gray-400 hover:text-teal-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-6 py-12 text-center text-gray-500">
                            <div class="flex flex-col items-center justify-center">
                                <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <p class="text-lg font-medium text-gray-900">No services found</p>
                                <p class="text-sm">Contact admin to assign services to you.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 border-t border-gray-100">
            {{ $services->links() }}
        </div>
    </div>
</x-worker-layout>