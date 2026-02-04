@props(['size' => 'md', 'text' => 'Satisfaction Guaranteed'])

@php
$sizes = [
'sm' => 'w-16 h-16 text-[10px]',
'md' => 'w-24 h-24 text-xs',
'lg' => 'w-32 h-32 text-sm',
'xl' => 'w-40 h-40 text-base'
];
$sizeClass = $sizes[$size] ?? $sizes['md'];
@endphp

<div class="relative inline-flex items-center justify-center {{ $sizeClass }} group">
    <!-- Outer Circle with Gradient -->
    <div class="absolute inset-0 rounded-full bg-gradient-to-br from-trust-green via-emerald-500 to-green-600 shadow-xl group-hover:shadow-2xl group-hover:scale-105 transition-all duration-300"></div>

    <!-- Inner Circle -->
    <div class="absolute inset-1 rounded-full bg-white"></div>

    <!-- Content -->
    <div class="relative z-10 flex flex-col items-center justify-center p-2 text-center">
        <!-- Checkmark Icon -->
        <svg class="w-1/3 h-1/3 mb-1 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
        </svg>

        <!-- Text -->
        <div class="font-bold text-gray-900 uppercase tracking-tight leading-tight">
            {{ $text }}
        </div>
    </div>

    <!-- Decorative Stars -->
    <div class="absolute -top-1 -right-1 w-4 h-4 text-warning">
        <svg fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
        </svg>
    </div>
</div>