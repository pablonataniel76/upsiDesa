<?php

namespace App\Http\Controllers\Postulante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\Anuncio;
use App\Modelos\Curriculo;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\AnuncioFormRequest;
use DB;

class AnuncioController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $anuncios=DB::table('anuncio as an')
            ->join('empresa as e','e.id_empresa','=','an.id_empresa')
            ->orderBy('e.premium_empresa','desc');
            // ->paginate(10);
            $anuncios=$anuncios->get();
            return view('postulante.anuncio.index',["anuncios"=>$anuncios]);
        }
    }
    public function create(){
       
    }
    public function store(){
       
    }
    public function show($id){
        $curriculos=DB::table('curriculo as cu')
        ->where('cu.id_candidato','=','100001');
        $curriculos=$curriculos->get();
        return view("postulante.anuncio.show",
                    ["anuncio"=>Anuncio::findOrFail($id),
                     "curriculos"=>$curriculos]);
    }
    public function edit(){
        
    }
    public function destroy(){
        
    }
    // public function mostrar($id,$idempresa){
    //     $anuncio=Anuncio::findOrFail($id);
    //     $empresa=DB::table('empresa as em')
    //     ->where('em.id_empresa','=',$idempresa);
    //     $empresa=$empresa->get();
        
    //     return view("postulante.anuncio.mostrar",["anuncio"=>$anuncio,"empresa"=>$empresa]);
    // }


    // $curriculos=DB::table('curriculo as cu')
    //     ->where('cu.id_candidato','=','100001');
    //     $curriculos=$curriculos->get();
    //     return view("postulante.anuncio.show",["anuncio"=>Anuncio::findOrFail($id),"curriculos"=>$curriculos]);
}
