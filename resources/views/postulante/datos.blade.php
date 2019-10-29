@extends('layouts.postulante')

@section('content')
<div class="row">
  
        <div class="box box-primary">
            <div class="box-header">
                <h1 class="box-title">DATOS PERSONALES</h1>
            </div>
            <br>
            <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label>Nombre(s):</label>
                                    <input type="text" class="form-control" placeholder="Introducir Nombre(s)">                        
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label>Apellidos:</label>
                                    <input type="text" class="form-control" placeholder="Introducir Apellidos">                        
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                        <label>Celular:</label>
                                        <div class="input-group">
                                          <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                          </div>
                                          <input type="text" class="form-control"
                                          data-inputmask='"mask": "(999) 9999-9999"' data-mask>
                                        </div>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                        <label>Telefono:</label>                         
                                        <div class="input-group">
                                          <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                          </div>
                                          <input type="text" class="form-control"
                                          data-inputmask='"mask": "(999) 999-9999"' data-mask>
                                        </div>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label>Nacionalidad:</label>
                                    <input type="text" class="form-control" placeholder="Introducir Nacionalidad">                        
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tipo de Documento:</label>
                                <select class="form-control select2" style="width: 100%;">
                                  <option selected="selected">Seleccionar Tipo de Documento</option>
                                  <option>Carnet</option>
                                  <option>Pasaporte</option>                                
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label>Numero de Documento:</label>
                                    <input type="text" class="form-control" placeholder="Introducir Numero de Documento">                        
                                </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Fecha de Nacimiento:</label>
                    
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sexo:                                                        
                                    </label>
                                    <br>
                                        <label>
                                          <input type="radio" name="r1" class="minimal" checked>
                                          Femenino
                                        </label>
                                        <label>
                                          <input type="radio" name="r1" class="minimal">
                                          Masculino
                                        </label>                                                        
                                </div>
                        </div>
                    </div> 
                                    
                    <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label>Direccion:</label>
                                        <input type="text" class="form-control" placeholder="Introducir Direccion">                        
                                    </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Estado Civil::</label>
                                    <select class="form-control select2" style="width: 100%;">
                                      <option selected="selected">Seleccionar Estado Civil</option>
                                      <option>Soltero</option>
                                      <option>Casado</option>
                                      <option>Divorciado</option>
                                      <option>Viudo</option>                                
                                    </select>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>¿Tienes Licencia para Conducir Vehículos?:</label>
                                        <br>
                                            <label>
                                              <input type="radio" name="r2" class="minimal" checked>
                                              Si
                                            </label>
                                            <label>
                                              <input type="radio" name="r2" class="minimal">
                                              No
                                            </label>                                                        
                                    </div>
                            </div>
                     </div> 
                      <div class="row">
                              <div class="col-md-6">
                                      <div class="form-group">
                                          <label>¿Tienes Licencia para Manejar Motocicleta?:</label>
                                          <br>
                                              <label>
                                                <input type="radio" name="r3" class="minimal" checked>
                                                Si
                                              </label>
                                              <label>
                                                <input type="radio" name="r3" class="minimal">
                                                No
                                              </label>                                                        
                                      </div>
                              </div>
                      </div>
                      <div class="form-group">
                              <label for="exampleInputFile">Mi Foto Personal:</label>
                              <input type="file" id="exampleInputFile">
            
                              <p class="help-block">Subir Foto Personal</p>
                      </div>
                        <br>

                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Siguiente</button>
                        </div>
                    </div>
                        
                            

            </div>
        </div>
    
</div>
@endsection