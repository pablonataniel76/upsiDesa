@extends('layouts.postulante')

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
        <div class="box-header">
          <div class="col col-xs-4">
            <h3 class="box-title">MIS ESTUDIOS TECNICOS </h3>
            <br><br>
            <a href="tecnicas/create"> <button type="button" class="btn btn-block btn-success">Añadir Educacion Tecnica</button></a> 
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Nombre de la Institucion</th>
              <th>Curso</th>
              <th>Pais</th>
              <th>Ciudad</th>
              <th>Fecha del Curso</th>
              <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($tecnicas as $te)
              <tr>
                  <td>{{$te->institucion_tecnica}}</td>
                  <td>{{$te->curso_tecnico}}</td>
                  <td>{{$te->pais_tecnico}}</td>
                  <td>{{$te->ciudad_tecnico}}</td>
                  <td>{{$te->fecha_curso_tecnico}}</td>
                  <td>
                    <a href=""> <button type="button" class="btn btn-block btn-info">Editar</button></a> 
                  </td>
              </tr>
                  
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Nombre de la Institucion</th>
                <th>Curso</th>
                <th>Pais</th>
                <th>Ciudad</th>
                <th>Fecha del Curso</th>
                <th>Opciones</th>
              </tr>
            </tfoot>
          </table>
        </div>
    </div>
  </div>
</div>
@endsection