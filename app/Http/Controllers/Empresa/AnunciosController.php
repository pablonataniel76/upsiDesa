<?php

namespace App\Http\Controllers\Empresa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\Anuncio;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\AnuncioFormRequest;
use DB;

class AnunciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $anuncios=DB::table('anuncio as an')
            ->where('an.id_empresa','=','101');
            $anuncios=$anuncios->get();
            return view('empresa/anuncios.index', ["anuncios"=>$anuncios]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa/anuncios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $anuncios=new Anuncio;
        $anuncios->id_empresa='101';
        $anuncios->cargo_anuncio = $request->get('CARGO');
        $anuncios->categoria_anuncio = $request->get('CATEGORIA');
        $anuncios->contrato_anuncio = $request->get('CONTRATO');
        $anuncios->descripcion_anuncio = $request->get('DESCRIPCION');
        $anuncios->sueldo = $request->get('SUELDO');
        $anuncios->tipo_sueldo = $request->get('TIPO_SUELDO');
        $anuncios->ciudad_anuncio = $request->get('CIUDAD');
        $anuncios->publicacion_anuncio = now();
        $anuncios->vencimiento_anuncio = now()->addMonth(3);

        $anuncios->save();
        return Redirect::to('empresa/anuncios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anuncios=DB::table('anuncio as an')
        ->where('an.id_anuncio','=', $id);
        $anuncios=$anuncios->get();
        return view('empresa/anuncios.edit', ["anuncios"=>$anuncios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnuncioFormRequest $request, $id)
    {
        $anuncios = Anuncio::findOrFail($id);
        $anuncios->cargo_anuncio        = $request->get('CARGO');
        $anuncios->categoria_anuncio    = $request->get('CATEGORIA');
        $anuncios->contrato_anuncio     = $request->get('CONTRATO');
        $anuncios->descripcion_anuncio  = $request->get('DESCRIPCION');
        $anuncios->sueldo               = $request->get('SUELDO');
        $anuncios->tipo_sueldo          = $request->get('TIPO_SUELDO');
        $anuncios->ciudad_anuncio       = $request->get('CIUDAD');

        $anuncios->update();
        return Redirect::to('empresa/anuncios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_anuncio)
    {
        $anuncio = Anuncio::findOrFail($id_anuncio);
        $anuncio->delete();
  
        return Redirect::to('empresa');
    }
}
