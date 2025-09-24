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
                    <input id="email" type="email" name="email" placeholder="Correo Electronico" value="{{ old('email') }}"
                        required autocomplete="email" autofocus>
                    @error('email')
                        <span><strong>{{ $message }}</strong></span>
                    @enderror
                    <br><br>
                    <label for="password">{{ __('Ingresa Contraseña*') }}</label><br>
                    <input id="password" type="password" name="password" placeholder="Contraseña" required
                        autocomplete="current-password">
                    @error('password')
                        <span><strong>{{ $message }}</strong></span>
                    @enderror
                    <div class="recordarme">
                        <div>
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">{{ __('Recuerdame') }}</label>
                        </div>
                        <div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">{{ __('¿Olvidaste tu contraseña?') }}</a>
                            @endif
                        </div>
                    </div>
                    <div class="botones">
                        <div>
                            <button type="submit">{{ __('ACCEDER') }}</button>
                        </div>
                        <div class="google">
                            <a href="{{ route('login.google') }}">
                                <div class="google-btn" role="button" aria-label="Inicia con Google">
                                    <!-- SVG de Google -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 488 512" aria-hidden="true" focusable="false">
                                        <path fill="#4285F4"
                                            d="M488 261.8c0-17.4-1.6-34.1-4.6-50.2H249v95h135c-5.8 31.5-23.1 58.2-49.3 76.1v63.3h79.4c46.5-42.8 73.3-105.8 73.3-184.2z" />
                                        <path fill="#34A853"
                                            d="M249 492c66.2 0 121.7-21.9 162.3-59.4l-79.4-63.3c-22.1 14.9-50.4 23.7-82.9 23.7-63.8 0-117.8-43.1-137.1-101.1H30v63.7C70.6 445.3 154.3 492 249 492z" />
                                        <path fill="#FBBC05"
                                            d="M111.9 291.9c-4.6-13.5-7.2-27.9-7.2-42.9s2.6-29.4 7.2-42.9V142h-81.9C15.4 179.1 0 223.1 0 269s15.4 89.9 30 127h81.9v-104.1z" />
                                        <path fill="#EA4335"
                                            d="M249 97.8c35.9 0 68.3 12.3 93.8 36.5l70.2-70.2C370.7 23.2 315.2 0 249 0 154.3 0 70.6 46.7 30 142l81.9 63.7C131.2 140.9 185.2 97.8 249 97.8z" />
                                    </svg>
                                    <h2>Inicia con Google</h2>
                                </div>
                            </a>
                        </div>

                        <a href="{{ route('login.facebook') }}">
                            <div class="facebook-btn" role="button" aria-label="Inicia con Facebook">
                                <!-- SVG de Facebook (color blanco para contraste sobre el fondo azul) -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 320 512" aria-hidden="true" focusable="false">
                                    <path fill="#ffffff" d="M279.14 288l14.22-92.66h-88.91V129.09c0-25.35 12.42-50.06 52.24-50.06H293V6.26S259.5 0 225.36 0c-73.22 0-121.36 44.38-121.36 124.72v70.62H22.89V288h81.11v224h99.73V288z"/>
                                </svg>
                                <h2>Inicia con Facebook</h2>
                            </div>
                        </a>
                    </div>

                    <br><br>
                </form>
            </div>
        </div>
    </div>
@endsection
