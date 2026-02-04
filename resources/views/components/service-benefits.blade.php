@props(['benefits' => []])

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach($benefits as $benefit)
    <div class="text-center">
        {{-- Icon Circle --}}
        <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br {{ $benefit['iconBg'] ?? 'from-primary to-secondary' }} rounded-2xl flex items-center justify-center shadow-xl transform hover:scale-110 transition-transform duration-300">
            <div class="text-white">
                {!! $benefit['icon'] !!}
            </div>
        </div>

        {{-- Title --}}
        <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-3">{{ $benefit['title'] }}</h3>

        {{-- Description --}}
        <p class="text-gray-600 leading-relaxed">{{ $benefit['description'] }}</p>
    </div>
    @endforeach
</div>