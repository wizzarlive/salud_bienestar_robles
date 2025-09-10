@extends('layouts.app')

@section('styles')
    <!-- Cargar CSS exclusivo para esta vista -->
    @vite(['resources/css/layout/login.css'])
@endsection

@section('content')
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">{{ __('Login') }}</div>

            <div class="auth-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-input @error('email') input-error @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="error-message">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-input @error('password') input-error @enderror"
                            name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="error-message">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="form-group form-check">
                        <input type="checkbox" name="remember" id="remember" class="checkbox" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember" class="form-label-inline">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <!-- Buttons -->
                    <div class="form-actions">
                        <button type="submit" class="btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection