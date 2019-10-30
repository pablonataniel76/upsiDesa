<?php

namespace App\Http\Controllers\Empresa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modelos\Postulante;
use App\Modelos\Curriculo;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PostulanteFormRequest;
use App\Http\Requests\CurriculoFormRequest;
use DB;

class PostulanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $postulacion=DB::table('postulacion as ps')
            ->join('anuncio as an', 'ps.id_anuncio', '=', 'an.id_anuncio')
            ->join('curriculo as cu', 'ps.id_curriculo', '=', 'cu.id_curriculo')
            ->where('an.id_empresa','=','101');
            $postulacion=$postulacion->get();
            return view('empresa/postulante.index', ["postulacion"=>$postulacion]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function detallePostulante($idCurriculo)
    {
        $candidato=DB::table('candidato as ca')
        ->join('curriculo as cu', 'ca.id_candidato', '=', 'cu.id_candidato')
        //->join('candidato as ca', 'po.id_curriculo', '=', 'cu.id_curriculo')
        ->where('cu.id_curriculo', '=', $idCurriculo);
        $candidato=$candidato->get();
        return view('empresa/postulante.detalle', ["candidato"=>$candidato]);
    }
}
