@extends('layouts.plantilla')
@section('title','Crear curso')
@section('content')
<h1>Crear CUrso</h1>
    <form action=" {{route('curso.store')}} " method="post">
        @csrf
        <label for="name">Nombre: <br>
            <input type="text" name="name" id="name"> <br>
        </label>
        <label for="name">Descripcion: <br>
            
           <textarea name="descripcion" id="desctipcion" cols="30" rows="10"></textarea> <br>
        </label>
        <label for="categoria">
            Categoria: <br>
            <input type="text" name="categoria" id="categoria"> <br>
        </label>
        <br>
        <input type="submit" value="Subir">
        
    </form>
@endsection