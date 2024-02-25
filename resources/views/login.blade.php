@extends('layout.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md px-6 py-8 mx-auto bg-white rounded-lg shadow-md">
        <h2 class="text-3xl font-bold text-center text-gray-700">{{ __('Login') }}</h2>

        <form method="POST" action="{{ route('login') }}" class="mt-6">
            @csrf

            <div class="mb-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-600">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="w-full px-4 py-2 text-sm leading-tight text-gray-700 bg-white border rounded-md shadow-sm focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror">
                @error('email')
                <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-600">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" class="w-full px-4 py-2 text-sm leading-tight text-gray-700 bg-white border rounded-md shadow-sm focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror">
                @error('password')
                <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                    {{ __('Login') }}
                </button>

            </div>

            <div class="flex items-center justify-between">
                <div>
                    <input id="remember" type="checkbox" name="remember" class="text-blue-600 border-gray-300 rounded focus:ring-blue-500" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember" class="ml-2 text-sm text-gray-600">{{ __('Remember Me') }}</label>
                </div>

                @if (Route::has('password.request'))
                <a class="text-sm text-blue-500 hover:underline" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </form>
    </div>
</div>
@endsection