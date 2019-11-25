@extends('layouts.postulante')

@section('content')
<div class="row justify-content-start">
    <div class="col-md-11">
        <div class="box box-primary">
                <div class="box-header">
                        <section class="content-header">
                            <h1 class="fa fa-paper-plane">Editar Idioma: {{$idioma->idioma}}</h1>
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
                                {!!Form::model($idioma,['method'=>'PATCH','route'=>['idiomas.update',$idioma->idioma]])!!}
                                {{Form::token()}}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5">
                                                <div class="form-group">
                                                        <input type="hidden" name="idioma" class="form-control" value="{{$idioma->idioma}}" >
                                                        <div class="form-group">
                                                            <label for="nivel_escritura">Nivel de Escritura:</label>
                                                            <select name="nivel_escritura" class="form-control select2" style="width: 100%;"  >
                                                                <option selected="selected">{{$idioma->nivel_escritura}}</option>
                                                                <option>Basico</option>
                                                                <option>Intermedio</option>
                                                                <option>Avanzado</option>                                  
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nivel_oral">Nivel Oral:</label>
                                                            <select name="nivel_oral" class="form-control select2" style="width: 100%;">
                                                                <option selected="selected">{{$idioma->nivel_oral}}</option>
                                                                <option>Basico</option>
                                                                <option>Intermedio</option>
                                                                <option>Avanzado</option>                                  
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nivel_lectura">Nivel de Lectura:</label>
                                                            <select name="nivel_lectura" class="form-control select2" style="width: 100%;">
                                                                <option selected="selected">{{$idioma->nivel_lectura}}</option>
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