@extends('layouts.postulante')

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
        <div class="box-header">
          <div class="col col-xs-4">
            <h3 class="box-title">MIS HABILIDADES </h3>
            <br><br>
            <a href="habilidades/create"> <button type="button" class="btn btn-block btn-success">Añadir Habilidad</button></a> 
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Habilidad</th>
              <th>Años de Experiencia</th>
              <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($habilidades  as $ha)
              <tr>
                  <td>{{$ha->habilidad}}</td>
                  <td>{{$ha->anios_habilidad}}</td>
                  <td>
                    <a href=""> <button type="button" class="btn btn-block btn-info">Editar</button></a> 
            </td>
              </tr>
                  
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Habilidad</th>
                <th>Años de Experiencia</th>
                <th>Opciones</th>
              </tr>
            </tfoot>
          </table>
        </div>
    </div>
  </div>
</div>
@endsection