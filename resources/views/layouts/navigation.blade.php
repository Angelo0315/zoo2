<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Iconos Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<style>
    body {
      background-color: #e8d8c3;
      margin: 0;
    }
  @media (max-width: 576px) {
    .dropdown-menu {
      right: 0;
      left: auto;
    }
    .dropdown {
      position: static;
    }
  }
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
        .color1 { background-color: #49ae27; }
    .color2 { background-color: #d4a017; }
</style>

</head>
<body>
     <nav class="navbar navbar-expand-lg  bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('dashboard') }}">
      <img src="logo.png" alt="Logo">
    </a>

    <div class="ms-auto d-flex align-items-center">
      <div class="dropdown">
        <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-list"></i> Menú
        </button>
        <ul class="dropdown-menu dropdown-menu-end bg-light">
          <li><a class="dropdown-item" href="{{ route('dashboard') }}">Inicio</a></li>
          <li><a class="dropdown-item" href="{{ route('empleados.index') }}">Empleados</a></li>
          <li><a class="dropdown-item" href="{{ route('especies.index') }}">Especies</a></li>
          <li><a class="dropdown-item" href="{{ route('habitats.index') }}">Hábitats</a></li>
          <li><a class="dropdown-item" href="{{ route('zonas.index') }}">Zonas</a></li>
          <li><a class="dropdown-item" href="{{ route('recorridos.index') }}">Recorridos</a></li>
          <li><a class="dropdown-item" href="{{ route('itinerarios.index') }}">Itinerarios</a></li>
          <li><a class="dropdown-item" href="{{ route('guias.index') }}">Guías</a></li>
          <li><a class="dropdown-item" href="{{ route('horario_guias.index') }}">Horario de Guías</a></li>
          <li><a class="dropdown-item" href="{{ route('cuidadors.index') }}">Cuidadores</a></li>
          <li><a class="dropdown-item" href="{{ route('horario_cuidadors.index') }}">Horario de Cuidadores</a></li>
          <li class="dropdown-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button class="btn nav-link border-0 bg-transparent text-danger fw-bold">Salir</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

</nav>
</body>
</html>