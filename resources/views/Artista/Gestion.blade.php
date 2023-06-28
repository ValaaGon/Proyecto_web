@if (auth()->check() && auth()->user()->perfil_id == 2)

@extends('loyouts.app-master')

@section('contenido-principal')

<div class="container">
    <h1 class="fw-bold">Mis Imágenes</h1>

    <div class="row">
        @foreach ($imagenes as $imagen)
        @if ($imagen->cuenta_user == Auth::user()->user)
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>{{ $imagen->titulo }}</h4>
                </div>
                <div class="card-body">
                    <img src="{{ asset('storage/ImagSubida/' . $imagen->archivo) }}" alt="img" class="card-img-top">
                </div>


                <div class="modal fade" id="borrarModal{{$imagen->id}}" tabindex="-1" aria-labelledby="borrarModalLabel{{$imagen->id}}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="borrarModalLabel{{$imagen->id}}">Confirmación de Borrado</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="{{ route('fotos.destroy', $imagen->id) }}">
                                @method('delete')
                                @csrf
                                <div class="modal-body">
                                    <span class="text-dark">¿Estás seguro que quieres borrar la imagen?</span>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="card-footer d-flex justify-content-center">
                    <div class="btn-group w-100">
                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#borrarModal{{$imagen->id}}">
                            <span class="material-symbols-outlined material-icons">Eliminar</span>
                        </button>
                        <button class="btn btn-primary">Editar</button>
                    </div>
                </div>
                
            </div>
        </div>
        @endif
    @endforeach
    
    
    </div>
</div>

@endsection


@endif


