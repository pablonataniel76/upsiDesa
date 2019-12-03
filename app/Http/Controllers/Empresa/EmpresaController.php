<?php

namespace App\Http\Controllers\Empresa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\Empresa;
use App\Modelos\Anuncio;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\EmpresaFormRequest;
use App\Http\Requests\AnuncioFormRequest;
use DB;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $anuncios=DB::table('empresa as em')
            ->join('anuncio as an', 'em.id_empresa', '=', 'an.id_empresa')
            ->where('em.id_empresa','=','101');
            $anuncios=$anuncios->get();
            return view('empresa.index', ["anuncios"=>$anuncios]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $anuncios=DB::table('empresa as em')
        ->join('anuncio as an', 'em.id_empresa', '=', 'an.id_empresa')
        ->where('em.id_empresa','=','101');
        $anuncios=$anuncios->get();
        
        return view('empresa.create', ["anuncios"=>$anuncios]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpresaFormRequest $request)
    {
        if( $request->hasFile('logo') ){
            $file = $request->file('logo');
            $nombre = time().$file->getClientOriginalName();
            $file->move(public_path().'/logos_empresa/', $nombre);
            
            $empresa=new Empresa;
            $empresa->email_empresa         = $request->get('email_empresa');
            $empresa->contrasenia_empresa   = $request->get('contrasenia_empresa');
            $empresa->ciudad_empresa        = $request->get('ciudad_empresa');
            $empresa->direccion_empresa     = $request->get('direccion_empresa');
            $empresa->telefono_empresa      = $request->get('telefono_empresa');
            $empresa->celular_empresa       = $request->get('celular_empresa');
            $empresa->nombre_empresa        = $request->get('nombre_empresa');
            $empresa->nombre_responsable    = $request->get('nombre_responsable');
            $empresa->sitio_web             = $request->get('sitio_web');
            $empresa->descripcion_empresa   = $request->get('descripcion_empresa');
            $empresa->logo                  = $nombre;
    
            $empresa->save();
        }

        return Redirect::to('empresa/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view('empresa.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anuncios=DB::table('empresa as em')
        //->join('empresa as em', 'em.id_empresa', '=', 'an.id_empresa')
        ->where('em.id_empresa','=', $id);
        $anuncios=$anuncios->get();

        $empresa=DB::table('empresa as em')
            ->where('em.id_empresa', '=', $id);
            $empresa=$empresa->get();
            return view('empresa.edit', ["empresa"=>$empresa, "anuncios"=>$anuncios]);
    }

   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmpresaFormRequest $request, $id)
    {
        if( $request->hasFile('logo') ){
            $file = $request->file('logo');
            $nombre = time().$file->getClientOriginalName();
            $file->move(public_path().'/logos_empresa/', $nombre);
            //return $nombre;
            $empresa = Empresa::findOrFail($id);
            $empresa->email_empresa         = $request->get('email_empresa');
            $empresa->contrasenia_empresa   = $request->get('contrasenia_empresa');
            $empresa->ciudad_empresa        = $request->get('ciudad_empresa');
            $empresa->direccion_empresa     = $request->get('direccion_empresa');
            $empresa->telefono_empresa      = $request->get('telefono_empresa');
            $empresa->celular_empresa       = $request->get('celular_empresa');
            $empresa->nombre_empresa        = $request->get('nombre_empresa');
            $empresa->nombre_responsable    = $request->get('nombre_responsable');
            $empresa->sitio_web             = $request->get('sitio_web');
            $empresa->descripcion_empresa   = $request->get('descripcion_empresa');
            $empresa->logo                  = $request->get('logo');
    
            $empresa->update();
        }
        return Redirect::to('empresa/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
