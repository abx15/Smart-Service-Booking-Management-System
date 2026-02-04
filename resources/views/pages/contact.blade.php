<x-main-layout>
    <x-slot name="title">Contact Us - SmartService</x-slot>

    {{-- Hero Section --}}
    <section class="section-full-width relative pt-24 pb-20 md:pt-32 md:pb-28 bg-gradient-to-br from-primary/10 via-white to-secondary/5">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-6xl font-black text-gray-900 mb-6">
                    Get In Touch
                </h1>
                <p class="text-lg md:text-xl text-gray-600 leading-relaxed">
                    Have questions? Need a quote? We're here to help! Contact us today and discover why thousands of homeowners trust SmartService.
                </p>
            </div>
        </div>
    </section>

    {{-- Contact Form & Info --}}
    <section class="section-full-width py-20 md:py-28 bg-white">
        <div class="section-content-contained">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                {{-- Contact Form --}}
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Send Us a Message</h2>
                    <p class="text-gray-600 mb-8">Fill out the form below and we'll get back to you within 24 hours.</p>

                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        {{-- Name --}}
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-900 mb-2">Full Name *</label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                placeholder="John Doe">
                        </div>

                        {{-- Email --}}
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-900 mb-2">Email Address *</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                placeholder="john@example.com">
                        </div>

                        {{-- Phone --}}
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-900 mb-2">Phone Number</label>
                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                placeholder="(555) 123-4567">
                        </div>

                        {{-- Service --}}
                        <div>
                            <label for="service" class="block text-sm font-semibold text-gray-900 mb-2">Service Interested In</label>
                            <select
                                id="service"
                                name="service"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                                <option value="">Select a service...</option>
                                <option value="cleaning">Cleaning</option>
                                <option value="plumbing">Plumbing</option>
                                <option value="electrical">Electrical</option>
                                <option value="moving">Moving</option>
                                <option value="painting">Painting</option>
                                <option value="gardening">Gardening</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        {{-- Message --}}
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-900 mb-2">Message *</label>
                            <textarea
                                id="message"
                                name="message"
                                rows="5"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all resize-none"
                                placeholder="Tell us about your project..."></textarea>
                        </div>

                        {{-- Submit Button --}}
                        <x-button type="submit" variant="primary" size="lg" full-width="true">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            Send Message
                        </x-button>
                    </form>
                </div>

                {{-- Contact Information --}}
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Contact Information</h2>
                    <p class="text-gray-600 mb-10">Prefer to reach us directly? Here's how:</p>

                    <div class="space-y-8">
                        {{-- Phone --}}
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-primary to-secondary rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 text-lg mb-1">Phone</h3>
                                <a href="tel:+18001234567" class="text-primary hover:underline text-lg">(800) 123-4567</a>
                                <p class="text-sm text-gray-600 mt-1">Monday - Sunday: 7:00 AM - 9:00 PM</p>
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 text-lg mb-1">Email</h3>
                                <a href="mailto:info@smartservice.com" class="text-primary hover:underline text-lg">info@smartservice.com</a>
                                <p class="text-sm text-gray-600 mt-1">We'll respond within 24 hours</p>
                            </div>
                        </div>

                        {{-- Address --}}
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 text-lg mb-1">Office Address</h3>
                                <p class="text-gray-700">123 Main Street, Suite 100<br>Your City, ST 12345</p>
                            </div>
                        </div>

                        {{-- Emergency --}}
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-orange-500 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 text-lg mb-1">Emergency Service</h3>
                                <a href="tel:+18009998888" class="text-red-600 hover:underline text-lg font-bold">(800) 999-8888</a>
                                <p class="text-sm text-gray-600 mt-1">24/7 Emergency Response</p>
                            </div>
                        </div>
                    </div>

                    {{-- Social Media --}}
                    <div class="mt-12">
                        <h3 class="font-bold text-gray-900 text-lg mb-4">Follow Us</h3>
                        <div class="flex gap-4">
                            <a href="#" class="w-10 h-10 bg-gray-200 hover:bg-primary hover:text-white rounded-lg flex items-center justify-center transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-200 hover:bg-primary hover:text-white rounded-lg flex items-center justify-center transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-200 hover:bg-primary hover:text-white rounded-lg flex items-center justify-center transition-all">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Service Areas --}}
    <section class="section-full-width py-20 md:py-28 bg-gray-50">
        <div class="section-content-contained">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Service Areas</h2>
                <p class="text-lg text-gray-600">We proudly serve the following areas and surrounding communities:</p>
            </div>

            <div class="max-w-4xl mx-auto bg-white rounded-2xl p-8 shadow-md">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                    <div class="p-4">
                        <svg class="w-8 h-8 mx-auto mb-2 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                        <h4 class="font-semibold text-gray-900">Your City</h4>
                    </div>
                    <div class="p-4">
                        <svg class="w-8 h-8 mx-auto mb-2 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                        <h4 class="font-semibold text-gray-900">North County</h4>
                    </div>
                    <div class="p-4">
                        <svg class="w-8 h-8 mx-auto mb-2 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                        <h4 class="font-semibold text-gray-900">South County</h4>
                    </div>
                    <div class="p-4">
                        <svg class="w-8 h-8 mx-auto mb-2 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                        <h4 class="font-semibold text-gray-900">East County</h4>
                    </div>
                </div>
                <p class="text-center text-gray-600 mt-6">Don't see your area? <a href="#" class="text-primary hover:underline font-semibold">Contact us</a> - we may still be able to help!</p>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="section-full-width py-20 md:py-28 bg-gradient-to-r from-primary via-secondary to-accent">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                    Need Service Today?
                </h2>
                <p class="text-xl text-white/90 mb-10">
                    Call now for same-day service or emergency support!
                </p>
                <x-button href="tel:+18001234567" variant="secondary" size="xl" class="!bg-white !text-primary hover:!bg-gray-100">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    Call (800) 123-4567
                </x-button>
            </div>
        </div>
    </section>

</x-main-layout>