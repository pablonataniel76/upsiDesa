@extends('layouts.permisos')
@section ('content')
<div class="rows justify-content-start">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Mis Postulantes</h3>
    </div>
    <div class="box-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Nro</th>
            <th>Cargo</th>
            <th>Categoria</th>
            <th>Contrato</th>
            <th>Descripcion</th>
            <th>Ver Lista</th>
        </tr>
        </thead>
        <tbody>
            
        </tbody>
        <tfoot>
        <tr>
          <th>Nro</th>
          <th>Cargo</th>
          <th>Categoria</th>
          <th>Contrato</th>
          <th>Descripcion</th>
          <th>Ver Lista</th>
        </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
@endsection
