@section('contenido-principal')

    @extends('loyouts.app-master')
    @auth
    <div class="container p-5">
        <p>Bienvenid@ {{ auth()->user()->nombre }} {{ auth()->user()->apellido }}</p>
        @endauth
        <h1 class="fw-bold">Galeria de fotos</h1>
    
       
    </div>

@endsection