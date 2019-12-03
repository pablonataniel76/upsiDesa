<?php

namespace App\Http\Controllers\Postulante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\Habilidad;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\HabilidadFormRequest;
use DB;

class HabilidadController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $candidato=DB::table('candidato as ca')
            ->where('ca.id_candidato','=','100001');
            $candidato=$candidato->get();

            $habilidades=DB::table('habilidad as ha')
            ->where('ha.id_candidato','=','100001');
            $habilidades=$habilidades->get();
            return view('postulante.habilidad.index',["habilidades"=>$habilidades, "candidato"=>$candidato]);
        }
    }
    public function create(){
        $candidato=DB::table('candidato as ca')
            ->where('ca.id_candidato','=','100001');
            $candidato=$candidato->get();

        return view("postulante.habilidad.create", ["candidato"=>$candidato]);
    }
    public function store(HabilidadFormRequest $request){
        $habilidad=new Habilidad;
        $habilidad->id_candidato='100001';
        $habilidad->habilidad=$request->get('habilidad');
        $habilidad->anios_habilidad=$request->get('anios_habilidad');
        $habilidad->save();
        return Redirect::to('candidato/habilidades');
    }
    public function show(){
        
    }
    public function edit($hab){
        $candidato=DB::table('candidato as ca')
            ->where('ca.id_candidato','=','100001');
            $candidato=$candidato->get();

        $habilidad=DB::table('habilidad as ha')
            ->where('ha.id_candidato','=','100001')
            ->where('ha.habilidad','=',$hab)
            ->first();
        return view('postulante.habilidad.edit',["habilidad"=>$habilidad, "candidato"=>$candidato]);
    }
    public function update(HabilidadFormRequest $request,$hab){
       
        $habilidad=Habilidad::where('id_candidato',100001)
        ->where('habilidad',$hab)
        ->update(['habilidad'=>$request->get('habilidad'),
        'anios_habilidad'=>$request->get('anios_habilidad') 
        ]);
        return Redirect::to('candidato/habilidades');
    }
    public function destroy($hab){
        $id='100001';
        Habilidad::where('id_candidato',$id)
        ->where('habilidad',$hab)
        ->delete();
        return Redirect::to('candidato/habilidades');
    }
}
