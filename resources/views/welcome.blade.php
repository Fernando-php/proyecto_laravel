
@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <div id="content">
        <div id="mensajes">
            @foreach ($mensajes as $mensaje)
            <div id="tituloCategoria">
                {{-- Botones de editar y borrar mensajes --}}
                <h3><strong>{{$mensaje->titulo}}</strong></h3>
                @auth
                @if ($id_user_sesion == $mensaje->user_id)
                    <div id="botonesEditarYBorrar">
                        {{-- ¡¡Estos botones deben aparecer solo en los mensajes que haya creado el usuario que ha iniciado sesión!! --}}
                        <form action="{{ route('mensajes.edit', $mensaje->id) }}" method="get">
                            <input id="botonEditar" type="submit" value="Editar">
                        </form>
                        <form action="{{ route('mensajes.destroy', $mensaje->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input id="botonBorrar" type="submit" value="Borrar">
                        </form>
                    </div>
                @endif
                @endauth 
            </div>
            <div id="contenidoMensajeYUser">
                <p>{{$mensaje->descripcion}}</p>
                @foreach ($categorias as $categoria)
                    @if ($categoria->id == $mensaje->categoria_id)
                    <h4><strong>Categoría: </strong>{{$categoria->nombre}}</h4>
                    @endif
                @endforeach
                @foreach ($usuarios as $usuario)
                    @if ($usuario->id == $mensaje->user_id)
                    <h4><strong>Usuario: </strong>{{$usuario->name}}</h4>
                    @endif
                @endforeach
            </div>
            @endforeach
            <div id="paginacion">
                {{-- Paginación --}}
                {{$mensajes->links()}}
            </div>
        </div>
        @auth
        <div id="botones">
            <form action="{{ route('mensajes.create') }}" method="post">
                @csrf
                <input id="boton" type="submit" value="Nuevo mensaje">
            </form>
        </div>
        @endauth
    </div>
@endsection
