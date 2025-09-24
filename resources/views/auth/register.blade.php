@extends('layouts.app')

@section('styles')
    @vite(['resources/css/layout/register.css'])
@endsection

@section('content')
    <div class="body">
        <div class="block">
            <!-- Bloque 1 (Imagen) -->
            <div class="block-1">
                <img src="{{ Vite::asset('resources/img/autentificacion/logo.webp') }}" alt="logo">
            </div>

            <!-- Bloque 2 (Formulario) -->
            <div class="block-2">
                <h1>{{ __('REGÍSTRATE') }}</h1>

                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf

                    <!-- Nombre + Apellido -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">{{ __('Nombre') }}</label>
                            <input id="name" type="text" class="@error('name') input-error @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="error-message"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="last_name">{{ __('Apellido') }}</label>
                            <input id="last_name" type="text" class="@error('last_name') input-error @enderror"
                                name="last_name" value="{{ old('last_name') }}" required>
                            @error('last_name')
                                <span class="error-message"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>

                    <!-- Correo + Teléfono -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">{{ __('Correo electrónico') }}</label>
                            <input id="email" type="email" class="@error('email') input-error @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="error-message"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone">{{ __('Teléfono') }}</label>
                            <input id="phone" type="text" class="@error('phone') input-error @enderror" name="phone"
                                value="{{ old('phone') }}" required>
                            @error('phone')
                                <span class="error-message"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>

                    <!-- Dirección -->
                    <label for="direction">{{ __('Dirección') }}</label>
                    <textarea id="direction" class="@error('direction') input-error @enderror" name="direction"
                        required>{{ old('direction') }}</textarea>
                    @error('direction')
                        <span class="error-message"><strong>{{ $message }}</strong></span>
                    @enderror

                    <!-- Fecha Nacimiento + Imagen -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="birthday">{{ __('Fecha de nacimiento') }}</label>
                            <input id="birthday" type="date" class="@error('birthday') input-error @enderror"
                                name="birthday" value="{{ old('birthday') }}" required>
                            @error('birthday')
                                <span class="error-message"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="img">{{ __('Foto de perfil') }}</label>
                            <input id="img" type="file" class="@error('img') input-error @enderror" name="img">
                            @error('img')
                                <span class="error-message"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>

                    <!-- Contraseña + Confirmar -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="password">{{ __('Contraseña') }}</label>
                            <input id="password" type="password" class="@error('password') input-error @enderror"
                                name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="error-message"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{ __('Confirmar contraseña') }}</label>
                            <input id="password-confirm" type="password" name="password_confirmation" required
                                autocomplete="new-password">
                        </div>
                    </div>

                    <!-- Botón -->
                    <div class="form-actions">
                        <button type="submit" class="btn-primary">
                            {{ __('Registrar') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
