@extends('layouts.permisos')
@section ('content')
<div class="row justify-content-start">
    <div class="col-md-11">
        <div class="box box-widget">
            <div class="box-header with-border">
                <div class="user-block">
                    <section class="content-header">
                        <h1 class="fa fa-search">Buscar Curriculum</h1>
                    </section>
                </div>
                <div class="box-tools">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body"> 
                <form action="">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="EMAIL">Palabra Clave</label>
                            <input type="email" class="form-control" value="" name="" placeholder="Ingrese el email" required>
                        </div>
                                    
                        <div class="form-group">
                            <label for="contrasenia">Palabras Especificas en</label>
                            <input type="password" class="form-control" name="" placeholder="Ingrese la contraseña" required>
                        </div>
                        <div class="form-group">
                            <label for="contrasenia">Categoria</label>
                            <input type="password" class="form-control" name="" placeholder="Repita la contraseña" required>
                        </div>
                        <div class="form-group">
                            <label for="contrasenia">Estatus</label>
                            <input type="password" class="form-control" name="" placeholder="Ingrese la Nombre Empresa" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nombre">Contrato</label>
                            <input type="text" class="form-control" value="" name="" placeholder="Ingrese el/los nombre/s de Persona Responsable" required>
                        </div>
                        <div class="form-group">
                            <label>Pais</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Ciudad</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>        
                        <div class="form-group">
                            <label for="apellido">Pretencion Salarial</label>
                            <input type="text" class="form-control" value="" name="" placeholder="Ingrese los apellidos de Persona Responsable" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="apellido">Edad</label>
                            <input type="text" class="form-control" value="" name="" placeholder="Ingrese los Sitio Web" required>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Sexo</label>
                            <input type="text" class="form-control" value="" name="" placeholder="Ingrese los Direccion" required>
                        </div>
                        <div class="form-group">
                            <label>Fecha de Publicacion</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="codigo">Profesion u Ocupacion</label>
                            <input type="text" class="form-control" value="" name="" placeholder="Descripcion de Empresa" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Buscar</button>
                    </div>        
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
