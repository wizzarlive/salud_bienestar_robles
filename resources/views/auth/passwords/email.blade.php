@extends('layouts.app')

@section('styles')
    @vite(['resources/css/layout/email.css'])
@endsection

@section('content')
<div class="body">
    <div class="block">
        <div class="block-1">
            <img src="{{ Vite::asset('resources/img/autentificacion/logo.webp') }}" alt="logo">
        </div>
        <div class="block-2">
            <h1>{{ __('RESTAURAR CONTRASEÑA') }}</h1>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <label for="email">{{ __('Correo electrónico*') }}</label>
                <input id="email" type="email" name="email"
                    class="@error('email') input-error @enderror"
                    value="{{ old('email') }}" placeholder="Ingresa tu correo"
                    required autocomplete="email" autofocus>

                @error('email')
                    <span class="error-message"><strong>{{ $message }}</strong></span>
                @enderror

                <div class="form-actions">
                    <button type="submit" class="btn-primary">
                        {{ __('ENVIAR LINK DE RECUPERACIÓN') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
