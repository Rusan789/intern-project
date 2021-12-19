{{-- @extends('layouts.main')
@section('content')
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="phone" value="{{ __('Phone') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <div class="button text-center">
                <button type="submit" class="btn btn-success signup-btn">
                  Signup &rarr;
                </button>
              </div>
              <div>
                Already have an account?<a class="login-text" href="{{ route('login') }}"
                  >login</a
                >
              </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
@endsection --}}

@extends('layouts.main')
@section('content')
<x-guest-layout>
    <!-- Signup Page -->
    <div class="signup pt-5">
        <div class="fs-2 text-center mt-5">Create An Account</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

        <div class="container signup-container">
            <x-jet-validation-errors class="mb-4" />
            <form action="{{ route('register') }}" method="post" class="pb-4">
                @csrf
                <div class="heading fs-3">Personal Information</div>
                <div class="mb-3">
                    <label for="name" class="form-label" value="{{ __('Name') }}">Name</label
            >
            <input
              type="text"
              class="form-control"
              id="name"
              placeholder="Enter name.."
              name="name"
              required
            />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label" value="{{ __('Email') }}"
              >Email address</label
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
            <label for="phone" class="form-label" value="{{ __('Phone') }}"
              >Phone</label
            >
            <input
              type="text"
              class="form-control"
              id="phone"
              placeholder="Enter phone number.."
              name="phone"
              required
            />
          </div>

          <div class="heading fs-3">Login Information</div>
          <div class="password-field d-flex align-items-center">
            <div class="mb-3 password">
              <label for="password" class="form-label" value="{{ __('Password') }}"
                >Password</label>
              <input
                type="password"
                class="form-control"
                id="password"
                placeholder="Enter Password.."
                name="password"
                required
              />
            </div>
            <div class="mb-3">
              <label for="confirm_password" class="form-label" value="{{ __('Confirm Password') }}"
                >Confirm Password</label
              >
              <input
                type="password"
                class="form-control"
                id="confirm_password"
                placeholder="Conrifm Password.."
                name="password_confirmation"
                required
              />
            </div>
          </div>
          <div class="button text-center">
            <button type="submit" class="btn btn-success signup-btn">
              Signup &rarr;
            </button>
          </div>
          <div>
            Already have an account?<a class="login-text" href="{{ route('login') }}"
              >login</a
            >
          </div>
        </form>
      </div>
    </div>
</x-guest-layout>
@endsection