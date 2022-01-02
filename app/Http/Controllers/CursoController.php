<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() {
        return "Hola Cursos";
    }
    public function create() {
        return "Crea curso";
    }
    public function show($curso) {
        return "Bienvenido al curso $curso";
    }
}

