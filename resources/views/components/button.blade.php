@props([
'variant' => 'primary',
'size' => 'md',
'href' => null,
'type' => 'button',
'icon' => null,
'iconPosition' => 'left',
'fullWidth' => false
])

@php
$baseClasses = 'inline-flex items-center justify-center font-bold rounded-2xl transition-all duration-300 transform active:scale-95 disabled:opacity-50 disabled:cursor-not-allowed disabled:transform-none';

$variants = [
'primary' => 'bg-gradient-to-r from-primary to-primary-dark hover:from-primary-dark hover:to-primary text-white shadow-lg hover:shadow-2xl hover:shadow-primary/30',
'secondary' => 'bg-gradient-to-r from-gray-900 to-gray-800 hover:from-gray-800 hover:to-gray-900 text-white shadow-lg hover:shadow-2xl',
'outline' => 'border-2 border-primary text-primary hover:bg-primary hover:text-white shadow-sm hover:shadow-lg',
'ghost' => 'text-gray-700 hover:bg-gray-100 hover:text-gray-900',
'success' => 'bg-gradient-to-r from-success to-emerald-600 hover:from-emerald-600 hover:to-success text-white shadow-lg hover:shadow-2xl hover:shadow-success/30',
'danger' => 'bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-500 text-white shadow-lg hover:shadow-2xl hover:shadow-red-500/30'
];

$sizes = [
'sm' => 'px-4 py-2 text-sm gap-1.5',
'md' => 'px-6 py-3 text-base gap-2',
'lg' => 'px-8 py-4 text-lg gap-2.5',
'xl' => 'px-10 py-5 text-xl gap-3'
];

$classes = $baseClasses . ' ' . ($variants[$variant] ?? $variants['primary']) . ' ' . ($sizes[$size] ?? $sizes['md']);

if ($fullWidth) {
$classes .= ' w-full';
}
@endphp

@if($href)
<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    @if($icon && $iconPosition === 'left')
    {!! $icon !!}
    @endif
    {{ $slot }}
    @if($icon && $iconPosition === 'right')
    {!! $icon !!}
    @endif
</a>
@else
<button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
    @if($icon && $iconPosition === 'left')
    {!! $icon !!}
    @endif
    {{ $slot }}
    @if($icon && $iconPosition === 'right')
    {!! $icon !!}
    @endif
</button>
@endif