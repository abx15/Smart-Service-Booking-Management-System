<x-main-layout>
    <x-slot name="title">Terms of Service - SmartService</x-slot>

    {{-- Hero Section --}}
    <section class="section-full-width relative pt-24 pb-16 md:pt-32 md:pb-20 bg-gradient-to-br from-primary/10 via-white to-secondary/5">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-6xl font-black text-gray-900 mb-4">
                    Terms of Service
                </h1>
                <p class="text-lg text-gray-600">
                    Last Updated: {{ date('F d, Y') }}
                </p>
            </div>
        </div>
    </section>

    {{-- Content --}}
    <section class="section-full-width py-16 md:py-20 bg-white">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto prose prose-lg">

                <div class="bg-blue-50 border-l-4 border-primary p-6 rounded-r-xl mb-10">
                    <p class="text-gray-700 leading-relaxed mb-0">
                        Welcome to SmartService! These Terms of Service ("Terms") govern your use of our platform and services. By accessing or using SmartService, you agree to be bound by these Terms. Please read them carefully.
                    </p>
                </div>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">1. Acceptance of Terms</h2>
                <p class="text-gray-700 leading-relaxed mb-6">
                    By creating an account, booking a service, or otherwise using SmartService, you acknowledge that you have read, understood, and agree to be bound by these Terms and our Privacy Policy. If you do not agree, you may not use our services.
                </p>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">2. Eligibility</h2>
                <p class="text-gray-700 leading-relaxed mb-6">
                    You must be at least 18 years old to use SmartService. By using our services, you represent and warrant that you meet this age requirement and have the legal capacity to enter into binding contracts.
                </p>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">3. Account Registration</h2>

                <h3 class="text-2xl font-semibold text-gray-900 mt-8 mb-4">3.1 Account Creation</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    To access certain features, you must create an account. You agree to:
                </p>
                <ul class="list-disc pl-6 text-gray-700 space-y-2 mb-6">
                    <li>Provide accurate, current, and complete information</li>
                    <li>Maintain and promptly update your account information</li>
                    <li>Keep your password secure and confidential</li>
                    <li>Notify us immediately of any unauthorized access</li>
                    <li>Accept responsibility for all activities under your account</li>
                </ul>

                <h3 class="text-2xl font-semibold text-gray-900 mt-8 mb-4">3.2 Account Termination</h3>
                <p class="text-gray-700 leading-relaxed mb-6">
                    We reserve the right to suspend or terminate your account at our discretion, particularly if you violate these Terms or engage in fraudulent, abusive, or illegal activity.
                </p>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">4. Services and Bookings</h2>

                <h3 class="text-2xl font-semibold text-gray-900 mt-8 mb-4">4.1 Service Marketplace</h3>
                <p class="text-gray-700 leading-relaxed mb-6">
                    SmartService operates as a platform connecting customers with independent service professionals. We facilitate bookings but do not directly provide the services. Service professionals are independent contractors, not our employees.
                </p>

                <h3 class="text-2xl font-semibold text-gray-900 mt-8 mb-4">4.2 Booking Process</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    When you book a service:
                </p>
                <ul class="list-disc pl-6 text-gray-700 space-y-2 mb-6">
                    <li>You enter into a service agreement with the professional</li>
                    <li>Pricing is clearly communicated before confirmation</li>
                    <li>You agree to provide accurate service location and details</li>
                    <li>You must be present or arrange access for the professional</li>
                    <li>Payment is processed according to our payment terms</li>
                </ul>

                <h3 class="text-2xl font-semibold text-gray-900 mt-8 mb-4">4.3 Cancellation and Rescheduling</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Cancellation policies vary by service type:
                </p>
                <ul class="list-disc pl-6 text-gray-700 space-y-2 mb-6">
                    <li><strong>24+ hours notice:</strong> Full refund or free rescheduling</li>
                    <li><strong>Less than 24 hours:</strong> May incur cancellation fee</li>
                    <li><strong>No-show:</strong> Full service charge applied</li>
                    <li><strong>Emergency services:</strong> Non-refundable service call fee</li>
                </ul>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">5. Payments and Fees</h2>

                <h3 class="text-2xl font-semibold text-gray-900 mt-8 mb-4">5.1 Pricing</h3>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Service prices are quoted before booking and may vary based on service type, location, time, and complexity. All prices are in USD unless otherwise stated and include applicable taxes where required.
                </p>

                <h3 class="text-2xl font-semibold text-gray-900 mt-8 mb-4">5.2 Payment Methods</h3>
                <p class="text-gray-700 leading-relaxed mb-6">
                    We accept major credit cards, debit cards, and other payment methods as displayed. Payment processing is handled by secure third-party providers. You authorize us to charge your payment method for all fees incurred.
                </p>

                <h3 class="text-2xl font-semibold text-gray-900 mt-8 mb-4">5.3 Refunds</h3>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Refunds are issued at our discretion based on the circumstances. If you are dissatisfied with a service, please contact us within 48 hours. Our 100% satisfaction guarantee applies to eligible services.
                </p>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">6. User Conduct</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    You agree not to:
                </p>
                <ul class="list-disc pl-6 text-gray-700 space-y-2 mb-6">
                    <li>Use the platform for illegal or unauthorized purposes</li>
                    <li>Provide false or misleading information</li>
                    <li>Harass, abuse, or harm service professionals or other users</li>
                    <li>Interfere with platform operations or security</li>
                    <li>Attempt to circumvent our payment system</li>
                    <li>Use automated tools to access the platform without permission</li>
                    <li>Violate any applicable laws or regulations</li>
                </ul>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">7. Service Professional Standards</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    All service professionals on our platform:
                </p>
                <ul class="list-disc pl-6 text-gray-700 space-y-2 mb-6">
                    <li>Are background-checked and verified</li>
                    <li>Hold necessary licenses and insurance</li>
                    <li>Agree to our professional standards and code of conduct</li>
                    <li>Are independent contractors, not SmartService employees</li>
                </ul>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">8. Liability and Disclaimers</h2>

                <h3 class="text-2xl font-semibold text-gray-900 mt-8 mb-4">8.1 Platform "As Is"</h3>
                <p class="text-gray-700 leading-relaxed mb-6">
                    The platform is provided "as is" and "as available" without warranties of any kind, either express or implied. We do not guarantee uninterrupted, error-free, or secure access.
                </p>

                <h3 class="text-2xl font-semibold text-gray-900 mt-8 mb-4">8.2 Limitation of Liability</h3>
                <p class="text-gray-700 leading-relaxed mb-6">
                    To the fullest extent permitted by law, SmartService shall not be liable for any indirect, incidental, special, consequential, or punitive damages, including loss of profits, data, or goodwill, arising from your use of our services.
                </p>

                <h3 class="text-2xl font-semibold text-gray-900 mt-8 mb-4">8.3 Service Professional Liability</h3>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Service professionals are independent contractors responsible for their own work. While we vet professionals carefully, SmartService is not liable for the quality of work, damages, or injuries arising from services performed.
                </p>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">9. Indemnification</h2>
                <p class="text-gray-700 leading-relaxed mb-6">
                    You agree to indemnify and hold SmartService, its affiliates, and personnel harmless from any claims, damages, losses, liabilities, and expenses arising from your use of the platform, violation of these Terms, or infringement of any rights of another party.
                </p>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">10. Intellectual Property</h2>
                <p class="text-gray-700 leading-relaxed mb-6">
                    All content, trademarks, logos, and intellectual property on SmartService are owned by us or our licensors. You may not copy, reproduce, distribute, or create derivative works without our express written permission.
                </p>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">11. Dispute Resolution</h2>

                <h3 class="text-2xl font-semibold text-gray-900 mt-8 mb-4">11.1 Informal Resolution</h3>
                <p class="text-gray-700 leading-relaxed mb-6">
                    If you have a dispute, please contact us first at <a href="mailto:support@smartservice.com" class="text-primary hover:underline">support@smartservice.com</a>. We'll work in good faith to resolve the issue.
                </p>

                <h3 class="text-2xl font-semibold text-gray-900 mt-8 mb-4">11.2 Arbitration</h3>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Any unresolved disputes shall be settled by binding arbitration in accordance with the rules of the American Arbitration Association. You waive your right to participate in class action lawsuits.
                </p>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">12. Changes to Terms</h2>
                <p class="text-gray-700 leading-relaxed mb-6">
                    We may modify these Terms at any time. We will notify you of significant changes by email or platform notification. Continued use of SmartService after changes constitutes acceptance of the updated Terms.
                </p>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">13. Governing Law</h2>
                <p class="text-gray-700 leading-relaxed mb-6">
                    These Terms are governed by the laws of [Your State/Country], without regard to conflict of law principles. Any legal action must be brought in the courts located in [Your Jurisdiction].
                </p>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">14. Contact Information</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    For questions about these Terms, please contact us:
                </p>
                <div class="bg-gray-50 p-6 rounded-xl">
                    <p class="text-gray-700 mb-2"><strong>Email:</strong> <a href="mailto:legal@smartservice.com" class="text-primary hover:underline">legal@smartservice.com</a></p>
                    <p class="text-gray-700 mb-2"><strong>Phone:</strong> <a href="tel:+18001234567" class="text-primary hover:underline">(800) 123-4567</a></p>
                    <p class="text-gray-700 mb-0"><strong>Address:</strong> 123 Main Street, Suite 100, Your City, ST 12345</p>
                </div>

                <div class="bg-yellow-50 border-l-4 border-yellow-500 p-6 rounded-r-xl mt-10">
                    <p class="text-gray-700 leading-relaxed mb-0">
                        <strong>Note:</strong> By using SmartService, you acknowledge that you have read, understood, and agree to be bound by these Terms of Service and our Privacy Policy.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="section-full-width py-16 md:py-20 bg-gray-50">
        <div class="section-content-contained">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Ready to Get Started?
                </h2>
                <p class="text-lg text-gray-600 mb-8">
                    Book professional home services with confidence today!
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <x-button href="{{ route('services.index') }}" variant="primary" size="lg">
                        View Services
                    </x-button>
                    <x-button href="{{ route('contact') }}" variant="outline" size="lg">
                        Contact Us
                    </x-button>
                </div>
            </div>
        </div>
    </section>

</x-main-layout>