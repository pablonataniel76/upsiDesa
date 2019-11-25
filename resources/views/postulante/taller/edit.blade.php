@extends('layouts.postulante')

@section('content')
<div class="row justify-content-start">
    <div class="col-md-11">
        <div class="box box-primary">
                <div class="box-header">
                    <section class="content-header">
                        <h1 class="fa fa-gears">Editar Curso, Taller, Seminario: {{$taller->nombre_taller}}</h1>
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
                                {!!Form::model($taller,['method'=>'PATCH','route'=>['talleres.update',$taller->nombre_taller]])!!}
                                {{Form::token()}}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5">
                                                <div class="form-group">
                                                        <input type="hidden" name="nombre_taller" class="form-control" value="{{$taller->nombre_taller}}" >
                                                        <div class="form-group has-feedback">
                                                            <label for="impartido_por">Impartido por:</label>
                                                            <div class="input-group">
                                                                <input type="text" name="impartido_por" class="form-control" value="{{$taller->impartido_por}}" placeholder="Impartido por">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-fw fa-male"></i>
                                                                </div>
                                                            </div>         
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="lugar_taller">Lugar:</label>
                                                            <div class="input-group">
                                                                <input type="text" name="lugar_taller" class="form-control" value="{{$taller->lugar_taller}}" placeholder="Lugar">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-fw fa-bank"></i>
                                                                </div>
                                                            </div>         
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Fecha:</label>
                                                            <div class="input-group">
                                                                <input type="text" name="fecha_taller" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask value="{{$taller->fecha_taller}}">
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