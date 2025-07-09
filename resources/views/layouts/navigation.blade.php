<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">

        <a class="navbar-brand fw-bold text-success" href="{{ route('dashboard') }}">
            🐾 Zoológico
        </a>

        <div class="container text-center my-4">
        <h2 class="text-success fw-bold mb-2">Sistema de Gestión del Zoológico</h2>
        <h5 class="mb-4">Bienvenido al panel administrativo</h5>
    </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#zooNavbar"
            aria-controls="zooNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="zooNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active fw-bold text-dark' : '' }}"
                        href="{{ route('dashboard') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn nav-link border-0 bg-transparent text-danger fw-bold">Salir</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>