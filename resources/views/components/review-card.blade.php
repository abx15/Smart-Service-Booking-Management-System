@props([
'rating' => 5,
'review' => '',
'name' => '',
'location' => '',
'initials' => '',
'avatarColor' => 'from-primary to-secondary'
])

<div class="bg-white rounded-2xl p-8 md:p-10 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 h-full flex flex-col">
    <!-- Star Rating -->
    <div class="flex gap-1 mb-6">
        @for($i = 0; $i < 5; $i++)
            <svg class="w-6 h-6 {{ $i < $rating ? 'text-warning' : 'text-gray-300' }} fill-current" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
            @endfor
    </div>

    <!-- Review Text -->
    <blockquote class="text-gray-700 text-lg leading-relaxed mb-8 flex-grow italic">
        "{{ $review }}"
    </blockquote>

    <!-- Customer Info -->
    <div class="flex items-center gap-4 pt-6 border-t border-gray-200">
        <!-- Avatar -->
        <div class="w-14 h-14 rounded-full bg-gradient-to-br {{ $avatarColor }} flex items-center justify-center flex-shrink-0">
            <span class="text-white font-bold text-lg uppercase">{{ $initials }}</span>
        </div>

        <!-- Name & Location -->
        <div>
            <h4 class="font-bold text-gray-900 text-lg">{{ $name }}</h4>
            @if($location)
            <p class="text-sm text-gray-600">{{ $location }}</p>
            @endif
        </div>

        <!-- Verified Badge -->
        <div class="ml-auto">
            <div class="w-8 h-8 rounded-full bg-trust-green flex items-center justify-center" title="Verified Customer">
                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    </div>
</div>