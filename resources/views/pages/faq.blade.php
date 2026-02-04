<x-main-layout>
    <x-slot name="title">Frequently Asked Questions - SmartService</x-slot>

    {{-- Hero Section --}}
    <section class="section-full-width relative pt-24 pb-20 md:pt-32 md:pb-28 bg-gradient-to-br from-primary/10 via-white to-secondary/5">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-6xl font-black text-gray-900 mb-6">
                    Frequently Asked
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">Questions</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-600 leading-relaxed">
                    Find answers to common questions about our services, pricing, and processes.
                </p>
            </div>
        </div>
    </section>

    {{-- FAQ Categories --}}
    <section class="section-full-width py-20 md:py-28 bg-white">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto">
                {{-- General Questions --}}
                <div class="mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">General Questions</h2>
                    @php
                    $generalFaqs = [
                    ['question' => 'What areas do you serve?', 'answer' => 'We serve Your City and surrounding counties including North, South, and East County. If you\'re not sure if we cover your area, please contact us and we\'ll let you know!'],
                    ['question' => 'Are you licensed and insured?', 'answer' => 'Yes! All our professionals are fully licensed, bonded, and insured. We carry comprehensive liability and workers\' compensation insurance for your peace of mind and protection.'],
                    ['question' => 'Do you offer emergency services?', 'answer' => 'Yes, we provide 24/7 emergency services for plumbing, electrical, and other urgent home repairs. Call our emergency line at (800) 999-8888 anytime.'],
                    ['question' => 'How quickly can you schedule service?', 'answer' => 'For non-emergency services, we typically offer same-day or next-day appointments. Emergency services are available immediately 24/7. Availability varies by service type and demand.'],
                    ['question' => 'Do I need to be home during service?', 'answer' => 'While we prefer you to be home, it\'s not always necessary. For regular maintenance services, we can work with a key or access code. However, we recommend being present for major repairs or installations to review the work and ask questions.'],
                    ];
                    @endphp
                    <x-faq-accordion :faqs="$generalFaqs" />
                </div>

                {{-- Service Questions --}}
                <div class="mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Service Questions</h2>
                    @php
                    $serviceFaqs = [
                    ['question' => 'What services do you offer?', 'answer' => 'We offer comprehensive home services including Plumbing, Electrical, Cleaning, Painting, Moving, and Gardening/Landscaping. Each category includes multiple specialized services. Visit our Services page for a complete list.'],
                    ['question' => 'Do you provide free estimates?', 'answer' => 'Yes! We provide free, no-obligation estimates for most services. For diagnostic work (like finding a leak or electrical issue), there may be a service call fee that is waived if you proceed with the repair.'],
                    ['question' => 'Can I schedule multiple services at once?', 'answer' => 'Absolutely! We can coordinate multiple services to be done during a single visit when possible. This saves you time and can sometimes reduce overall costs. Just let us know what you need when booking.'],
                    ['question' => 'What if I need to reschedule my appointment?', 'answer' => 'We understand plans change! Please give us 24 hours notice if you need to reschedule, and we\'ll work with you to find a new time that fits your schedule.'],
                    ['question' => 'Do you guarantee your work?', 'answer' => 'Yes! We offer a 100% satisfaction guarantee on all our services. Most work comes with a warranty (typically 1-2 years) on labor, and we honor manufacturer warranties on parts and materials. If you\'re not satisfied, we\'ll make it right.'],
                    ];
                    @endphp
                    <x-faq-accordion :faqs="$serviceFaqs" />
                </div>

                {{-- Pricing Questions --}}
                <div class="mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Pricing & Payment</h2>
                    @php
                    $pricingFaqs = [
                    ['question' => 'How much do your services cost?', 'answer' => 'Pricing varies by service type, complexity, and time required. We offer transparent pricing and will provide a detailed quote before starting work. Visit individual service pages for general pricing ranges, or contact us for a specific estimate.'],
                    ['question' => 'Do you charge a service call fee?', 'answer' => 'For diagnostic services (plumbing leaks, electrical issues, etc.), we charge a service call fee of $79 which includes the visit and diagnosis. This fee is waived if you proceed with the recommended repair.'],
                    ['question' => 'What payment methods do you accept?', 'answer' => 'We accept cash, credit/debit cards (Visa, Mastercard, American Express, Discover), checks, and digital payments (Venmo, PayPal). Payment is due upon completion of service.'],
                    ['question' => 'Do you offer financing?', 'answer' => 'Yes, we offer financing options for larger projects through our partnering lenders. Ask your service technician or our office staff about available financing plans.'],
                    ['question' => 'Are there any hidden fees?', 'answer' => 'Never! We believe in transparent pricing. Any additional costs (travel fees, urgent service premiums, etc.) will be clearly communicated before we begin work. You\'ll always know exactly what you\'re paying for.'],
                    ];
                    @endphp
                    <x-faq-accordion :faqs="$pricingFaqs" />
                </div>

                {{-- Booking Questions --}}
                <div class="mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Booking & Scheduling</h2>
                    @php
                    $bookingFaqs = [
                    ['question' => 'How do I book a service?', 'answer' => 'You can book online through our website, call us at (800) 123-4567, or send us a message through our Contact page. We\'ll confirm your appointment and send you a reminder before your scheduled service.'],
                    ['question' => 'What happens after I book?', 'answer' => 'After booking, you\'ll receive a confirmation email or text. We\'ll send a reminder 24 hours before your appointment and call when our technician is on the way (usually 30 minutes before arrival).'],
                    ['question' => 'Will the same technician come every time?', 'answer' => 'For recurring services (like regular cleaning or lawn care), we try to assign the same professional for consistency. For one-time services, we\'ll send the best qualified professional available for your specific needs.'],
                    ['question' => 'What should I prepare before the technician arrives?', 'answer' => 'Clear access to the work area, secure pets in a separate room, and inform us of any special considerations (alarm systems, fragile items, etc.). For specific services, we\'ll provide additional preparation instructions when you book.'],
                    ['question' => 'What if the technician can\'t complete the work?', 'answer' => 'If we discover additional issues or if the scope changes, we\'ll stop and discuss options with you before proceeding. You\'ll approve any additional work and pricing before we continue. We never do unauthorized work.'],
                    ];
                    @endphp
                    <x-faq-accordion :faqs="$bookingFaqs" />
                </div>
            </div>
        </div>
    </section>

    {{-- Still Have Questions CTA --}}
    <section class="section-full-width py-20 md:py-28 bg-gray-50">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Still Have Questions?
                </h2>
                <p class="text-lg text-gray-600 mb-10">
                    Our friendly team is here to help! Reach out and we'll get you the answers you need.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <x-button href="{{ route('contact') }}" variant="primary" size="lg">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Contact Us
                    </x-button>
                    <x-button href="tel:+18001234567" variant="outline" size="lg">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        Call (800) 123-4567
                    </x-button>
                </div>
            </div>
        </div>
    </section>

</x-main-layout>