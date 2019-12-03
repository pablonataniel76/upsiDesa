<?php

namespace App\Http\Controllers\Postulante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\Anuncio;
use App\Modelos\Empresa;
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
            $anuncios=$anuncios->get();

            $candidato=DB::table('candidato as ca')
            ->where('ca.id_candidato','=','100001');
            $candidato=$candidato->get();

            // $categoria = $request->get('categoria');
            // $ciudad    = $request->get('ciudad');
            // $contrato  = $request->get('contrato');

            // $anuncios = Anuncio::orderBy('id_anuncio', 'DESC')
            //             ->categoria($categoria)
            //             ->ciudad($ciudad)
            //             ->contrato($contrato)
            //             ->paginate(2);

            return view('postulante.anuncio.index',["anuncios"=>$anuncios, "candidato"=>$candidato]);
        }
    }
    public function create(){
       
    }
    public function store(){
       
    }
    public function show($id){
        $candidato=DB::table('candidato as ca')
        ->where('ca.id_candidato','=','100001');
        $candidato=$candidato->get();

        $curriculos=DB::table('curriculo as cu')       
        ->where('cu.id_candidato','=','100001');
        $curriculos=$curriculos->get();

        $anuncio=Anuncio::join("empresa", "anuncio.id_empresa", "=", "empresa.id_empresa")
        ->where('anuncio.id_anuncio',$id)
        ->first();

        return view("postulante.anuncio.show",
                    ["anuncio"=>$anuncio,
                     "curriculos"=>$curriculos,
                     "candidato"=>$candidato]);
    }

    public function edit(){
        
    }
    
    public function destroy(){
        
    }

    public function buscarA(Request $request)
    {
        $candidato=DB::table('candidato as ca')
            ->where('ca.id_candidato','=','100001');
            $candidato=$candidato->get();

        // $anuncios=DB::table('empresa as em')
        // ->join('anuncio as an', 'em.id_empresa', '=', 'an.id_empresa');
        // // ->where('em.id_empresa','=','101');
        // $anuncios=$anuncios->get();

        $categoria = $request->get('categoria');
        $ciudad    = $request->get('ciudad');
        $contrato  = $request->get('contrato');

        $anuncios = Anuncio::orderBy('id_anuncio', 'DESC')
                    ->categoria($categoria)
                     ->ciudad($ciudad)
                     ->contrato($contrato)
                    ->paginate(6);

        return view('postulante.anuncio.buscar', [ "anuncios"=>$anuncios, "candidato"=>$candidato]);
    }
}
