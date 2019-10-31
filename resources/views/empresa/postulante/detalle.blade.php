@extends('layouts.permisos')
@section ('content')
<div class="rows justify-content-start">
  <div class="col-md-11">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Mis Postulantes</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body pad table-responsive">
        <table class="table table-hover">
          <thead>
          <tr>
              <th>Nro</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Email</th>
              <th>Ciudad</th>
              <th>Telefono</th>
              <th>Celular</th>
              <th>Curriculo</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($candidato  as $ca)
            <tr>
              <td>{{$ca->id_candidato}}</td>
              <td>{{$ca->nombre_candidato}}</td>
              <td>{{$ca->apellido_candidato}}</td>
              <td>{{$ca->email_candidato}}</td>
              <td>{{$ca->ciudad_candidato}}</td>
              <td>{{$ca->telefono_candidato}}</td>
              <td>{{$ca->celular_candidato}}</td>
              <td>{{$ca->ruta_curriculo}}</td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>Nro</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Ciudad</th>
            <th>Telefono</th>
            <th>Celular</th>
            <th>Curriculo</th>
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@endsection
