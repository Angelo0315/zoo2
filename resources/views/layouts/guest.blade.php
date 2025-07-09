<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Hospital</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body><br>
    <div class="container-sm text-center" style="box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.3);border-radius: 25px;"> <br>
        <div class="row align-items-center justify-content-center">
            <div class="col-sm-5"><br>
                <a href="/"><img src="/img/caduceo.jpg" alt="" style="width: 100px; height:100px;"> </a>
                {{ $slot }}
                <br><br>
            </div>
        </div>
    </div>

  
</body>

</html>