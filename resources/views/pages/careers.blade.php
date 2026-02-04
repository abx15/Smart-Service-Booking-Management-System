<x-main-layout>
    {{-- Hero Section --}}
    <section class="section-full-width bg-gradient-to-br from-primary via-primary-600 to-secondary py-20 text-white">
        <div class="section-content-contained text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Join Our Team</h1>
            <p class="text-xl md:text-2xl text-white/90 max-w-3xl mx-auto mb-8">
                Be part of a growing team that's transforming the service industry. We're hiring talented professionals who are passionate about excellence.
            </p>
            <div class="flex items-center justify-center gap-4 flex-wrap">
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    <span class="font-semibold">Competitive Pay</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    <span class="font-semibold">Benefits Package</span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    <span class="font-semibold">Growth Opportunities</span>
                </div>
            </div>
        </div>
    </section>

    {{-- Success Message --}}
    @if(session('success'))
    <div class="section-full-width bg-trust-green/10 border-b border-trust-green/20 py-4">
        <div class="section-content-contained">
            <div class="flex items-center gap-3 text-trust-green">
                <svg class="w-6 h-6 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <p class="font-semibold">{{ session('success') }}</p>
            </div>
        </div>
    </div>
    @endif

    {{-- Current Openings --}}
    <section class="section-full-width py-16 bg-gray-50">
        <div class="section-content-contained">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 text-center">Current Openings</h2>
            <p class="text-lg text-gray-600 text-center mb-12 max-w-2xl mx-auto">
                We're looking for passionate individuals to join our team in various roles
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                {{-- Job Opening Cards --}}
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Service Technician</h3>
                            <p class="text-gray-600">Full-time • On-site</p>
                        </div>
                        <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm font-semibold">New</span>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Experienced technician to handle plumbing, electrical, and general maintenance services for residential clients.
                    </p>
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        </svg>
                        Local Area
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Customer Service Rep</h3>
                            <p class="text-gray-600">Full-time • Hybrid</p>
                        </div>
                        <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm font-semibold">New</span>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Handle customer inquiries, schedule appointments, and ensure excellent customer satisfaction.
                    </p>
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        </svg>
                        Office/Remote
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition-shadow">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Operations Manager</h3>
                            <p class="text-gray-600">Full-time • On-site</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Oversee daily operations, manage team schedules, and ensure quality service delivery across all projects.
                    </p>
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        </svg>
                        Office Location
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Application Form --}}
    <section class="section-full-width py-16 bg-white">
        <div class="section-content-contained max-w-3xl">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 text-center">Apply Now</h2>
            <p class="text-lg text-gray-600 text-center mb-12">
                Fill out the form below and we'll get back to you within 24-48 hours
            </p>

            <form action="{{ route('careers.apply') }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-gray-50 p-8 rounded-xl">
                @csrf

                {{-- Full Name --}}
                <div>
                    <label for="full_name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label>
                    <input type="text" name="full_name" id="full_name" required value="{{ old('full_name') }}"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent @error('full_name') border-red-500 @enderror">
                    @error('full_name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Email & Phone --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email *</label>
                        <input type="email" name="email" id="email" required value="{{ old('email') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent @error('email') border-red-500 @enderror">
                        @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone *</label>
                        <input type="tel" name="phone" id="phone" required value="{{ old('phone') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent @error('phone') border-red-500 @enderror">
                        @error('phone')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Position & Experience --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="position" class="block text-sm font-semibold text-gray-700 mb-2">Position Applying For *</label>
                        <select name="position" id="position" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent @error('position') border-red-500 @enderror">
                            <option value="">Select a position</option>
                            <option value="Service Technician" {{ old('position') == 'Service Technician' ? 'selected' : '' }}>Service Technician</option>
                            <option value="Customer Service Rep" {{ old('position') == 'Customer Service Rep' ? 'selected' : '' }}>Customer Service Rep</option>
                            <option value="Operations Manager" {{ old('position') == 'Operations Manager' ? 'selected' : '' }}>Operations Manager</option>
                            <option value="Other" {{ old('position') == 'Other' ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('position')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="experience_years" class="block text-sm font-semibold text-gray-700 mb-2">Years of Experience</label>
                        <input type="number" name="experience_years" id="experience_years" min="0" max="50" value="{{ old('experience_years') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent @error('experience_years') border-red-500 @enderror">
                        @error('experience_years')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Resume Upload --}}
                <div>
                    <label for="resume" class="block text-sm font-semibold text-gray-700 mb-2">Resume (PDF, DOC, DOCX - Max 5MB)</label>
                    <input type="file" name="resume" id="resume" accept=".pdf,.doc,.docx"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-primary file:text-white hover:file:bg-primary-dark @error('resume') border-red-500 @enderror">
                    @error('resume')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Cover Letter --}}
                <div>
                    <label for="cover_letter" class="block text-sm font-semibold text-gray-700 mb-2">Cover Letter (Optional)</label>
                    <textarea name="cover_letter" id="cover_letter" rows="6"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent @error('cover_letter') border-red-500 @enderror">{{ old('cover_letter') }}</textarea>
                    @error('cover_letter')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submit Button --}}
                <div class="text-center">
                    <button type="submit" class="px-8 py-4 bg-gradient-to-r from-primary to-secondary hover:from-primary-dark hover:to-secondary-dark text-white font-bold rounded-lg shadow-lg transition-all transform hover:-translate-y-0.5">
                        Submit Application
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-main-layout>