<x-main-layout>
    <!-- Hero Section -->
    <div class="relative pt-24 pb-16 lg:pt-32 lg:pb-24 overflow-hidden bg-gray-50 w-full">
        <!-- Abstract Background -->
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 right-0 -mr-20 -mt-20 w-[600px] h-[600px] bg-primary/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[500px] h-[500px] bg-secondary/10 rounded-full blur-3xl"></div>
        </div>

        <div class="w-full px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-primary/20 text-primary text-sm font-semibold mb-8 shadow-sm">
                <span class="w-2 h-2 rounded-full bg-success animate-pulse"></span>
                Trusted by 10,000+ Happy Customers
            </div>

            <h1 class="text-5xl md:text-7xl font-black tracking-tight text-gray-900 mb-8 leading-tight">
                Professional Services, <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-secondary to-accent">Right at Your Doorstep.</span>
            </h1>

            <p class="mt-4 text-xl md:text-2xl text-gray-600 max-w-2xl mx-auto mb-12 font-light leading-relaxed">
                Connect with top-rated professionals for cleaning, repair, and maintenance. Reliable service at the tap of a button.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4 max-w-lg mx-auto relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-primary to-secondary rounded-full blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                <form action="{{ route('services.index') }}" method="GET" class="relative flex-grow flex bg-white rounded-full p-1.5 shadow-xl ring-1 ring-gray-900/5 items-center">
                    <div class="pl-4 text-gray-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="text" name="search" class="block w-full p-3 text-lg text-gray-900 bg-transparent border-none focus:ring-0 placeholder-gray-400" placeholder="What service do you need?">
                    <button type="submit" class="px-8 py-3 bg-primary hover:bg-primary-dark text-white font-semibold rounded-full transition shadow-md">Search</button>
                </form>
            </div>

            <!-- Trust Badges -->
            <div class="mt-16 flex flex-wrap justify-center gap-8 opacity-60 grayscale hover:grayscale-0 transition duration-500">
                <div class="flex items-center gap-2">
                    <span class="text-xl font-bold font-serif text-gray-400">Verified Pros</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-xl font-bold font-sans text-gray-400">Secure Payment</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-xl font-bold font-mono text-gray-400">24/7 Support</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Categories Section -->
    <div class="py-24 bg-white w-full">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Explore Categories</h2>
                <p class="text-lg text-gray-600">Everything you need for your home, all in one place.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                <!-- Cleaning -->
                <a href="{{ route('services.category', 'cleaning') }}" class="group block p-8 bg-white rounded-3xl hover:bg-primary transition duration-300 shadow-sm hover:shadow-xl border border-gray-100 hover:border-primary text-center relative overflow-hidden">
                    <div class="w-16 h-16 mx-auto bg-gray-100 rounded-2xl flex items-center justify-center text-primary group-hover:bg-white group-hover:text-primary transition duration-300 mb-4 shadow-inner">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 group-hover:text-white transition">Cleaning</h3>
                </a>

                <!-- Plumbing -->
                <a href="{{ route('services.category', 'plumbing') }}" class="group block p-8 bg-white rounded-3xl hover:bg-secondary transition duration-300 shadow-sm hover:shadow-xl border border-gray-100 hover:border-secondary text-center relative overflow-hidden">
                    <div class="w-16 h-16 mx-auto bg-gray-100 rounded-2xl flex items-center justify-center text-secondary group-hover:bg-white group-hover:text-secondary transition duration-300 mb-4 shadow-inner">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 group-hover:text-white transition">Plumbing</h3>
                </a>

                <!-- Electrical -->
                <a href="{{ route('services.category', 'electrical') }}" class="group block p-8 bg-white rounded-3xl hover:bg-accent transition duration-300 shadow-sm hover:shadow-xl border border-gray-100 hover:border-accent text-center relative overflow-hidden">
                    <div class="w-16 h-16 mx-auto bg-gray-100 rounded-2xl flex items-center justify-center text-accent group-hover:bg-white group-hover:text-accent transition duration-300 mb-4 shadow-inner">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 group-hover:text-white transition">Electrical</h3>
                </a>

                <!-- Moving -->
                <a href="{{ route('services.category', 'moving') }}" class="group block p-8 bg-white rounded-3xl hover:bg-success transition duration-300 shadow-sm hover:shadow-xl border border-gray-100 hover:border-success text-center relative overflow-hidden">
                    <div class="w-16 h-16 mx-auto bg-gray-100 rounded-2xl flex items-center justify-center text-success group-hover:bg-white group-hover:text-success transition duration-300 mb-4 shadow-inner">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 group-hover:text-white transition">Moving</h3>
                </a>

                <!-- Painting -->
                <a href="{{ route('services.category', 'painting') }}" class="group block p-8 bg-white rounded-3xl hover:bg-purple-600 transition duration-300 shadow-sm hover:shadow-xl border border-gray-100 hover:border-purple-600 text-center relative overflow-hidden">
                    <div class="w-16 h-16 mx-auto bg-gray-100 rounded-2xl flex items-center justify-center text-purple-600 group-hover:bg-white group-hover:text-purple-600 transition duration-300 mb-4 shadow-inner">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 group-hover:text-white transition">Painting</h3>
                </a>

                <!-- Gardening -->
                <a href="{{ route('services.category', 'gardening') }}" class="group block p-8 bg-white rounded-3xl hover:bg-emerald-600 transition duration-300 shadow-sm hover:shadow-xl border border-gray-100 hover:border-emerald-600 text-center relative overflow-hidden">
                    <div class="w-16 h-16 mx-auto bg-gray-100 rounded-2xl flex items-center justify-center text-emerald-600 group-hover:bg-white group-hover:text-emerald-600 transition duration-300 mb-4 shadow-inner">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 group-hover:text-white transition">Gardening</h3>
                </a>
            </div>
        </div>
    </div>

    <!-- How It Works Section -->
    <div class="py-20 bg-gray-50 w-full">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-text-heading mb-4">How It Works</h2>
                <p class="text-lg text-text-body max-w-2xl mx-auto">Get professional services in 3 simple steps. It's that easy!</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- Step 1 -->
                <div class="text-center group">
                    <div class="w-20 h-20 mx-auto bg-gradient-to-br from-primary to-secondary rounded-3xl flex items-center justify-center text-white text-2xl font-bold mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        1
                    </div>
                    <h3 class="text-xl font-bold text-text-heading mb-3">Choose Service</h3>
                    <p class="text-text-body">Browse our wide range of professional services and select what you need.</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center group">
                    <div class="w-20 h-20 mx-auto bg-gradient-to-br from-secondary to-accent rounded-3xl flex items-center justify-center text-white text-2xl font-bold mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        2
                    </div>
                    <h3 class="text-xl font-bold text-text-heading mb-3">Book Appointment</h3>
                    <p class="text-text-body">Select your preferred date and time. Our professionals will be there.</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center group">
                    <div class="w-20 h-20 mx-auto bg-gradient-to-br from-accent to-primary rounded-3xl flex items-center justify-center text-white text-2xl font-bold mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        3
                    </div>
                    <h3 class="text-xl font-bold text-text-heading mb-3">Enjoy Service</h3>
                    <p class="text-text-body">Sit back and relax while our experts take care of everything.</p>
                </div>
            </div>
        </div>
    </div>

                <!-- Painting -->
                <a href="{{ route('services.index', ['category' => 'Painting']) }}" class="group block p-8 bg-white rounded-3xl hover:bg-secondary transition duration-300 shadow-sm hover:shadow-xl border border-gray-100 hover:border-secondary text-center relative overflow-hidden">
                    <div class="w-16 h-16 mx-auto bg-bg-clean rounded-2xl flex items-center justify-center text-secondary group-hover:bg-white group-hover:text-secondary transition duration-300 mb-4 shadow-inner">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 group-hover:text-white transition">Painting</h3>
                </a>

                <!-- Gardening -->
                <a href="{{ route('services.index', ['category' => 'Gardening']) }}" class="group block p-8 bg-white rounded-3xl hover:bg-accent transition duration-300 shadow-sm hover:shadow-xl border border-gray-100 hover:border-accent text-center relative overflow-hidden">
                    <div class="w-16 h-16 mx-auto bg-bg-clean rounded-2xl flex items-center justify-center text-accent group-hover:bg-white group-hover:text-accent transition duration-300 mb-4 shadow-inner">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 group-hover:text-white transition">Gardening</h3>
                </a>
            </div>
        </div>
    </div>

    <!-- Featured Services -->
    <div class="py-24 bg-bg-clean/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-16">
                <div>
                    <h2 class="text-4xl font-bold text-text-heading mb-2">Popular Services</h2>
                    <p class="text-lg text-text-body">Most booked services this week.</p>
                </div>
                <a href="{{ route('services.index') }}" class="hidden md:inline-flex items-center font-semibold text-primary hover:text-primary-dark transition">
                    View all services
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>

            <!-- Service Grid (Placeholder for dynamic content) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="group bg-white rounded-3xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-gray-200 relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white font-bold">Deep Cleaning</div>
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-2 py-1 rounded-lg text-xs font-bold text-gray-900 flex items-center">
                            <svg class="w-3 h-3 text-warning mr-1 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            4.9
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-xs font-bold text-primary bg-bg-clean px-3 py-1 rounded-full uppercase tracking-wide">Cleaning</span>
                            <span class="text-xl font-bold text-text-heading">$80</span>
                        </div>
                        <p class="text-text-body text-sm mb-6 line-clamp-2">Professional deep cleaning service for your entire home. Includes kitchen, bathrooms, and living areas.</p>
                        <a href="{{ route('bookings.create') }}" class="block w-full py-3 text-center bg-gray-900 text-white font-semibold rounded-xl hover:bg-primary transition">Book Now</a>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="group bg-white rounded-3xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-gray-300 relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white font-bold">Plumbing Repair</div>
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-2 py-1 rounded-lg text-xs font-bold text-gray-900 flex items-center">
                            <svg class="w-3 h-3 text-warning mr-1 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            4.8
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-xs font-bold text-secondary bg-bg-clean px-3 py-1 rounded-full uppercase tracking-wide">Plumbing</span>
                            <span class="text-xl font-bold text-text-heading">$120</span>
                        </div>
                        <p class="text-text-body text-sm mb-6 line-clamp-2">Expert plumbing services for leaks, installations, and emergency repairs. Available 24/7 for urgent issues.</p>
                        <a href="{{ route('bookings.create') }}" class="block w-full py-3 text-center bg-gray-900 text-white font-semibold rounded-xl hover:bg-secondary transition">Book Now</a>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="group bg-white rounded-3xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 overflow-hidden">
                    <div class="h-48 bg-gray-400 relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white font-bold">Electrical Work</div>
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-2 py-1 rounded-lg text-xs font-bold text-gray-900 flex items-center">
                            <svg class="w-3 h-3 text-warning mr-1 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            4.7
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-xs font-bold text-accent bg-bg-clean px-3 py-1 rounded-full uppercase tracking-wide">Electrical</span>
                            <span class="text-xl font-bold text-text-heading">$150</span>
                        </div>
                        <p class="text-text-body text-sm mb-6 line-clamp-2">Licensed electricians for installations, repairs, and maintenance. All work guaranteed and code compliant.</p>
                        <a href="{{ route('bookings.create') }}" class="block w-full py-3 text-center bg-gray-900 text-white font-semibold rounded-xl hover:bg-accent transition">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center md:hidden">
                <a href="{{ route('services.index') }}" class="inline-flex items-center font-bold text-primary hover:text-primary-dark transition border border-primary/20 bg-bg-clean px-6 py-3 rounded-xl">
                    View all services
                </a>
            </div>
        </div>
    </div>

    <!-- Our Clients Section -->
    <div class="py-20 bg-white w-full">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-text-heading mb-4">What Our Clients Say</h2>
                <p class="text-lg text-text-body max-w-2xl mx-auto">Don't just take our word for it - hear from our satisfied customers</p>
            </div>

            <!-- Testimonials Swiper -->
            <div class="swiper testimonials-swiper max-w-7xl mx-auto">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg-gray-50 rounded-3xl p-8 shadow-lg">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">
                                    JD
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900">John Doe</h4>
                                    <p class="text-sm text-gray-600">CEO, Tech Company</p>
                                </div>
                            </div>
                            <div class="flex mb-4">
                                <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <p class="text-gray-600 italic">"Outstanding service! The cleaning team was professional, thorough, and left our home sparkling clean. Highly recommend!"</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gray-50 rounded-3xl p-8 shadow-lg">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-green-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">
                                    SJ
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Sarah Johnson</h4>
                                    <p class="text-sm text-gray-600">Homeowner</p>
                                </div>
                            </div>
                            <div class="flex mb-4">
                                <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <p class="text-gray-600 italic">"The plumber arrived on time and fixed our leak quickly. Professional service at reasonable prices!"</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-gray-50 rounded-3xl p-8 shadow-lg">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-purple-400 to-purple-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">
                                    MC
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Michael Chen</h4>
                                    <p class="text-sm text-gray-600">Restaurant Owner</p>
                                </div>
                            </div>
                            <div class="flex mb-4">
                                <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <p class="text-gray-600 italic">"Electrician was knowledgeable and solved our complex wiring issue. Great service!"</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination mt-8"></div>
            </div>
        </div>
    </div>

    <!-- Our Partners Section -->
    <div class="py-20 bg-gray-50 w-full">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-text-heading mb-4">Our Trusted Partners</h2>
                <p class="text-lg text-text-body max-w-2xl mx-auto">We work with the best companies in the industry</p>
            </div>

            <!-- Partners Swiper -->
            <div class="swiper partners-swiper max-w-7xl mx-auto">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 flex items-center justify-center h-32">
                            <div class="text-2xl font-bold text-gray-700">TechCorp</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 flex items-center justify-center h-32">
                            <div class="text-2xl font-bold text-gray-700">CleanPro</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 flex items-center justify-center h-32">
                            <div class="text-2xl font-bold text-gray-700">HomeFix</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 flex items-center justify-center h-32">
                            <div class="text-2xl font-bold text-gray-700">ServiceHub</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 flex items-center justify-center h-32">
                            <div class="text-2xl font-bold text-gray-700">ProClean</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-all duration-300 flex items-center justify-center h-32">
                            <div class="text-2xl font-bold text-gray-700">FixIt</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-24 bg-gray-900 relative overflow-hidden w-full">
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-[600px] h-[600px] bg-primary rounded-full opacity-20 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[500px] h-[500px] bg-secondary rounded-full opacity-20 blur-3xl"></div>

        <div class="w-full px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-4xl md:text-6xl font-black text-white mb-8 leading-tight">Ready to simplify your life?</h2>
                <p class="text-gray-400 text-xl mb-12 max-w-2xl mx-auto">Join thousands of satisfied customers who have found reliable help for their daily needs. Get started in minutes.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('register') }}" class="inline-block px-10 py-4 bg-primary hover:bg-primary-dark text-white font-bold text-lg rounded-full transition shadow-lg hover:shadow-xl hover:scale-105 transform">Get Started Today</a>
                    <a href="{{ route('services.index') }}" class="inline-block px-10 py-4 bg-transparent border-2 border-white/20 text-white font-bold text-lg rounded-full hover:bg-white/10 transition">Browse Services</a>
                </div>
            </div>
        </div>
    </div>

    <x-swiper-init />
</x-main-layout>
