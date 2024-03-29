<?php

namespace App\Http\Controllers\Postulante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\Postulacion;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PostulacionFormRequest;
use DB;

class PostulacionController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $candidato=DB::table('candidato as ca')
            ->where('ca.id_candidato','=','100001');
            $candidato=$candidato->get();

            $postulaciones=DB::table('postulacion as po')
            ->join('curriculo as c','c.id_curriculo','=','po.id_curriculo')
            ->join('anuncio as a','a.id_anuncio','=','po.id_anuncio')
            ->join('empresa as e','e.id_empresa','=','a.id_empresa')
            ->where('c.id_candidato','=','100001');
            $postulaciones=$postulaciones->get();
            return view('postulante.postulaciones.index',["postulaciones"=>$postulaciones, "candidato"=>$candidato]);
        }
    }
    public function create(){
        
    }
    public function store(PostulacionFormRequest $request){
        $postulacion=new Postulacion;
        $postulacion->id_anuncio=$request->get('id_anuncio');
        $postulacion->id_curriculo=$request->get('id_curriculo');
        $postulacion->save();
        return Redirect::to('candidato/anuncio');
    }
    public function show(){
        
    }
    public function edit(){
        
    }
    public function destroy(){
        
    }
    
}
