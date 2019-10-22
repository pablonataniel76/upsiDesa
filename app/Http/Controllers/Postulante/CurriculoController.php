<?php

namespace App\Http\Controllers\Postulante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curriculo;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CurriculoFormRequest;
use DB;

class CurriculoController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if($request){
            $curriculos=DB::table('curriculo as cu')
            ->where('cu.id_candidato','=','100001');
            $curriculos=$curriculos->get();
            return view('postulante.curriculo.index',["curriculos"=>$curriculos]);
        }
    }
    public function create(){
        
    }
    public function store(){
        
    }
    public function show(){
        
    }
    public function edit(){
        
    }
    public function destroy(){
        
    }
    public function index2(Request $request){
        if($request){
            $curriculos=DB::table('curriculo as cu')
            ->where('cu.id_candidato','=','100001');
            $curriculos=$curriculos->get();
            return view('postulante.curriculo.index',["curriculos"=>$curriculos]);
        }
    }
}
