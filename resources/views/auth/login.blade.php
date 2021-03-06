{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

@extends('layouts.main')
@section('content')
    <x-guest-layout>
        <div class="signup pt-5">
            <div class="fs-2 text-center mt-5">Login</div>
            <hr style="width: 20%; margin: auto; color: #000; height: 0.5px" class="mb-5" />
    
            <div class="container signup-container">
                <x-jet-validation-errors class="mb-4" />
                <form action="{{ route('login') }}" method="post" class="pb-4">
                    @csrf
                    <div class="heading fs-3">Login to your account</div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="Enter email.."
                  name="email"
                  required
                />
              </div>
    
              <div class="mb-3">
                <label for="password" class="form-label"
                  >Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  placeholder="Enter Password.."
                  name="password"
                  required
                />
              </div>
    
              <div class="button text-center">
                <button type="submit" class="btn btn-success signup-btn">
                  Login &rarr;
                </button>
              </div>
              <div>
                Don't have an account?<a class="login-text" href="{{ route('register') }}"
                  >Register</a
                >
              </div>
            </form>
          </div>
        </div>
    </x-guest-layout>
@endsection