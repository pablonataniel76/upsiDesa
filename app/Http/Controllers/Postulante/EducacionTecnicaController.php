<?php

namespace App\Http\Controllers\Postulante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EducacionTecnica;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\EducacionTecnicaFormRequest;
use DB;

class EducacionTecnicaController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $tecnicas=DB::table('educacion_tecnica as et')
            ->where('et.id_candidato','=','100001');
            $tecnicas=$tecnicas->get();
            return view('postulante.tecnica.index',["tecnicas"=>$tecnicas]);
        }
    }
    public function create(){
        return view("postulante.tecnica.create");
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
    public function edit(){
        
    }
    public function destroy(){
        
    }
}
