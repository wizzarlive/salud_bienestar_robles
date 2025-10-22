<!DOCTYPE html>
<html lang="es-PE">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./assets/css/nosotros.css" />
  <title>Nosotros</title>
  @vite('resources/css/nosotros.css')
  @vite('resources/css/header.css')
  @vite('resources/css/footer.css')
</head>

<body>

  @include('pages/Header')

      <header class="hero">
        <h1>NOSOTROS</h1>
        <p>Inicio / Nosotros</p>
    </header>


  <!-- Contenedor Generallll -->
  <section class="about-container">
    <!-- Sección Nosotross -->
    <div class="nosotros-section">
      <div class="nosotros-content">
        <h2>Nosotros</h2>
        <p>
          En Salud y Bien Estar Robles, somos una empresa dedicada a ofrecer
          productos de bazar y cuidado personal que mejoran la calidad de vida
          de nuestros clientes. Nuestra tienda, ubicada en Puente Piedra –
          Lima, brinda una amplia variedad que incluye regalos, prendas para
          niños, perfumería, cremas faciales, artículos de higiene personal y
          productos para el cuidado infantil.
        </p>
        <p>
          Desde nuestros inicios, nos hemos enfocado en atender a las familias
          con soluciones prácticas, accesibles y confiables, siempre con la
          calidez y compromiso que nos caracteriza.
        </p>
      </div>
      <div class="nosotros-img">
        <img src="{{ Vite::asset('resources/img/nosotros/chicachamba.png') }}" alt="chicachamaba">
      </div>
    </div>

    <!-- Sección Visión y Misiónnn -->
    <div class="vision-mision">
      <!-- Columna Izquierdaaa -->
      <div class="vision-mision-img">
        <img src="{{ Vite::asset('resources/img/nosotros/chicachamba.png') }}" alt="chicachamaba">
      </div>

      <!-- Columna Derechaaa -->
      <div class="vision-mision-textos">
        <div class="vision">
          <h3>Visión</h3>
          <p>
            Nuestra misión es brindar a cada familia productos de calidad en
            cuidado personal, higiene y artículos infantiles, contribuyendo al
            bienestar y comodidad de nuestros clientes. Nos comprometemos a
            ofrecer una experiencia cercana, con precios accesibles y atención
            personalizada, siendo un apoyo constante para el día a día de
            nuestra comunidad.
          </p>
        </div>

        <div class="mision">
          <h3>Misión</h3>
          <p>
            Aspiramos a ser la tienda de referencia en Puente Piedra y Lima
            Norte, reconocida por la variedad, confianza y calidad de nuestros
            productos. Queremos expandir nuestra presencia y consolidarnos
            como un lugar donde cada cliente encuentre soluciones prácticas
            que aporten bienestar y cuidado en su vida diaria.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de Valoressssssss -->
  <section class="valores">
    <div class="valor-item">
      <img src="{{ Vite::asset('resources/img/nosotros/1.png') }}" alt="1">
      <h4>Confianza</h4>
      <p>Protección de tus datos y seguridad en cada compra.</p>
    </div>
    <div class="valor-item">
      <img src="{{ Vite::asset('resources/img/nosotros/2.png') }}" alt="2">
      <h4>Pago en línea</h4>
      <p>Aceptamos variedad de métodos de pago.</p>
    </div>
    <div class="valor-item">
      <img src="{{ Vite::asset('resources/img/nosotros/3.png') }}" alt="3">
      <h4>Puntualidad</h4>
      <p>Tu pedido listo en el menor tiempo posible.</p>
    </div>
    <div class="valor-item">
      <img src="{{ Vite::asset('resources/img/nosotros/4.png') }}" alt="4">
      <h4>Recojo en tienda</h4>
      <p>Compra en la web y recoge en nuestro local.</p>
    </div>
  </section>

    @include('pages/Footer')

</body>

</html>