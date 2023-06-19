<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app-aff89d3f.css') }}">
</head>
<body style="background: linear-gradient(156deg, rgba(116,178,192,1) 30%, rgba(159,123,209,1) 85%);">
    <div class="container bg-white rounded shadow my-5">
        <div class="row align-items-active">
            <div class="col-md-6">
                <div class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="imagenes/img1.png" alt="" width="800rem" height="600rem">
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/img2.png" alt="" width="800rem" height="600rem">
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/img4.png" alt="" width="800rem" height="600rem">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target=".carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target=".carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-5">
                    <h1 class="fw-bold text-center py-2">Bienvenido</h1>
                    <form action="/login" method="POST">
                        @csrf
                        @include('loyouts.messages')
                        <div class="mb-4 mt-5">
                            <label for="user" class="form-label">Nombre de usuario</label>
                            <input type="text" class="form-control" id="user" name="user">
                        </div>
                        <div class="mb-4 mt-5">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" 
                        </div>
                        <div class="d-grid my-4">
                            <button type="submit" class="btn btn-primary"href="/home">Iniciar Sesión</button>
                        </div>
                        <div class="my-3">
                            <span>No tienes cuenta? <a href="/register">Regístrate</a></span>
                        </div>
                        
                        <div class="my-3">
                            <a href="/home" class="btn btn-info">Ingresar como invitado</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('build/assets/app-0d91dc04.js') }}"></script>
</body>
</html>
