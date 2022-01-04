@extends('layouts.plantilla')
@section('title','Crear curso')
@section('content')
<h1>Editar Curso</h1>
    {{$curso}}
    <form action=" {{route('curso.update',$curso)}} " method="post">
        @csrf
        @method('put')
        <label for="name">Nombre: <br>
            <input type="text" name="name" id="name" value="{{$curso->name}}"> <br>
        </label>
        <label for="name">Descripcion: <br>
            
           <textarea name="descripcion" id="desctipcion" cols="30" rows="10" >{{$curso->description}}</textarea> <br>
        </label>
        <label for="categoria">
            Categoria: <br>
            <input type="text" name="categoria" id="categoria" value="{{$curso->categoria}}""> <br>
        </label>
        <br>
        <input type="submit" value="Actualizar formulario">
        
    </form>
@endsection