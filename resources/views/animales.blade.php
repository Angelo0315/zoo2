<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Zoológico Monteverde</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Iconos Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <style>
    @media (max-width: 768px) {
  .card img.rounded-circle {
    width: 40% !important;
    bottom: -40px !important;
  }
  .card .card-body {
    margin-top: 50px !important;
  }
}
    body {
      background-color: #e8d8c3;
      margin: 0;
    }
    /* HEADER */
    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 9999; /* MÁS ALTO para quedar sobre el banner */
    }
    .navbar {
      z-index: 9999; /* Refuerzo */
    }
    .navbar-brand img {
      height: 50px;
    }

    /* BANNER */
    .banner {
      position: relative;
      height: 400px;
      overflow: hidden;
    }
    .banner img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .banner::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.425); /* Negro con transparencia */
      z-index: 1; /* Capa sobre la imagen */
    }
    .menu-buttons {
      position: absolute;
      bottom: 0;
      width: 100%;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      padding: 10px 0;
      z-index: 2; /* Botones encima del overlay */
    }

    .menu-buttons a {
      color: #fff;
      font-weight: bold;
      text-decoration: none;
      padding: 10px 20px;
      margin: 5px;
      border-radius: 5px;
    }
    .color1 { background-color: #49ae27; }
    .color2 { background-color: #d4a017; }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <!-- Logo a la izquierda -->
        <a class="navbar-brand" href="./inicio.html">
          <img src="logo.png" alt="Logo">
        </a>
        
        <!-- Menú desplegable + botón a la derecha -->
        <div class="ms-auto d-flex align-items-center">
          <!-- Icono boleto -->
          <a href="#boletos" class="btn btn-warning">
            <i class="bi bi-ticket-perforated-fill"></i>
          </a>
          <!-- Botón menú desplegable -->
          <div class="dropdown me-2">
            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-list"></i> Menú
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route ('home')}}">Inicio</a></li>
              <li><a class="dropdown-item" href="./boletos.html">Boletos</a></li>
              <li><a class="dropdown-item" href="#mapa">Mapa</a></li>
              <li><a class="dropdown-item" href="#atracciones">Atracciones</a></li>
              <li><a class="dropdown-item" href="{{ route('animales') }}">Animales</a></li>
              <li><a class="dropdown-item" href="#nosotros">Nosotros</a></li>
              <li><a class="dropdown-item" href="#contacto">Contacto</a></li>
              <li><a class="dropdown-item" href="{{ route('soyempleado') }}">Soy empleado</a></li>
            </ul>
          </div>

          
        </div>
      </div>
    </nav>
  </header>

  <!-- Banner -->
  <section class="banner">
    <img src="./imagens/banner.png" alt="Banner Zoológico">
    <!-- Menú sobre el banner -->
    <div class="menu-buttons">
      <a href="./animales.html" class="color2 fs-1">ANIMALES</a>
    </div>
  </section>

<!-- Animales -->
 <div class="jumbotron text-center mt-5">
  <h4><strong>Aquí encontraras algunos animales que tenemos en nuestro zoológico</strong></h4>
</div>
<!-- ZONA AFRICANA -->
<div class="container my-4 mt-5">
  <h1 class="text-center"><strong>ZONA AFRICANA</strong></h1>
  <div class="row row-cols-1 row-cols-md-4 g-4">

    <!-- León -->
    <div class="col">
      <div class="card h-100">
        <!-- Contenedor de imágenes -->
        <div class="position-relative">
          <img src="./zona africana/africana.png" class="card-img-top" alt="León">
          <!-- Imagen circular -->
          <img src="./zona africana/leon.png" 
               class="rounded-circle position-absolute start-50 translate-middle"
               style="
                 bottom: -150px;
                 width: 50%;
                 max-width: 180px;
                 border: 4px solid white;
               "
               alt="León Circular">
        </div>
        <!-- Cuerpo del card -->
        <div class="card-body text-center" style="margin-top: 60px;">
          <h5 class="card-title"><strong>León africano</strong></h5>
          <p class="card-text" style="text-align: justify;">
            Conocido como el "rey de la selva", el león es un felino social que vive en manadas.
            <br>Su melena es símbolo de fuerza y liderazgo en el reino animal.
          </p>
        </div>
      </div>
    </div>

    <!-- Elefante -->
    <div class="col">
      <div class="card h-100">
        <div class="position-relative">
          <img src="./zona africana/africana.png" class="card-img-top" alt="Elefante">

          <img src="./zona africana/elefante.png" 
               class="rounded-circle position-absolute start-50 translate-middle"
               style="
                 bottom: -150px;
                 width: 50%;
                 max-width: 180px;
                 border: 4px solid white;
               "
               alt="Elefante Circular">
        </div>

        <div class="card-body text-center" style="margin-top: 60px;">
          <h5 class="card-title"><strong>Elefante africano</strong></h5>
          <p class="card-text" style="text-align: justify;">
            El mamífero terrestre más grande del mundo. Destaca por su inteligencia, su memoria prodigiosa y su trompa versátil.
          </p>
        </div>
      </div>
    </div>

    <!-- Cebra -->
    <div class="col">
      <div class="card h-100">
        <div class="position-relative">
          <img src="./zona africana/africana.png" class="card-img-top" alt="Cebra">

          <img src="./zona africana/cebra.png" 
               class="rounded-circle position-absolute start-50 translate-middle"
               style="
                 bottom: -150px;
                 width: 50%;
                 max-width: 180px;
                 border: 4px solid white;
               "
               alt="Cebra Circular">
        </div>

        <div class="card-body text-center" style="margin-top: 60px;">
          <h5 class="card-title"><strong>Cebra de planicie</strong></h5>
          <p class="card-text" style="text-align: justify;">
            Conocido como el "rey de la selva", el león es un felino social que vive en manadas. Su melena es símbolo de fuerza y liderazgo en el reino animal.
          </p>
        </div>
      </div>
    </div>

    <!-- Jirafa -->
    <div class="col">
      <div class="card h-100">
        <div class="position-relative">
          <img src="./zona africana/africana.png" class="card-img-top" alt="Jirafa">

          <img src="./zona africana/Jirafa.jpg" 
               class="rounded-circle position-absolute start-50 translate-middle"
               style="
                 bottom: -150px;
                 width: 50%;
                 max-width: 180px;
                 border: 4px solid white;
               "
               alt="Jirafa Circular">
        </div>

        <div class="card-body text-center" style="margin-top: 60px;">
          <h5 class="card-title"><strong>Jirafa reticulada</strong></h5>
          <p class="card-text" style="text-align: justify;">
            El animal más alto del mundo. Su largo cuello le permite alcanzar hojas en árboles altos.
          </p>
        </div>
      </div>
    </div>

  </div>
</div>


<!-- ZONA ANTÁRTICA -->
<div class="container my-4 mt-5">
  <h1 class="text-center"><strong>ZONA ANTÁRTICA</strong></h1>
  <div class="row row-cols-1 row-cols-md-4 g-4">

    <!-- Pinguino -->
    <div class="col">
      <div class="card h-100">
        <!-- Contenedor de imágenes -->
        <div class="position-relative">
          <img src="./zona antartica/antartica.png" class="card-img-top" alt="antartica">
          <!-- Imagen circular -->
          <img src="./zona antartica/pinguino.png" 
               class="rounded-circle position-absolute start-50 translate-middle"
               style="
                 bottom: -150px;
                 width: 50%;
                 max-width: 180px;
                 border: 4px solid white;
               "
               alt="Pinguino Circular">
        </div>
        <!-- Cuerpo del card -->
        <div class="card-body text-center" style="margin-top: 60px;">
          <h5 class="card-title"><strong>Pingüino emperador</strong></h5>
          <p class="card-text" style="text-align: justify;">
            Es el más grande de los pingüinos. Cría a sus polluelos durante el duro invierno antártico.
          </p>
        </div>
      </div>
    </div>

    <!-- Foca leopardo -->
    <div class="col">
      <div class="card h-100">
        <!-- Contenedor de imágenes -->
        <div class="position-relative">
          <img src="./zona antartica/antartica.png" class="card-img-top" alt="antartica">
          <!-- Imagen circular -->
          <img src="./zona antartica/foca.png" 
               class="rounded-circle position-absolute start-50 translate-middle"
               style="
                 bottom: -150px;
                 width: 50%;
                 max-width: 180px;
                 border: 4px solid white;
               "
               alt="Foca Circular">
        </div>
        <!-- Cuerpo del card -->
        <div class="card-body text-center" style="margin-top: 60px;">
          <h5 class="card-title"><strong>Foca leopardo</strong></h5>
          <p class="card-text" style="text-align: justify;">
          Depredadora ágil del hielo. Se alimenta de pingüinos y otras focas pequeñas.
          </p>
        </div>
      </div>
    </div>

    <!-- Petrel gigante del sur -->
    <div class="col">
      <div class="card h-100">
        <!-- Contenedor de imágenes -->
        <div class="position-relative">
          <img src="./zona antartica/antartica.png" class="card-img-top" alt="antartica">
          <!-- Imagen circular -->
          <img src="./zona antartica/petrel.jpg" 
               class="rounded-circle position-absolute start-50 translate-middle"
               style="
                 bottom: -150px;
                 width: 50%;
                 max-width: 180px;
                 border: 4px solid white;
               "
               alt="Petrel Circular">
        </div>
        <!-- Cuerpo del card -->
        <div class="card-body text-center" style="margin-top: 60px;">
          <h5 class="card-title"><strong>Petrel gigante del sur</strong></h5>
          <p class="card-text" style="text-align: justify;">
          Ave carroñera del frío extremo, vuela grandes distancias sobre el océano austral.
          </p>
        </div>
      </div>
    </div>

    <!-- Krill antártico -->
    <div class="col">
      <div class="card h-100">
        <!-- Contenedor de imágenes -->
        <div class="position-relative">
          <img src="./zona antartica/antartica.png" class="card-img-top" alt="antartica">
          <!-- Imagen circular -->
          <img src="./zona antartica/krill.jpg" 
               class="rounded-circle position-absolute start-50 translate-middle"
               style="
                 bottom: -150px;
                 width: 50%;
                 max-width: 180px;
                 border: 4px solid white;
               "
               alt="Krill Circular">
        </div>
        <!-- Cuerpo del card -->
        <div class="card-body text-center" style="margin-top: 60px;">
          <h5 class="card-title"><strong>Krill antártico</strong></h5>
          <p class="card-text" style="text-align: justify;">
          Pequeño crustáceo que sostiene toda la cadena alimenticia del ecosistema antártico.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- Scripts Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
