@if (auth()->check() && auth()->user()->perfil_id == 2)

@extends('loyouts.app-master')

@section('contenido-principal')

<div class="container">
    <h1>Mis Imágenes</h1>

    <div class="row">
        @foreach ($imagenes as $imagen)
        <div class="col-md-4">
            <img src="{{ asset('../storage/..' .'/'. $imagen->archivo) }}" alt="img">
            <h4>{{ $imagen->titulo }}</h4>
            <h4>{{ $imagen->archivo }}</h4>

        </div>
        @endforeach
    </div>
</div>

@endsection


@endif

@guest

No tienes permisos para ingresar aquí >:( <a href="/login">Registrarse</a>

@endguest

