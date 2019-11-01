@extends('layouts.permisos')
@section ('content')
<div class="row justify-content-start">
    <div class="box box-primary">
        <div class="box-header">
            <section class="content-header">
                <h1 class="fa fa-edit">Editar Anuncio</h1>
            </section>
        </div>
        <div class="row">
            <section class="content">
                <div class="col-md-10">
                    {!!Form::model($anuncios,['method'=>'PATCH','route'=>['anuncios.update',$anuncios[0]->id_anuncio,$anuncios[0]->id_empresa]])!!}
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="CARGO">Cargo</label>
                                    <select name="CARGO" class="form-control">
                                        <option>{{$anuncios[0]->cargo_anuncio}}</option>
                                        <option value="asd">option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="CATEGORIA">Categoria</label>
                                    <select name="CATEGORIA" class="form-control">
                                        <option>option 1</option>
                                        <option>{{$anuncios[0]->categoria_anuncio}}</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="CONTRATO">Contrato</label>
                                    <select name="CONTRATO" class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>{{$anuncios[0]->contrato_anuncio}}</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="DESCRIPCION">Descripcion</label>
                                    <textarea class="form-control" name="DESCRIPCION" rows="3" placeholder="Descripcion">{{$anuncios[0]->descripcion_anuncio}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="SUELDO">Sueldo</label>
                                    <input name="SUELDO" type="number" class="form-control" value="{{$anuncios[0]->sueldo}}" name="sueldo" placeholder="Sueldo" required>
                                </div>

                                <div class="form-group">
                                    <label for="TIPO_SUELDO">Tipo Sueldo</label>
                                    <select name="TIPO_SUELDO" class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>{{$anuncios[0]->tipo_sueldo}}</option>
                                        <option>option 5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="CIUDAD">Ciudad</label>
                                    <select name="CIUDAD" class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>{{$anuncios[0]->ciudad_anuncio}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="box-footer">
                                <button type="submit" class="btn btn-success">Guardar</button>
                                <a href="{{ url()->previous() }}" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </section>
</div>
@endsection
