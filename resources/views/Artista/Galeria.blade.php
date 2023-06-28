@section('contenido-principal')

    @extends('loyouts.app-master')
    @auth
    <div class="container p-5">
        <p>Bienvenid@ {{ auth()->user()->nombre }} {{ auth()->user()->apellido }}</p>
        @endauth
        <h1 class="fw-bold">Galeria de fotos</h1>
        <div class="row">
            @foreach ($imagenes as $imagen)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $imagen->titulo }}</h4>
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('storage/ImagSubida/' . $imagen->archivo) }}" alt="img" class="card-img-top">
                        
                       <label for="">Subida por : {{ $imagen->cuenta_user }}</label>

                    </div>
                </div>
            </div>
        @endforeach
    
       
    </div>

@endsection