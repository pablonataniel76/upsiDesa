@extends('layouts.postulante')

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
        <div class="box-header">
          <div class="col col-xs-4">
            <h3 class="box-title">MIS IDIOMAS </h3>
            <br><br>
            <a href="idiomas/create"> <button type="button" class="btn btn-block btn-success">Añadir Idioma</button></a> 
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Idioma</th>
              <th>Nivel de Escritura</th>
              <th>Nivel Oral</th>
              <th>Nivel de Lectura</th>
              <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($idiomas as $id)
              <tr>
                  <td>{{$id->idioma}}</td>
                  <td>{{$id->nivel_escritura}}</td>
                  <td>{{$id->nivel_oral}}</td>
                  <td>{{$id->nivel_lectura}}</td>
                  <td>
                    <a href=""> <button type="button" class="btn btn-block btn-info">Editar</button></a> 
                  </td>
              </tr>
                  
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Idioma</th>
                <th>Nivel de Escritura</th>
                <th>Nivel Oral</th>
                <th>Nivel de Lectura</th>
                <th>Opciones</th>
              </tr>
            </tfoot>
          </table>
        </div>
    </div>
  </div>
</div>
@endsection