@extends('layouts.plantilla')
@section('title','Cursos')
@section('content')
<h1>index Cursos</h1>
<a href="{{route('curso.create')}}">Crear curso</a>
<ul>
    @foreach($curso as $datos)
        <li>
            {{-- {{$curso['name']}} --}}
           <a href="{{route('curso.show',$datos->id)}}">{{$datos->name}}</a> 
        </li>
    @endforeach
</ul>
    {{$curso->links()}}
@endsection