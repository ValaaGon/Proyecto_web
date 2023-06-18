<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    @auth
    <p>Bienvenido {{ auth()->user()->user }}, estás autenticado</p>
    <p>
        <a href="/logout">Cerrar sesion</a>
    </p>
    @endauth

    @guest
        para subir fotos inicia sesion <a href="/login">Registrarse</a>
    @endguest

    
</body>
</html>