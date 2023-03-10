<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar mensaje</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">
</head>
<body>
    <div id="container2">
        <img id="logo" style="width: 250px" src="{{ asset('img/editar_mensaje.png')}}" alt="nuevo_mensaje"><br>
        <div id="form">
            <form action="{{route('mensajes.update',$mensaje)}}" method="post">
                @csrf
                @method('put')
                <label>
                    Título:
                    <br>
                    <input type="text" name='titulo' value="{{old('titulo',$mensaje->titulo)}}">
                </label>
                @error('titulo')
                <br>
                <small>*{{$message}}</small>
                <br>
                @enderror
                <br>
                <label>
                    Descripción:
                    <br>
                    <textarea  name='descripcion' row="5">{{old('descripcion',$mensaje->descripcion)}}</textarea>
                </label>
                @error('descripcion')
                <br>
                <small>*{{$message}}</small>
                <br>
                @enderror
                <br>
                <button id="botonesForm" type="submit">Editar</button><br>
                <a id="botonesForm" href="{{ route('welcome') }}">Cancelar</a>
                <input type="hidden" value="{{ auth()->id(); }}" name="user_id">
                <input type="hidden" value="{{ $mensaje->categoria_id }}" name="categoria_id">
            </form>
        </div>
    </div>
</body>
</html>