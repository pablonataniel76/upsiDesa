<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\Administrador;
use App\Modelos\Candidato;
use App\Modelos\Curriculo;
use App\Modelos\CursoTallerSeminario;
use App\Modelos\EducacionSecundaria;
use App\Modelos\EducacionTecnica;
use App\Modelos\EducacionUniversitaria;
use App\Modelos\ExperienciaLaboral;
use App\Modelos\Habilidad;
use App\Modelos\Idioma;
use App\Modelos\InformacionGeneral;
use App\Modelos\Postulacion;

use App\Modelos\Empresa;
use App\Modelos\Anuncio;


use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\AdministradorFormRequest;
use DB;

class AdministradorController extends Controller
{
    public function __construct(){

    }
    public function listarCandidatos(Request $request){
        if($request){
            $candidatos=DB::table('candidato as ca')
            ->where('premium_candidato','0');
            $candidatos=$candidatos->get();
            return view('administrador.candidato.listar',["candidatos"=>$candidatos]);
        }
    }
    public function listarEmpresas(Request $request){
        if($request){
            $empresas=DB::table('empresa')
            ->where('premium_empresa','0');
            $empresas=$empresas->get();
            return view('administrador.empresa.listar',["empresas"=>$empresas]);
        }
    }
    public function listarCandidatosP(Request $request){
        if($request){
            $candidatos=DB::table('candidato as ca')
            ->where('premium_candidato','1');
            $candidatos=$candidatos->get();
            return view('administrador.candidato.listarp',["candidatos"=>$candidatos]);
        }
    }
    public function listarEmpresasP(Request $request){
        if($request){
            $empresas=DB::table('empresa')
            ->where('premium_empresa','1');
            $empresas=$empresas->get();
            return view('administrador.empresa.listarp',["empresas"=>$empresas]);
        }
    }

    public function destroyC($id){
        Postulacion::join("curriculo","postulacion.id_curriculo","=","curriculo.id_curriculo")
        ->where('curriculo.id_candidato',$id)
        ->delete();

        Curriculo::where('id_candidato',$id)
        ->delete();
        CursoTallerSeminario::where('id_candidato',$id)
        ->delete();
        EducacionSecundaria::where('id_candidato',$id)
        ->delete();
        EducacionTecnica::where('id_candidato',$id)
        ->delete();
        EducacionUniversitaria::where('id_candidato',$id)
        ->delete();
        ExperienciaLaboral::where('id_candidato',$id)
        ->delete();
        Habilidad::where('id_candidato',$id)
        ->delete();
        Idioma::where('id_candidato',$id)
        ->delete();
        InformacionGeneral::where('id_candidato',$id)
        ->delete();

        Candidato::where('id_candidato',$id)
        ->delete();
        return Redirect::to('administrador/candidatos');
    }
    public function destroyCP($id){
        Postulacion::join("curriculo","postulacion.id_curriculo","=","curriculo.id_curriculo")
        ->where('curriculo.id_candidato',$id)
        ->delete();

        Curriculo::where('id_candidato',$id)
        ->delete();
        CursoTallerSeminario::where('id_candidato',$id)
        ->delete();
        EducacionSecundaria::where('id_candidato',$id)
        ->delete();
        EducacionTecnica::where('id_candidato',$id)
        ->delete();
        EducacionUniversitaria::where('id_candidato',$id)
        ->delete();
        ExperienciaLaboral::where('id_candidato',$id)
        ->delete();
        Habilidad::where('id_candidato',$id)
        ->delete();
        Idioma::where('id_candidato',$id)
        ->delete();
        InformacionGeneral::where('id_candidato',$id)
        ->delete();

        Candidato::where('id_candidato',$id)
        ->delete();
        return Redirect::to('administrador/candidatospremium');
    }
    public function destroyE($ide){
        Postulacion::join("anuncio","postulacion.id_anuncio","=","anuncio.id_anuncio")
        ->where('anuncio.id_empresa',$ide)
        ->delete();

        Anuncio::where('id_empresa',$ide)
        ->delete();

        Empresa::where('id_empresa',$ide)
        ->delete();
        return Redirect::to('administrador/empresas');

    }

    public function destroyEP($ide){
        Postulacion::join("anuncio","postulacion.id_anuncio","=","anuncio.id_anuncio")
        ->where('anuncio.id_empresa',$ide)
        ->delete();

        Anuncio::where('id_empresa',$ide)
        ->delete();

        Empresa::where('id_empresa',$ide)
        ->delete();
        return Redirect::to('administrador/empresas');

    }
}
