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
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
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
                                            <option value="Administración y Oficina">Administración y Oficina</option>
                                            <option value="Agricultura y Campo">Agricultura y Campo</option>
                                            <option value="Arquitectura">Arquitectura</option>
                                            <option value="Atención al Cliente">Atención al Cliente</option>
                                            <option value="Banca y Finanzas">Banca y Finanzas</option>
                                            <option value="Científico e Investigación">Científico e Investigación</option>
                                            <option value="Cocina y Repostería">Cocina y Repostería</option>
                                            <option value="Construcción">Construcción</option>
                                            <option value="Consultorías y Proyectos">Consultorías y Proyectos</option>
                                            <option value="Contabilidad y Economía">Contabilidad y Economía</option>
                                            <option value="Dirección y Gerencia">Dirección y Gerencia</option>
                                            <option value="Diseño y Medios">Diseño y Medios</option>
                                            <option value="Educación">Educación</option>
                                            <option value="Industria Alimentaria">Industria Alimentaria</option>
                                            <option value="Industria Minera">Industria Minera</option>
                                            <option value="Industria Textil">Industria Textil</option>
                                            <option value="Informática">Informática</option>
                                            <option value="Ingeniería">Ingeniería</option>
                                            <option value="Inmobiliaria">Inmobiliaria</option>
                                            <option value="Internet">Internet</option>
                                            <option value="Legal y Asesoría">Legal y Asesoría</option>
                                            <option value="Logística y Almacén">Logística y Almacén</option>
                                            <option value="Mano Obra Calificada">Mano Obra Calificada</option>
                                            <option value="Mano Obra No Calificada">Mano Obra No Calificada</option>
                                            <option value="Marketing y Ventas">Marketing y Ventas</option>
                                            <option value="Medicina y Salud">Medicina y Salud</option>
                                            <option value="Moda y Belleza">Moda y Belleza</option>
                                            <option value="ONG y Org. Benéficas">ONG y Org. Benéficas</option>
                                            <option value="Otros">Otros</option>
                                            <option value="Recursos Humanos">Recursos Humanos</option>
                                            <option value="Sector Público">Sector Público</option>
                                            <option value="Seguridad Industrial">Seguridad Industrial</option>
                                            <option value="Servicios Petroleros">Servicios Petroleros</option>
                                            <option value="Sociales y Humanidades">Sociales y Humanidades</option>
                                            <option value="Telecomunicaciones">Telecomunicaciones</option>
                                            <option value="Turismo y Hotelería">Turismo y Hotelería</option>
                                            <option value="Técnico">Técnico</option>
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
