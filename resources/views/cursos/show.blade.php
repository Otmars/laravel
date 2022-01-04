@extends('layouts.plantilla')
@section('title','Curso'.$curso->name)
@section('content')
{{-- <h1>Bienvenido al curso : <?php echo$curso ?></h1> --}}
<h1>Bienvenido al curso : {{$curso->name}}</h1>

<p><strong>Categoria: {{$curso->categoria}} </strong></p>
<p> {{$curso->description}} </p>

<a href="{{route('curso.index')}}">Volver a cursos</a>
@endsection
    
