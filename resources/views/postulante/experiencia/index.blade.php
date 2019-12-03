@extends('layouts.postulante')

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
        <div class="box-header">
          <div class="col col-xs-4">
              <section class="content-header">
                  <h1 class="fa fa-briefcase">Mi Experiencia Laboral</h1>
              </section>
              <br>
            <a href="experiencia/create"> <button type="button" class="btn btn-block btn-success">Añadir Experiencia Laboral</button></a> 
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Cargo</th>
              <th>Empresa</th>
              <th>Categoria</th>
              <th>Pais</th>
              <th>Ciudad</th>
              <th>Años de experiencia</th>
              <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($experiencias as $ex)
              <tr>
                  <td>{{$ex->cargo_empresa}}</td>
                  <td>{{$ex->nombre_empresa}}</td>
                  <td>{{$ex->categoria_experiencia}}</td>
                  <td>{{$ex->pais_experiencia}}</td>
                  <td>{{$ex->ciudad_experiencia}}</td>
                  <td>{{$ex->anios_experiencia}}</td>
                  <td>
                    <a href="{{URL::action('Postulante\ExperienciaLaboralController@editar',array('carg'=>$ex->cargo_empresa,'emp'=>$ex->nombre_empresa))}}"> <button type="button" class="btn btn-block btn-info">Editar</button></a> 
                  </td>
                  <td>
                    <a class="btn btn-block btn-danger" 
                    href="{{URL::action('Postulante\ExperienciaLaboralController@destroy', array($ex->cargo_empresa,$ex->nombre_empresa))}}">
                    Eliminar</a>
                  </td>
              </tr>
                  
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Cargo</th>
                <th>Empresa</th>
                <th>Categoria</th>
                <th>Pais</th>
                <th>Ciudad</th>
                <th>Años de experiencia</th>
                <th>Opciones</th>
              </tr>
            </tfoot>
          </table>
        </div>
    </div>
  </div>
</div>
@endsection