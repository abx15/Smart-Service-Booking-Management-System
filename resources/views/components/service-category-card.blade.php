@props([
'icon' => '',
'title' => '',
'description' => '',
'href' => '#',
'iconBg' => 'from-primary to-secondary'
])

<a href="{{ $href }}" class="group block bg-white rounded-2xl p-6 md:p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-primary/20 transform hover:-translate-y-1">
    <!-- Icon -->
    <div class="w-16 h-16 md:w-20 md:h-20 rounded-2xl bg-gradient-to-br {{ $iconBg }} flex items-center justify-center mb-5 group-hover:scale-110 transition-transform duration-300 shadow-lg">
        <div class="text-white">
            {!! $icon !!}
        </div>
    </div>

    <!-- Title -->
    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">
        {{ $title }}
    </h3>

    <!-- Description -->
    <p class="text-gray-600 leading-relaxed mb-4 line-clamp-3">
        {{ $description }}
    </p>

    <!-- Arrow Link -->
    <div class="flex items-center text-primary font-semibold group-hover:gap-2 transition-all">
        <span>Learn More</span>
        <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
        </svg>
    </div>
</a>