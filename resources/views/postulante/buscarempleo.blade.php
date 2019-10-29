@extends('layouts.postulante')

@section('content')
<div class="row">
  
        <div class="box box-primary">
            <div class="box-header">
                <h1 class="box-title">BUSCAR EMPLEOS</h1>
            </div>
            <br>
            <div class="box-body">
                    <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                            <input type="text" class="form-control" placeholder="Palabras Clave">
                                            <span class="glyphicon glyphicon-font form-control-feedback"></span>
                                          </div>
                            </div>
                        </div>
                        <br>
                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                        <select class="form-control select2" multiple="multiple" data-placeholder="Seleccionar Categoria"
                                                style="width: 100%;">
                                          <option>Categoria1</option>
                                          <option>Categoria2</option>
                                          <option>Categoria3</option>
                                        </select>
                                      </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control select2" style="width: 100%;">
                                  <option selected="selected">Seleccionar Pais</option>
                                  <option>Pais1</option>
                                  <option>Pais2</option>
                                  <option>Pais3</option>                                  
                                </select>
                              </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Seleccionar Ciudad</option>
                                    <option>Ciudad1</option>
                                    <option>Ciudad2</option>
                                    <option>Ciudad3</option>                                  
                                </select>
                                </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Seleccionar Tipo de Contrato</option>
                                    <option>Tiempo Completo</option>
                                    <option>Medio Tiempo</option>
                                    <option>Temporal</option>                                  
                                </select>
                                </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Publicado Dentro de</option>
                                    <option>Cualquier Fecha</option>
                                    <option>Ultimos 30 dias</option>
                                    <option>Ultimos 7 dias</option> 
                                    <option>Ultimos 2 dias</option>                                  
                                </select>
                                </div>
                        </div>
                    </div>

                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">BUSCAR</button>
                        </div>
                    </div>
                        
                            

            </div>
        </div>
    
</div>
@endsection