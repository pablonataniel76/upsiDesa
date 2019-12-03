@extends('layouts.postulante')

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
        <div class="box-header">
          <div class="col col-xs-4">
              <section class="content-header">
                  <h1 class="fa fa-wrench">Mis Habilidades</h1>
              </section>
              <br>
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
              <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($habilidades  as $ha)
              <tr>
                  <td>{{$ha->habilidad}}</td>
                  <td>{{$ha->anios_habilidad}}</td>
                  <td>
                    <a href="{{URL::action('Postulante\HabilidadController@edit',$ha->habilidad)}}"> <button type="button" class="btn btn-block btn-info">Editar</button></a> 
                  </td>
                  <td>
                      <a class="btn btn-block btn-danger" 
                      href="{{URL::action('Postulante\HabilidadController@destroy', $ha->habilidad)}}">
                      Eliminar</a>
                      {{-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger-{{$ha->habilidad}}">
                        Eliminar
                      </button> --}}
                    </td>
              </tr>
              @include('postulante.habilidad.eliminar')   
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Habilidad</th>
                <th>Años de Experiencia</th>
                <th>Opciones</th>
                <th>Opciones</th>
              </tr>
            </tfoot>
          </table>
        </div>
    </div>
  </div>
</div>
@endsection