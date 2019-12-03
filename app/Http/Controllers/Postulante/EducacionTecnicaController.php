<?php

namespace App\Http\Controllers\Postulante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\EducacionTecnica;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\EducacionTecnicaFormRequest;
use Session;
use DB;

class EducacionTecnicaController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $candidato=DB::table('candidato as ca')
            ->where('ca.id_candidato','=','100001');
            $candidato=$candidato->get();

            $tecnicas=DB::table('educacion_tecnica as et')
            ->where('et.id_candidato','=','100001');
            $tecnicas=$tecnicas->get();
            return view('postulante.tecnica.index',["tecnicas"=>$tecnicas, "candidato"=>$candidato]);
        }
    }
    public function create(){
        $candidato=DB::table('candidato as ca')
            ->where('ca.id_candidato','=','100001');
            $candidato=$candidato->get();

        return view("postulante.tecnica.create", ["candidato"=>$candidato]);
    }
    public function store(EducacionTecnicaFormRequest $request){
        $tecnica=new EducacionTecnica;
        $tecnica->id_candidato='100001';
        $tecnica->institucion_tecnica=$request->get('institucion_tecnica');
        $tecnica->curso_tecnico=$request->get('curso_tecnico');
        $tecnica->pais_tecnico=$request->get('pais_tecnico');
        $tecnica->ciudad_tecnico=$request->get('ciudad_tecnico');
        $tecnica->fecha_curso_tecnico=$request->get('fecha_curso_tecnico');
        $tecnica->save();
        return Redirect::to('candidato/tecnicas');
    }
    public function show(){
        
    }
    public function editar($inst,$cur){
        $candidato=DB::table('candidato as ca')
            ->where('ca.id_candidato','=','100001');
            $candidato=$candidato->get();

        Session::put('curso', $cur);
        $tecnica=DB::table('educacion_tecnica as et')
            ->where('et.id_candidato','=','100001')
            ->where('et.institucion_tecnica','=',$inst)
            ->where('et.curso_tecnico','=',$cur)
            ->first();
        return view('postulante.tecnica.edit',["tecnica"=>$tecnica, "candidato"=>$candidato]);
    }
    public function update(EducacionTecnicaFormRequest $request,$inst){
        $cur=Session::get('curso');
        $tecnica=EducacionTecnica::where('id_candidato',100001)
        ->where('institucion_tecnica',$inst)
        ->where('curso_tecnico',$cur)
        ->update(['institucion_tecnica'=>$request->get('institucion_tecnica'),
        'curso_tecnico'=>$request->get('curso_tecnico'),
        'pais_tecnico'=>$request->get('pais_tecnico'),
        'ciudad_tecnico'=>$request->get('ciudad_tecnico'),
        'fecha_curso_tecnico'=>$request->get('fecha_curso_tecnico') 
        ]);
        return Redirect::to('candidato/tecnicas');
    }
    public function destroy($ins,$curt){
        $id='100001';
        EducacionTecnica::where('id_candidato',$id)
        ->where('institucion_tecnica',$ins)
        ->where('curso_tecnico',$curt)
        ->delete();
        return Redirect::to('candidato/tecnicas');
    }
}
