<?php

namespace App\Http\Controllers\Postulante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\Idioma;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\IdiomaFormRequest;
use DB;

class IdiomaController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $idiomas=DB::table('idioma as id')
            ->where('id.id_candidato','=','100001');
            $idiomas=$idiomas->get();
            return view('postulante.idioma.index',["idiomas"=>$idiomas]);
        }
    }
    public function create(){
        return view("postulante.idioma.create");
    }
    public function store(IdiomaFormRequest $request){
        $idioma=new Idioma;
        $idioma->id_candidato='100001';
        $idioma->idioma=$request->get('idioma');
        $idioma->nivel_escritura=$request->get('nivel_escritura');
        $idioma->nivel_oral=$request->get('nivel_oral');
        $idioma->nivel_lectura=$request->get('nivel_lectura');
        $idioma->save();
        return Redirect::to('candidato/idiomas');
    }
    public function show(){
        
    }
    public function edit($idi){
        $idioma=DB::table('idioma as idio')
            ->where('idio.id_candidato','=','100001')
            ->where('idio.idioma','=',$idi)
            ->first();
        return view('postulante.idioma.edit',["idioma"=>$idioma]);
    }
    public function update(IdiomaFormRequest $request,$idi){
        $idioma=Idioma::where('id_candidato',100001)
        ->where('idioma',$idi)
        ->update(['idioma'=>$request->get('idioma'),
        'nivel_escritura'=>$request->get('nivel_escritura'),
        'nivel_oral'=>$request->get('nivel_oral'),
        'nivel_lectura'=>$request->get('nivel_lectura') 
        ]);
        return Redirect::to('candidato/idiomas');
    }
    public function destroy(){
        
    }
}
