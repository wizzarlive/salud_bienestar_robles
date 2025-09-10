<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/layout/app.css', 'resources/js/app.js'])
    @yield('styles')

    <link rel="stylesheet" href="{{ asset(path: 'css/custom.css') }}">
</head>

<body>
    <div id="app">
        <nav class="navbar-custom">
            <div class="container-custom">
                <a class="brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="toggle-btn" onclick="document.getElementById('navbarContent').classList.toggle('open')">
                    ☰
                </button>

                <div class="nav-links" id="navbarContent">
                    <ul class="left-links">
                        <!-- Puedes agregar enlaces aquí -->
                    </ul>

                    <ul class="right-links">
                        @guest
                            @if (Route::has('login'))
                                <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            @endif

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                            @endif
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle"
                                    onclick="event.preventDefault();this.nextElementSibling.classList.toggle('show')">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu">
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display:none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="content">
            @yield('content')
        </main>
    </div>
</body>

</html>