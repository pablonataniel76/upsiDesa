@extends('layouts.postulante')

@section('content')
<div class="row justify-content-start">
    <div class="col-md-11">
        <div class="box box-primary">
                <div class="box-header">
                    <section class="content-header">
                        <h1 class="fa fa-building">Ingresar Nuevo Estudio Tecnico</h1>
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
                                {!!Form::open(array('url'=>'candidato/tecnicas','method'=>'POST','autocomplete'=>'off'))!!}
                                {{Form::token()}}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5">
                                                <div class="form-group">                                    
                                                        <div class="form-group has-feedback">
                                                            <label for="institucion_tecnica">Institucion Tecnica:</label>
                                                            <div class="input-group">
                                                                <input type="text" name="institucion_tecnica" class="form-control" placeholder="Institucion Tecnica">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-fw fa-bank"></i>
                                                                </div>
                                                            </div>         
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="curso_tecnico">Curso:</label>
                                                            <input type="text" name="curso_tecnico" class="form-control" placeholder="Curso Tecnico">        
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pais_tecnico">Pais:</label>
                                                            <select name="pais_tecnico" class="form-control select2" style="width: 100%;">
                                                                <option>Pais1</option>
                                                                <option>Pais2</option>
                                                                <option>Pais3</option>                                  
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="ciudad_tecnico">Ciudad:</label>
                                                            <select name="ciudad_tecnico" class="form-control select2" style="width: 100%;">
                                                                <option>Ciudad1</option>
                                                                <option>Ciudad2</option>
                                                                <option>Ciudad3</option>                                  
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Fecha Fin:</label>
                                                            <div class="input-group">
                                                                <input type="text" name="fecha_curso_tecnico" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
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