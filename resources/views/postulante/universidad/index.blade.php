@extends('layouts.postulante')

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
        <div class="box-header">
          <div class="col col-xs-4">
            <h3 class="box-title">MIS UNIVERSIDADES </h3>
            <br><br>
            <a href="universidades/create"> <button type="button" class="btn btn-block btn-success">Añadir Universidad</button></a> 
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Nombre de la Universidad</th>
              <th>Carrera</th>
              <th>Pais</th>
              <th>Ciudad</th>
              <th>Fecha Fin</th>
              <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($universidades as $un)
              <tr>
                  <td>{{$un->universidad}}</td>
                  <td>{{$un->carrera}}</td>
                  <td>{{$un->pais_universidad}}</td>
                  <td>{{$un->ciudad_univeridad}}</td>
                  <td>{{$un->fecha_fin_universidad}}</td>
                  <td>
                    <a href=""> <button type="button" class="btn btn-block btn-info">Editar</button></a> 
                  </td>
              </tr>
                  
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                  <th>Nombre de la Universidad</th>
                  <th>Carrera</th>
                  <th>Pais</th>
                  <th>Ciudad</th>
                  <th>Fecha Fin</th>
                  <th>Opciones</th>
              </tr>
            </tfoot>
          </table>
        </div>
    </div>
  </div>
</div>
@endsection