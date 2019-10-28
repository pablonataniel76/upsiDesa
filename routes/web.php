<?php

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
Route::get('/bd', function () {
    return view('welcome');
});

Route::view('permiso', 'layouts/permisos');


Route::view('empresa/registrarse', 'empresa/registrarse');

Route::view('empresa/buscar', 'empresa/buscarCurriculum');
Route::resource('empresa/micuenta', 'EmpresaController');
Route::resource('empresa/anuncios', 'Empresa\AnunciosController');
Route::resource('empresa/postulante', 'Empresa\postulanteController');

Route::get('/empresa', function () {
    return view('empresa/index');
});

//Route::get('empresa');

//Route::resource('permisos', 'Empresa\InicioController');

Route::view('pruebabd/based', 'pruebabd/based');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/postulante', function () {
    return view('postulante/micuenta');
});

// Route::get('/empresa', function () {
//     return view('empresa/micuenta');
// });

Route::get('/administrador', function () {
    return view('administrador/micuenta');
});


Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/postulante/registro', function () {
    return view('postulante/registro');
});

Route::get('/postulante/buscar', function () {
    return view('postulante/buscarempleo');
});

Route::get('/postulante/datos', function () {
    return view('postulante/datos');
});


Route::resource('candidato/curriculo', 'Postulante\CurriculoController');
//Route::get('candidato/curriculo','Postulante\CurriculoController@index');
Route::resource('candidato', 'CandidatoController');
