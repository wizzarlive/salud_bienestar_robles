<div class="barra-sidebar">

    <div class="barra">
        <div class="block-1">
            <img src="{{ Vite::asset('resources/img/sidebar/logo.webp') }}" alt="logo">
            <img src="{{ Vite::asset('resources/img/sidebar/icon.webp') }}" alt="icon">
        </div>

        <div class="block-2">

            <a href="">
                <div class="menu-list">
                    <div>
                        <img src="{{ Vite::asset('resources/img/sidebar/profile.webp') }}" alt="profile">

                    </div>
                    <div>
                        <p>Perfil</p>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="menu-list">
                    <div>
                        <img src="{{ Vite::asset('resources/img/sidebar/product.webp') }}" alt="product">

                    </div>
                    <div>
                        <p>Productos</p>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="menu-list">
                    <div>
                        <img src="{{ Vite::asset('resources/img/sidebar/boletas.webp') }}" alt="boletas">

                    </div>
                    <div>
                        <p>Boletas</p>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="menu-list">
                    <div>
                        <img src="{{ Vite::asset('resources/img/sidebar/mensaje.webp') }}" alt="mensaje">

                    </div>
                    <div>
                        <p>Mensaje</p>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="menu-list">
                    <div>
                        <img src="{{ Vite::asset('resources/img/sidebar/usuario.webp') }}" alt="usuario">

                    </div>
                    <div>
                        <p>Usuarios</p>
                    </div>
                </div>
            </a>
        </div>
    </div>


    <div class="logout">
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout-link">
            <img src="{{ Vite::asset('resources/img/sidebar/leave.webp') }}" alt="leave">
            <span>Cerrar sesión</span>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
            @csrf
        </form>
    </div>
</div>