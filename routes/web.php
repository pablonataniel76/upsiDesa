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
Route::resource('empresa/micuenta', 'EmpresaController');
Route::view('empresa/buscar', 'empresa/buscarCurriculum');

Route::resource('empresa/postulante', 'Empresa\PostulanteController');
Route::get('empresa/postulante/detalle/{idCurriculo}', 'Empresa\PostulanteController@detallePostulante');

Route::resource('empresa/anuncios', 'Empresa\AnunciosController');
Route::get('empresa/anuncios/create', 'Empresa\AnunciosController@create');
Route::get('empresa/anuncios/edit/{idAnuncio}', 'Empresa\AnunciosController@edit');
Route::get('empresa/anuncios/{idAnuncio}/destroy', 'Empresa\AnunciosController@destroy');

Route::resource('empresa', 'Empresa\EmpresaController');


Route::view('pruebabd/based', 'pruebabd/based');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/postulante', function () {
    return view('postulante/micuenta');
});

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

Route::resource('candidato/postulaciones', 'Postulante\PostulacionController');
Route::resource('candidato/habilidades', 'Postulante\HabilidadController');
Route::resource('candidato/idiomas', 'Postulante\IdiomaController');
Route::resource('candidato/secundarias', 'Postulante\EducacionSecundariaController');
Route::resource('candidato/universidades', 'Postulante\EducacionUniversitariaController');
Route::resource('candidato/tecnicas', 'Postulante\EducacionTecnicaController');
Route::resource('candidato/talleres', 'Postulante\CursoTallerSeminarioController');

Route::resource('candidato', 'Postulante\CandidatoController');

Route::get('administrador/candidatos','Administrador\AdministradorController@listarCandidatos');
Route::get('administrador/empresas','Administrador\AdministradorController@listarEmpresas');