@extends('layouts.permisos')
@section ('content')
<div class="row justify-content-start">
    <div class="box box-primary">
        <div class="box-header">
            <section class="content-header">
                <h1 class="fa fa-user">Registrarse</h1>
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
                    {!!Form::open(array('url'=>'empresa/','method'=>'POST','autocomplete'=>'off', 'enctype'=>'multipart/form-data'))!!}
                    {{Form::token()}}
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="email_empresa">Email</label>
                                    <input name="email_empresa" type="email" class="form-control" placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <label for="contrasenia_empresa">Contrasenia</label>
                                    <input name="contrasenia_empresa" type="password" class="form-control" placeholder="Contrasenia">
                                </div>

                                <div class="form-group">
                                    <label for="descripcion_empresa">Descripcion</label>
                                    <textarea name="descripcion_empresa" class="form-control" rows="3" placeholder="500 caracteres"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="nombre_responsable">Nombre de Responsable</label>
                                    <input name="nombre_responsable" type="text" class="form-control" placeholder="Responsable de Empresa">
                                </div>

                                <div class="form-group">
                                    <label for="logo">Logo de Empresa</label>
                                    <input name="logo" type="file">
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="nombre_empresa">Nombre de Empresa</label>
                                    <input name="nombre_empresa" type="text" class="form-control" placeholder="Nombre Empresa">
                                </div>

                                <div class="form-group">
                                    <label for="ciudad_empresa">Ciudad</label>
                                    <select name="ciudad_empresa" class="form-control">
                                        <option value="Cochabamba">Cochabamba</option>
                                        <option value="Santa Cruz">Santa Cruz</option>
                                        <option value="La Paz">La Paz</option>
                                        <option value="Oruro">Oruro</option>
                                        <option value="Potosi">Potosi</option>
                                        <option value="Sucre">Sucre</option>
                                        <option value="Tarija">Tarija</option>
                                        <option value="Beni">Beni</option>
                                        <option value="Pando">Pando</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="direccion_empresa">Direccion</label>
                                    <input name="direccion_empresa" type="text" class="form-control" placeholder="Direccion">
                                </div>

                                <div class="form-group">
                                    <label for="telefono_empresa">Telefono</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input name="telefono_empresa" type="number" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="celular_empresa">Celular</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-mobile"></i>
                                        </div>
                                        <input name="celular_empresa" type="number" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="sitio_web">Sitio Web</label>
                                    <input name="sitio_web" type="text" class="form-control" placeholder="www.ejemplo.com">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a href="{{ url()->previous() }}" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>
@endsection
