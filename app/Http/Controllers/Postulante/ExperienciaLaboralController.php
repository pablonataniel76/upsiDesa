<?php

namespace App\Http\Controllers\Postulante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\ExperienciaLaboral;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ExperienciaLaboralFormRequest;
use Session;
use DB;

class ExperienciaLaboralController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $candidato=DB::table('candidato as ca')
            ->where('ca.id_candidato','=','100001');
            $candidato=$candidato->get();

            $experiencias=DB::table('experiencia_laboral as el')
            ->where('el.id_candidato','=','100001');
            $experiencias=$experiencias->get();
            return view('postulante.experiencia.index',["experiencias"=>$experiencias, "candidato"=>$candidato]);
        }
    }
    public function create(){
        $candidato=DB::table('candidato as ca')
        ->where('ca.id_candidato','=','100001');
        $candidato=$candidato->get();

        return view("postulante.experiencia.create", ["candidato"=>$candidato]);
    }
    public function store(ExperienciaLaboralFormRequest $request){
        $experiencia=new ExperienciaLaboral;
        $experiencia->id_candidato='100001';
        $experiencia->cargo_empresa=$request->get('cargo_empresa');
        $experiencia->nombre_empresa=$request->get('nombre_empresa');
        $experiencia->categoria_experiencia=$request->get('categoria_experiencia');
        $experiencia->descripcion_experiencia=$request->get('descripcion_experiencia');
        $experiencia->pais_experiencia=$request->get('pais_experiencia');
        $experiencia->ciudad_experiencia=$request->get('ciudad_experiencia');
        $experiencia->fecha_inicio_experiencia=$request->get('fecha_inicio_experiencia');
        $experiencia->fecha_fin_experiencia=$request->get('fecha_fin_experiencia');
        $experiencia->personas_cargo=$request->get('personas_cargo');
        $experiencia->anios_experiencia=$request->get('anios_experiencia');
        $experiencia->nombre_referencia=$request->get('nombre_referencia');
        $experiencia->telefono_referencia=$request->get('telefono_referencia');
        $experiencia->save();
        return Redirect::to('candidato/experiencia');
    }
    public function show(){
        
    }
    public function editar($carg,$emp){
        $candidato=DB::table('candidato as ca')
        ->where('ca.id_candidato','=','100001');
        $candidato=$candidato->get();

        Session::put('empresa', $emp);
        $experiencia=DB::table('experiencia_laboral as ex')
            ->where('ex.id_candidato','=','100001')
            ->where('ex.cargo_empresa','=',$carg)
            ->where('ex.nombre_empresa','=',$emp)
            ->first();
        return view('postulante.experiencia.edit',["experiencia"=>$experiencia, "candidato"=>$candidato]);
    }
    public function update(ExperienciaLaboralFormRequest $request,$carg){
        $emp=Session::get('empresa');
        $universidad=ExperienciaLaboral::where('id_candidato',100001)
        ->where('cargo_empresa',$carg)
        ->where('nombre_empresa',$emp)
        ->update(['cargo_empresa'=>$request->get('cargo_empresa'),
        'nombre_empresa'=>$request->get('nombre_empresa'),
        'categoria_experiencia'=>$request->get('categoria_experiencia'),
        'descripcion_experiencia'=>$request->get('descripcion_experiencia'),
        'pais_experiencia'=>$request->get('pais_experiencia'),
        'ciudad_experiencia'=>$request->get('ciudad_experiencia'),
        'fecha_inicio_experiencia'=>$request->get('fecha_inicio_experiencia'),
        'fecha_fin_experiencia'=>$request->get('fecha_fin_experiencia'),
        'personas_cargo'=>$request->get('personas_cargo'),
        'anios_experiencia'=>$request->get('anios_experiencia'),
        'nombre_referencia'=>$request->get('nombre_referencia'),
        'telefono_referencia'=>$request->get('telefono_referencia') 
        ]);
        return Redirect::to('candidato/experiencia');
    }
    public function destroy($ca,$em){
        $id='100001';
        ExperienciaLaboral::where('id_candidato',$id)
        ->where('cargo_empresa',$ca)
        ->where('nombre_empresa',$em)
        ->delete();
        return Redirect::to('candidato/experiencia');
    }
}
