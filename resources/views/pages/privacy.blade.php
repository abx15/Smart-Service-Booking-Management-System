<x-main-layout>
    <x-slot name="title">Privacy Policy - SmartService</x-slot>

    {{-- Hero Section --}}
    <section class="section-full-width relative pt-24 pb-16 md:pt-32 md:pb-20 bg-gradient-to-br from-primary/10 via-white to-secondary/5">
        <div class="section-content-contained">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-6xl font-black text-gray-900 mb-4">
                    Privacy Policy
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
                        At SmartService, we are committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you use our services.
                    </p>
                </div>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">1. Information We Collect</h2>

                <h3 class="text-2xl font-semibold text-gray-900 mt-8 mb-4">1.1 Personal Information</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    We collect information that you provide directly to us, including:
                </p>
                <ul class="list-disc pl-6 text-gray-700 space-y-2 mb-6">
                    <li>Name, email address, phone number, and mailing address</li>
                    <li>Payment information (processed securely through third-party providers)</li>
                    <li>Service preferences and booking history</li>
                    <li>Account credentials (username and encrypted password)</li>
                    <li>Communications with our customer support team</li>
                </ul>

                <h3 class="text-2xl font-semibold text-gray-900 mt-8 mb-4">1.2 Automatically Collected Information</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    When you access our website or mobile application, we automatically collect:
                </p>
                <ul class="list-disc pl-6 text-gray-700 space-y-2 mb-6">
                    <li>Device information (IP address, browser type, operating system)</li>
                    <li>Usage data (pages viewed, time spent, click patterns)</li>
                    <li>Location data (with your permission)</li>
                    <li>Cookies and similar tracking technologies</li>
                </ul>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">2. How We Use Your Information</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    We use the collected information for the following purposes:
                </p>
                <ul class="list-disc pl-6 text-gray-700 space-y-2 mb-6">
                    <li><strong>Service Delivery:</strong> To process bookings, coordinate with service professionals, and fulfill your requests</li>
                    <li><strong>Communication:</strong> To send booking confirmations, updates, and respond to inquiries</li>
                    <li><strong>Payment Processing:</strong> To process transactions and prevent fraud</li>
                    <li><strong>Personalization:</strong> To customize your experience and provide relevant recommendations</li>
                    <li><strong>Analytics:</strong> To understand usage patterns and improve our services</li>
                    <li><strong>Marketing:</strong> To send promotional communications (with your consent)</li>
                    <li><strong>Legal Compliance:</strong> To comply with applicable laws and regulations</li>
                </ul>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">3. Information Sharing and Disclosure</h2>

                <h3 class="text-2xl font-semibold text-gray-900 mt-8 mb-4">3.1 Service Professionals</h3>
                <p class="text-gray-700 leading-relaxed mb-6">
                    We share your contact information and service details with the professionals assigned to your booking to enable them to complete the requested services.
                </p>

                <h3 class="text-2xl font-semibold text-gray-900 mt-8 mb-4">3.2 Third-Party Service Providers</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    We may share information with trusted third parties who assist us with:
                </p>
                <ul class="list-disc pl-6 text-gray-700 space-y-2 mb-6">
                    <li>Payment processing (Stripe, PayPal, etc.)</li>
                    <li>Email and SMS communications</li>
                    <li>Analytics and performance monitoring</li>
                    <li>Customer support services</li>
                    <li>Background checks for service professionals</li>
                </ul>

                <h3 class="text-2xl font-semibold text-gray-900 mt-8 mb-4">3.3 Legal Requirements</h3>
                <p class="text-gray-700 leading-relaxed mb-6">
                    We may disclose your information if required by law, court order, or governmental request, or to protect our rights, property, or safety.
                </p>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">4. Data Security</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    We implement appropriate technical and organizational measures to protect your personal information, including:
                </p>
                <ul class="list-disc pl-6 text-gray-700 space-y-2 mb-6">
                    <li>SSL/TLS encryption for data transmission</li>
                    <li>Encrypted storage of sensitive data</li>
                    <li>Regular security audits and vulnerability assessments</li>
                    <li>Access controls and authentication mechanisms</li>
                    <li>Employee training on data protection</li>
                </ul>
                <p class="text-gray-700 leading-relaxed mb-6">
                    However, no method of transmission over the internet is 100% secure. We cannot guarantee absolute security but strive to use commercially acceptable means to protect your data.
                </p>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">5. Your Privacy Rights</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Depending on your location, you may have the following rights:
                </p>
                <ul class="list-disc pl-6 text-gray-700 space-y-2 mb-6">
                    <li><strong>Access:</strong> Request a copy of your personal information</li>
                    <li><strong>Correction:</strong> Update or correct inaccurate data</li>
                    <li><strong>Deletion:</strong> Request deletion of your personal information</li>
                    <li><strong>Opt-Out:</strong> Unsubscribe from marketing communications</li>
                    <li><strong>Data Portability:</strong> Receive your data in a portable format</li>
                    <li><strong>Restriction:</strong> Limit how we use your information</li>
                </ul>
                <p class="text-gray-700 leading-relaxed mb-6">
                    To exercise these rights, please contact us at <a href="mailto:privacy@smartservice.com" class="text-primary hover:underline">privacy@smartservice.com</a>.
                </p>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">6. Cookies and Tracking</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    We use cookies and similar technologies to:
                </p>
                <ul class="list-disc pl-6 text-gray-700 space-y-2 mb-6">
                    <li>Remember your preferences and settings</li>
                    <li>Analyze site traffic and usage patterns</li>
                    <li>Provide personalized content and advertisements</li>
                    <li>Improve site functionality and user experience</li>
                </ul>
                <p class="text-gray-700 leading-relaxed mb-6">
                    You can control cookies through your browser settings. Note that disabling cookies may affect site functionality.
                </p>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">7. Children's Privacy</h2>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Our services are not directed to individuals under 18 years of age. We do not knowingly collect personal information from children. If you become aware that a child has provided us with personal information, please contact us immediately.
                </p>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">8. Changes to This Policy</h2>
                <p class="text-gray-700 leading-relaxed mb-6">
                    We may update this Privacy Policy periodically. We will notify you of significant changes by posting the new policy on our website and updating the "Last Updated" date. Your continued use of our services after changes constitutes acceptance of the updated policy.
                </p>

                <h2 class="text-3xl font-bold text-gray-900 mt-12 mb-6">9. Contact Us</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    If you have questions or concerns about this Privacy Policy, please contact us:
                </p>
                <div class="bg-gray-50 p-6 rounded-xl">
                    <p class="text-gray-700 mb-2"><strong>Email:</strong> <a href="mailto:privacy@smartservice.com" class="text-primary hover:underline">privacy@smartservice.com</a></p>
                    <p class="text-gray-700 mb-2"><strong>Phone:</strong> <a href="tel:+18001234567" class="text-primary hover:underline">(800) 123-4567</a></p>
                    <p class="text-gray-700 mb-0"><strong>Address:</strong> 123 Main Street, Suite 100, Your City, ST 12345</p>
                </div>

            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="section-full-width py-16 md:py-20 bg-gray-50">
        <div class="section-content-contained">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Have More Questions?
                </h2>
                <p class="text-lg text-gray-600 mb-8">
                    We're here to help! Contact us if you need clarification on our privacy practices.
                </p>
                <x-button href="{{ route('contact') }}" variant="primary" size="lg">
                    Contact Us
                </x-button>
            </div>
        </div>
    </section>

</x-main-layout>