@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')
<!-- Hero Section -->
<div class="relative py-20 lg:py-32 overflow-hidden bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600">
    <!-- Background Effects -->
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-[600px] h-[600px] bg-white/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[500px] h-[500px] bg-white/10 rounded-full blur-3xl"></div>
    </div>
    
    <div class="container-max container-padding relative z-10">
        <div class="text-center text-white">
            <h1 class="text-display text-white mb-6 animate-fade-in-up">
                Privacy <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-200 to-pink-200">Policy</span>
            </h1>
            <p class="text-xl text-indigo-100 max-w-3xl mx-auto mb-12 animate-fade-in-up leading-relaxed">
                Your privacy is important to us. This policy explains how we collect, use, and protect your information.
            </p>
        </div>
    </div>
</div>

<!-- Privacy Content -->
<div class="section-padding bg-white">
    <div class="container-max container-padding">
        <div class="max-w-4xl mx-auto">
            <div class="prose prose-lg">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Information We Collect</h2>
                <p class="text-gray-600 mb-6">
                    We collect information you provide directly to us, such as when you create an account, book a service, or contact us for support.
                </p>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Personal Information</h3>
                <ul class="list-disc pl-6 text-gray-600 mb-6 space-y-2">
                    <li>Name and contact details</li>
                    <li>Email address and phone number</li>
                    <li>Payment information</li>
                    <li>Service preferences and requirements</li>
                    <li>Communication history</li>
                </ul>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Automatically Collected Information</h3>
                <ul class="list-disc pl-6 text-gray-600 mb-6 space-y-2">
                    <li>IP address and device information</li>
                    <li>Browser type and operating system</li>
                    <li>Pages visited and time spent on our site</li>
                    <li>Referring website information</li>
                </ul>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">How We Use Your Information</h2>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Service Provision</h3>
                <ul class="list-disc pl-6 text-gray-600 mb-6 space-y-2">
                    <li>To facilitate service bookings</li>
                    <li>To connect customers with service providers</li>
                    <li>To process payments and transactions</li>
                    <li>To send booking confirmations and updates</li>
                </ul>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Communication</h3>
                <ul class="list-disc pl-6 text-gray-600 mb-6 space-y-2">
                    <li>To respond to your inquiries</li>
                    <li>To send important updates about our services</li>
                    <li>To provide customer support</li>
                    <li>To share promotional offers (with your consent)</li>
                </ul>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Platform Improvement</h3>
                <ul class="list-disc pl-6 text-gray-600 mb-6 space-y-2">
                    <li>To analyze usage patterns and improve our services</li>
                    <li>To develop new features and functionalities</li>
                    <li>To ensure platform security and prevent fraud</li>
                    <li>To personalize your experience</li>
                </ul>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Information Sharing</h2>
                <p class="text-gray-600 mb-6">
                    We may share your information with service providers you book through our platform to facilitate service delivery. We only share information necessary for the service to be provided.
                </p>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Service Providers</h3>
                <p class="text-gray-600 mb-4">
                    When you book a service, we share your contact information and booking details with the assigned service provider. This enables them to:
                </p>
                <ul class="list-disc pl-6 text-gray-600 mb-6 space-y-2">
                    <li>Contact you about the booking</li>
                    <li>Provide the agreed-upon service</li>
                    <li>Handle payment processing</li>
                    <li>Send service-related communications</li>
                </ul>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Third-Party Services</h3>
                <p class="text-gray-600 mb-6">
                    We may share information with third-party service providers for:
                </p>
                <ul class="list-disc pl-6 text-gray-600 mb-6 space-y-2">
                    <li>Payment processing</li>
                    <li>Email delivery services</li>
                    <li>Analytics and performance monitoring</li>
                    <li>Customer support tools</li>
                </ul>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Data Security</h2>
                <p class="text-gray-600 mb-6">
                    We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.
                </p>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Security Measures</h3>
                <ul class="list-disc pl-6 text-gray-600 mb-6 space-y-2">
                    <li>SSL/TLS encryption for data transmission</li>
                    <li>Secure payment processing</li>
                    <li>Regular security audits and testing</li>
                    <li>Employee training on data protection</li>
                    <li>Access controls and authentication</li>
                </ul>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Data Retention</h2>
                <p class="text-gray-600 mb-6">
                    We retain your personal information only as long as necessary to provide our services and fulfill the purposes outlined in this privacy policy.
                </p>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Retention Periods</h3>
                <ul class="list-disc pl-6 text-gray-600 mb-6 space-y-2">
                    <li>Account information: Until account deletion</li>
                    <li>Booking records: 2 years after service completion</li>
                    <li>Payment information: 7 years for tax purposes</li>
                <li>Communication logs: 1 year</li>
                <li>Analytics data: 26 months</li>
                </ul>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Your Rights</h2>
                <p class="text-gray-600 mb-6">
                    You have certain rights regarding your personal information under applicable privacy laws.
                </p>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Access and Correction</h3>
                <p class="text-gray-600 mb-6">
                    You can access, update, or delete your personal information through your account settings or by contacting our support team.
                </p>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Data Portability</h3>
                <p class="text-gray-600 mb-6">
                    You have the right to request a copy of your personal information in a structured, machine-readable format.
                </p>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Right to Erasure</h3>
                <p class="text-gray-600 mb-6">
                    You can request deletion of your personal information, subject to certain legal obligations.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Cookies and Tracking</h2>
                <p class="text-gray-600 mb-6">
                    We use cookies and similar tracking technologies to enhance your experience on our platform.
                </p>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Essential Cookies</h3>
                <p class="text-gray-600 mb-6">
                    These are necessary for our platform to function properly, including security, authentication, and core functionality.
                </p>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Analytics Cookies</h3>
                <p class="gray-600 mb-6">
                    We use analytics cookies to understand how our platform is used and to improve our services.
                </p>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Marketing Cookies</h3>
                <p class="text-gray-600 mb-6">
                    With your consent, we may use marketing cookies to show you personalized advertisements and promotions.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Children's Privacy</h2>
                <p class="text-gray-600 mb-6">
                    Our service is not intended for children under 13 years of age. We do not knowingly collect personal information from children under 13.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">International Data Transfers</h2>
                <p class="text-gray-600 mb-6">
                    Your information may be transferred to and processed in countries other than your own. We ensure appropriate safeguards are in place for international data transfers.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Changes to This Policy</h2>
                <p class="text-gray-600 mb-6">
                    We may update this privacy policy from time to time. We will notify you of any changes by posting the new policy on our website and updating the "Last Updated" date.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Contact Us</h2>
                <p class="text-gray-600 mb-6">
                    If you have any questions about this Privacy Policy, please contact us at:
                </p>
                
                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-600 mb-2"><strong>Email:</strong> privacy@smartservice.com</p>
                    <p class="text-gray-600 mb-2"><strong>Phone:</strong> +1 (555) 123-4567</p>
                    <p class="text-gray-600"><strong>Address:</strong> 123 Business Ave, New York, NY 10001</p>
                </div>
                
                <div class="mt-12 p-6 bg-indigo-50 rounded-lg">
                    <p class="text-sm text-indigo-800">
                        <strong>Last Updated:</strong> {{ date('F j, Y') }}<br>
                        <strong>Effective Date:</strong> January 1, 2024
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
