@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex items-center justify-between mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Job Applications</h1>
        <div class="flex items-center gap-2 text-sm text-gray-600">
            <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full font-semibold">
                {{ $applications->where('status', 'pending')->count() }} Pending
            </span>
        </div>
    </div>

    {{-- Success Message --}}
    @if(session('success'))
    <div class="bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg mb-6">
        {{ session('success') }}
    </div>
    @endif

    {{-- Filters --}}
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <form method="GET" action="{{ route('admin.job-applications.index') }}" class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Status</label>
                <select name="status" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary">
                    <option value="">All Statuses</option>
                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="reviewing" {{ request('status') == 'reviewing' ? 'selected' : '' }}>Reviewing</option>
                    <option value="interviewed" {{ request('status') == 'interviewed' ? 'selected' : '' }}>Interviewed</option>
                    <option value="hired" {{ request('status') == 'hired' ? 'selected' : '' }}>Hired</option>
                    <option value="rejected" {{ request('status') == 'rejected' ?'selected' : '' }}>Rejected</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Search</label>
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Name or email..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary">
            </div>

            <div class="flex items-end gap-2">
                <button type="submit" class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition">
                    Filter
                </button>
                <a href="{{ route('admin.job-applications.index') }}" class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
                    Reset
                </a>
            </div>
        </form>
    </div>

    {{-- Applications Table --}}
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Applicant</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Position</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Experience</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Applied</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($applications as $application)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">
                        <div class="font-semibold text-gray-900">{{ $application->full_name }}</div>
                        <div class="text-sm text-gray-600">{{ $application->email }}</div>
                        <div class="text-sm text-gray-600">{{ $application->phone }}</div>
                    </td>
                    <td class="px-6 py-4 text-gray-900 font-medium">{{ $application->position }}</td>
                    <td class="px-6 py-4 text-gray-600">{{ $application->experience_years ?? 'N/A' }} years</td>
                    <td class="px-6 py-4 text-gray-600">{{ $application->formatted_date }}</td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 rounded-full text-xs font-semibold 
                            @if($application->status == 'pending') bg-yellow-100 text-yellow-800
                            @elseif($application->status == 'reviewing') bg-blue-100 text-blue-800
                            @elseif($application->status == 'interviewed') bg-purple-100 text-purple-800
                            @elseif($application->status == 'hired') bg-green-100 text-green-800
                            @else bg-red-100 text-red-800
                            @endif">
                            {{ ucfirst($application->status) }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-2">
                            <a href="{{ route('admin.job-applications.show', $application->id) }}"
                                class="px-3 py-1 bg-primary text-white text-sm rounded hover:bg-primary-dark transition">
                                View
                            </a>
                            <form method="POST" action="{{ route('admin.job-applications.destroy', $application->id) }}"
                                onsubmit="return confirm('Are you sure you want to delete this application?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1 bg-red-500 text-white text-sm rounded hover:bg-red-600 transition">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-6 py-8 text-center text-gray-500">
                        No applications found
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="mt-6">
        {{ $applications->links() }}
    </div>
</div>
@endsection