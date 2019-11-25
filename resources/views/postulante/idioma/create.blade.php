@extends('layouts.postulante')

@section('content')
<div class="row justify-content-start">
    <div class="col-md-11">
        <div class="box box-primary">
                <div class="box-header">
                    <section class="content-header">
                        <h1 class="fa fa-language">Ingresar Nuevo Idioma</h1>
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
                                {!!Form::open(array('url'=>'candidato/idiomas','method'=>'POST','autocomplete'=>'off'))!!}
                                {{Form::token()}}
                                
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <div class="form-group has-feedback">
                                                    <label for="idioma">Idioma:</label>
                                                    <div class="input-group">
                                                        <input type="text" name="idioma" class="form-control" placeholder="Idiomas">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-language"></i>
                                                        </div>
                                                    </div>         
                                                </div>
                                                <div class="form-group">
                                                    <label for="nivel_escritura">Nivel de Escritura:</label>
                                                    <select name="nivel_escritura" class="form-control select2" style="width: 100%;">
                                                        <option>Basico</option>
                                                        <option>Intermedio</option>
                                                        <option>Avanzado</option>                                  
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nivel_oral">Nivel Oral:</label>    
                                                    <select name="nivel_oral" class="form-control select2" style="width: 100%;">                                                        
                                                        <option>Basico</option>
                                                        <option>Intermedio</option>
                                                        <option>Avanzado</option>                                  
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nivel_lectura">Nivel de Lectura:</label>
                                                    <select name="nivel_lectura" class="form-control select2" style="width: 100%;">                                                    
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