@extends('layouts.postulante')

@section('content')
<div class="row">
        <div class="col-xs-12">
              <div class="box">
                    <div class="box-header">
                        <section class="content-header">
                            <h1 class="fa fa-files-o">Mis Curriculum</h1>
                        </section>
                        <br>
                      <div class="col col-xs-4">
                          <a href="curriculo/create"> <button type="button" class="btn btn-block btn-success">Crear un nuevo Curriculo</button></a> 
                      </div>
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
                            <th>Descargar</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($curriculos  as $cu)
                            <tr>
                                <td>{{$cu->id_curriculo}}</td>
                                <td>{{$cu->ruta_curriculo}}</td>
                                <td>{{$cu->publicacion_curriculo}}</td>
                                <td>{{$cu->titulo_curriculo}}</td>
                                <td><a href="{{URL::action('Postulante\CurriculoController@descargarpdf',
                                  array('ruta'=>$cu->ruta_curriculo))}}"
                                  class="btn btn-primary">Descargar</a></td>
                            </tr>
                                
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Ruta</th>
                            <th>Publicacion</th>
                            <th>Titulo</th>
                            <th>Descargar</th>
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