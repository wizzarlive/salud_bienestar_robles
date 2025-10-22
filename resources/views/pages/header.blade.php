<div class="header">
    <div class="block-1">
        <p>Los mejores precios en el mercado</p>
    </div>

    <div class="block-2">
        <div>
            <img src="{{ Vite::asset('resources/img/header/logo.webp') }}" alt="logo">
        </div>

        <div>
            <form action="">
                <input type="text" placeholder="¿Qué buscas?">
            </form>
        </div>

        <div class="icons">
            <!-- Ícono del usuario con dropdown -->
            <div class="user-dropdown">
                <a href="#"
                   onclick="event.preventDefault();this.nextElementSibling.classList.toggle('show')">
                    <div><img src="{{ Vite::asset('resources/img/header/user.webp') }}" alt="user"></div>
                </a>

                <!-- Menú desplegable -->
                <ul class="submenu">
                    @guest
                        @if (Route::has('login'))
                            <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                        @endif
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Registrarse</a></li>
                        @endif
                    @else
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Cerrar sesión
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>

            <!-- Ícono del carrito -->
            <a href="">
                <div><img src="{{ Vite::asset('resources/img/header/cart.webp') }}" alt="cart"></div>
            </a>
        </div>
    </div>

    <nav class="header">
        <ul>
            <li>
                <a href="#">Categorías</a>
                <ul class="submenu">
                    <li><a href="">Regalos</a></li>
                    <li><a href="">Perfumería</a></li>
                    <li><a href="">Prendas para niños</a></li>
                    <li><a href="">Cremas Faciales</a></li>
                    <li><a href="">Higiene Personal</a></li>
                    <li><a href="">Cuidado Infantil</a></li>
                </ul>
            </li>
            <li><a href="/">Inicio</a></li>
            <li><a href="/nosotros">Nosotros</a></li>
            <li><a href="">Tienda</a></li>
            <li><a href="/contacto">Contacto</a></li>
        </ul>
    </nav>
</div>
