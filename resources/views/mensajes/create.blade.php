@extends('layouts.plantilla');
@section('title','mensajes create');
@section('content');
<form action="{{route('mensajes.store')}}" method="POST">
    @csrf

    <label>
        titulo:
        <br>
        <input type="text" name='titulo' value="{{old('titulo')}}">
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
        <textarea  name='descripcion' row="5">{{old('descripcion')}}</textarea>
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
        <input type="text" name='categoria' value="{{old('categoria')}}">
    </label>
    @error('categoria')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    <br>
     <button type="submit">Enviar</button>
</form>
@endsection
