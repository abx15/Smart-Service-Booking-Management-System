@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-4xl">
    <div class="mb-6">
        <a href="{{ route('admin.job-applications.index') }}" class="text-primary hover:text-primary-dark font-semibold">
            ← Back to Applications
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-md p-8">
        {{-- Header --}}
        <div class="flex items-start justify-between mb-8 pb-6 border-b border-gray-200">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $application->full_name }}</h1>
                <div class="flex items-center gap-4 text-gray-600">
                    <span>{{ $application->email }}</span>
                    <span>•</span>
                    <span>{{ $application->phone }}</span>
                </div>
            </div>
            <span class="px-4 py-2 rounded-full text-sm font-semibold 
                @if($application->status == 'pending') bg-yellow-100 text-yellow-800
                @elseif($application->status == 'reviewing') bg-blue-100 text-blue-800
                @elseif($application->status == 'interviewed') bg-purple-100 text-purple-800
                @elseif($application->status == 'hired') bg-green-100 text-green-800
                @else bg-red-100 text-red-800
                @endif">
                {{ ucfirst($application->status) }}
            </span>
        </div>

        {{-- Application Details --}}
        <div class="space-y-6 mb-8">
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Position</label>
                    <p class="text-gray-900 font-medium">{{ $application->position }}</p>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Years of Experience</label>
                    <p class="text-gray-900">{{ $application->experience_years ?? 'Not Specified' }} years</p>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Applied On</label>
                    <p class="text-gray-900">{{ $application->formatted_date }}</p>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Resume</label>
                    @if($application->resume_path)
                    <a href="{{ Storage::url($application->resume_path) }}" target="_blank"
                        class="text-primary hover:text-primary-dark font-semibold inline-flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Download Resume
                    </a>
                    @else
                    <p class="text-gray-500">No resume uploaded</p>
                    @endif
                </div>
            </div>

            @if($application->cover_letter)
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Cover Letter</label>
                <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                    <p class="text-gray-900 whitespace-pre-line">{{ $application->cover_letter }}</p>
                </div>
            </div>
            @endif
        </div>

        {{-- Update Status Form --}}
        <div class="bg-gray-50 p-6 rounded-lg">
            <h3 class="text-lg font-bold text-gray-900 mb-4">Update Application Status</h3>

            @if(session('success'))
            <div class="bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg mb-4">
                {{ session('success') }}
            </div>
            @endif

            <form method="POST" action="{{ route('admin.job-applications.update-status', $application->id) }}" class="space-y-4">
                @csrf
                @method('PATCH')

                <div>
                    <label for="status" class="block text-sm font-semibold text-gray-700 mb-2">Status</label>
                    <select name="status" id="status" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary">
                        <option value="pending" {{ $application->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="reviewing" {{ $application->status == 'reviewing' ? 'selected' : '' }}>Reviewing</option>
                        <option value="interviewed" {{ $application->status == 'interviewed' ? 'selected' : '' }}>Interviewed</option>
                        <option value="hired" {{ $application->status == 'hired' ? 'selected' : '' }}>Hired</option>
                        <option value="rejected" {{ $application->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                    </select>
                </div>

                <div>
                    <label for="admin_notes" class="block text-sm font-semibold text-gray-700 mb-2">Admin Notes (Internal)</label>
                    <textarea name="admin_notes" id="admin_notes" rows="4"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary">{{ $application->admin_notes }}</textarea>
                </div>

                <div class="flex gap-3">
                    <button type="submit" class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition font-semibold">
                        Update Status
                    </button>
                    <a href="{{ route('admin.job-applications.index') }}" class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition font-semibold">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection