<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('build/assets/app-aff89d3f.css') }}">
    <title>Editar usuarios</title>
</head>
<body style="background: linear-gradient(156deg, rgba(116,178,192,1) 30%, rgba(159,123,209,1) 85%);">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card w-75">
            <div class="card-header bg-info">
                <h1 class="fw-bold text-center py-4">Editar Usuario</h1>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('usuario.actualizar', $usuario->user) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('loyouts.messages')
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $usuario->nombre }}">
                        @error('nombre')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $usuario->apellido }}">
                        @error('apellido')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('build/assets/app-0d91dc04.js') }}"></script>
</body>
</html>

