<?php

namespace App\Http\Controllers\Postulante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CursoTallerSeminario;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CursoTallerSeminarioFormRequest;
use DB;

class CursoTallerSeminarioController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $talleres=DB::table('curso_taller_seminario as cts')
            ->where('cts.id_candidato','=','100001');
            $talleres=$talleres->get();
            return view('postulante.taller.index',["talleres"=>$talleres]);
        }
    }
    public function create(){
        return view("postulante.taller.create");
    }
    public function store(CursoTallerSeminarioFormRequest $request){
        $taller=new CursoTallerSeminario;
        $taller->id_candidato='100001';
        $taller->nombre_taller=$request->get('nombre_taller');
        $taller->impartido_por=$request->get('impartido_por');
        $taller->lugar_taller=$request->get('lugar_taller');
        $taller->fecha_taller=$request->get('fecha_taller');
        $taller->save();
        return Redirect::to('candidato/talleres');
    }
    public function show(){
        
    }
    public function edit(){
        
    }
    public function destroy(){
        
    }
}
