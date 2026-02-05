<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                <p class="mt-2 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
                @endif
            </div>
            @endif
            <div>
                <x-input-label for="phone" :value="__('Phone Number')" />
                <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $user->phone)" required />
                <x-input-error class="mt-2" :messages="$errors->get('phone')" />
            </div>

            <div>
                <x-input-label for="address" :value="__('Address')" />
                <textarea id="address" name="address" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="3" required>{{ old('address', $user->address) }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('address')" />
            </div>

            <div>
                <x-input-label for="bio" :value="__('Bio')" />
                <textarea id="bio" name="bio" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="3">{{ old('bio', $user->bio) }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('bio')" />
            </div>

            <!-- Location (Hidden Lat/Lng) -->
            <div>
                <x-input-label for="location" :value="__('Location')" />
                <div class="flex items-center gap-2 mt-1">
                    <button type="button" onclick="getProfileLocation()" class="px-4 py-2 bg-indigo-600 text-white text-sm font-semibold rounded-lg hover:bg-indigo-700 transition flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Update Location
                    </button>
                    <span id="profile-location-status" class="text-xs text-gray-500">
                        @if($user->latitude)
                        Current: {{ number_format($user->latitude, 4) }}, {{ number_format($user->longitude, 4) }}
                        @else
                        Location not set
                        @endif
                    </span>
                </div>
                <input type="hidden" name="latitude" id="profile-latitude" value="{{ old('latitude', $user->latitude) }}">
                <input type="hidden" name="longitude" id="profile-longitude" value="{{ old('longitude', $user->longitude) }}">
            </div>

            <script>
                function getProfileLocation() {
                    const status = document.getElementById('profile-location-status');
                    if (navigator.geolocation) {
                        status.textContent = "Locating...";
                        navigator.geolocation.getCurrentPosition(showProfilePosition, showProfileError);
                    } else {
                        status.textContent = "Geolocation is not supported by this browser.";
                    }
                }

                function showProfilePosition(position) {
                    document.getElementById('profile-latitude').value = position.coords.latitude;
                    document.getElementById('profile-longitude').value = position.coords.longitude;
                    document.getElementById('profile-location-status').textContent = "Updated: " + position.coords.latitude.toFixed(4) + ", " + position.coords.longitude.toFixed(4);
                    document.getElementById('profile-location-status').className = "text-xs text-green-600 font-bold";
                }

                function showProfileError(error) {
                    let msg = "";
                    switch (error.code) {
                        case error.PERMISSION_DENIED:
                            msg = "User denied the request for Geolocation."
                            break;
                        case error.POSITION_UNAVAILABLE:
                            msg = "Location information is unavailable."
                            break;
                        case error.TIMEOUT:
                            msg = "The request to get user location timed out."
                            break;
                        case error.UNKNOWN_ERROR:
                            msg = "An unknown error occurred."
                            break;
                    }
                    document.getElementById('profile-location-status').textContent = msg;
                    document.getElementById('profile-location-status').className = "text-xs text-red-500";
                }
            </script>

            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Save') }}</x-primary-button>

                @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                @endif
            </div>
    </form>
</section>