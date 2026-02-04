@props(['src', 'alt', 'class' => '', 'aspectRatio' => '16/9', 'objectFit' => 'cover'])

<div class="relative overflow-hidden bg-gradient-to-br from-gray-200 via-gray-100 to-gray-200" style="aspect-ratio: {{ $aspectRatio }}">
    <!-- Skeleton Loader -->
    <div class="absolute inset-0 animate-pulse bg-gradient-to-r from-gray-200 via-gray-100 to-gray-200 bg-[length:200%_100%]"></div>

    <!-- Actual Image -->
    <img
        src="{{ $src }}"
        alt="{{ $alt }}"
        class="lazy absolute inset-0 w-full h-full object-{{ $objectFit }} opacity-0 transition-opacity duration-500 {{ $class }}"
        loading="lazy"
        onload="this.style.opacity='1'; this.previousElementSibling?.remove();"
        onerror="this.parentElement.innerHTML='<div class=\'absolute inset-0 flex items-center justify-center bg-gray-200\'><svg class=\'w-12 h-12 text-gray-400\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z\'></path></svg></div>'" />
</div>

<style>
    @keyframes shimmer {
        0% {
            background-position: -200% 0;
        }

        100% {
            background-position: 200% 0;
        }
    }

    .animate-pulse {
        animation: shimmer 2s infinite linear;
    }
</style>