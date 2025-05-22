<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="max-w-md mx-auto p-6 bg-white rounded">
        @csrf

        <!-- Name -->
        <div class="mb-4">
            <x-input-label for="name" :value="__('Name')" class="block text-sm font-medium text-gray-700" />
            <x-text-input id="name" class="block w-full mt-1 rounded border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-1 text-sm text-red-600" />
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-gray-700" />
            <x-text-input id="email" class="block w-full mt-1 rounded border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-1 text-sm text-red-600" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Password')" class="block text-sm font-medium text-gray-700" />
            <x-text-input id="password" class="block w-full mt-1 rounded border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-1 text-sm text-red-600" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-6">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="block text-sm font-medium text-gray-700" />
            <x-text-input id="password_confirmation" class="block w-full mt-1 rounded border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-sm text-red-600" />
        </div>

        <div class="flex items-center justify-between">
            <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-green-600">
                {{ __('Sudah punya akun?') }}
            </a>
            <x-primary-button class="bg-green-600 hover:bg-green-700 focus:ring-green-500">
                {{ __('Daftar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

