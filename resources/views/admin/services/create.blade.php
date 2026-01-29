<x-admin-layout>
    <div class="mb-8">
        <a href="{{ route('admin.services.index') }}" class="flex items-center text-sm text-gray-500 hover:text-primary transition mb-4">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Back to Services
        </a>
        <h1 class="text-2xl font-bold text-gray-900">Add New Service</h1>
        <p class="text-gray-500">Create a new service offering for your customers.</p>
    </div>

    <div class="max-w-3xl">
        <form action="{{ route('admin.services.store') }}" method="POST" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 space-y-6">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Service Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="block w-full rounded-xl border-gray-300 shadow-sm focus:border-primary focus:ring-primary h-11" placeholder="e.g. Deep Home Cleaning" required>
                @error('name') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Category -->
                <div>
                    <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                    <select name="category_id" id="category_id" class="block w-full rounded-xl border-gray-300 shadow-sm focus:border-primary focus:ring-primary h-11" required>
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                </div>

                <!-- Price -->
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Price ($)</label>
                    <input type="number" step="0.01" name="price" id="price" value="{{ old('price') }}" class="block w-full rounded-xl border-gray-300 shadow-sm focus:border-primary focus:ring-primary h-11" placeholder="0.00" required>
                    @error('price') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Duration -->
                <div>
                    <label for="duration_minutes" class="block text-sm font-medium text-gray-700 mb-1">Duration (minutes)</label>
                    <input type="number" name="duration_minutes" id="duration_minutes" value="{{ old('duration_minutes', 60) }}" class="block w-full rounded-xl border-gray-300 shadow-sm focus:border-primary focus:ring-primary h-11" placeholder="60" required>
                    @error('duration_minutes') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                </div>

                <!-- Status -->
                <div class="flex items-center h-full pt-6">
                    <label class="flex items-center cursor-pointer">
                        <input type="checkbox" name="is_active" value="1" class="rounded border-gray-300 text-primary focus:ring-primary w-5 h-5" {{ old('is_active', true) ? 'checked' : '' }}>
                        <span class="ml-2 text-sm text-gray-700">Active (Visible to customers)</span>
                    </label>
                </div>
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea name="description" id="description" rows="5" class="block w-full rounded-xl border-gray-300 shadow-sm focus:border-primary focus:ring-primary" placeholder="Detailed description of the service..." required>{{ old('description') }}</textarea>
                @error('description') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            <div class="pt-4 border-t border-gray-100 flex justify-end">
                <a href="{{ route('admin.services.index') }}" class="px-6 py-3 text-gray-600 font-medium hover:bg-gray-50 rounded-xl mr-3 transition">Cancel</a>
                <button type="submit" class="px-6 py-3 bg-primary hover:bg-primary-dark text-white font-bold rounded-xl shadow-lg hover:shadow-xl transition transform hover:-translate-y-0.5">
                    Create Service
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>