<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            
        </x-slot>

        <div class="login-box">
        <h2>Login</h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="user-box">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="user-box" class="mt-4">
                <x-label for="password" :value="__('Mot de passe')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="item">
                <div class="checkbox-circle">
                    <input type="checkbox" id="checkbox-circle1" name="check">
                    <label for="checkbox-circle1" class="ml-2 text-sm text-gray-600 noir">{{ __('Se souvenir de moi') }}</label>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                @endif

                <x-button class="ml-3 user-box btn2">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                    {{ __('Se connecter') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
