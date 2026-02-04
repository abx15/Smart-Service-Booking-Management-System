@props(['services' => []])

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach($services as $service)
    <div class="flex items-start gap-3 p-4 bg-white rounded-xl border border-gray-200 hover:border-primary/30 hover:shadow-md transition-all duration-300">
        {{-- Checkmark Icon --}}
        <div class="flex-shrink-0 w-6 h-6 rounded-full bg-trust-green flex items-center justify-center mt-0.5">
            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
        </div>

        {{-- Service Name --}}
        <div class="flex-1">
            <h4 class="font-semibold text-gray-900 mb-1">{{ $service['name'] }}</h4>
            @if(isset($service['description']))
            <p class="text-sm text-gray-600">{{ $service['description'] }}</p>
            @endif
        </div>
    </div>
    @endforeach
</div>