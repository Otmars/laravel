@extends('layouts.plantilla')
@section('title','Crear curso')
@section('content')
<h1>Crear Curso</h1>
    <form action=" {{route('curso.store')}} " method="post">
        @csrf
        <label for="name">Nombre: <br>
            <input type="text" name="name" id="name" value="{{old('name')}}"> <br>
        </label>
        @error('name')
            <br><small> {{$message}} </small><br>
        @enderror
        
        <label for="name">Descripcion: <br>
            
           <textarea name="description" id="description" cols="30" rows="10">{{old('description')}}</textarea> <br>
        </label>
          @error('description')
            <br><small> {{$message}} </small><br>
        @enderror
        <label for="categoria">
            Categoria: <br>
            <input type="text" name="categoria" id="categoria" value="{{old('categoria')}}"> <br>
        </label>
          @error('categoria')
            <br><small> {{$message}} </small><br>
        @enderror
        <br>
        <input type="submit" value="Subir">
        
    </form>
@endsection