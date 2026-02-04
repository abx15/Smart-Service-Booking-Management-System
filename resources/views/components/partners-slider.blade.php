{{--
    Partners/Clients Slider Component - Individual Brand Logos
--}}

@props([
'title' => 'Trusted By Leading Brands',
'subtitle' => 'Join thousands of satisfied customers who trust our services'
])

<section class="w-full py-16 md:py-20 bg-gray-50">
    <div class="w-full px-4 sm:px-6 lg:px-8">
        @if($title)
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">{{ $title }}</h2>
            @if($subtitle)
            <p class="text-lg text-gray-600">{{ $subtitle }}</p>
            @endif
        </div>
        @endif

        {{-- Brand Logos Slider --}}
        <div class="partners-slider-container">
            <div class="swiper partners-swiper">
                <div class="swiper-wrapper items-center">
                    {{-- Brand Logos --}}
                    @php
                    $brands = [
                    ['name' => 'Amazon', 'file' => 'amazon.png'],
                    ['name' => 'Microsoft', 'file' => 'microsoft.png'],
                    ['name' => 'Google', 'file' => 'google.png'],
                    ['name' => 'Apple', 'file' => 'apple.png'],
                    ['name' => 'Walmart', 'file' => 'walmart.png'],
                    ['name' => 'Target', 'file' => 'target.png'],
                    ['name' => 'Costco', 'file' => 'costco.png'],
                    ['name' => 'Starbucks', 'file' => 'starbucks.png'],
                    ];
                    @endphp

                    @foreach($brands as $brand)
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center p-6 grayscale hover:grayscale-0 opacity-60 hover:opacity-100 transition-all duration-500">
                            <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-lg transition-shadow">
                                <img
                                    src="{{ asset('images/brands/' . $brand['file']) }}"
                                    alt="{{ $brand['name'] }} Logo"
                                    class="max-h-16 w-auto object-contain"
                                    loading="lazy">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <p class="text-center text-sm text-gray-500 mt-8">
            *For demonstration purposes. These brands represent the quality and scale we aspire to serve.
        </p>
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
                    320: {
                        slidesPerView: 1.5,
                        spaceBetween: 15,
                        centeredSlides: true
                    },
                    480: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
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
        justify-center;
    }
</style>