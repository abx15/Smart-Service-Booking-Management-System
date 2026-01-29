@extends('layouts.app')

@section('title', 'Terms of Service')

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
                Terms of <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-200 to-pink-200">Service</span>
            </h1>
            <p class="text-xl text-indigo-100 max-w-3xl mx-auto mb-12 animate-fade-in-up leading-relaxed">
                Please read these terms carefully before using SmartService platform.
            </p>
        </div>
    </div>
</div>

<!-- Terms Content -->
<div class="section-padding bg-white">
    <div class="container-max container-padding">
        <div class="max-w-4xl mx-auto">
            <div class="prose prose-lg">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">1. Acceptance of Terms</h2>
                <p class="text-gray-600 mb-6">
                    By accessing and using SmartService, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">2. Description of Service</h2>
                <p class="text-gray-600 mb-6">
                    SmartService is a platform that connects customers with professional service providers for various home services including cleaning, plumbing, electrical work, and more. We facilitate the booking process and provide tools for managing service appointments.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">3. User Accounts</h2>
                <p class="text-gray-600 mb-4">
                    <strong>3.1 Account Creation:</strong> To use certain features of our service, you must create an account. You are responsible for maintaining the confidentiality of your account credentials.
                </p>
                <p class="text-gray-600 mb-4">
                    <strong>3.2 Account Security:</strong> You are responsible for maintaining the security of your account. SmartService cannot and will not be liable for any loss or damage arising from your failure to comply with this security obligation.
                </p>
                <p class="text-gray-600 mb-6">
                    <strong>3.3 Account Termination:</strong> We reserve the right to suspend or terminate your account at any time for any reason, including violation of these terms.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">4. Service Provider Terms</h2>
                <p class="text-gray-600 mb-4">
                    <strong>4.1 Verification:</strong> All service providers must undergo our verification process and maintain valid licenses and certifications for their trade.
                </p>
                <p class="text-gray-600 mb-4">
                    <strong>4.2 Service Quality:</strong> Providers must deliver services with professional quality and adhere to industry standards.
                </p>
                <p class="text-gray-600 mb-6">
                    <strong>4.3 Professional Conduct:</strong> Providers must maintain professional conduct and respect customer privacy and property.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">5. Booking and Payment</h2>
                <p class="text-gray-600 mb-4">
                    <strong>5.1 Booking Process:</strong> All bookings must be made through our platform. Direct booking outside our system is not covered by our guarantees.
                </p>
                <p class="text-gray-600 mb-4">
                    <strong>5.2 Payment:</strong> Payment for services is processed through our secure payment system. Prices are clearly displayed before booking confirmation.
                </p>
                <p class="text-gray-600 mb-6">
                    <strong>5.3 Refunds:</strong> Refunds are processed according to our cancellation policy. Cancellations made less than 24 hours before the scheduled service may incur a fee.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">6. Cancellation Policy</h2>
                <p class="text-gray-600 mb-4">
                    <strong>6.1 Customer Cancellation:</strong> Customers may cancel bookings up to 24 hours before the scheduled service time for a full refund.
                </p>
                <p class="text-gray-600 mb-4">
                    <strong>6.2 Provider Cancellation:</strong> Providers must provide at least 24 hours notice for cancellation unless in emergency situations.
                </p>
                <p class="text-gray-600 mb-6">
                    <strong>6.3 No-Shows:</strong> No-shows may result in account suspension or termination.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">7. Intellectual Property</h2>
                <p class="text-gray-600 mb-6">
                    All content on SmartService, including logos, text, graphics, and software, is owned by or licensed to SmartService and is protected by copyright and other intellectual property laws.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">8. Privacy Policy</h2>
                <p class="text-gray-600 mb-6">
                    Your privacy is important to us. Our Privacy Policy explains how we collect, use, and protect your information when you use our service. By using SmartService, you agree to the collection and use of information in accordance with our Privacy Policy.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">9. Disclaimers</h2>
                <p class="text-gray-600 mb-4">
                    <strong>9.1 Service Quality:</strong> While we vet our service providers, we cannot guarantee the quality of every service. We encourage customers to review provider ratings and feedback.
                </p>
                <p class="text-gray-600 mb-4">
                    <strong>9.2 Third-Party Services:</strong> Our service may contain links to third-party websites or services. We are not responsible for the content or practices of these third-party services.
                </p>
                <p class="text-gray-600 mb-6">
                    <strong>9.3 Force Majeure:</strong> SmartService shall not be liable for any interruption or failure of service due to circumstances beyond our control.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">10. Limitation of Liability</h2>
                <p class="text-gray-600 mb-6">
                    To the maximum extent permitted by law, SmartService shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising out of or relating to your use of the service.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">11. Indemnification</h2>
                <p class="text-gray-600 mb-6">
                    You agree to indemnify and hold SmartService harmless from any claims, damages, or expenses arising from your use of the service or violation of these terms.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">12. Termination</h2>
                <p class="text-gray-600 mb-6">
                    We may terminate or suspend your account and bar access to the service immediately, without prior notice or liability, under our sole discretion, for any reason whatsoever and without limitation.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">13. Governing Law</h2>
                <p class="text-gray-600 mb-6">
                    These terms shall be interpreted and governed by the laws of the State of New York, United States, without regard to its conflict of law provisions.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">14. Changes to Terms</h2>
                <p class="text-gray-600 mb-6">
                    We reserve the right to modify these terms at any time. Changes will be effective immediately upon posting. Your continued use of the service after any changes constitutes acceptance of the new terms.
                </p>
                
                <h2 class="text-2xl font-bold text-gray-900 mb-4">15. Contact Information</h2>
                <p class="text-gray-600 mb-6">
                    If you have any questions about these Terms of Service, please contact us at:
                </p>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-gray-600 mb-2"><strong>Email:</strong> legal@smartservice.com</p>
                    <p class="text-gray-600 mb-2"><strong>Phone:</strong> +1 (555) 123-4567</p>
                    <p class="text-gray-600"><strong>Address:</strong> 123 Business Ave, New York, NY 10001</p>
                </div>
                
                <div class="mt-12 p-6 bg-indigo-50 rounded-lg">
                    <p class="text-sm text-indigo-800">
                        <strong>Last Updated:</strong> {{ date('F j, Y') }}<br>
                        <strong>Version:</strong> 1.0
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
