<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar mensaje</title>
</head>
<body>
    <div id="container2">
        <img id="logo" style="width: 250px" src="{{ asset('img/editar_mensaje.png')}}" alt="nuevo_mensaje"><br>
        <div id="form">
            <form action="{{route('mensajes.update',$mensaje)}}" method="post">
                @csrf
                @method('put')
                <label>
                    titulo:
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
                    Descripcion:
                    <br>
                    <textarea  name='descripcion' row="5">{{old('descripcion',$mensaje->descripcion)}}</textarea>
                </label>
                @error('descripcion')
                <br>
                <small>*{{$message}}</small>
                <br>
                @enderror
                <br>
                <label>
                    categoria:
                    <br>
                    <input type="text" name='categoria' value="{{old('categoria',$mensaje->categoria_id)}}">
                </label>
                @error('categoria')
                <br>
                <small>*{{$message}}</small>
                <br>
                @enderror
                <br>
                <button type="submit">Editar</button>
                <a id="botonesForm" href="{{ route('welcome') }}">Cancelar</a>
            </form>
        </div>
    </div>
</body>
</html>