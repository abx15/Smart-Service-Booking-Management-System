{{--
    Testimonials Slider Component
    
    Usage:
    <x-testimonials-slider :reviews="[
        ['name' => 'John Doe', 'rating' => 5, 'service' => 'Plumbing', 'text' => '...', 'date' => '2 days ago'],
    ]" />
    
    Props:
    - reviews: Array of review data
    - title: Optional section title
    - subtitle: Optional subtitle
--}}

@props([
'reviews' => [],
'title' => 'What Our Customers Say',
'subtitle' => 'Real feedback from real customers who trust SmartService'
])

@php
$defaultReviews = [
[
'name' => 'Sarah Mitchell',
'rating' => 5,
'service' => 'Deep Cleaning',
'text' => 'Absolutely phenomenal service! The team arrived on time, was incredibly professional, and left my home spotless. I\'ve used many cleaning services before, but SmartService truly stands out. They pay attention to every detail and treat your home with respect. Highly recommend!',
'date' => '2 days ago',
'verified' => true
],
[
'name' => 'Michael Chen',
'rating' => 5,
'service' => 'Plumbing Repair',
'text' => 'Had an emergency plumbing issue late at night. SmartService sent a licensed plumber within an hour! He was knowledgeable, efficient, and fixed the problem quickly. The transparent pricing was a breath of fresh air. Will definitely use them again.',
'date' => '5 days ago',
'verified' => true
],
[
'name' => 'Jennifer Lopez',
'rating' => 5,
'service' => 'Electrical Installation',
'text' => 'Needed several outlets installed in my home office. The electrician was punctual, professional, and did excellent work. Everything was up to code and they cleaned up completely after themselves. Great communication throughout the process.',
'date' => '1 week ago',
'verified' => true
],
[
'name' => 'David Thompson',
'rating' => 5,
'service' => 'Moving Services',
'text' => 'SmartService made our move stress-free! The movers were careful with our belongings, worked efficiently, and were very friendly. Nothing was damaged and they even helped us organize boxes in our new home. Best moving experience ever!',
'date' => '2 weeks ago',
'verified' => true
],
[
'name' => 'Emily Rodriguez',
'rating' => 5,
'service' => 'Interior Painting',
'text' => 'The painters were true professionals. They protected all our furniture, prepped the walls meticulously, and the final result is stunning. The color consultation was incredibly helpful too. Our living room looks brand new!',
'date' => '3 weeks ago',
'verified' => true
],
[
'name' => 'Robert Johnson',
'rating' => 5,
'service' => 'Lawn Care',
'text' => 'Our lawn has never looked better! The landscaping team is knowledgeable about local plants and created a beautiful, low-maintenance garden. They\'re reliable, show up on schedule, and always do excellent work.',
'date' => '1 month ago',
'verified' => true
]
];

$displayReviews = !empty($reviews) ? $reviews : $defaultReviews;
@endphp

<section class="section-full-width py-20 md:py-28 bg-gradient-to-br from-primary/5 via-white to-secondary/5">
    <div class="section-content-contained">
        {{-- Section Header --}}
        @if($title)
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">{{ $title }}</h2>
            @if($subtitle)
            <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">{{ $subtitle }}</p>
            @endif
        </div>
        @endif

        {{-- Swiper Container --}}
        <div class="relative">
            <div class="swiper testimonials-swiper">
                <div class="swiper-wrapper">
                    @foreach($displayReviews as $review)
                    <div class="swiper-slide">
                        <div class="bg-white rounded-2xl p-8 md:p-10 shadow-xl border border-gray-100 h-full flex flex-col">
                            {{-- Rating Stars --}}
                            <div class="flex items-center gap-1 mb-4">
                                @for($i = 0; $i < 5; $i++)
                                    <svg class="w-5 h-5 {{ $i < ($review['rating'] ?? 5) ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    @endfor
                            </div>

                            {{-- Review Text --}}
                            <blockquote class="text-gray-700 leading-relaxed mb-6 flex-grow text-base md:text-lg">
                                "{{ $review['text'] }}"
                            </blockquote>

                            {{-- Reviewer Info --}}
                            <div class="flex items-center justify-between pt-6 border-t border-gray-100">
                                <div class="flex items-center gap-3">
                                    {{-- Avatar with Initials --}}
                                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center text-white font-bold text-sm shadow-lg">
                                        {{ strtoupper(substr($review['name'], 0, 1)) }}{{ strtoupper(substr(explode(' ', $review['name'])[1] ?? '', 0, 1)) }}
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2">
                                            <p class="font-bold text-gray-900">{{ $review['name'] }}</p>
                                            @if($review['verified'] ?? false)
                                            <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            @endif
                                        </div>
                                        <p class="text-sm text-gray-600">{{ $review['service'] }} • {{ $review['date'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Navigation --}}
                <div class="swiper-button-prev !w-12 !h-12 !bg-white !rounded-full !shadow-xl after:!text-primary after:!text-xl"></div>
                <div class="swiper-button-next !w-12 !h-12 !bg-white !rounded-full !shadow-xl after:!text-primary after:!text-xl"></div>

                {{-- Pagination --}}
                <div class="swiper-pagination !bottom-0"></div>
            </div>
        </div>

        {{-- Trust Badge --}}
        <div class="text-center mt-12">
            <div class="inline-flex items-center gap-2 bg-white px-6 py-3 rounded-full shadow-lg border border-gray-100">
                <svg class="w-5 h-5 text-trust-green" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <span class="font-semibold text-gray-900">4.9/5 Average Rating</span>
                <span class="text-gray-400">•</span>
                <span class="text-gray-600">25,000+ Verified Reviews</span>
            </div>
        </div>
    </div>
</section>

{{-- Swiper Initialization --}}
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof Swiper !== 'undefined') {
            new Swiper('.testimonials-swiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                speed: 800,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    dynamicBullets: true
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    }
                }
            });
        }
    });
</script>
@endpush

<style>
    .testimonials-swiper {
        padding: 20px 10px 50px;
        /* Reduced side padding for mobile */
    }

    @media (min-width: 768px) {
        .testimonials-swiper {
            padding: 20px 50px 60px;
            /* Original padding for tablet/desktop */
        }
    }

    .testimonials-swiper .swiper-slide {
        height: auto;
    }

    .swiper-button-prev,
    .swiper-button-next {
        transition: all 0.3s ease;
    }

    .swiper-button-prev:hover,
    .swiper-button-next:hover {
        transform: scale(1.1);
    }

    .swiper-pagination-bullet {
        background: #3B82F6;
        opacity: 0.3;
    }

    .swiper-pagination-bullet-active {
        opacity: 1;
    }
</style>