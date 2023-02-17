<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(session('status'))
    <div class="status">
    {{session('status')}}
    <div>
    @endif
    <h1>{{$mensaje->titulo}}</h1>
    <a href="{{route('welcome')}}">volver a mensajes</a>
    <a href="{{route('mensajes.edit',$mensaje)}}">Editar mensaje</a>
    <p><strong>Descripcion:</strong>{{$mensaje->descripcion}}</p>
    <p>{{$mensaje->categoria_id}}</p>
</body>
</html>
