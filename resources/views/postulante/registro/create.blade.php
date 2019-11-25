@extends('layouts.postulante')

@section('content')
<div class="row justify-content-start">
    <div class="col-md-11">
        <div class="box box-primary">
                <div class="box-header">
                    <section class="content-header">
                        <h1 class="fa fa-list-alt">Registro Candidato Nuevo</h1>
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
                                {!!Form::open(array('url'=>'candidato','method'=>'POST','autocomplete'=>'off'))!!}
                                {{Form::token()}}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5">
                                                <div class="form-group">
                                                        <div class="form-group has-feedback">
                                                            <label for="email_candidato">Correo Electronico:</label>
                                                            <input type="email" name="email_candidato" class="form-control" placeholder="Email">
                                                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="contrasenia_candidato">Contraseña:</label>
                                                            <input type="password" name="contrasenia_candidato" class="form-control" placeholder="Contraseña">
                                                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="ciudad_candidato">Ciudad:</label>
                                                            <select name="ciudad_candidato" class="form-control select2" style="width: 100%;">
                                                                <option>Ciudad1</option>
                                                                <option>Ciudad2</option>
                                                                <option>Ciudad3</option>                                  
                                                            </select>
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="direccion_candidato">Direccion:</label>
                                                            <input type="text" name="direccion_candidato" class="form-control" placeholder="Direccion">
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="telefono_candidato">Telefono:</label>
                                                            <div class="input-group">
                                                                <input type="text" name="telefono_candidato" class="form-control" placeholder="Telefono">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-phone"></i>
                                                                </div>
                                                            </div>         
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="celular_candidato">Celular:</label>
                                                            <div class="input-group">
                                                                <input type="text" name="celular_candidato" class="form-control" placeholder="Celular">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-mobile"></i>
                                                                </div>
                                                            </div>         
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label for="nombre_candidato">Nombre(s):</label>
                                                            <input type="text" name="nombre_candidato" class="form-control" placeholder="Nombre Completo">
                                                        </div>
                                                        
                                                </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                    <div class="form-group has-feedback">
                                                        <label for="apellido_candidato">Apellidos:</label>
                                                        <input type="text" name="apellido_candidato" class="form-control" placeholder="Apellidos">
                                                    
                                                    </div>
                                                    <div class="form-group">
                                                            <label>Fecha de Nacimiento:</label>
                                                            <div class="input-group">
                                                                <input type="text" name="fecha_nacimiento" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
                                                                <div class="input-group-addon">
                                                                <i class="fa fa-calendar"></i>
                                                                </div>                   
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Sexo:</label>
                                                            <br>
                                                                <label>
                                                                    <input type="radio" name="sexo" class="minimal" value="femenino" checked>
                                                                    Femenino
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="sexo" class="minimal" value="masculino">
                                                                    Masculino
                                                                </label>                                                        
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Estado Civil::</label>
                                                            <select name="estado_civil" class="form-control select2" style="width: 100%;">
                                                                <option selected="selected">Seleccionar Estado Civil</option>
                                                                <option>Soltero</option>
                                                                <option>Casado</option>
                                                                <option>Divorciado</option>
                                                                <option>Viudo</option>                                
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tipo de Documento:</label>
                                                            <select name="tipo_documento_identidad" class="form-control select2" style="width: 100%;">
                                                                <option selected="selected">Seleccionar Tipo de Documento</option>
                                                                <option>Carnet</option>
                                                                <option>Pasaporte</option>                                
                                                            </select>
                                                        </div>
                                                        <div class="form-group has-feedback">
                                                            <label>Numero de Documento:</label>
                                                            <input type="text" name="numero_documento_identidad" class="form-control" placeholder="Introducir Numero de Documento">                        
                                                        </div>
                                                    
                                                        
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="checkbox icheck">
                                                                <label>
                                                                    <input type="checkbox"> Acepto <a href="#">Términos de Uso y la Política de Privacidad</a>
                                                                </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <button type="submit" class="btn btn-primary ">REGISTRARSE</button>
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