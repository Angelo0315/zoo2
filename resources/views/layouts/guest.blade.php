<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Iconos Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Hospital</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
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
              <li><a class="dropdown-item" href="#">Atracciones</a></li>
              <li><a class="dropdown-item" href="{{ route('animales') }}">Animales</a></li>
              <li><a class="dropdown-item" href="#nosotros">Nosotros</a></li>
              <li><a class="dropdown-item" href="#contacto">Contacto</a></li>
              <li><a class="dropdown-item" href="{{ route('soyempleado') }}">Soy empleado</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
<body style="background-color:#e8d8c3;">
    <BR></BR>
                {{ $slot }}  
</body>

</html>