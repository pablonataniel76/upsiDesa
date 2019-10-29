@extends('layouts.postulante')

@section('content')
<div class="row">
        <div class="col-xs-12">
              <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">MIS POSTULACIONES</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Id Curriculo</th>
                            <th>Empresa </th>
                            <th>Cargo </th>
                            <th>Contrato</th>
                            <th>Ciudad</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($postulaciones  as $po)
                            <tr>
                                <td>{{$po->id_curriculo}}</td>
                                <td>{{$po->nombre_empresa}}</td>
                                <td>{{$po->cargo_anuncio}}</td>
                                <td>{{$po->contrato_anuncio}}</td>
                                <td>{{$po->ciudad_anuncio}}</td>
                            </tr>
                                
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>Id Curriculo</th>
                          <th>Empresa </th>
                          <th>Cargo </th>
                          <th>Contrato</th>
                          <th>Ciudad</th>
                        </tr>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
        </div>
    </div>
</div>
@endsection