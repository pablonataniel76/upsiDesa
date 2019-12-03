@extends('layouts.administrador')

@section('content')
<div class="row">
        <div class="col-xs-12">
              <div class="box">
                    <div class="box-header">
                      <section class="content-header">
                        <h1 class="fa fa-building">Empresas</h1>
                      </section>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Nombre Empresa</th>
                            <th>Email</th>
                            <th>Celular</th>
                            <th>Ciudad</th>
                            <th>Direccion</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($empresas  as $em)
                            <tr>
                                <td>{{$em->nombre_empresa}}</td>
                                <td>{{$em->email_empresa}}</td>
                                <td>{{$em->celular_empresa}}</td>
                                <td>{{$em->ciudad_empresa}}</td>
                                <td>{{$em->descripcion_empresa}}</td>
                                <td>
                                  <a class="btn btn-block btn-danger" 
                                    href="{{URL::action('Administrador\AdministradorController@destroyE', $em->id_empresa)}}">
                                    Eliminar</a>
                                </td>
                            </tr>
                                
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Nombre Empresa</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Ciudad</th>
                            <th>Direccion</th>
                            <th>Opciones</th>
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