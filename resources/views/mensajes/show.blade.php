<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje creado</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">
</head>
<body>
    <div id="container3">
        <div id="content2">
            {{--@if(session('status'))
            <div class="status">
            {{session('status')}}
            <div>
            @endif--}}
            <h2>{{$mensaje->titulo}}</h2><br>
            <p>{{$mensaje->descripcion}}</p><br>
            <a id="botonesForm" href="{{route('mensajes.edit',$mensaje)}}">Editar mensaje</a><br>
            <a id="botonesForm" href="{{route('welcome')}}">volver a mensajes</a>
        </div>
    </div>
</body>
</html>
