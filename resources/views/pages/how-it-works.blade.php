<x-main-layout>
    <x-slot name="title">
        How It Works
    </x-slot>

    <!-- Hero Section -->
    <div class="relative bg-gray-900 py-24 sm:py-32 overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1581578731117-104f2a8d46a8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="Working professionals" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <h1 class="text-4xl md:text-6xl font-black tracking-tight mb-6">
                Simple Steps to <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">Peace of Mind</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto font-light leading-relaxed">
                We've streamlined the process so you can get the help you need without the hassle.
            </p>
        </div>
    </div>

    <!-- Steps Section -->
    <div class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative">
                <!-- Connecting Line (Desktop) -->
                <div class="hidden lg:block absolute top-[5rem] left-0 w-full h-1 bg-gradient-to-r from-primary/20 via-secondary/20 to-success/20"></div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 relative z-10">
                    <!-- Step 1 -->
                    <div class="relative group text-center">
                        <div class="w-40 h-40 mx-auto bg-white rounded-full border-[6px] border-primary flex items-center justify-center mb-8 shadow-2xl group-hover:scale-110 transition duration-500 ease-in-out z-10 relative">
                            <svg class="w-16 h-16 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <div class="absolute -bottom-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-widest shadow-lg">Step 01</div>
                        </div>
                        <div class="bg-gray-50 rounded-[2rem] p-8 h-full transition hover:shadow-xl border border-gray-100 hover:border-primary/20 group-hover:-translate-y-2 duration-300">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-primary transition">Choose Service</h3>
                            <p class="text-gray-600 leading-relaxed font-medium">
                                Browse our wide range of professional categories. from cleaning to repairs, find exactly what you need in seconds.
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="relative group text-center">
                        <div class="w-40 h-40 mx-auto bg-white rounded-full border-[6px] border-secondary flex items-center justify-center mb-8 shadow-2xl group-hover:scale-110 transition duration-500 ease-in-out z-10 relative">
                            <svg class="w-16 h-16 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <div class="absolute -bottom-4 bg-secondary text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-widest shadow-lg">Step 02</div>
                        </div>
                        <div class="bg-gray-50 rounded-[2rem] p-8 h-full transition hover:shadow-xl border border-gray-100 hover:border-secondary/20 group-hover:-translate-y-2 duration-300">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-secondary transition">Book Appointment</h3>
                            <p class="text-gray-600 leading-relaxed font-medium">
                                Select a date and time that works for you. Our flexible scheduling system puts you in control.
                            </p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="relative group text-center">
                        <div class="w-40 h-40 mx-auto bg-white rounded-full border-[6px] border-accent flex items-center justify-center mb-8 shadow-2xl group-hover:scale-110 transition duration-500 ease-in-out z-10 relative">
                            <svg class="w-16 h-16 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <div class="absolute -bottom-4 bg-accent text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-widest shadow-lg">Step 03</div>
                        </div>
                        <div class="bg-gray-50 rounded-[2rem] p-8 h-full transition hover:shadow-xl border border-gray-100 hover:border-accent/20 group-hover:-translate-y-2 duration-300">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-accent transition">Professional Arrives</h3>
                            <p class="text-gray-600 leading-relaxed font-medium">
                                A vetted, background-checked professional arrives at your doorstep, fully equipped to handle the job.
                            </p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="relative group text-center">
                        <div class="w-40 h-40 mx-auto bg-white rounded-full border-[6px] border-success flex items-center justify-center mb-8 shadow-2xl group-hover:scale-110 transition duration-500 ease-in-out z-10 relative">
                            <svg class="w-16 h-16 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="absolute -bottom-4 bg-success text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-widest shadow-lg">Step 04</div>
                        </div>
                        <div class="bg-gray-50 rounded-[2rem] p-8 h-full transition hover:shadow-xl border border-gray-100 hover:border-success/20 group-hover:-translate-y-2 duration-300">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-success transition">Job Completed</h3>
                            <p class="text-gray-600 leading-relaxed font-medium">
                                Relax and enjoy the results. Pay securely online only after you are 100% satisfied with the work.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Teaser -->
    <div class="bg-gray-50 py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Have Questions?</h2>
            <p class="text-lg text-gray-600 mb-10">
                Check out our Frequently Asked Questions or contact our support team.
            </p>
            <div class="flex justify-center gap-4">
                <a href="{{ route('faq') }}" class="px-8 py-3 bg-white border border-gray-200 text-gray-700 font-semibold rounded-xl hover:bg-gray-50 hover:border-gray-300 transition shadow-sm">
                    View FAQ
                </a>
                <a href="{{ route('contact') }}" class="px-8 py-3 bg-primary text-white font-semibold rounded-xl hover:bg-primary-dark transition shadow-lg shadow-primary/25">
                    Contact Support
                </a>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-24 bg-gray-900 relative overflow-hidden">
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-[600px] h-[600px] bg-secondary rounded-full opacity-10 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[500px] h-[500px] bg-primary rounded-full opacity-10 blur-3xl"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-4xl md:text-5xl font-black text-white mb-8">Ready to get started?</h2>
            <div class="flex justify-center">
                <a href="{{ route('services.index') }}" class="inline-flex items-center justify-center px-10 py-4 text-lg font-bold text-white transition-all duration-200 bg-primary rounded-full hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary shadow-xl hover:shadow-2xl hover:-translate-y-1">
                    Book a Service Now
                </a>
            </div>
        </div>
    </div>
</x-main-layout>