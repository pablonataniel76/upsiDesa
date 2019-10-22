@extends('layouts.permisos')
@section ('content')
<div class="row justify-content-start">
    <div class="box box-primary">
        <div class="box-header">
            <h1>REGISTRARSE</h1>
        </div>
        <div class="box-body">
            <div class="col-md-8">
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
            <label for="apellido">Direccion</label>
            <input type="text" class="form-control" value="" name="" placeholder="Ingrese los Direccion" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono(*)</label>
            <input type="number" class="form-control" value="" name="" placeholder="Ingrese el teléfono" required>
        </div>
        <div class="form-group">
            <label for="codigo">Descripcion Empresa</label>
            <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
</div>
@endsection
