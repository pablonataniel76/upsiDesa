@extends('layouts.postulante')

@section('content')
<div class="row justify-content-start">
    <div class="col-md-11">
        <div class="box box-primary">
                <div class="box-header">
                    <section class="content-header">
                        <h1 class="fa fa-file-text-o">Crear un Nuevo Curriculum</h1>
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
                                {!!Form::open(array('url'=>'candidato/curriculo','method'=>'POST','autocomplete'=>'off'))!!}
                                {{Form::token()}}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5">
                                                <h3>Informacion General del Curriculum</h3>
                                                <div class="form-group">
                                                        <div class="form-group has-feedback">
                                                            <label for="titulo_informacion">Titulo Academico:</label>
                                                            <input type="text" name="titulo_informacion" class="form-control" placeholder="Titulo">        
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="categoria_informacion">Categoria:</label>
                                                            <select name="categoria_informacion" class="form-control select2" style="width: 100%;">
                                                                <option>Categoria1</option>
                                                                <option>Categoria2</option>
                                                                <option>Categoria3</option>                                 
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contrato_informacion">Tipo de Contrato:</label>
                                                            <select name="contrato_informacion" class="form-control select2" style="width: 100%;">
                                                                <option>Tiempo Completo</option>
                                                                <option>Medio Tiempo</option>
                                                                <option>Temporal</option>                                  
                                                            </select>
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="pretension_salarial">Pretension Salarial:</label>
                                                            <div class="input-group">
                                                                <input type="text" name="pretension_salarial" class="form-control" placeholder="Pretension Salarial">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-fw fa-money"></i>
                                                                </div>
                                                            </div>         
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="presentacion_biografica">Presentacion Biografica:</label>
                                                            <textarea name="presentacion_biografica" class="form-control" rows="10" placeholder="Presentacion Biografica..."></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="ciudad_residencia_actual">Ciudad de Residencia Actual:</label>
                                                            <select name="ciudad_residencia_actual" class="form-control select2" style="width: 100%;">
                                                                <option>Ciudad1</option>
                                                                <option>Ciudad2</option>
                                                                <option>Ciudad3</option>                                  
                                                            </select>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                        </div>
                                        <div class="col-md-5">
                                            <h3>Seleccionar la Informacion que Desee Agregar</h3>
                                            <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="taller">Desea mostrar Cursos, Talleres, Seminarios?:</label>
                                                        <select name="taller" class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">Agregar Cursos, Talleres, Seminarios</option>
                                                            <option>Si</option>
                                                            <option>No</option>                                
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="secundaria">Desea mostrar Educacion Secundaria?:</label>
                                                        <select name="secundaria" class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">Agregar Educacion Secundaria</option>
                                                            <option>Si</option>
                                                            <option>No</option>                                
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tecnica">Desea mostrar Educacion Tecnica?:</label>
                                                        <select name="tecnica" class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">Agregar Educacion Tecnica</option>
                                                            <option>Si</option>
                                                            <option>No</option>                                
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="universitaria">Desea mostrar Educacion Universitaria?:</label>
                                                        <select name="universitaria" class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">Agregar Educacion Universitaria</option>
                                                            <option>Si</option>
                                                            <option>No</option>                                
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="experiencia">Desea mostrar Experiencia Laboral?:</label>
                                                        <select name="experiencia" class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">Agregar Experiencia Laboral</option>
                                                            <option>Si</option>
                                                            <option>No</option>                                
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="idioma">Desea mostrar Idiomas?:</label>
                                                        <select name="idioma" class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">Agregar Idiomas</option>
                                                            <option>Si</option>
                                                            <option>No</option>                                
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="habilidad">Desea mostrar Habilidades?:</label>
                                                        <select name="habilidad" class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">Agregar Habilidades</option>
                                                            <option>Si</option>
                                                            <option>No</option>                                
                                                        </select>
                                                    </div>
                                                    <br><br><br>
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                                {{-- <a href="{{URL::action('Postulante\CurriculoController@pdf')}}"
                                                                type="submit" class="btn btn-primary">Descargar</a> --}}
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