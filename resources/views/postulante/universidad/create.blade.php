@extends('layouts.postulante')

@section('content')
<div class="row">
    <div class="col-xs-8">
        <h3>INGRESAR NUEVA UNIVERSIDAD</h3>
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {!!Form::open(array('url'=>'candidato/universidades','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
        <div class="form-group">
            
            <div class="form-group has-feedback">
                <div class="input-group">
                    <input type="text" name="universidad" class="form-control" placeholder="Nombre Universidad">
                    <div class="input-group-addon">
                        <i class="fa fa-fw fa-bank"></i>
                    </div>
                </div>         
            </div>
            <div class="form-group">
                    <select name="carrera" class="form-control select2" style="width: 100%;">
                        <option selected="selected">Seleccionar Carrera</option>
                        <option>Carrera1</option>
                        <option>Carrera2</option>
                        <option>Carrera3</option>                                  
                    </select>
                </div>
            <div class="form-group">
                <select name="pais_universidad" class="form-control select2" style="width: 100%;">
                    <option selected="selected">Seleccionar Pais</option>
                    <option>Pais1</option>
                    <option>Pais2</option>
                    <option>Pais3</option>                                  
                </select>
            </div>
            <div class="form-group">
                <select name="ciudad_univeridad" class="form-control select2" style="width: 100%;">
                    <option selected="selected">Seleccionar Ciudad</option>
                    <option>Ciudad1</option>
                    <option>Ciudad2</option>
                    <option>Ciudad3</option>                                  
                </select>
            </div>
            <div class="form-group">
                <label>Fecha Fin:</label>
                <div class="input-group">
                    <input type="text" name="fecha_fin_universidad" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
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