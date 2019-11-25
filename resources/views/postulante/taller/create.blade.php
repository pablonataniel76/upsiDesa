@extends('layouts.postulante')

@section('content')
<div class="row justify-content-start">
    <div class="col-md-11">
        <div class="box box-primary">
                <div class="box-header">
                    <section class="content-header">
                        <h1 class="fa fa-gears">Ingresar Nuevo Curso, Taller, Seminario</h1>
                    </section>
                </div>
                @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="row">
                    <section class="content">
                        <div class="col-md-10">
                                {!!Form::open(array('url'=>'candidato/talleres','method'=>'POST','autocomplete'=>'off'))!!}
                                {{Form::token()}}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5">
                                                <div class="form-group">
                                    
                                                        <div class="form-group has-feedback">
                                                            <label for="nombre_taller">Nombre del Taller, Curso, Seminario:</label>
                                                            <input type="text" name="nombre_taller" class="form-control" placeholder="Taller, Curso o Seminario">         
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="impartido_por">Impartido por:</label>
                                                            <div class="input-group">
                                                                <input type="text" name="impartido_por" class="form-control" placeholder="Impartido por">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-fw fa-male"></i>
                                                                </div>
                                                            </div>         
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="lugar_taller">Lugar:</label>
                                                            <div class="input-group">
                                                                <input type="text" name="lugar_taller" class="form-control" placeholder="Lugar">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-fw fa-bank"></i>
                                                                </div>
                                                            </div>         
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Fecha:</label>
                                                            <div class="input-group">
                                                                <input type="text" name="fecha_taller" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
                                                                <div class="input-group-addon">
                                                                <i class="fa fa-calendar"></i>
                                                                </div>                   
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <button type="submit" class="btn btn-primary ">GUARDAR</button>
                                                                <button type="reset" class="btn btn-danger">CANCELAR</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>
                                    </div>
                                </div>
                                {!! Form::close() !!}
                        </div>
                    </section>
                </div>
        </div>
    </div>
</div>
@endsection