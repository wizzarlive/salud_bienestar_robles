<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    @vite('resources/css/contacto.css')
    @vite('resources/css/header.css')
    @vite('resources/css/footer.css')
</head>

<body>
    @include('Header')

    <header class="hero">
        <h1>CONTACTO</h1>
        <p>Inicio / Contacto</p>
    </header>

    <main class="block">
        <!-- Columna izquierda -->
        <section class="block-left">
            <div class="block-1">
                <img src="{{ Vite::asset('resources/img/contacto/logo.webp') }}" alt="logo">
                <p>Contactate Conmigo</p>
            </div>

            <div class="block-2">
                <img src="{{ Vite::asset('resources/img/contacto/icon1.webp') }}" alt="icono1">
                <div>
                    <p>CELULAR</p>
                    <p>+51 993 647 178</p>
                </div>
            </div>

            <div class="block-2">
                <img src="{{ Vite::asset('resources/img/contacto/icon2.webp') }}" alt="icono2">
                <div>
                    <p>EMAIL</p>
                    <p>Robles@gmail.com</p>
                </div>
            </div>

            <div class="block-2">
                <img src="{{ Vite::asset('resources/img/contacto/icon3.webp') }}" alt="icono3">
                <div>
                    <p>TELEGRAM</p>
                    <p>loremipsu2025</p>
                </div>
            </div>
        </section>

        <!-- Columna derecha -->
        <section class="block-right">
            <header>
                <p>Hablemos Ahora</p>
                <p>Estoy listo para escucharte</p>
            </header>

            <form action="">
                <input type="text" placeholder="Ingrese Nombre" required><br><br>
                <input type="text" placeholder="Ingrese Apellido" required><br><br>
                <input type="email" placeholder="Ingrese Email" required><br><br>
                <input type="tel" placeholder="Ingrese Celular" required><br><br>
                <input type="text" placeholder="Escribir Mensaje" required><br><br>

                <input class="submit" type="button" value="Enviar">
            </form>
        </section>
    </main>

    <section>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1952.5604060130784!2d-77.11272579871093!3d-11.826811550397876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1ses-419!2spe!4v1756860632926!5m2!1ses-419!2spe"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    @include('footer')
</body>

</html>
