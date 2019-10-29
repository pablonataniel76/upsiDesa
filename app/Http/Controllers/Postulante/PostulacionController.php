<?php

namespace App\Http\Controllers\Postulante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Postulacion;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PostulacionFormRequest;
use DB;

class PostulacionController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            //SELECT * FROM postulacion INNER JOIN curriculo ON postulacion.id_curriculo = curriculo.id_curriculo 
            //INNER JOIN anuncio ON postulacion.id_anuncio = anuncio.id_anuncio;
            $postulaciones=DB::table('postulacion as po')
            ->join('curriculo as c','c.id_curriculo','=','po.id_curriculo')
            ->join('anuncio as a','a.id_anuncio','=','po.id_anuncio')
            ->join('empresa as e','e.id_empresa','=','a.id_empresa')
            ->where('c.id_candidato','=','100001');
            $postulaciones=$postulaciones->get();
            return view('postulante.postulaciones.index',["postulaciones"=>$postulaciones]);
        }
    }
    public function create(){
        
    }
    public function store(){
        
    }
    public function show(){
        
    }
    public function edit(){
        
    }
    public function destroy(){
        
    }
    
}
