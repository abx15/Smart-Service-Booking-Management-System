@props(['title', 'items'])

<div x-data="{ open: false }" class="relative">
    <button @click="open = !open" 
            class="nav-link flex items-center space-x-1"
            :class="{ 'nav-link-active': open }">
        <span>{{ $title }}</span>
        <svg class="w-4 h-4 transition-transform duration-200" 
             :class="{ 'rotate-180': open }" 
             fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>
    
    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform scale-95 -translate-y-2"
         x-transition:enter-end="opacity-100 transform scale-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 transform scale-100 translate-y-0"
         x-transition:leave-end="opacity-0 transform scale-95 -translate-y-2"
         @click.away="open = false"
         class="absolute top-full left-0 mt-2 w-72 bg-white rounded-2xl shadow-2xl border border-gray-100 p-2 z-50">
        
        <div class="grid gap-1">
            @foreach($items as $item)
            <a href="{{ $item['url'] }}" 
               class="flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-primary/5 hover:text-primary transition-all duration-200 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br {{ $item['color'] }} flex items-center justify-center group-hover:scale-110 transition-transform duration-200">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}" />
                    </svg>
                </div>
                <div class="flex-1">
                    <div class="font-medium text-gray-900">{{ $item['title'] }}</div>
                    <div class="text-sm text-gray-500">{{ $item['description'] }}</div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
