<x-guest-layout>
    <div class="mb-4 text-sm text-gray-700">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />

            <x-text-input
                id="email"
                class="block mt-1 w-full focus:border-[#5A1A1A] focus:ring-[#5A1A1A]"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus
            />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-7">
            <button
                type="submit"
                class="px-6 py-2 rounded text-white tracking-wide"
                style="background-color:#5A1A1A;"
                onmouseover="this.style.backgroundColor='#7A2A2A'"
                onmouseout="this.style.backgroundColor='#5A1A1A'"
            >
                Email Password Reset Link
            </button>
        </div>
    </form>
</x-guest-layout>
