<x-admin-layout>
    <div class="mb-8 flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Worker Details</h1>
            <p class="text-gray-500">View complete information for {{ $worker->name }}</p>
        </div>
        <a href="{{ route('admin.workers.index') }}" class="flex items-center text-gray-600 hover:text-gray-900 transition">
            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Back to List
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Sidebar / Profile Card -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden text-center p-8">
                <div class="w-32 h-32 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center text-white text-4xl font-bold mx-auto mb-4 shadow-md">
                    {{ substr($worker->name, 0, 1) }}
                </div>
                <h2 class="text-2xl font-bold text-gray-900">{{ $worker->name }}</h2>
                <p class="text-gray-500 mb-4">{{ $worker->email }}</p>

                <div class="inline-flex items-center gap-2 px-4 py-2 bg-gray-50 rounded-lg mb-6">
                    <span class="w-3 h-3 rounded-full {{ $worker->is_active ? 'bg-green-500 animate-pulse' : 'bg-red-400' }}"></span>
                    <span class="font-medium {{ $worker->is_active ? 'text-green-700' : 'text-red-700' }}">
                        {{ $worker->is_active ? 'Active Account' : 'Inactive' }}
                    </span>
                </div>

                <div class="border-t border-gray-100 pt-6">
                    <div class="text-sm text-gray-500 uppercase tracking-wider font-semibold mb-2">Contact Info</div>
                    <div class="space-y-2">
                        <div class="flex items-center justify-center gap-2 text-gray-700">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            {{ $worker->phone ?? 'N/A' }}
                        </div>
                        <div class="flex items-center justify-center gap-2 text-gray-700">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            {{ $worker->address ?? 'N/A' }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Details -->
        <div class="lg:col-span-2 space-y-8">
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8">
                <h3 class="text-xl font-bold text-gray-900 border-b border-gray-100 pb-4 mb-6">Professional Profile</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div>
                        <div class="text-sm text-gray-500 uppercase tracking-wider font-medium mb-1">Experience</div>
                        <div class="text-2xl font-bold text-gray-900">{{ $worker->experience }} <span class="text-base font-normal text-gray-500">Years</span></div>
                    </div>
                </div>

                <div class="mb-8">
                    <div class="text-sm text-gray-500 uppercase tracking-wider font-medium mb-2">Skills</div>
                    <div class="flex flex-wrap gap-2">
                        @forelse(explode(',', $worker->skills) as $skill)
                        @if(trim($skill))
                        <span class="bg-blue-50 text-blue-700 px-3 py-1.5 rounded-lg text-sm font-semibold border border-blue-100">{{ trim($skill) }}</span>
                        @endif
                        @empty
                        <span class="text-gray-400 italic">No skills listed</span>
                        @endforelse
                    </div>
                </div>

                <div>
                    <div class="text-sm text-gray-500 uppercase tracking-wider font-medium mb-2">Bio</div>
                    <div class="bg-gray-50 rounded-xl p-6 text-gray-700 leading-relaxed border border-gray-100">
                        {{ $worker->bio ?? 'No bio provided.' }}
                    </div>
                </div>
            </div>

            <!-- Stats or Other Info (Placeholder) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white rounded-2xl shadow border border-gray-100 p-6 flex items-center justify-between">
                    <div>
                        <div class="text-sm text-gray-500 font-medium">Completed Jobs</div>
                        <div class="text-2xl font-bold text-gray-900">{{ $worker->providerBookings()->where('status', 'completed')->count() }}</div>
                    </div>
                    <div class="p-3 bg-green-100 text-green-600 rounded-xl">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow border border-gray-100 p-6 flex items-center justify-between">
                    <div>
                        <div class="text-sm text-gray-500 font-medium">Pending Jobs</div>
                        <div class="text-2xl font-bold text-gray-900">{{ $worker->providerBookings()->where('status', 'pending')->count() }}</div>
                    </div>
                    <div class="p-3 bg-yellow-100 text-yellow-600 rounded-xl">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="flex justify-end pt-4">
                <form method="POST" action="{{ route('admin.workers.destroy', $worker) }}" onsubmit="return confirm('Are you sure you want to delete this worker permanently? This action cannot be undone.')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-800 font-bold text-sm bg-red-50 hover:bg-red-100 px-4 py-2 rounded-lg transition">
                        Delete Worker Account
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>