@extends('layouts.administrador')

@section('content')
<div class="row">
        <div class="col-xs-12">
              <div class="box">
                    <div class="box-header">
                      <section class="content-header">
                        <h1 class="fa fa-male">Solicitudes para Candidatos Premium</h1>
                      </section>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Nombre(s)</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Celular</th>
                            <th>Ciudad</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($peticionc  as $pcp)
                            <tr>
                                <td>{{$pcp->nombre_candidato}}</td>
                                <td>{{$pcp->apellido_candidato}}</td>
                                <td>{{$pcp->email_candidato}}</td>
                                <td>{{$pcp->celular_candidato}}</td>
                                <td>{{$pcp->ciudad_candidato}}</td>
                                <td>
                                  <a class="btn btn-block btn-danger" 
                                    href="{{URL::action('Administrador\PremiumCandidatoController@becomePremium', $pcp->id_candidatop)}}">
                                    Volver Premium</a>
                                </td>
                            </tr>
                                
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Nombre(s)</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Celular</th>
                            <th>Ciudad</th>
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