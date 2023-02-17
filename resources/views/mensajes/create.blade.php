<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Mensaje</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">
</head>
<body>
    <div id="container2">
        <img id="logo" style="width: 250px" src="{{ asset('img/nuevo_mensaje.png')}}" alt="nuevo_mensaje"><br>
        <div id="form">
            <form action="{{route('mensajes.store')}}" method="POST">
                @csrf

                <label>
                    Título:
                    <br>
                    <input style="width: 175px" type="text" name='titulo' value="{{old('titulo')}}">
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
                    <textarea style="width: 175px" name='descripcion' row="5">{{old('descripcion')}}</textarea>
                </label>
                @error('descripcion')
                <br>
                <small>*{{$message}}</small>
                <br>
                @enderror
                <br>
                <label>
                    Categoría:
                    <br>
                    <!--<input type="text" name='categoria' value="{{old('categoria')}}">-->
                    <select style="width: 180px" name="categoria" value="{{old('categoria')}}">
                        @foreach ($categorias as $categoria)
                        <option>{{$categoria->nombre}}</option>
                        @endforeach
                    </select>
                </label>
                @error('categoria')
                <br>
                <small>*{{$message}}</small>
                <br>
                @enderror
                <br>
                <button id="botonesForm" type="submit" value="{{ route('mensajes.store') }}">Enviar</button><br>
                <a id="botonesForm" href="{{ route('welcome') }}">Cancelar</a>
            </form>
        </div>
    </div>
</body>
</html>