<?php

namespace App\Http\Controllers\Postulante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\CursoTallerSeminario;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CursoTallerSeminarioFormRequest;
use DB;

class CursoTallerSeminarioController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $candidato=DB::table('candidato as ca')
            ->where('ca.id_candidato','=','100001');
            $candidato=$candidato->get();

            $talleres=DB::table('curso_taller_seminario as cts')
            ->where('cts.id_candidato','=','100001');
            $talleres=$talleres->get();
            return view('postulante.taller.index',["talleres"=>$talleres, "candidato"=>$candidato]);
        }
    }
    public function create(){
        $candidato=DB::table('candidato as ca')
            ->where('ca.id_candidato','=','100001');
            $candidato=$candidato->get();

        return view("postulante.taller.create", ["candidato"=>$candidato]);
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
    public function edit($tall){
        $candidato=DB::table('candidato as ca')
            ->where('ca.id_candidato','=','100001');
            $candidato=$candidato->get();

        $taller=DB::table('curso_taller_seminario as cts')
            ->where('cts.id_candidato','=','100001')
            ->where('cts.nombre_taller','=',$tall)
            ->first();
        return view('postulante.taller.edit',["taller"=>$taller, "candidato"=>$candidato]);
    }
    public function update(CursoTallerSeminarioFormRequest $request,$tall){
       
        $taller=CursoTallerSeminario::where('id_candidato',100001)
        ->where('nombre_taller',$tall)
        ->update(['nombre_taller'=>$request->get('nombre_taller'),
        'impartido_por'=>$request->get('impartido_por'),
        'lugar_taller'=>$request->get('lugar_taller'),
        'fecha_taller'=>$request->get('fecha_taller')  
        ]);
        return Redirect::to('candidato/talleres');
    }
    public function destroy($tal){
        $id='100001';
        CursoTallerSeminario::where('id_candidato',$id)
        ->where('nombre_taller',$tal)
        ->delete();
        return Redirect::to('candidato/talleres');
    }
}
