@props(['layout' => 'row'])

@php
$badges = [
[
'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
</svg>',
'title' => 'Licensed',
'subtitle' => 'Fully Certified'
],
[
'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
</svg>',
'title' => 'Insured',
'subtitle' => 'Protected Service'
],
[
'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
</svg>',
'title' => 'Background Checked',
'subtitle' => 'Trusted Professionals'
],
[
'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
</svg>',
'title' => '10+ Years',
'subtitle' => 'Experience'
]
];

$layoutClass = $layout === 'grid'
? 'grid grid-cols-2 md:grid-cols-4 gap-6'
: 'flex flex-wrap justify-center items-center gap-6 md:gap-8';
@endphp

<div class="{{ $layoutClass }}">
    @foreach($badges as $badge)
    <div class="flex flex-col items-center text-center group">
        <!-- Icon Circle -->
        <div class="w-16 h-16 md:w-20 md:h-20 rounded-full bg-gradient-to-br from-primary/10 to-secondary/10 flex items-center justify-center mb-3 group-hover:from-primary/20 group-hover:to-secondary/20 transition-all duration-300 group-hover:scale-110">
            <div class="text-primary group-hover:text-secondary transition-colors duration-300">
                {!! $badge['icon'] !!}
            </div>
        </div>

        <!-- Text -->
        <div>
            <h4 class="font-bold text-gray-900 text-sm md:text-base mb-0.5">{{ $badge['title'] }}</h4>
            <p class="text-xs md:text-sm text-gray-600">{{ $badge['subtitle'] }}</p>
        </div>
    </div>
    @endforeach
</div>