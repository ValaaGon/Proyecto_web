@if (auth()->check() && auth()->user()->perfil_id == 2)

@extends('loyouts.app-master')

@section('contenido-principal')

<div class="container">
    <h1>Mis Imágenes</h1>

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
                <div class="card-footer">
                    <button class="btn btn-danger">Borrar</button>
                    <button class="btn btn-primary">Editar</button>
                </div>
            </div>
        </div>
        @endif
    @endforeach
    
    
    </div>
</div>

@endsection


@endif

@guest

No tienes permisos para ingresar aquí >:( <a href="/login">Registrarse</a>

@endguest

