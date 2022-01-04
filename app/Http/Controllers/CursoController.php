<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CursoController extends Controller
{
    public function index() {
        $curso = Curso::all();
        $curso = Curso::orderBy('id', 'desc')->paginate();
        //return $curso;
        return view('cursos.index', compact('curso'));
    }
    public function create() {
        return view('cursos.create');
    }
    public function store (Request $request){
        $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();
        return redirect()->route('curso.show', $curso);
        // return redirect()->route('curso.show',$curso->id);
    }
    public function show($id) {
        $curso = Curso::find($id);
        return view('cursos.show', ['curso' => $curso]);
        // return view('cursos.show',compact('curso'));
    }
    public function edit(Curso $id) {   //$id Curso devuelve el valor del id
       //$curso = Curso::find($id);
        
        return view('cursos/edit',compact('id'));
    }
    public function update(Curso $id, Request $request){
        $id->name = $request->name;
        $id->description = $request->descripcion;
        $id->categoria = $request->categoria;
        $id->save();
        return redirect()->route('curso.show', $id);
    }
}

