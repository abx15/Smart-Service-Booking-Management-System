@props(['title' => 'How It Works', 'subtitle' => 'Simple process, professional results'])

@php
$steps = [
[
'number' => '1',
'title' => 'Request Service',
'description' => 'Choose your service and schedule a convenient time online or by phone.',
'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
</svg>'
],
[
'number' => '2',
'title' => 'We Arrive On Time',
'description' => 'Our certified professional arrives promptly in uniform with all necessary equipment.',
'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>'
],
[
'number' => '3',
'title' => 'Expert Work',
'description' => 'We assess, explain the process, and complete the job with guaranteed quality workmanship.',
'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
</svg>'
],
[
'number' => '4',
'title' => 'Complete Satisfaction',
'description' => 'We clean up, review our work with you, and ensure you\'re 100% satisfied.',
'icon' => '<svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>'
]
];
@endphp

<div class="py-16">
    {{-- Section Header --}}
    <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">{{ $title }}</h2>
        <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">{{ $subtitle }}</p>
    </div>

    {{-- Steps Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 relative">
        @foreach($steps as $index => $step)
        <div class="relative">
            {{-- Connection Line (desktop only) --}}
            @if($index < count($steps) - 1)
                <div class="hidden lg:block absolute top-16 left-1/2 w-full h-0.5 bg-gradient-to-r from-primary/30 to-primary/10 z-0">
        </div>
        @endif

        {{-- Step Card --}}
        <div class="relative z-10 text-center">
            {{-- Number Badge --}}
            <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center shadow-lg">
                <span class="text-white text-2xl font-black">{{ $step['number'] }}</span>
            </div>

            {{-- Icon --}}
            <div class="w-16 h-16 mx-auto mb-4 text-primary">
                {!! $step['icon'] !!}
            </div>

            {{-- Title --}}
            <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $step['title'] }}</h3>

            {{-- Description --}}
            <p class="text-gray-600 leading-relaxed">{{ $step['description'] }}</p>
        </div>
    </div>
    @endforeach
</div>
</div>