<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$mensaje->$titulo}}</h1>
    <a href="{{route('mensajes.index')}}">volver a mensajes</a>
    <a href="{{route('mensajes.edit')}}">Editar mensaje</a>
    <p><strong>Descripcion:</strong>{{$mensaje->descripcion}}</p>
    <p>{{$mensaje->categoria_id}}</p>
</body>
</html>
