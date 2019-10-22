@extends('layouts.permisos')
@section ('content')
<div class="row justify-content-start">
    <div class="box box-primary">
        <div class="box-header">
            <h1>BUSCAR CURRICULUM</h1>
        </div>
        <div class="box-body">
            <div class="col-md-8">
                <form action="">
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
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label for="codigo">Profesion u Ocupacion</label>
                        <input type="text" class="form-control" value="" name="" placeholder="Descripcion de Empresa" required>
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
