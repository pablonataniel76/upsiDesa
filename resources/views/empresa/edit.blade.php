@extends('layouts.permisos')
@section ('content')
<div class="row justify-content-start">
    <div class="box box-primary">
        <div class="box-header">
            <section class="content-header">
                <h1 class="fa fa-user">Editar Datos de {{ $empresa[0]->nombre_empresa }}</h1>
            </section>
        </div>
        <div class="row">
            <section class="content">
                <div class="col-md-10">
                    {{-- {!!Form::model(array('url'=>'empresa/','method'=>'POST','autocomplete'=>'off', 'enctype'=>'multipart/form-data'))!!} --}}
                    {!!Form::model($empresa,['method'=>'PATCH','route'=>['empresa.update',$empresa[0]->id_empresa]])!!}
                    {{Form::token()}}
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="EMAIL">Email</label>
                                    <input name="EMAIL" type="email" class="form-control" placeholder="Email" value="{{ $empresa[0]->email_empresa }}">
                                </div>

                                <div class="form-group">
                                    <label for="CONTRASENIA">Contrasenia</label>
                                    <input name="CONTRASENIA" type="password" class="form-control" placeholder="Contrasenia" value="{{ $empresa[0]->contrasenia_empresa }}">
                                </div>

                                <div class="form-group">
                                    <label for="DESCRIPCION">Descripcion</label>
                                    <textarea name="DESCRIPCION" class="form-control" rows="3" placeholder="500 caracteres">{{ $empresa[0]->descripcion_empresa }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="RESPONSABLE">Nombre de Responsable</label>
                                    <input name="RESPONSABLE" type="text" class="form-control" placeholder="Responsable de Empresa" value="{{ $empresa[0]->nombre_responsable }}">
                                </div>
                                    
                                <div class="form-group">
                                    <label for="LOGO">Logo de Empresa</label>
                                    <br>
                                    <img src="../../logos_empresa/{{ $empresa[0]->logo }}" width="100" height="100">
                                    <input name="LOGO" type="file">
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="NEMPRESA">Nombre de Empresa</label>
                                    <input name="NEMPRESA" type="text" class="form-control" placeholder="Nombre Empresa" value="{{ $empresa[0]->nombre_empresa }}">
                                </div>

                                <div class="form-group">
                                    <label for="CIUDAD">Ciudad</label>
                                    <select name="CIUDAD" class="form-control">
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
                                    <label for="DIRECCION">Direccion</label>
                                    <input name="DIRECCION" type="text" class="form-control" placeholder="Direccion" value="{{ $empresa[0]->direccion_empresa }}">
                                </div>

                                <div class="form-group">
                                    <label for="TELEFONO">Telefono</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input name="TELEFONO" type="number" class="form-control" value="{{ $empresa[0]->telefono_empresa }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="CELULAR">Celular</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-mobile"></i>
                                        </div>
                                        <input name="CELULAR" type="number" class="form-control" value="{{ $empresa[0]->celular_empresa }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="WEB">Sitio Web</label>
                                    <input name="WEB" type="text" class="form-control" placeholder="www.ejemplo.com" value="{{ $empresa[0]->sitio_web }}">
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
