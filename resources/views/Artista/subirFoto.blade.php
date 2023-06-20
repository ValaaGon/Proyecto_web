@if (auth()->check() && auth()->user()->perfil_id == 2)

@section('contenido-principal')

    @extends('loyouts.app-master')
    @auth
    <div class="container p-5">
        <p>Bienvenid@ {{ auth()->user()->nombre }} {{ auth()->user()->apellido }}</p>

        
        <h1 class="fw-bold">Subir fotos</h1>

        <div class="card">
            <form action="{{ route('subir-imagen') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="row p-4 ml-auto mr-4">
                    @include('loyouts.messages')
                    <div class="form-group">
                        <label for="file">Seleccionar imagen:</label>
                        <input type="file" name="file" accept="image/*" class="form-control-file">
                    </div>
                </div>
                <div class="row p-4">
                    <div class="form-group">
                        <label for="titulo">Título de la imagen:</label>
                        <input type="text" name="titulo" class="form-control" placeholder="Ingrese el título">
                    </div>
                </div>
                <div class="row p-5">
                    <div class="ml-auto">
                        <button class="btn btn-primary" type="submit">Subir imagen</button>
                    </div>
                </div>
            </form>
        </div>
        @endauth
    
       
    </div>

@endsection
@endif
@guest
No tienes permisos para ingresar aqui >:( <a href="/login">Registrarse</a>
@endguest