@extends('layouts.permisos')
@section ('content')
<div class="row justify-content-start">
    <div class="col-md-11">
    <div class="box box-primary">
        <div class="box-header">
            <section class="content-header">
                <h1 class="fa fa-paper-plane">Publicar Anuncio</h1>
            </section>
        </div>
        <div class="row">
            <section class="content">
                <div class="col-md-10">
                    {!!Form::open(array('url'=>'empresa/anuncios','method'=>'POST','autocomplete'=>'off'))!!}
                    {{Form::token()}}
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="CARGO">Cargo</label>
                                    <select name="CARGO" class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="CATEGORIA">Categoria</label>
                                    <select name="CATEGORIA" class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
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
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="DESCRIPCION">Descripcion</label>
                                    <textarea name="DESCRIPCION" class="form-control" rows="3" placeholder="Descripcion"></textarea>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="SUELDO">Sueldo</label>
                                    <input type="number" class="form-control" value="" name="SUELDO" placeholder="Sueldo" required>
                                </div>

                                <div class="form-group">
                                    <label for="TIPO_SUELDO">Tipo Sueldo</label>
                                    <select name="TIPO_SUELDO" class="form-control">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="CIUDAD">Ciudad</label>
                                    <select name="CIUDAD" class="form-control">
                                        <option value="Cochabamba">Cochabamba</option>
                                        <option value="Santa Cruz">Santa Cruz</option>
                                        <option value="La Paz">La Paz</option>
                                        <option value="Oruro">Oruro</option>
                                        <option value="Potosi">Potosi</option>
                                        <option value="Sucre">Sucre</option>
                                        <option value="Tarija">Tarija</option>
                                        <option value="Beni">Beni</option>
                                        <option value="Pando">Pando</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a href="{{ url()->previous() }}" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
    </section>
    </div>
</div>
@endsection
