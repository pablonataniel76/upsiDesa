<?php

namespace App\Http\Controllers\Postulante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\EducacionSecundaria;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\EducacionSecundariaFormRequest;
use DB;

class EducacionSecundariaController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $secundarias=DB::table('educacion_secundaria as es')
            ->where('es.id_candidato','=','100001');
            $secundarias=$secundarias->get();
            return view('postulante.secundaria.index',["secundarias"=>$secundarias]);
        }
    }
    public function create(){
        return view("postulante.secundaria.create");
    }
    public function store(EducacionSecundariaFormRequest $request){
        $secundaria=new EducacionSecundaria;
        $secundaria->id_candidato='100001';
        $secundaria->institucion_secundaria=$request->get('institucion_secundaria');
        $secundaria->pais_secundaria=$request->get('pais_secundaria');
        $secundaria->ciudad_secundaria=$request->get('ciudad_secundaria');
        $secundaria->fecha_fin_secundaria=$request->get('fecha_fin_secundaria');
        $secundaria->save();
        return Redirect::to('candidato/secundarias');
    }
    public function show(){
        
    }
    public function edit($sec){
        $secundaria=DB::table('educacion_secundaria as es')
            ->where('es.id_candidato','=','100001')
            ->where('es.institucion_secundaria','=',$sec)
            ->first();
        return view('postulante.secundaria.edit',["secundaria"=>$secundaria]);
    }
    public function update(EducacionSecundariaFormRequest $request,$sec){
       
        $secundaria=EducacionSecundaria::where('id_candidato',100001)
        ->where('institucion_secundaria',$sec)
        ->update(['institucion_secundaria'=>$request->get('institucion_secundaria'),
        'pais_secundaria'=>$request->get('pais_secundaria'),
        'ciudad_secundaria'=>$request->get('ciudad_secundaria'),
        'fecha_fin_secundaria'=>$request->get('fecha_fin_secundaria')  
        ]);
        return Redirect::to('candidato/secundarias');
    }
    public function destroy(){
        
    }
}
