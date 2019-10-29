@extends('layouts.postulante')

@section('content')
<div class="row">
    <div class="col-xs-8">
        <h3>INGRESAR NUEVO CURSO, TALLER, SEMINARIO</h3>
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {!!Form::open(array('url'=>'candidato/talleres','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
        <div class="form-group">
            
            <div class="form-group has-feedback">
                <div class="input-group">
                    <input type="text" name="nombre_taller" class="form-control" placeholder="Taller, Curso o Seminario">
                    <div class="input-group-addon">
                        <i class="fa fa-fw fa-bank"></i>
                    </div>
                </div>         
            </div>
            <div class="form-group has-feedback">
                <div class="input-group">
                    <input type="text" name="impartido_por" class="form-control" placeholder="Impartido por">
                    <div class="input-group-addon">
                        <i class="fa fa-fw fa-bank"></i>
                    </div>
                </div>         
            </div>
            <div class="form-group has-feedback">
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
        {!! Form::close() !!}
        

       
    </div>
</div>
@endsection