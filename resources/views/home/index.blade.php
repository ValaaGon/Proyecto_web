@section('contenido-principal')
<body>
    @extends('loyouts.app-master')
    @auth
    <div class="container p-5">
        <p>Bienvenid@ {{ auth()->user()->nombre }}, estás autenticado</p>
        @endauth
    
        @guest
            para subir fotos inicia sesion <a href="/login">Registrarse</a>
        @endguest
    </div>
</body>
@endsection