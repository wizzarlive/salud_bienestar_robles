@extends('layouts.app')

@section('styles')
    @vite(['resources/css/layout/register.css'])
@endsection

@section('content')
<div class="auth-container">
    <div class="auth-card">
        <div class="auth-header">{{ __('Register') }}</div>

        <div class="auth-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="form-group">
                    <label for="name" class="form-label">{{ __('Name') }}</label>
                    <input id="name" 
                           type="text" 
                           class="form-input @error('name') input-error @enderror" 
                           name="name" 
                           value="{{ old('name') }}" 
                           required autocomplete="name" autofocus>
                    @error('name')
                        <span class="error-message"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                    <input id="email" 
                           type="email" 
                           class="form-input @error('email') input-error @enderror" 
                           name="email" 
                           value="{{ old('email') }}" 
                           required autocomplete="email">
                    @error('email')
                        <span class="error-message"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" 
                           type="password" 
                           class="form-input @error('password') input-error @enderror" 
                           name="password" 
                           required autocomplete="new-password">
                    @error('password')
                        <span class="error-message"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" 
                           type="password" 
                           class="form-input" 
                           name="password_confirmation" 
                           required autocomplete="new-password">
                </div>

                <!-- Buttons -->
                <div class="form-actions">
                    <button type="submit" class="btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
