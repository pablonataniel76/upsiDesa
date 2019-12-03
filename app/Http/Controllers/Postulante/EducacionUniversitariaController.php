<?php

namespace App\Http\Controllers\Postulante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\EducacionUniversitaria;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\EducacionUniversitariaFormRequest;
use Session;
use DB;

class EducacionUniversitariaController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $candidato=DB::table('candidato as ca')
            ->where('ca.id_candidato','=','100001');
            $candidato=$candidato->get();

            $universidades=DB::table('educacion_universitaria as eu')
            ->where('eu.id_candidato','=','100001');
            $universidades=$universidades->get();
            return view('postulante.universidad.index',["universidades"=>$universidades, "candidato"=>$candidato]);
        }
    }
    public function create(){
        $candidato=DB::table('candidato as ca')
        ->where('ca.id_candidato','=','100001');
        $candidato=$candidato->get();

        return view("postulante.universidad.create", ["candidato"=>$candidato]);
    }
    public function store(EducacionUniversitariaFormRequest $request){
        $universidad=new EducacionUniversitaria;
        $universidad->id_candidato='100001';
        $universidad->universidad=$request->get('universidad');
        $universidad->carrera=$request->get('carrera');
        $universidad->pais_universidad=$request->get('pais_universidad');
        $universidad->ciudad_univeridad=$request->get('ciudad_univeridad');
        $universidad->fecha_fin_universidad=$request->get('fecha_fin_universidad');
        $universidad->save();
        return Redirect::to('candidato/universidades');
    }
    public function show(){
        
    }
    public function editar($uni,$carr){
        $candidato=DB::table('candidato as ca')
        ->where('ca.id_candidato','=','100001');
        $candidato=$candidato->get();

        Session::put('carrera', $carr);
        $universidad=DB::table('educacion_universitaria as eu')
            ->where('eu.id_candidato','=','100001')
            ->where('eu.universidad','=',$uni)
            ->where('eu.carrera','=',$carr)
            ->first();
        return view('postulante.universidad.edit',["universidad"=>$universidad, "candidato"=>$candidato]);
    }
    public function update(EducacionUniversitariaFormRequest $request,$uni){
        $carr=Session::get('carrera');
        $universidad=EducacionUniversitaria::where('id_candidato',100001)
        ->where('universidad',$uni)
        ->where('carrera',$carr)
        ->update(['universidad'=>$request->get('universidad'),
        'carrera'=>$request->get('carrera'),
        'pais_universidad'=>$request->get('pais_universidad'),
        'ciudad_univeridad'=>$request->get('ciudad_univeridad'),
        'fecha_fin_universidad'=>$request->get('fecha_fin_universidad') 
        ]);
        return Redirect::to('candidato/universidades');
    }
    public function destroy($un,$car){
        $id='100001';
        EducacionUniversitaria::where('id_candidato',$id)
        ->where('universidad',$un)
        ->where('carrera',$car)
        ->delete();
        return Redirect::to('candidato/universidades');
    }
}
