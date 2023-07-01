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

                        <div class="modal fade" id="borrarModal{{$cuenta->user}}" tabindex="-1" aria-labelledby="borrarModalLabel{{$cuenta->user}}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="borrarModalLabel{{$cuenta->user}}">Confirmación de Borrado</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="{{ route('cuentas.destroy', $cuenta) }}">
                                        @method('delete')
                                        @csrf
                                        @if ($cuenta->perfil_id == 1)
                                        <div class="moda-body">
                                           <span class="text-danger">No se puede borrar una cuenta de administrador >:(</span> 
                                        </div>
                                        @endif
                                        @if($cuenta->perfil_id == 2)
                                        <div class="modal-body">
                                            <span class="text-dark">¿Estas seguro que quieres borrar al usuario</span> <span class="text-danger fw-bold">{{$cuenta->user}}</span> <span class="text-dark">?</span>
                                        </div>
                                        @endif
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-danger">Borrar Cuentar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                                <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#borrarModal{{$cuenta->user}}">
                                                <span class="material-symbols-outlined material-icons">delete</span>
                                            </button>
                                            <button class="btn btn-primary" onclick="window.location.href='{{ route('usuario.editar', $cuenta->user) }}'">
                                                <span class="material-symbols-outlined">
                                                    edit
                                                    </span>
                                            </button>
                                </div>
                               
                            </td>
                        </tr><script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
                        @endforeach
                    </tbody>
                </table>
                
                

            </div>
            
    
           
    
        </div>
    </body>
    @endsection
@endif
