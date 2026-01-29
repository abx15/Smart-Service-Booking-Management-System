@extends('layouts.app')

@section('title', 'Help & FAQ')

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
                Help & <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-200 to-pink-200">Support</span>
            </h1>
            <p class="text-xl text-indigo-100 max-w-3xl mx-auto mb-12 animate-fade-in-up leading-relaxed">
                Find answers to common questions and get the support you need to make the most of SmartService.
            </p>
        </div>
    </div>
</div>

<!-- Search Section -->
<div class="section-padding bg-white">
    <div class="container-max container-padding">
        <div class="max-w-2xl mx-auto">
            <div class="relative">
                <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full blur opacity-25"></div>
                <div class="relative flex bg-white rounded-full p-2 shadow-lg">
                    <div class="pl-6 pr-2 py-3 flex-1">
                        <input type="text" id="faq-search" placeholder="Search for answers..." class="w-full text-gray-900 placeholder-gray-400 focus:outline-none text-lg">
                    </div>
                    <button class="px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-bold rounded-full hover:shadow-lg transition">
                        Search
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Categories Section -->
<div class="section-padding bg-gray-50">
    <div class="container-max container-padding">
        <div class="text-center mb-12">
            <h2 class="text-heading mb-4">Browse by Category</h2>
            <p class="text-body text-gray-600 max-w-2xl mx-auto">Find help topics organized by category</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <a href="#getting-started" class="card card-hover p-6 text-center group animate-on-scroll">
                <div class="w-16 h-16 bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 group-hover:text-indigo-600 transition">Getting Started</h3>
                <p class="text-sm text-gray-500 mt-2">New to SmartService? Start here.</p>
            </a>
            
            <a href="#booking" class="card card-hover p-6 text-center group animate-on-scroll">
                <div class="w-16 h-16 bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 group-hover:text-green-600 transition">Booking</h3>
                <p class="text-sm text-gray-500 mt-2">Learn how to book services.</p>
            </a>
            
            <a href="#payment" class="card card-hover p-6 text-center group animate-on-scroll">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-50 to-orange-50 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 group-hover:text-yellow-600 transition">Payment</h3>
                <p class="text-sm text-gray-500 mt-2">Payment methods and billing.</p>
            </a>
            
            <a href="#account" class="card card-hover p-6 text-center group animate-on-scroll">
                <div class="w-16 h-16 bg-gradient-to-br from-pink-50 to-rose-50 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <svg class="w-8 h-8 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 group-hover:text-pink-600 transition">Account</h3>
                <p class="text-sm text-gray-500 mt-2">Manage your account settings.</p>
            </a>
        </div>
    </div>
</div>

<!-- FAQ Sections -->
<div class="section-padding bg-white">
    <div class="container-max container-padding">
        <!-- Getting Started -->
        <div id="getting-started" class="mb-16">
            <h2 class="text-heading mb-8">Getting Started</h2>
            <div class="space-y-4 max-w-4xl">
                <div class="card animate-on-scroll">
                    <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition" onclick="this.parentElement.classList.toggle('expanded')">
                        <h3 class="text-lg font-semibold text-gray-900">How do I create an account?</h3>
                        <svg class="w-5 h-5 text-gray-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-6 text-gray-600">
                        Click on the "Sign Up" button in the top navigation, fill in your details including name, email, and password. You'll receive a confirmation email to verify your account.
                    </div>
                </div>
                
                <div class="card animate-on-scroll">
                    <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition" onclick="this.parentElement.classList.toggle('expanded')">
                        <h3 class="text-lg font-semibold text-gray-900">Is SmartService free to use?</h3>
                        <svg class="w-5 h-5 text-gray-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-6 text-gray-600">
                        Yes, creating an account and browsing services is completely free. You only pay when you book a service. We don't charge any subscription fees.
                    </div>
                </div>
                
                <div class="card animate-on-scroll">
                    <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition" onclick="this.parentElement.classList.toggle('expanded')">
                        <h3 class="text-lg font-semibold text-gray-900">How do I become a service provider?</h3>
                        <svg class="w-5 h-5 text-gray-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-6 text-gray-600">
                        Sign up as a provider, complete your profile with your skills and experience, upload necessary certifications, and pass our verification process. Once approved, you can start offering services.
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Booking -->
        <div id="booking" class="mb-16">
            <h2 class="text-heading mb-8">Booking & Services</h2>
            <div class="space-y-4 max-w-4xl">
                <div class="card animate-on-scroll">
                    <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition" onclick="this.parentElement.classList.toggle('expanded')">
                        <h3 class="text-lg font-semibold text-gray-900">How do I book a service?</h3>
                        <svg class="w-5 h-5 text-gray-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-6 text-gray-600">
                        Browse services, select the one you need, choose a date and time, provide any special requirements, and confirm your booking. You'll receive confirmation details via email.
                    </div>
                </div>
                
                <div class="card animate-on-scroll">
                    <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition" onclick="this.parentElement.classList.toggle('expanded')">
                        <h3 class="text-lg font-semibold text-gray-900">Can I reschedule my booking?</h3>
                        <svg class="w-5 h-5 text-gray-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-6 text-gray-600">
                        Yes, you can reschedule your booking up to 24 hours before the scheduled time. Go to your dashboard, find the booking, and select "Reschedule".
                    </div>
                </div>
                
                <div class="card animate-on-scroll">
                    <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition" onclick="this.parentElement.classList.toggle('expanded')">
                        <h3 class="text-lg font-semibold text-gray-900">What if the provider doesn't show up?</h3>
                        <svg class="w-5 h-5 text-gray-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-6 text-gray-600">
                        This is rare but if it happens, contact our support team immediately. We'll help you reschedule with another provider or provide a full refund.
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Payment -->
        <div id="payment" class="mb-16">
            <h2 class="text-heading mb-8">Payment & Billing</h2>
            <div class="space-y-4 max-w-4xl">
                <div class="card animate-on-scroll">
                    <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition" onclick="this.parentElement.classList.toggle('expanded')">
                        <h3 class="text-lg font-semibold text-gray-900">What payment methods do you accept?</h3>
                        <svg class="w-5 h-5 text-gray-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-6 text-gray-600">
                        We accept all major credit cards (Visa, MasterCard, American Express), debit cards, PayPal, and digital wallets like Apple Pay and Google Pay.
                    </div>
                </div>
                
                <div class="card animate-on-scroll">
                    <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition" onclick="this.parentElement.classList.toggle('expanded')">
                        <h3 class="text-lg font-semibold text-gray-900">Is my payment information secure?</h3>
                        <svg class="w-5 h-5 text-gray-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-6 text-gray-600">
                        Absolutely! We use industry-standard SSL encryption and are PCI DSS compliant. Your payment information is never stored on our servers.
                    </div>
                </div>
                
                <div class="card animate-on-scroll">
                    <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition" onclick="this.parentElement.classList.toggle('expanded')">
                        <h3 class="text-lg font-semibold text-gray-900">How do refunds work?</h3>
                        <svg class="w-5 h-5 text-gray-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-6 text-gray-600">
                        Refunds are processed according to our cancellation policy. If you cancel 24+ hours before the service, you'll receive a full refund.
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Account -->
        <div id="account" class="mb-16">
            <h2 class="text-heading mb-8">Account Management</h2>
            <div class="space-y-4 max-w-4xl">
                <div class="card animate-on-scroll">
                    <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition" onclick="this.parentElement.classList.toggle('expanded')">
                        <h3 class="text-lg font-semibold text-gray-900">How do I update my profile?</h3>
                        <svg class="w-5 h-5 text-gray-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-6 text-gray-600">
                        Go to your dashboard, click on your profile picture, and select "Edit Profile". You can update your personal information, contact details, and preferences.
                    </div>
                </div>
                
                <div class="card animate-on-scroll">
                    <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition" onclick="this.parentElement.classList.toggle('expanded')">
                        <h3 class="text-lg font-semibold text-gray-900">Can I delete my account?</h3>
                        <svg class="w-5 h-5 text-gray-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-6 text-gray-600">
                        Yes, you can delete your account from your profile settings. Please note that this action is permanent and cannot be undone.
                    </div>
                </div>
                
                <div class="card animate-on-scroll">
                    <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition" onclick="this.parentElement.classList.toggle('expanded')">
                        <h3 class="text-lg font-semibold text-gray-900">How do I change my password?</h3>
                        <svg class="w-5 h-5 text-gray-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-6 text-gray-600">
                        Go to your profile settings and select "Change Password". You'll need to enter your current password and then create a new one.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Still Need Help Section -->
<div class="section-padding bg-gray-50">
    <div class="container-max container-padding">
        <div class="text-center">
            <h2 class="text-heading mb-4">Still Need Help?</h2>
            <p class="text-body text-gray-600 max-w-2xl mx-auto mb-8">
                Can't find the answer you're looking for? Our support team is here to help you.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="btn-primary">
                    Contact Support
                </a>
                <a href="mailto:support@smartservice.com" class="btn-secondary">
                    Email Us
                </a>
            </div>
        </div>
    </div>
</div>

<style>
.card.expanded .px-6 {
    display: block;
}

.card:not(.expanded) .px-6 {
    display: none;
}

.card button svg {
    transition: transform 0.3s ease;
}

.card.expanded button svg {
    transform: rotate(180deg);
}
</style>
@endsection
