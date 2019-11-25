@extends('layouts.postulante')

@section('content')
<div class="row">
        <div class="col-xs-12">
                <div class="box">
                        <div class="box-header">
                                <section class="content-header">
                                        <h1 class="fa fa-indent">Detalles del Anuncio</h1>
                                </section>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <h1>{{$anuncio->cargo_anuncio}}</h1>
                            <br>
                            <div class="col-xs-12">
                                    <h5 class="col-xs-2"><strong>Categoria:</strong></h5>
                                    <h5 class="col-xs-4">{{$anuncio->categoria_anuncio}}</h5>
                                    <h5 class="col-xs-3" align="right"><strong>Tipo de Sueldo:</strong></h5>
                                    <h5 class="col-xs-3">{{$anuncio->tipo_sueldo}}</h5>
                            </div>

                            <div class="col-xs-12">
                                    <h5 class="col-xs-2"><strong>Contrato:</strong></h5>
                                    <h5 class="col-xs-4">{{$anuncio->contrato_anuncio}}</h5>
                                    <h5 class="col-xs-3" align="right"><strong>Sueldo:</strong></h5>
                                    <h5 class="col-xs-3">{{$anuncio->sueldo}}</h5>
                            </div>        
                        
                             <hr class="col-xs-11">

                            <div class="row">
                                <div class="col-xs-12">
                                        <label for="">Detalles:</label>
                                        <p>{{$anuncio->descripcion_anuncio}}</p>
                                </div>
                            </div>
                           
                            <hr class="col-xs-11">
                            <h5 align="center">{{$anuncio->ciudad_anuncio}},{{$anuncio->publicacion_anuncio}}</h5>
                            <div class="col-xs-12" align="center"> 
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success" >
                                            POSTULAR
                                    </button>
                            </div>
                            @include('postulante.anuncio.modal')
                            {{-- <div style="width:500px;height:100px;border:1px solid #000;">This is a rectangle!</div> --}}
                        </div>
                        
                </div>
        
      </div>
</div>

@endsection