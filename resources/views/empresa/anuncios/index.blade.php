@extends('layouts.permisos')
@section ('content')
<div class="rows justify-content-start">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Mis Anuncios</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Nro</th>
            <th>Cargo</th>
            <th>Categoria</th>
            <th>Contrato</th>
            {{-- <th>Descripcion</th> --}}
            <th>Sueldo</th>
            <th>Tipo</th>
            <th>Ciudad</th>
            <th>Publicacion</th>
            <th>Vencimiento</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($anuncios  as $an)
            <tr>
                <td>{{$an->id_anuncio}}</td>
                <td>{{$an->cargo_anuncio}}</td>
                <td>{{$an->categoria_anuncio}}</td>
                <td>{{$an->contrato_anuncio}}</td>
                {{-- <td>{{$an->descripcion_anuncio}}</td> --}}
                <td>{{$an->sueldo}}</td>
                <td>{{$an->tipo_sueldo}}</td>
                <td>{{$an->ciudad_anuncio}}</td>
                <td>{{$an->publicacion_anuncio}}</td>
                <td>{{$an->vencimiento_anuncio}}</td>
            </tr>
                
            @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>Nro</th>
          <th>Cargo</th>
          <th>Categoria</th>
          <th>Contrato</th>
          {{-- <th>Descripcion</th> --}}
          <th>Sueldo</th>
          <th>Tipo</th>
          <th>Ciudad</th>
          <th>Publicacion</th>
          <th>Vencimiento</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
@endsection
