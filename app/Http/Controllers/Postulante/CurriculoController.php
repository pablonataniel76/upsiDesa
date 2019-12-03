<?php

namespace App\Http\Controllers\Postulante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\Curriculo;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Http\Requests\CurriculoFormRequest;
use App\Modelos\InformacionGeneral;
use App\Http\Requests\InformacionGeneralFormRequest;
use Carbon\Carbon;
use Session;
use DB;
use PDF;

class CurriculoController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $candidato=DB::table('candidato as ca')
            ->where('ca.id_candidato','=','100001');
            $candidato=$candidato->get();

            $curriculos=DB::table('curriculo as cu')
            ->where('cu.id_candidato','=','100001');
            $curriculos=$curriculos->get();
            return view('postulante.curriculo.index',["curriculos"=>$curriculos, "candidato"=>$candidato]);
        }
    }
    public function create(){
        $id='100001';

        $candidato=DB::table('candidato as ca')
        ->where('ca.id_candidato','=',$id)
        ->get();

        $cantidadcu=DB::table('curriculo as cu')
        ->where('cu.id_candidato','=',$id)
        ->count();

        return view('postulante.curriculo.create',["cantidadcu"=>$cantidadcu,
                                                    "candidato"=>$candidato]);
    }
    public function store(InformacionGeneralFormRequest $request){
        $id='100001';
        InformacionGeneral::where('id_candidato',$id)->delete();

        $taller=$request->get('taller');
        Session::put('taller', $taller); 

        $secundaria=$request->get('secundaria');
        Session::put('secundaria', $secundaria); 

        $tecnica=$request->get('tecnica');
        Session::put('tecnica', $tecnica);

        $universitaria=$request->get('universitaria');
        Session::put('universitaria', $universitaria);

        $experiencia=$request->get('experiencia');
        Session::put('experiencia', $experiencia);

        $idioma=$request->get('idioma');
        Session::put('idioma', $idioma);

        $habilidad=$request->get('habilidad');
        Session::put('habilidad', $habilidad); 

        $informacion=new InformacionGeneral;
        $informacion->id_candidato='100001';
        $informacion->titulo_informacion=$request->get('titulo_informacion');
        $informacion->categoria_informacion=$request->get('categoria_informacion');
        $informacion->contrato_informacion=$request->get('contrato_informacion');
        $informacion->pretension_salarial=$request->get('pretension_salarial');
        $informacion->presentacion_biografica=$request->get('presentacion_biografica');
        $informacion->ciudad_residencia_actual=$request->get('ciudad_residencia_actual');
        $informacion->save();

        return Redirect::to('candidato/curriculo/pdf');
    }
    public function show(){
        
    }
    public function edit(){
        
    }
    public function destroy(){
        
    }
    public function seleccionar(Request $request){
        if($request){
            $candidato=DB::table('candidato as ca')
            ->where('ca.id_candidato','=','100001');
            $candidato=$candidato->get();

            $curriculos=DB::table('curriculo as cu')
            ->where('cu.id_candidato','=','100001');
            $curriculos=$curriculos->get();
            return view('postulante.anuncio.modal',["curriculos"=>$curriculos, "candidato"=>$candidato]);
        }
    }

    public function pdf(){
        $taller = Session::get('taller');
        $secundaria = Session::get('secundaria');
        $tecnica = Session::get('tecnica');
        $universitaria = Session::get('universitaria');
        $experiencia = Session::get('experiencia');
        $idioma = Session::get('idioma');
        $habilidad = Session::get('habilidad');

        $informaciones=DB::table('informacion_general as ig')
            ->where('ig.id_candidato','=','100001')
            ->first();
       
        $general=DB::table('candidato as ca')
            ->where('ca.id_candidato','=','100001')
            ->first();
        

        $talleres=DB::table('curso_taller_seminario as cts')
            ->where('cts.id_candidato','=','100001');
        $talleres=$talleres->get();

        $secundarias=DB::table('educacion_secundaria as es')
            ->where('es.id_candidato','=','100001');
        $secundarias=$secundarias->get();

        $tecnicas=DB::table('educacion_tecnica as et')
            ->where('et.id_candidato','=','100001');
        $tecnicas=$tecnicas->get();

        $universidades=DB::table('educacion_universitaria as eu')
            ->where('eu.id_candidato','=','100001');
        $universidades=$universidades->get();

        $experiencias=DB::table('experiencia_laboral as el')
            ->where('el.id_candidato','=','100001');
        $experiencias=$experiencias->get();

        $habilidades=DB::table('habilidad as ha')
            ->where('ha.id_candidato','=','100001');
        $habilidades=$habilidades->get();

        $idiomas=DB::table('idioma as id')
            ->where('id.id_candidato','=','100001');
        $idiomas=$idiomas->get();

        $ruta= public_path()."/archivos/curriculos/". str_random(25) .'.pdf';

        $pdf = PDF::loadView('postulante.curriculo.pdf', ["informaciones"=>$informaciones,
                                                            "general"=>$general,
                                                            "talleres"=>$talleres,
                                                            "secundarias"=>$secundarias,
                                                            "tecnicas"=>$tecnicas,
                                                            "universidades"=>$universidades,
                                                            "experiencias"=>$experiencias,
                                                            "habilidades"=>$habilidades,
                                                            "idiomas"=>$idiomas,
                                                            "habilidad"=>$habilidad,
                                                            "taller"=>$taller,
                                                            "secundaria"=>$secundaria,
                                                            "tecnica"=>$tecnica,
                                                            "universitaria"=>$universitaria,
                                                            "experiencia"=>$experiencia,
                                                            "idioma"=>$idioma])->save($ruta);

        $mytime = Carbon::now();
        $mytime = $mytime->format('Y-m-d');

        $archivo=Str::after($ruta, '/archivos/curriculos/');

        $curriculo=new Curriculo;
        $curriculo->id_candidato='100001';
        $curriculo->ruta_curriculo=$archivo;
        $curriculo->publicacion_curriculo=$mytime;
        $curriculo->titulo_curriculo=$informaciones->titulo_informacion;
        $curriculo->categoria_curriculo=$informaciones->categoria_informacion;
        $curriculo->contrato_curriculo=$informaciones->contrato_informacion;
        $curriculo->ciudad_curriculo=$informaciones->ciudad_residencia_actual;
        $curriculo->save();
        return $pdf->download('curriculo.pdf');

    }

    public function descargarpdf($ruta){
        $public_path = public_path();
        $url = $public_path."/archivos/curriculos/".$ruta;
        return response()->download($url);
    }
 
}
