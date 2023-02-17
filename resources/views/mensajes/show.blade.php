

@extends('layouts.plantilla')
@section('title','mensaje '. $mensaje->titulo)
@section('content')
<h1>{{$mensaje->$titulo}}</h1>
<a href="{{route('mensajes.index')}}">volver a mensajes</a>
<a href="{{route('mensajes.edit')}}">Editar mensaje</a>
<p><strong>Descripcion:</strong>{{$mensaje->descripcion}}</p>
<p>{{$mensaje->categoria_id}}</p>
@endsection