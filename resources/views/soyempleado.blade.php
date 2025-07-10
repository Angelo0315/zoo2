<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soy Empleado</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('/fondo.png') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            position: relative;
        }

        /* Capa negra al 21% */
        .overlay {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background-color: rgba(0, 0, 0, 0.21);
            z-index: 1;
        }

        .content {
            position: relative;
            z-index: 2;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .btn-custom {
            background-color: #3b2f2f;
            color: #ffffff;
            border: none;
            padding: 15px 30px;
            font-size: 1.2rem;
            border-radius: 8px;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background-color: #5c4646;
            color: #ffffff;
        }

        .btn-bienvenido {
            background-color: #3b2f2f;
            color: #ffffff;
            border: none;
            padding: 20px 50px;
            font-size: 2rem;
            border-radius: 12px;
            margin-top: 20px;
            margin-bottom: 50px;
        }

        .btn-bienvenido:hover {
            background-color: #5c4646;
            color: #ffffff;
        }

        .logo {
            max-width: 150px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- Capa negra -->
    <div class="overlay"></div>

    <div class="container content">
        <!-- Logo del zoológico -->
        <img src="/images/logo-zoologico.png" alt="Logo Zoológico" class="logo">

        <!-- Botón Bienvenido -->
        <button class="btn btn-bienvenido">Bienvenido</button>

        <!-- Botones laterales -->
        <div class="d-flex justify-content-between w-100 px-5">
            <!-- Botón Izquierdo -->
            <a class="btn btn-custom" href="{{ route('register') }}">Crear cuenta</a>

            <!-- Botón Derecho -->
            <a class="btn btn-custom" href="{{ route('login') }}">Iniciar sesión</a>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
