<?php

namespace App\Http\Controllers\Postulante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\Candidato;
use App\Modelos\PremiumCandidato;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CandidatoFormRequest;
use DB;

class CandidatoController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){

        if($request){
            $candidato=DB::table('candidato as ca')
            ->where('ca.id_candidato','=','100001');
            $candidato=$candidato->get();

            $anuncios=DB::table('anuncio as an')
            ->join('empresa as e','e.id_empresa','=','an.id_empresa')
            ->orderBy('e.premium_empresa','desc');
            // ->paginate(10);
            $anuncios=$anuncios->get();
            
            return view('postulante.index', ["anuncios"=>$anuncios, "candidato"=>$candidato]);
            // return view("postulante.index", ["anuncios"=>$anuncios]);
        }
        
    }
    public function create(){
        $candidato=DB::table('candidato as ca')
        ->where('ca.id_candidato','=','100001');
        $candidato=$candidato->get();

        return view("postulante.registro.create", ["candidato"=>$candidato]);
    }
    public function store(CandidatoFormRequest $request){

        if( $request->hasFile('foto') ){

            $file = $request->file('foto');
            $nombre = time().$file->getClientOriginalName();
            $file->move(public_path().'/logos_candidatos/', $nombre);
    
            $candidato=new Candidato;
            $candidato->email_candidato             = $request->get('email_candidato');
            $candidato->contrasenia_candidato       = $request->get('contrasenia_candidato');
            $candidato->ciudad_candidato            = $request->get('ciudad_candidato');
            $candidato->direccion_candidato         = $request->get('direccion_candidato');
            $candidato->telefono_candidato          = $request->get('telefono_candidato');
            $candidato->celular_candidato           = $request->get('celular_candidato');
            $candidato->nombre_candidato            = $request->get('nombre_candidato');
            $candidato->apellido_candidato          = $request->get('apellido_candidato');
            $candidato->fecha_nacimiento            = $request->get('fecha_nacimiento');
            $candidato->sexo                        = $request->get('sexo');
            $candidato->estado_civil                = $request->get('estado_civil');
            $candidato->tipo_documento_identidad    = $request->get('tipo_documento_identidad');
            $candidato->numero_documento_identidad  = $request->get('numero_documento_identidad');
            $candidato->premium_candidato           = '0';
            $candidato->foto                        = $nombre;
    
            $candidato->save();

        }


        return Redirect::to('candidato');
    }

    public function edit($id){

        $anuncios=DB::table('anuncio as an')
        ->join('empresa as e','e.id_empresa','=','an.id_empresa')
        ->orderBy('e.premium_empresa','desc');
        // ->paginate(10);
        $anuncios=$anuncios->get();

        $candidato=DB::table('candidato as ca')
        ->where('ca.id_candidato','=','100001');
        $candidato=$candidato->get();

        // $candidato=DB::table('candidato as ca')
        // ->where('ca.id_candidato', '=', $id);
        // $candidato=$candidato->get();

        return view("postulante.registro.edit",["candidato"=>$candidato, "anuncios"=>$anuncios]);
    }
    public function update(CandidatoFormRequest $request, $id){
        
        if( $request->hasFile('foto') ){
            $file = $request->file('foto');
            $nombre = time().$file->getClientOriginalName();
            $file->move(public_path().'/logos_candidatos/', $nombre);

            $candidato=Candidato::findOrFail($id);
            $candidato->email_candidato             = $request->get('email_candidato');
            $candidato->contrasenia_candidato       = $request->get('contrasenia_candidato');
            $candidato->ciudad_candidato            = $request->get('ciudad_candidato');
            $candidato->direccion_candidato         = $request->get('direccion_candidato');
            $candidato->telefono_candidato          = $request->get('telefono_candidato');
            $candidato->celular_candidato           = $request->get('celular_candidato');
            $candidato->nombre_candidato            = $request->get('nombre_candidato');
            $candidato->apellido_candidato          = $request->get('apellido_candidato');
            $candidato->fecha_nacimiento            = $request->get('fecha_nacimiento');
            $candidato->sexo                        = $request->get('sexo');
            $candidato->estado_civil                = $request->get('estado_civil');
            $candidato->tipo_documento_identidad    = $request->get('tipo_documento_identidad');
            $candidato->numero_documento_identidad  = $request->get('numero_documento_identidad');
            // $candidato->premium_candidato           = $request->get('premium_candidato');
            $candidato->foto                        = $nombre;

            $candidato->update();
        }

        return Redirect::to('candidato');
    }
    public function becomePremium(){
        $id=100001;

        $peticionc=new PremiumCandidato;
        $peticionc->id_candidatop=$id;
        $peticionc->save();
        return Redirect::to('candidato/curriculo');
    }
}
