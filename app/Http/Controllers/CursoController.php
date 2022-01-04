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
        $request->validate([
            'name' => 'required|max:10',
            'description' => 'required|min:10',
            'categoria' => 'required'
        ]);

        $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;
        $curso->save();
        return redirect()->route('curso.show', $curso);
        // return redirect()->route('curso.show',$curso->id);
    }
    public function show(Curso $curso) {
        //$curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
        // return view('cursos.show',compact('curso'));
    }
    public function edit(Curso $curso) {   //$id Curso devuelve el valor del id
       //$curso = Curso::find($id);
        
        return view('cursos.edit',compact('curso'));
    }
    public function update(Curso $curso, Request $request){
        
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'categoria' => 'required'
        ]);

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;
        $curso->save();
        return redirect()->route('curso.show', $curso);
    }
}

