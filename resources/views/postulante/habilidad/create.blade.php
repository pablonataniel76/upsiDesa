@extends('layouts.postulante')

@section('content')
<div class="row">
    <div class="col-xs-8">
        <h3>INGRESAR NUEVA HABILIDAD</h3>
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {!!Form::open(array('url'=>'candidato/habilidades','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
        <div class="form-group">
            
            <div class="form-group has-feedback">
                <div class="input-group">
                    <input type="text" name="habilidad" class="form-control" placeholder="Habilidad">
                    <div class="input-group-addon">
                        <i class="fa fa-fw fa-wrench"></i>
                    </div>
                </div>         
            </div>
            <div class="form-group has-feedback">
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
        {!! Form::close() !!}
        

       
    </div>
</div>
@endsection