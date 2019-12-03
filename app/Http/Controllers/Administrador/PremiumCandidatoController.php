<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\PremiumCandidato;
use App\Modelos\Candidato;
use App\Modelos\PeriodoCandidatop;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PremiumCandidatoFormRequest;
use Carbon\Carbon;
use DB;

class PremiumCandidatoController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $peticionc=DB::table('premium_candidato as pc')
            ->join('candidato as c','c.id_candidato','=','pc.id_candidatop');
            $peticionc=$peticionc->get();
            return view('administrador.candidato.peticion',["peticionc"=>$peticionc]);
        }
    }

    public function becomePremium($id){
        $candidato=Candidato::findOrFail($id);
        $candidato->premium_candidato='1';
        $candidato->update();

        $mytime = Carbon::now();
        $mytime = $mytime->format('Y-m-d');

        $vencimiento=Carbon::parse($mytime)->addYear()->format('Y-m-d');;

        $canperiodo=new PeriodoCandidatop;
        $canperiodo->id_candidatoperiodo=$id;
        $canperiodo->inicio_suscripcion=$mytime;
        $canperiodo->fin_suscripcion=$vencimiento;
        $canperiodo->save();

        PremiumCandidato::where('id_candidatop',$id)->delete();

        return Redirect::to('administrador/candidatos/peticionpremium');
    }
}
