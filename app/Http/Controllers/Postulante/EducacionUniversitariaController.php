<?php

namespace App\Http\Controllers\Postulante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EducacionUniversitaria;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\EducacionUniversitariaFormRequest;
use DB;

class EducacionUniversitariaController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $universidades=DB::table('educacion_universitaria as eu')
            ->where('eu.id_candidato','=','100001');
            $universidades=$universidades->get();
            return view('postulante.universidad.index',["universidades"=>$universidades]);
        }
    }
    public function create(){
        return view("postulante.universidad.create");
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
    public function edit(){
        
    }
    public function destroy(){
        
    }
}
