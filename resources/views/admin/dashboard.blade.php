<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Stats -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-gray-500 text-xs uppercase font-bold tracking-wider">Total Users</div>
                    <div class="text-3xl font-bold text-gray-900 mt-2">{{ $stats['users'] }}</div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-gray-500 text-xs uppercase font-bold tracking-wider">Providers</div>
                    <div class="text-3xl font-bold text-gray-900 mt-2">{{ $stats['providers'] }}</div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-gray-500 text-xs uppercase font-bold tracking-wider">Services</div>
                    <div class="text-3xl font-bold text-gray-900 mt-2">{{ $stats['services'] }}</div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-gray-500 text-xs uppercase font-bold tracking-wider">Total Bookings</div>
                    <div class="text-3xl font-bold text-gray-900 mt-2">{{ $stats['bookings'] }}</div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Welcome back, Admin!") }}
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>