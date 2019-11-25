@extends('layouts.postulante')

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
        <div class="box-header">
          <div class="col col-xs-4">
              <section class="content-header">
                  <h1 class="fa fa-graduation-cap">Mis Colegios de Secundaria</h1>
              </section>
              <br>
            <a href="secundarias/create"> <button type="button" class="btn btn-block btn-success">Añadir Colegio Secundaria</button></a> 
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Nombre de la Institucion</th>
              <th>Pais</th>
              <th>Ciudad</th>
              <th>Fecha Fin</th>
              <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($secundarias as $se)
              <tr>
                  <td>{{$se->institucion_secundaria}}</td>
                  <td>{{$se->pais_secundaria}}</td>
                  <td>{{$se->ciudad_secundaria}}</td>
                  <td>{{$se->fecha_fin_secundaria}}</td>
                  <td>
                    <a href="{{URL::action('Postulante\EducacionSecundariaController@edit',$se->institucion_secundaria)}}"> <button type="button" class="btn btn-block btn-info">Editar</button></a> 
                  </td>
              </tr>
                  
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Nombre de la Institucion</th>
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