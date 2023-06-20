@if (auth()->check() && auth()->user()->perfil_id == 1)
    @extends('loyouts.app-master')
    @section('contenido-principal')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .material-icons {
            font-size: 24px; 
            margin-right: 5px; 
        }
    </style>
    <body>
        <div class="container p-5">
            <div class="row">
                <div class="col-4">
                    <h1 class="fw-bold">Gestión de cuentas</h1>
                </div>
                <div class="col-6">
                    <a href="/register" class="btn btn-info">Nueva cuenta</a>
                </div>
            </div>
            <div class="container p-4">
                <table class="table table-dark table-striped-columns p-5">
                    <thead>
                        <tr>
                            <th>Tipo perfil</th>
                            <th>User</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Gestión</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cuentas as $cuenta)
                        <tr>
                            <td>{{ $cuenta->perfil_id }}</td>
                            <td>{{ $cuenta->user }}</td>
                            <td>{{ $cuenta->nombre }}</td>
                            <td>{{ $cuenta->apellido }}</td>
                            <td>
                                <div class="button-group">
                                    <button class="btn btn-primary">
                                        <span class="material-symbols-outlined material-icons">
                                            account_circle
                                        </span>
                                    </button>
                                            <span class="material-symbols-outlined material-icons">
                                                delete
                                            </span>
                                        </button>
                                    <button class="btn btn-secondary">
                                        <span class="material-symbols-outlined">
                                            edit
                                        </span>
                                    </button>

                                </div>
                               
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            
    
            @guest
            No tienes los permisos necesarios <a href="/login">Registrarse</a>
            @endguest
    
        </div>
    </body>
    @endsection
@endif
