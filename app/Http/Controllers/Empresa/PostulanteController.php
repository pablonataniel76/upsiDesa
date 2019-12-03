<?php

namespace App\Http\Controllers\Empresa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Modelos\Postulante;
use App\Modelos\Curriculo;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\PostulanteFormRequest;
use App\Http\Requests\CurriculoFormRequest;
use App\User;
use DB;
use PDF;

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

            $anuncios=DB::table('empresa as em')
            ->join('anuncio as an', 'em.id_empresa', '=', 'an.id_empresa')
            ->where('em.id_empresa','=','101');
            $anuncios=$anuncios->get();    

            $postulacion=DB::table('postulacion as ps')
            ->join('anuncio as an', 'ps.id_anuncio', '=', 'an.id_anuncio')
            ->join('curriculo as cu', 'ps.id_curriculo', '=', 'cu.id_curriculo')
            ->where('an.id_empresa','=','101');
            $postulacion=$postulacion->get();
            return view('empresa/postulante.index', ["postulacion"=>$postulacion, "anuncios"=>$anuncios]);
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
        $anuncios=DB::table('empresa as em')
            ->join('anuncio as an', 'em.id_empresa', '=', 'an.id_empresa')
            ->where('em.id_empresa','=','101');
            $anuncios=$anuncios->get();  

        $candidato=DB::table('candidato as ca')
        ->join('curriculo as cu', 'ca.id_candidato', '=', 'cu.id_candidato')
        //->join('candidato as ca', 'po.id_curriculo', '=', 'cu.id_curriculo')
        ->where('cu.id_curriculo', '=', $idCurriculo);
        $candidato=$candidato->get();
        return view('empresa/postulante.detalle', ["candidato"=>$candidato, "anuncios"=>$anuncios]);
    }

    public function buscar(Request $request)
    {
        $anuncios=DB::table('empresa as em')
        ->join('anuncio as an', 'em.id_empresa', '=', 'an.id_empresa')
        ->where('em.id_empresa','=','101');
        $anuncios=$anuncios->get();

        $categoria = $request->get('categoria');
        $ciudad    = $request->get('ciudad');
        $contrato  = $request->get('contrato');

        $curriculo = Curriculo::orderBy('candidato.premium_candidato','desc')
                    ->join('candidato', 'candidato.id_candidato','=', 'curriculo.id_candidato')
                    // ->orderBy()
                    ->categoria($categoria)
                     ->ciudad($ciudad)
                     ->contrato($contrato)
                    ->paginate(2);

        return view('empresa/postulante.buscar', ["curriculo"=>$curriculo, "anuncios"=>$anuncios]);
    }

    public function generatePDF(Request $idCurriculo)
    {
        $candidato=DB::table('candidato as ca')
        ->join('curriculo as cu', 'ca.id_candidato', '=', 'cu.id_candidato')
        ->join('curso_taller_seminario as cts', 'ca.id_candidato', '=', 'cts.id_candidato')
        ->join('educacion_secundaria as es', 'ca.id_candidato', 'es.id_candidato')
        ->join('educacion_tecnica as et', 'ca.id_candidato', 'et.id_candidato')
        ->join('educacion_universitaria as eu', 'ca.id_candidato', 'eu.id_candidato')
        ->join('experiencia_laboral as el', 'ca.id_candidato', 'el.id_candidato')
        ->join('habilidad as h', 'ca.id_candidato', 'h.id_candidato')
        ->join('idioma as i', 'ca.id_candidato', 'i.id_candidato')
        ->join('informacion_general as ig', 'ca.id_candidato', 'ig.id_candidato')
        ->where('cu.id_curriculo', '=', '1');
        $candidato=$candidato->get();
        
        //$data = ['title' => 'Welcome to HDTuto.com'];
        $pdf = PDF::loadView('empresa/postulante/myPDF', ["candidato"=>$candidato]);
        //return $pdf->download('itsolutionstuff.pdf');
        return view('empresa/postulante.myPDF', ["candidato"=>$candidato]);
    }
}
