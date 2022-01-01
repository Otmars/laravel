<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cursos', function () {
    return "Bienvenido a curso";
});
Route::get('/cursos/create', function () {
    return "en esta pagina se crea el curso";
});

// Route::get('/cursos/{curso}', function ($curso) {
//     return "Bienvenido al Curso :$curso"; 
// });

Route::get('/cursos/{curso}/{categoria?}', function ($curso,$categoria=null) {
    if($categoria){
        return "Curso:$curso Categoria: $categoria";
    }else{
        return "Bienvenido al Curso :$curso";
    }
});