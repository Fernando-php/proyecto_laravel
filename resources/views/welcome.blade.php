
@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <div id="content">
        <div id="mensajes">
            @foreach ($mensajes as $mensaje)
            <div id="tituloCategoria">
                {{-- Botones de editar y borrar mensajes --}}
                <h3><strong>{{$mensaje->titulo}}</strong></h3>
                @foreach ($categorias as $categoria)
                    @if ($categoria->id == $mensaje->categoria_id)
                    <h4>{{$categoria->nombre}}</h4>
                    @endif
                @endforeach
            </div>
            <div id="contenidoMensajeYUser">
                <p>{{$mensaje->descripcion}}</p>
                @foreach ($usuarios as $usuario)
                    @if ($usuario->id == $mensaje->user_id)
                    <h4>Usuario: <strong>{{$usuario->name}}</strong></h4>
                    @endif
                @endforeach
            </div>
            @endforeach
            <div id="paginacion">
                {{-- Paginación --}}
                {{$mensajes->links()}}
            </div>
        </div>
        <div id="botones">
            <form action="" method="post">
                <input class="box" type="search" name="busquedamensajes" placeholder="   Buscar mensajes...">
                <span class="icon"><button id="boton2"><i class="fa fa-search"></i></button></span>  
            </form><br><br>
            <form action="{{ route('mensajes.create') }}" method="post">
                <input id="boton" type="submit" value="Nuevo mensaje">
            </form>
        </div>
    </div>
@endsection
