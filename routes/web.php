<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class);
// Route::resource('cursos', CursoController::class);
Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas'=>'curso'])->names('curso');
// Route::get('cursos', [CursoController::class, 'index'])->name('curso.index');

// Route::get('cursos/create',[CursoController::class, 'create'])->name('curso.crear');

// Route::post('cursos',[CursoController::class,'store'])->name('curso.store');

// Route::get('cursos/{curso}',[CursoController::class, 'show'])->name('curso.show');

// Route::get('cursos/{curso}/edit',[CursoController::class, 'edit'])->name('curso.edit');

// Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('curso.update');

// Route::delete('cursos/{curso}',[CursoController::class, 'destroy'])->name('curso.destroy');
// Route::get('/cursos/{curso}/{categoria?}', function ($curso,$categoria=null) {
//     if($categoria){
//         return "Curso:$curso Categoria: $categoria";
//     }else{
//         return "Bienvenido al Curso :$curso";
//     }
// });