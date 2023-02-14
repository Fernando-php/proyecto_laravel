{{-- con el extends hereda de la plantilla el contenido que no varía --}}
@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    
    <div id="content">
        <div id="mensajes">
            @foreach ($mensajes as $mensaje)
            <div id="tituloCategoria">
                <h3>{{$mensaje->titulo}}</h3>
                {{-- <h4>{{$mensaje->categoria_id}}</h4>  ¿Cómo poner el nombre de la categoría en vez del id??? --}}
            </div>
                <p>{{$mensaje->descripcion}}</p>
            @endforeach
            {{-- Habría que paginar los mensajes --}}
        </div>
        <div id="botones">
            <form action="../../form-result.php" method="post">
                <input class="box" type="search" name="busquedamensajes" placeholder="Buscar mensajes...">
                <span class="icon"><button id="boton2"><i class="fa fa-search"></i></button></span>  
            </form><br><br>
            <form action="" method="post">
                <input id="boton" type="submit" value="Nuevo mensaje">
            </form>
        </div>
    </div>
    
@endsection