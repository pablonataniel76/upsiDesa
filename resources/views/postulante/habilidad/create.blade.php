@extends('layouts.postulante')

@section('content')
<div class="row justify-content-start">
    <div class="col-md-11">
        <div class="box box-primary">
                <div class="box-header">
                    <section class="content-header">
                        <h1 class="fa fa-wrench">Ingresar Nueva Habilidad</h1>
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
                                {!!Form::open(array('url'=>'candidato/habilidades','method'=>'POST','autocomplete'=>'off'))!!}
                                {{Form::token()}}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5">
                                                <div class="form-group">                                
                                                        <div class="form-group has-feedback">
                                                            <label for="habilidad">Habilidad:</label>
                                                            <div class="input-group">
                                                                <input type="text" name="habilidad" class="form-control" placeholder="Habilidad">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-fw fa-wrench"></i>
                                                                </div>
                                                            </div>         
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="anios_habilidad">Años de Experiencia en Habilidad:</label>
                                                            <div class="input-group">
                                                               <input type="text" name="anios_habilidad" class="form-control" placeholder="Años de esperiencia">
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