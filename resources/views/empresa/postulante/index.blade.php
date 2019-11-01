@extends('layouts.permisos')
@section ('content')
<div class="rows justify-content-start">
<div class="col-md-11">
<div class="box">
    <div class="box-header">
        <section class="content-header">
            <h1 class="fa fa-list-alt">Mis Postulantes</h1>
        </section>
    </div>
    <!-- /.box-header -->
    <div class="box-body pad table-responsive">

       <table class="table table-hover">
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
            @foreach ($postulacion  as $ps)
            <tr>
                <td>{{$ps->id_curriculo}}</td>
                <td>{{$ps->cargo_anuncio}}</td>
                <td>{{$ps->categoria_anuncio}}</td>
                <td>{{$ps->contrato_anuncio}}</td>
                <td>{{$ps->descripcion_anuncio}}</td>
                <td>
                  <a href="{{URL::action('Empresa\PostulanteController@detallePostulante',
			                  array('idCurriculo'=>$ps->id_curriculo))}}"
			                  class="btn btn-primary">Ver</a>
                </td>
            </tr>
            @endforeach
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
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
</div>
@endsection
