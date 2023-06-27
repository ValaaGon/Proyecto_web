@if (auth()->check() && auth()->user()->perfil_id == 1)

@section('contenido-principal')
<body>
    @extends('loyouts.app-master')
    @auth
    <div class="container p-5">
        <p>Bienvenid@ {{ auth()->user()->nombre }}</p>
        
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($perfiles as $perfil)
                    <div class="col-md-8">
                        <div class="card mb-4">
                            <div class="card-title bg-success">
                                <h5 class="card-title">Perfil {{ $perfil->id }}</h5>
                            </div>
                            <div class="card-body">
                                
                                <div class="d-flex justify-content-center mb-3">
                                    <img src="imagenes/imgP.png" alt="Imagen de perfil" class="rounded-circle" style="width: 150px; height: 150px;">
                                </div>
                                <p class="card-text">Nombre: {{ $perfil->nombre }}</p>
                                <p class="card-text">Descripción: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis dicta id ratione autem minima itaque? Reprehenderit provident in ea minus impedit est nesciunt voluptate beatae!</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
         
        </div>
        @endauth
    
       
    </div>
</body>
@endsection
@endif

