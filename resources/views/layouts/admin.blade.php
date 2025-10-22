<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Administrativo</title>
    @vite(['resources/css/admin.css'])
</head>
<body>
    <div class="dashboard-container">

        {{-- Sidebar a la izquierda --}}
        <aside class="sidebar">
            @include('dashboard.partials.sidebar')
        </aside>

        {{-- Contenido principal dinámico --}}
        <main class="main-content">
            @yield('content')
        </main>

    </div>
</body>
</html>
