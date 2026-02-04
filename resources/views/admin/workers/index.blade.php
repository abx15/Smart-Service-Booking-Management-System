<x-admin-layout>
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Manage Workers</h1>
        <p class="text-gray-500">Verify and manage service providers</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-blue-100 text-blue-600 rounded-xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
            </div>
            <h3 class="text-2xl font-bold text-gray-900">{{ $workers->total() }}</h3>
            <p class="text-gray-500 text-sm">Total Workers</p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-green-100 text-green-600 rounded-xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <h3 class="text-2xl font-bold text-gray-900">{{ $workers->where('verified', true)->count() }}</h3>
            <p class="text-gray-500 text-sm">Verified Workers</p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-100">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-yellow-100 text-yellow-600 rounded-xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <h3 class="text-2xl font-bold text-gray-900">{{ $workers->where('verified', false)->count() }}</h3>
            <p class="text-gray-500 text-sm">Pending Verification</p>
        </div>
    </div>

    <!-- Actions -->
    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.workers.create') }}" class="bg-primary text-white px-4 py-2 rounded-lg font-semibold hover:bg-primary-dark transition">
                <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Add Worker
            </a>
        </div>
        
        <div class="flex items-center space-x-2">
            <form method="GET" class="flex items-center">
                <input type="text" name="search" placeholder="Search workers..." value="{{ request('search') }}" class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                <button type="submit" class="ml-2 px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </form>
        </div>
    </div>

    <!-- Workers Table -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-600">
                <thead class="bg-gray-50 text-gray-900 font-semibold uppercase tracking-wider text-xs">
                    <tr>
                        <th class="px-6 py-4">Name</th>
                        <th class="px-6 py-4">Email</th>
                        <th class="px-6 py-4">Phone</th>
                        <th class="px-6 py-4">Skills</th>
                        <th class="px-6 py-4">Experience</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($workers as $worker)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                    {{ substr($worker->name, 0, 1) }}
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">{{ $worker->name }}</div>
                                    <div class="text-sm text-gray-500">{{ $worker->address }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-gray-600">{{ $worker->email }}</td>
                        <td class="px-6 py-4 text-gray-600">{{ $worker->phone }}</td>
                        <td class="px-6 py-4">
                            <div class="flex flex-wrap gap-1">
                                @foreach(explode(',', $worker->skills) as $skill)
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded-full text-xs">{{ trim($skill) }}</span>
                                @endforeach
                            </div>
                        </td>
                        <td class="px-6 py-4 text-gray-600">{{ $worker->experience }} years</td>
                        <td class="px-6 py-4">
                            @if($worker->verified)
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs font-bold">Verified</span>
                            @else
                            <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full text-xs font-bold">Pending</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-2">
                                <a href="{{ route('admin.workers.edit', $worker) }}" class="text-blue-600 hover:text-blue-800 font-medium">Edit</a>
                                @if($worker->verified)
                                <form method="POST" action="{{ route('admin.workers.unverify', $worker) }}" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    <button type="submit" class="text-yellow-600 hover:text-yellow-800 font-medium">Unverify</button>
                                </form>
                                @else
                                <form method="POST" action="{{ route('admin.workers.verify', $worker) }}" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    <button type="submit" class="text-green-600 hover:text-green-800 font-medium">Verify</button>
                                </form>
                                @endif
                                <form method="POST" action="{{ route('admin.workers.destroy', $worker) }}" onsubmit="return confirm('Are you sure you want to delete this worker?')">
                                    @csrf
                                    <button type="submit" class="text-red-600 hover:text-red-800 font-medium">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="px-6 py-8 text-center text-gray-500">No workers found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-gray-100">
            {{ $workers->links() }}
        </div>
    </div>
</x-admin-layout>
