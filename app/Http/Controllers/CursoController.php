<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() {
        $curso = Curso::all();
        $curso = Curso::paginate();
        //return $curso;
        return view('cursos.index', compact('curso'));
    }
    public function create() {
        return view('cursos.create');
    }
    public function show($id) {
        $curso = Curso::find($id);
        return view('cursos.show', ['curso' => $curso]);
        // return view('cursos.show',compact('curso'));
    }
}

