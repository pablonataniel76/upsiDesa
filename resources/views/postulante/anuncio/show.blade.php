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
                        <div class="box-body">
                                <div class="container">
                                        <div class="row">
                                                <div class="col-md-10"><h1>{{$anuncio->cargo_anuncio}}</h1></div>
                                                <div class="col-md-6">
                                                        <div class="col-md-10">
                                                                <label for="">Detalles:</label>
                                                                <p>{{$anuncio->descripcion_anuncio}}</p>
                                                        </div>
                                                </div>
                                                <div class="col-md-6">
                                                                <h5 class="coll-xs-2"><strong>Categoria: </strong>{{$anuncio->categoria_anuncio}}</h5>
                                                        <h5 class="col-lxs-4"></h5>
                                                        <h5 class="col-xls-3" ><strong>Tipo de Sueldo: </strong>{{$anuncio->tipo_sueldo}}</h5>
                                                        <h5 class="col-xsl-3"></h5>

                                                        <h5 class="coll-xs-2"><strong>Contrato: </strong>{{$anuncio->contrato_anuncio}}</h5>
                                                        <h5 class="coll-xs-4"></h5>
                                                        <h5 class="col-lxs-3" ><strong>Sueldo: </strong>{{$anuncio->sueldo}}</h5>
                                                        <h5 class="col-xls-3"></h5>
                                                </div>

                                                <div class="col-xs-12" align="center"> 
                                                                <hr class="col-xs-11">
                                                                <h5 align="center">{{$anuncio->ciudad_anuncio}},{{$anuncio->publicacion_anuncio}}</h5>
                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success" >
                                                                POSTULAR
                                                        </button>
                                                </div>
                                                @include('postulante.anuncio.modal')
                                        </div>
                                </div>
                        </div>
                </div>
      </div>
</div>
@endsection


