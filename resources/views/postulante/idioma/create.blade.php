@extends('layouts.postulante')

@section('content')
<div class="row">
    <div class="col-xs-8">
        <h3>INGRESAR NUEVO IDIOMA</h3>
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {!!Form::open(array('url'=>'candidato/idiomas','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
        <div class="form-group">
            
            <div class="form-group has-feedback">
                <div class="input-group">
                    <input type="text" name="idioma" class="form-control" placeholder="Idiomas">
                    <div class="input-group-addon">
                        <i class="fa fa-fw fa-wrench"></i>
                    </div>
                </div>         
            </div>
            <div class="form-group">
                <select name="nivel_escritura" class="form-control select2" style="width: 100%;">
                    <option selected="selected">Nivel de Escritura</option>
                    <option>Basico</option>
                    <option>Intermedio</option>
                    <option>Avanzado</option>                                  
                </select>
            </div>
            <div class="form-group">
                <select name="nivel_oral" class="form-control select2" style="width: 100%;">
                    <option selected="selected">Nivel Oral</option>
                    <option>Basico</option>
                    <option>Intermedio</option>
                    <option>Avanzado</option>                                  
                </select>
            </div>
            <div class="form-group">
                <select name="nivel_lectura" class="form-control select2" style="width: 100%;">
                    <option selected="selected">Nivel de Escritura</option>
                    <option>Basico</option>
                    <option>Intermedio</option>
                    <option>Avanzado</option>                                 
                </select>
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