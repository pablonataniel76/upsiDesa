@extends('layouts.postulante')

@section('content')
<div class="row">
        <div class="col-xs-12">
              <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">MIS CURRICULOS</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Ruta</th>
                            <th>Publicacion</th>
                            <th>Titulo</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($curriculos  as $cu)
                            <tr>
                                <td>{{$cu->id_curriculo}}</td>
                                <td>{{$cu->ruta_curriculo}}</td>
                                <td>{{$cu->publicacion_curriculo}}</td>
                                <td>{{$cu->titulo_curriculo}}</td>
                            </tr>
                                
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Ruta</th>
                            <th>Publicacion</th>
                            <th>Titulo</th>
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