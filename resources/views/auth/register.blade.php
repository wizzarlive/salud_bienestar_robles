@extends('layouts.app')

@section('styles')
    @vite(['resources/css/layout/register.css'])
@endsection

@section('content')
<div class="auth-container">
    <div class="auth-card">
        <div class="auth-header">{{ __('Register') }}</div>

        <div class="auth-body">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
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

                <!-- Last Name -->
                <div class="form-group">
                    <label for="last_name" class="form-label">{{ __('Last Name') }}</label>
                    <input id="last_name" 
                           type="text" 
                           class="form-input @error('last_name') input-error @enderror" 
                           name="last_name" 
                           value="{{ old('last_name') }}" 
                           required>
                    @error('last_name')
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

                <!-- Phone -->
                <div class="form-group">
                    <label for="phone" class="form-label">{{ __('Phone') }}</label>
                    <input id="phone" 
                           type="text" 
                           class="form-input @error('phone') input-error @enderror" 
                           name="phone" 
                           value="{{ old('phone') }}" 
                           required>
                    @error('phone')
                        <span class="error-message"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <!-- Direction -->
                <div class="form-group">
                    <label for="direction" class="form-label">{{ __('Direction') }}</label>
                    <textarea id="direction" 
                              class="form-input @error('direction') input-error @enderror" 
                              name="direction" 
                              required>{{ old('direction') }}</textarea>
                    @error('direction')
                        <span class="error-message"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <!-- Birthday -->
                <div class="form-group">
                    <label for="birthday" class="form-label">{{ __('Birthday') }}</label>
                    <input id="birthday" 
                           type="date" 
                           class="form-input @error('birthday') input-error @enderror" 
                           name="birthday" 
                           value="{{ old('birthday') }}" 
                           required>
                    @error('birthday')
                        <span class="error-message"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <!-- Profile Image -->
                <div class="form-group">
                    <label for="img" class="form-label">{{ __('Profile Image') }}</label>
                    <input id="img" 
                           type="file" 
                           class="form-input @error('img') input-error @enderror" 
                           name="img">
                    @error('img')
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
