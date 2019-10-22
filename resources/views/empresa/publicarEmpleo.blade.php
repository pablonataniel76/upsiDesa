@extends('layouts.permisos')
@section ('content')
<div class="row justify-content-start">
    <div class="box box-primary">
        <div class="box-header">
            <h1>PUBLICAR EMPLEO</h1>
        </div>
        <div>
            <form action="">
    <div class="form-group">
        <label for="EMAIL">Email(*)</label>
        <input type="email" class="form-control" value="" name="" placeholder="Ingrese el email" required>
    </div>
       
        <div class="form-group">
            <label for="contrasenia">Contraseña(*)</label>
            <input type="password" class="form-control" name="" placeholder="Ingrese la contraseña" required>
        </div>
        <div class="form-group">
            <label for="contrasenia">Repita la Contraseña(*)</label>
            <input type="password" class="form-control" name="" placeholder="Repita la contraseña" required>
        </div>
        <div class="form-group">
                <label for="contrasenia">Nombre Empresa</label>
                <input type="password" class="form-control" name="" placeholder="Ingrese la Nombre Empresa" required>
            </div>
        <div class="form-group">
            <label for="nombre">Nombre Persona Responsable</label>
            <input type="text" class="form-control" value="" name="" placeholder="Ingrese el/los nombre/s de Persona Responsable" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellidos Persona Responsable</label>
            <input type="text" class="form-control" value="" name="" placeholder="Ingrese los apellidos de Persona Responsable" required>
        </div>
        <div class="form-group">
                <label for="apellido">Sitio Web</label>
                <input type="text" class="form-control" value="" name="" placeholder="Ingrese los Sitio Web" required>
            </div>
        <div class="form-group">
            <label for="apellido">Pais</label>
            <input type="text" class="form-control" value="" name="" placeholder="Ingrese los apellidos" required>
        </div>
        <div class="form-group">
                <label for="apellido">Ciudad</label>
                <input type="text" class="form-control" value="" name="" placeholder="Ingrese los apellidos" required>
            </div>
        <div class="form-group">
            <label for="apellido">Direccion</label>
            <input type="text" class="form-control" value="" name="" placeholder="Ingrese los Direccion" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono(*)</label>
            <input type="number" class="form-control" value="" name="" placeholder="Ingrese el teléfono" required>
        </div>
        <div class="form-group">
            <label for="codigo">Descripcion Empresa</label>
            <input type="text" class="form-control" value="" name="" placeholder="Descripcion de Empresa" required>
        </div>
        <div class="form-group">
                <label for="apellido">Logo</label>
                <input type="text" class="form-control" value="" name="" placeholder="" required>
            </div>
        <div class="form-group">
            <p style="color:red;">Campos obligatorios(*)</p>
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Guardar</button>
        </div>        
</form>
        </div>
    </div>
</div>
@endsection
