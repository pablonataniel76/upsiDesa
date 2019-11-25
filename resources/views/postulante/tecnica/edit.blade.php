@extends('layouts.postulante')

@section('content')
<div class="row justify-content-start">
    <div class="col-md-11">
        <div class="box box-primary">
                <div class="box-header">
                    <section class="content-header">
                        <h1 class="fa fa-building">Editar Estudio Tecnico: {{$tecnica->institucion_tecnica}}, {{$tecnica->curso_tecnico}}</h1>
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
                            
                {!!Form::model($tecnica,['method'=>'PATCH','route'=>['tecnicas.update',$tecnica->institucion_tecnica]])!!}
                {{Form::token()}}
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                                <div class="form-group">
                                        <input type="hidden" name="institucion_tecnica" class="form-control" value="{{$tecnica->institucion_tecnica}}" >
                                        <input type="hidden" name="curso_tecnico" class="form-control" value="{{$tecnica->curso_tecnico}}" >
                                        <div class="form-group">
                                            <label for="pais_tecnico">Pais:</label>
                                            <select name="pais_tecnico" class="form-control select2" style="width: 100%;">
                                                <option selected="selected">{{$tecnica->pais_tecnico}}</option>
                                                <option>Pais1</option>
                                                <option>Pais2</option>
                                                <option>Pais3</option>                                  
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="ciudad_tecnico">Ciudad:</label>
                                            <select name="ciudad_tecnico" class="form-control select2" style="width: 100%;">
                                                <option selected="selected">{{$tecnica->ciudad_tecnico}}</option>
                                                <option>Ciudad1</option>
                                                <option>Ciudad2</option>
                                                <option>Ciudad3</option>                                  
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha Fin:</label>
                                            <div class="input-group">
                                                <input type="text" name="fecha_curso_tecnico" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask value="{{$tecnica->fecha_curso_tecnico}}">
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