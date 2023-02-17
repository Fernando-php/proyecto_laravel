
@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <div id="content">
        <div id="mensajes">
            @foreach ($mensajes as $mensaje)
            <div id="tituloCategoria">
                {{-- Botones de editar y borrar mensajes --}}
                <h3><strong>{{$mensaje->titulo}}</strong></h3>
                <div id="botonesEditarYBorrar">
                    <form action="{{ route('mensajes.edit', $mensaje->descripcion) }}" method="get">
                        @csrf
                        <input id="botonEditar" type="submit" value="Editar">
                    </form>
                    <form action="{{ route('mensajes.destroy', $mensaje->titulo) }}" method="delete">
                        @csrf
                        <input id="botonBorrar" type="submit" value="Borrar">
                    </form>
                </div>
            </div>
            <div id="contenidoMensajeYUser">
                <p>{{$mensaje->descripcion}}</p>
                @foreach ($categorias as $categoria)
                    @if ($categoria->id == $mensaje->categoria_id)
                    <h4>Categoría: <strong>{{$categoria->nombre}}</strong></h4>
                    @endif
                @endforeach
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
                @csrf
                <input id="boton" type="submit" value="Nuevo mensaje">
            </form>
        </div>
    </div>
@endsection
