@php
@php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
@endphp

<nav class="bg-white shadow-lg border-b border-gray-200 sticky top-0 z-50">
    <div class="container-max container-padding">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ url('/') }}" class="flex items-center space-x-3 group">
                    <div class="w-10 h-10 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-lg shadow-indigo-200 group-hover:scale-105 transition-transform duration-200">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L2 7v10c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-10-5z"/>
                        </svg>
                    </div>
                    <div class="font-display">
                        <span class="text-xl font-black text-gray-900">Smart</span>
                        <span class="text-xl font-black gradient-text-primary">Service</span>
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation Links -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="{{ route('services.index') }}" 
                   class="{{ request()->routeIs('services.*') ? 'text-indigo-600 bg-indigo-50' : 'text-gray-600 hover:text-gray-900' }} px-3 py-2 rounded-lg text-sm font-medium transition-colors duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2m0 0V5a2 2 0 012-2m0 0V5a2 2 0 012-2m0 0V5a2 2 0 012-2"/>
                    </svg>
                    Services
                </a>
                
                <a href="{{ route('about') }}" 
                   class="{{ request()->routeIs('about') ? 'text-indigo-600 bg-indigo-50' : 'text-gray-600 hover:text-gray-900' }} px-3 py-2 rounded-lg text-sm font-medium transition-colors duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1 0v4m0 0h-6m-6 0h6m2 5H7a2 2 0 002-2h10a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2V6a2 2 0 00-2-2H2a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    About
                </a>
                
                <a href="{{ route('contact') }}" 
                   class="{{ request()->routeIs('contact') ? 'text-indigo-600 bg-indigo-50' : 'text-gray-600 hover:text-gray-900' }} px-3 py-2 rounded-lg text-sm font-medium transition-colors duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2.42 2.42 0 001.94-.89l.89.89V8.12a2.42 2.42 0 001.94-.89l.89-.89V6a2.42 2.42 0 001.94-.89l.89-.89zM21 2.625c-.577 0 1.154-.178 1.32-.632l.89-.89V6.25a2.42 2.42 0 001.94-.89l.89-.89zM8.68 14.34l-.89.89V8.12a2.42 2.42 0 001.94-.89l.89-.89V6.25a2.42 2. 0 001.94-.89l.89-.89zM12 2a2 2 0 100 4 2 2 0 100-4 2 2 0 000-4z"/>
                    </svg>
                    Contact
                </a>
                
                <a href="{{ route('faq') }}" 
                   class="{{ request()->routeIs('faq') ? 'text-indigo-600 bg-indigo-50' : 'text-gray-600 hover:text-gray-900' }} px-3 py-2 rounded-lg text-sm font-medium transition-colors duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549 1.657 1.051 1.657 1.051 0 1.995-.564 2.828.15.12a2 2 0 002.828-.15.12 1.995-.564 2.828-.15.12zM15 15H12a2 2 0 002 2h2v3a2 2 0 002 2h2v-3a2 2 0 002-2v-3z"/>
                    </svg>
                    Help
                </a>
            </div>

            <!-- Right side items -->
            <div class="flex items-center space-x-4">
                @auth
                    <!-- User Menu -->
                    <div class="relative">
                        <button onclick="toggleUserMenu()" class="flex items-center space-x-3 p-2 rounded-xl hover:bg-gray-50 transition-colors duration-200">
                            <div class="w-8 h-8 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center text-white font-semibold text-sm">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        
                        <!-- User Dropdown -->
                        <div id="userDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-xl border border-gray-100 py-2 z-50">
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                                Profile
                            </a>
                            
                            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7m0 0l-7 7"/>
                                </svg>
                                Dashboard
                            </a>
                            
                            <div class="border-t border-gray-100 my-2"></div>
                            
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors">
                                    <svg class="w-5 h-5 mr-3 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m-4 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V6a3 3 0 016 3 0h6a3 3 0 016 3 0v6a3 3 0 01-3 3H6a3 3 0 01-3-3V6a3 3 0 016-3 0v-6a3 3 0 00-3-3H6a3 3 0 00-3 3V6a3 3 0 00-3 3z"/>
                                    </svg>
                                    Log Out
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <!-- Guest Actions -->
                    <a href="{{ route('login') }}" class="btn-ghost">
                        Log In
                    </a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn-primary">
                        Get Started
                    </a>
                    @endif
                @endauth

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button onclick="toggleMobileMenu()" class="p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded-xl transition-colors duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobileMenu" class="hidden md:hidden border-t border-gray-200 bg-white">
            <div class="container-max container-padding py-4">
                @auth
                <div class="space-y-2">
                    <a href="{{ route('dashboard') }}" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors">
                        <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7m0 0l-7 7"/>
                        </svg>
                        Dashboard
                    </a>
                    
                    @if(Auth::user()->isProvider() || Auth::user()->isAdmin())
                    <a href="{{ route('services.index') }}" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors">
                        <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 00-2-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 00-2-2m0 0V5a2 2 0 00-2-2m0 0V5a2 2 0 00-2-2m0 0V5a2 2 0 00-2-2m0 0V5a2 2 0 00-2-2m0 0V5a2 2 0 00-2-2"/>
                        </svg>
                        Services
                    </a>
                    @endif
                    
                    <a href="{{ route('profile.edit') }}" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors">
                        <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        Profile
                    </a>
                    
                    <div class="border-t border-gray-100 pt-2">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-3 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                                <svg class="w-5 h-5 mr-3 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m-4 4v1a3 3 0 01-3 3H6a3 3 0 01-3 3V6a3 3 0 016 3 0v6a3 3 0 01-3 3H6a3 3 0 01-3 3V6a3 3 0 01-3 3z"/>
                                </svg>
                                Log Out
                            </button>
                        </form>
                    </div>
                @else
                    <a href="{{ route('services.index') }}" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors">
                        Services
                    </a>
                    <a href="{{ route('about') }}" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors">
                        About
                    </a>
                    <a href="{{ route('contact') }}" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors">
                        Contact
                    </a>
                    <a href="{{ route('faq') }}" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors">
                        Help
                    </a>
                    <a href="{{ route('login') }}" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors">
                        Log In
                    </a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="block px-4 py-3 text-indigo-600 font-semibold hover:bg-indigo-50 rounded-lg transition-colors">
                        Get Started
                    </a>
                    @endif
                @endauth
            </div>
        </div>
    </nav>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobileMenu');
        menu.classList.toggle('hidden');
    }
    
    function toggleUserMenu() {
        const dropdown = document.getElementById('userDropdown');
        dropdown.classList.toggle('hidden');
    }
    
    // Close dropdowns when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('#userDropdown') && !event.target.closest('button[onclick*="toggleUserMenu"]')) {
            document.getElementById('userDropdown').classList.add('hidden');
        }
    });
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('#mobileMenu') && !event.target.closest('button[onclick*="toggleMobileMenu"]')) {
            document.getElementById('mobileMenu').classList.add('hidden');
        }
    });
</script>
