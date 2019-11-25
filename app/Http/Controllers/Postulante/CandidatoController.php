<?php

namespace App\Http\Controllers\Postulante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\Candidato;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CandidatoFormRequest;
use DB;

class CandidatoController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){

    }
    public function create(){
        return view("postulante.registro.create");
    }
    public function store(CandidatoFormRequest $request){
        $candidato=new Candidato;
        $candidato->email_candidato=$request->get('email_candidato');
        $candidato->contrasenia_candidato=$request->get('contrasenia_candidato');
        $candidato->ciudad_candidato=$request->get('ciudad_candidato');
        $candidato->direccion_candidato=$request->get('direccion_candidato');
        $candidato->telefono_candidato=$request->get('telefono_candidato');
        $candidato->celular_candidato=$request->get('celular_candidato');
        $candidato->nombre_candidato=$request->get('nombre_candidato');
        $candidato->apellido_candidato=$request->get('apellido_candidato');
        $candidato->foto='foto';
        $candidato->fecha_nacimiento=$request->get('fecha_nacimiento');
        $candidato->sexo=$request->get('sexo');
        $candidato->estado_civil=$request->get('estado_civil');
        $candidato->tipo_documento_identidad=$request->get('tipo_documento_identidad');
        $candidato->numero_documento_identidad=$request->get('numero_documento_identidad');
        $candidato->premium_candidato='0';
        $candidato->save();
        return Redirect::to('postulante');
    }
    public function edit(){
        return view("postulante.registro.edit",["candidato"=>Candidato::findOrFail($id)]);
    }
    public function update(CandidatoFormRequest $request, $id){
        $candidato=Candidato::findOrFail($id);
        $candidato->email_candidato=$request->get('email_candidato');
        $candidato->contrasenia_candidato=$request->get('contrasenia_candidato');
        $candidato->ciudad_candidato=$request->get('ciudad_candidato');
        $candidato->direccion_candidato=$request->get('direccion_candidato');
        $candidato->telefono_candidato=$request->get('telefono_candidato');
        $candidato->celular_candidato=$request->get('celular_candidato');
        $candidato->nombre_candidato=$request->get('nombre_candidato');
        $candidato->apellido_candidato=$request->get('apellido_candidato');
        $candidato->foto='foto';
        $candidato->fecha_nacimiento=$request->get('fecha_nacimiento');
        $candidato->sexo=$request->get('sexo');
        $candidato->estado_civil=$request->get('estado_civil');
        $candidato->tipo_documento_identidad=$request->get('tipo_documento_identidad');
        $candidato->numero_documento_identidad=$request->get('numero_documento_identidad');
        $candidato->premium_candidato=$request->get('premium_candidato');
        $candidato->update();
        return Redirect::to('postulante');
    }
   
}
