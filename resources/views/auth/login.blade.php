@extends('layouts.app')

@section('styles')
    @vite(['resources/css/layout/login.css'])
@endsection

@section('content')
    <div class="body">
        <div class="block">
            <div class="block-1">
                <img src="{{ Vite::asset('resources/img/autentificacion/logo.webp') }}" alt="logo">

            </div>
            <div class="block-2">
                <h1>{{ __('INICIA SESIÓN') }}</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <label for="email">{{ __('Ingresa Correo*') }}</label><br>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                        autofocus>
                    @error('email')
                        <span><strong>{{ $message }}</strong></span>
                    @enderror
                    <br><br>
                    <label for="password">{{ __('Ingresa Contraseña*') }}</label><br>
                    <input id="password" type="password" name="password" required autocomplete="current-password">
                    @error('password')
                        <span><strong>{{ $message }}</strong></span>
                    @enderror
                    <br>
                    <a href="{{ route('login.google') }}">
                        <div>
                            <h1>Inicia con Google</h1>
                        </div>
                    </a>

                    <br><br>
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">{{ __('Remember Me') }}</label><br><br>

                    <button type="submit">{{ __('ACCEDER') }}</button><br><br>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection