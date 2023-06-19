<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('build/assets/app-aff89d3f.css') }}">
    <title></title>
</head>
<body style="background: linear-gradient(156deg, rgba(116,178,192,1) 30%, rgba(159,123,209,1) 85%);">
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary text-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">EIN133</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gestion de perfiles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tipos de perfiles</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Galeria de fotos</a>
                    </li>
                </ul>
                @auth
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    
                                        {{ auth()->user()->user }}
                                    
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/logout">Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
                @endauth
            </div>
        </div>
    </nav>

    <div class="container-fluid min-vh-100">
        @yield('contenido-principal')
    </div>

    <script src="{{ asset('build/assets/app-0d91dc04.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>