{{--
    Partners/Clients Slider Component
    
    Usage:
    <x-partners-slider :logos="[
        ['src' => '/images/partner1.png', 'alt' => 'Partner 1', 'url' => '#'],
        ['src' => '/images/partner2.png', 'alt' => 'Partner 2', 'url' => '#'],
    ]" />
    
    Props:
    - logos: Array of partner logo data (src, alt, url)
    - title: Optional section title (default: "Trusted By Leading Brands")
    - subtitle: Optional subtitle
--}}

@props([
'logos' => [],
'title' => 'Trusted By Leading Brands',
'subtitle' => 'Join thousands of satisfied customers and partners'
])

<section class="section-full-width py-16 md:py-20 bg-gray-50">
    <div class="section-content-contained">
        @if($title)
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">{{ $title }}</h2>
            @if($subtitle)
            <p class="text-lg text-gray-600">{{ $subtitle }}</p>
            @endif
        </div>
        @endif

        <div class="partners-slider-container">
            <div class="swiper partners-swiper">
                <div class="swiper-wrapper items-center">
                    @forelse($logos as $logo)
                    <div class="swiper-slide">
                        <a
                            href="{{ $logo['url'] ?? '#' }}"
                            class="flex items-center justify-center p-6 grayscale hover:grayscale-0 opacity-60 hover:opacity-100 transition-all duration-300"
                            @if(isset($logo['url']) && $logo['url'] !=='#' ) target="_blank" rel="noopener" @endif>
                            <img
                                src="{{ $logo['src'] }}"
                                alt="{{ $logo['alt'] ?? 'Partner logo' }}"
                                class="max-h-16 w-auto object-contain"
                                loading="lazy">
                        </a>
                    </div>
                    @empty
                    {{-- Demo Partners (if no logos provided) --}}
                    @foreach(range(1, 8) as $i)
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center p-6 opacity-40">
                            <div class="w-32 h-16 bg-gray-300 rounded-lg flex items-center justify-center">
                                <span class="text-gray-500 font-semibold text-sm">Partner {{ $i }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Swiper Initialization Script --}}
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check if Swiper is loaded
        if (typeof Swiper !== 'undefined') {
            new Swiper('.partners-swiper', {
                slidesPerView: 2,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                speed: 800,
                breakpoints: {
                    640: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 40
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 50
                    },
                    1280: {
                        slidesPerView: 6,
                        spaceBetween: 60
                    }
                }
            });
        }
    });
</script>
@endpush

<style>
    .partners-swiper {
        overflow: hidden;
        padding: 20px 0;
    }

    .partners-swiper .swiper-slide {
        height: auto;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>