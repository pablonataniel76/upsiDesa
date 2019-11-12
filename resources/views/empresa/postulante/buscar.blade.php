@extends('layouts.permisos')
@section ('content')
<div class="row justify-content-start">
    <div class="col-md-11">
        <div class="box box-widget">
            <div class="box-header with-border">
                <div class="user-block">
                    <section class="content-header">
                        <h1 class="fa fa-search">Buscar Curriculum</h1>
                    </section>
                </div>
                <div class="box-tools">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body"> 
                {{ Form::open(['route' => 'buscar','method' => 'GET', 'class' => 'form-inline pull rigth']) }}
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Categoria</label>
                                {{ Form::select('categoria', array('' => 'Ninguno', 'categoria1' => 'categoria1', 'categoria2' => 'categoria2'), '') }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Contrato</label>
                                {{ Form::select('contrato', array('' => 'Ninguno', 'medio tiempo' => 'medio tiempo', 'tiempo completo' => 'tiempo completo'), '') }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Ciudad</label>
                                {{ Form::select('ciudad', array('' => 'Ninguno', 'la paz' => 'la paz', 'cochabamba' => 'cochabamba'), '') }}
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">Buscar</button>
                        </div>      
                    </div>  
                {{ Form::close() }}
            </div>
        </div>
        <div class="box box-widget">
            <div class="box-header with-border">

            </div>
            <div class="box-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nro</th>
                            <th>Titulo</th>
                            <th>Categoria</th>
                            <th>Contrato</th>
                            <th>Ciudad</th>
                            <th>Curriculo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($curriculo  as $cu)
                        <tr>
                            <td>{{$cu->id_curriculo}}</td>
                            <td>{{$cu->titulo_curriculo}}</td>
                            <td>{{$cu->categoria_curriculo}}</td>
                            <td>{{$cu->contrato_curriculo}}</td>
                            <td>{{$cu->ciudad_curriculo}}</td>
                            <td>{{$cu->ruta_curriculo}}</td>
                        </tr>
                        @endforeach
                    </tbody>                
                    <tfoot>
                        <tr>
                            <th>Nro</th>
                            <th>Titulo</th>
                            <th>Categoria</th>
                            <th>Contrato</th>
                            <th>Ciudad</th>
                            <th>Curriculo</th>
                        </tr>
                    </tfoot>
                </table>
                {{ $curriculo->render() }}
            </div>
        </div>
    </div>
</div>
@endsection
