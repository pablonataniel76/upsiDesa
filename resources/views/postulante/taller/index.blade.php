@extends('layouts.postulante')

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
        <div class="box-header">
          <div class="col col-xs-4">
            <h3 class="box-title">MIS CURSOS, TALLERES, SEMINARIOS </h3>
            <br><br>
            <a href="talleres/create"> <button type="button" class="btn btn-block btn-success">Añadir Curso, Taller o Seminario</button></a> 
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Curso, Taller, Seminario</th>
              <th>Impartido Por</th>
              <th>Lugar</th>
              <th>Fecha del Curso, Taller, Seminario</th>
              <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($talleres as $cts)
              <tr>
                  <td>{{$cts->nombre_taller}}</td>
                  <td>{{$cts->impartido_por}}</td>
                  <td>{{$cts->lugar_taller}}</td>
                  <td>{{$cts->fecha_taller}}</td>
                  <td>
                    <a href=""> <button type="button" class="btn btn-block btn-info">Editar</button></a> 
                  </td>
              </tr>
                  
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Curso, Taller, Seminario</th>
                <th>Impartido Por</th>
                <th>Lugar</th>
                <th>Fecha del Curso, Taller, Seminario</th>
                <th>Opciones</th>
              </tr>
            </tfoot>
          </table>
        </div>
    </div>
  </div>
</div>
@endsection