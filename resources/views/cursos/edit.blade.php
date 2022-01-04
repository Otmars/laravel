@extends('layouts.plantilla')
@section('title','Crear curso')
@section('content')
<h1>Editar Curso</h1>
    {{$id}}
    <form action=" {{route('curso.update',$id)}} " method="post">
        @csrf
        @method('put')
        <label for="name">Nombre: <br>
            <input type="text" name="name" id="name" value="{{$id->name}}"> <br>
        </label>
        <label for="name">Descripcion: <br>
            
           <textarea name="descripcion" id="desctipcion" cols="30" rows="10" >{{$id->description}}</textarea> <br>
        </label>
        <label for="categoria">
            Categoria: <br>
            <input type="text" name="categoria" id="categoria" value="{{$id->categoria}}""> <br>
        </label>
        <br>
        <input type="submit" value="Actualizar formulario">
        
    </form>
@endsection