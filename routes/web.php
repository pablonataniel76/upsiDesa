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

//---Rutas Pablo no alterar orden
Route::get('empresa/postulante/myPDF', 'Empresa\PostulanteController@generatePDF');
Route::get('empresa/postulante/buscar', 'Empresa\PostulanteController@buscar')->name('buscar');
//Rutas Empresa
Route::resource('empresa/postulante', 'Empresa\PostulanteController');
Route::get('empresa/postulante/detalle/{idCurriculo}', 'Empresa\PostulanteController@detallePostulante');
Route::get('empresa/postulante/detalle/{idCurriculo}/myPDF', 'Empresa\PostulanteController@generatePDF');
//Rutas Anuncio
Route::resource('empresa/anuncios', 'Empresa\AnunciosController');
Route::get('empresa/anuncios/create', 'Empresa\AnunciosController@create');
Route::get('empresa/anuncios/edit/{idAnuncio}', 'Empresa\AnunciosController@edit');
Route::get('empresa/anuncios/{idAnuncio}/destroy', 'Empresa\AnunciosController@destroy');
//Ruta Origen
Route::resource('empresa', 'Empresa\EmpresaController');
Route::get('empresa/create', 'Empresa\EmpresaController@create');
Route::get('empresa/edit/{idEmpresa}', 'Empresa\EmpresaController@edit');
//---
Route::resource('permisos', 'Empresa\InicioController');

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

//rutas jess
Route::get('candidato/curriculo/pdf','Postulante\CurriculoController@pdf');
Route::get('candidato/curriculo/mipdf/{ruta}','Postulante\CurriculoController@descargarpdf');
Route::get('candidato/universidades/edit/{uni}/{carr}','Postulante\EducacionUniversitariaController@editar');
Route::get('candidato/tecnicas/edit/{inst}/{cur}','Postulante\EducacionTecnicaController@editar');
Route::get('candidato/experiencia/edit/{carg}/{emp}','Postulante\ExperienciaLaboralController@editar');
Route::get('candidato/peticionpremium','Postulante\CandidatoController@becomePremium');


Route::resource('candidato/curriculo', 'Postulante\CurriculoController');

Route::resource('candidato/postulaciones', 'Postulante\PostulacionController');
Route::resource('candidato/habilidades', 'Postulante\HabilidadController');
Route::get('candidato/habilidades/{hab}/destroy', 'Postulante\HabilidadController@destroy');
Route::resource('candidato/idiomas', 'Postulante\IdiomaController');
Route::get('candidato/idiomas/{idi}/destroy', 'Postulante\IdiomaController@destroy');
Route::resource('candidato/secundarias', 'Postulante\EducacionSecundariaController');
Route::get('candidato/secundarias/{sec}/destroy', 'Postulante\EducacionSecundariaController@destroy');
Route::resource('candidato/universidades', 'Postulante\EducacionUniversitariaController');
Route::get('candidato/universidades/{un}/{car}/destroy', 'Postulante\EducacionUniversitariaController@destroy');
Route::resource('candidato/tecnicas', 'Postulante\EducacionTecnicaController');
Route::get('candidato/tecnicas/{ins}/{curt}/destroy', 'Postulante\EducacionTecnicaController@destroy');
Route::resource('candidato/talleres', 'Postulante\CursoTallerSeminarioController');
Route::get('candidato/talleres/{tal}/destroy', 'Postulante\CursoTallerSeminarioController@destroy');
Route::resource('candidato/experiencia', 'Postulante\ExperienciaLaboralController');
Route::get('candidato/experiencia/{ca}/{em}/destroy', 'Postulante\ExperienciaLaboralController@destroy');

Route::get('candidato/anuncio/buscar', 'Postulante\AnuncioController@buscarA')->name('buscarA');
Route::resource('candidato/anuncio', 'Postulante\AnuncioController');

Route::resource('candidato/experiencia', 'Postulante\ExperienciaLaboralController');


//Route::get('candidato/anuncios/{id}/{id2}','Postulante\AnuncioController@mostrar');

//de esta ruta solo hay candidato/create

Route::resource('candidato', 'Postulante\CandidatoController');
Route::get('candidato/edit/{idCandidato}', 'Postulante\CandidatoController@edit');

//rutas administrador
Route::get('administrador/candidatos/peticionpremium','Administrador\PremiumCandidatoController@index');
Route::get('administrador/candidatos/peticionpremium/{id}','Administrador\PremiumCandidatoController@becomePremium');


Route::get('administrador/candidatos','Administrador\AdministradorController@listarCandidatos');
Route::get('administrador/candidatos/{id}/destroy', 'Administrador\AdministradorController@destroyC');


Route::get('administrador/empresas','Administrador\AdministradorController@listarEmpresas');
Route::get('administrador/empresas/{ide}/destroy', 'Administrador\AdministradorController@destroyE');

Route::get('administrador/candidatospremium','Administrador\AdministradorController@listarCandidatosP');
Route::get('administrador/candidatospremium/{id}/destroy', 'Administrador\AdministradorController@destroyCP');

Route::get('administrador/empresaspremium','Administrador\AdministradorController@listarEmpresasP');
Route::get('administrador/empresaspremium/{ide}/destroy', 'Administrador\AdministradorController@destroyEP');

