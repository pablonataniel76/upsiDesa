@extends('layouts.postulante')

@section('content')
<div class="row justify-content-start">
    <div class="col-md-11">
       <div class="box box-primary">
            <div class="box-header">
                <section class="content-header">
                    <h1 class="fa fa-briefcase">Editar Experiencia Laboral: {{$experiencia->cargo_empresa}}, {{$experiencia->nombre_empresa}}</h1>
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
                            {!!Form::model($experiencia,['method'=>'PATCH','route'=>['experiencia.update',$experiencia->cargo_empresa]])!!}
                            {{Form::token()}}
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-5">
                                            <div class="form-group">
                                                    <input type="hidden" name="cargo_empresa" class="form-control" value="{{$experiencia->cargo_empresa}}" >
                                                    <input type="hidden" name="nombre_empresa" class="form-control" value="{{$experiencia->nombre_empresa}}" >
                                                    <div class="form-group">
                                                        <label for="categoria_experiencia">Categoria:</label>
                                                        <select name="categoria_experiencia" class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">{{$experiencia->categoria_experiencia}}</option>
                                                            <option>Categoria1</option>
                                                            <option>Categoria2</option>
                                                            <option>Categoria3</option>                                  
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="descripcion_experiencia">Descripcion:</label>
                                                        <textarea name="descripcion_experiencia" class="form-control" rows="10" placeholder="Descripcion Experiencia Laboral..." >{{$experiencia->descripcion_experiencia}}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pais_experiencia">Pais:</label>
                                                        <select name="pais_experiencia" class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">{{$experiencia->pais_experiencia}}</option>
                                                            <option>Pais1</option>
                                                            <option>Pais2</option>
                                                            <option>Pais3</option>                                  
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ciudad_experiencia">Ciudad:</label>
                                                        <select name="ciudad_experiencia" class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">{{$experiencia->ciudad_experiencia}}</option>
                                                            <option>Ciudad1</option>
                                                            <option>Ciudad2</option>
                                                            <option>Ciudad3</option>                                  
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
                                    <div class="col-md-5">
                                        <div class="form-group">
                                                <div class="form-group">
                                                        <label>Fecha Inicio:</label>
                                                        <div class="input-group">
                                                            <input type="text" name="fecha_inicio_experiencia" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask value="{{$experiencia->fecha_inicio_experiencia}}">
                                                            <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                            </div>                   
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Fecha Fin:</label>
                                                        <div class="input-group">
                                                            <input type="text" name="fecha_fin_experiencia" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask value="{{$experiencia->fecha_fin_experiencia}}">
                                                            <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                            </div>                   
                                                        </div>
                                                    </div>
                                                    <div class="form-group has-feedback">
                                                        <label for="personas_cargo">Personas a Cargo:</label>
                                                        <input type="text" name="personas_cargo" class="form-control" placeholder="Personas a cargo" value="{{$experiencia->personas_cargo}}">         
                                                    </div>
                                                    <div class="form-group has-feedback">
                                                        <label for="anios_experiencia">Años Trabajando:</label>
                                                        <input type="text" name="anios_experiencia" class="form-control" placeholder="Años Experiencia" value="{{$experiencia->anios_experiencia}}">        
                                                    </div>
                                                    <div class="form-group has-feedback">
                                                        <label for="nombre_referencia">Referencia:</label>
                                                        <div class="input-group">
                                                            <input type="text" name="nombre_referencia" class="form-control" placeholder="Nombre Referencia" value="{{$experiencia->nombre_referencia}}">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-fw fa-user"></i>
                                                            </div>
                                                        </div>         
                                                    </div>
                                                    <div class="form-group has-feedback">
                                                        <label for="telefono_referencia">Telefono:</label>
                                                        <div class="input-group">
                                                            <input type="text" name="telefono_referencia" class="form-control" placeholder="Telefono Referencia" value="{{$experiencia->telefono_referencia}}">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-fw fa-phone"></i>
                                                            </div>
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