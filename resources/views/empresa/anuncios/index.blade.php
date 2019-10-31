@extends('layouts.permisos')
@section ('content')
<div class="rows justify-content-start">
    <section class="content-header">
        <h1>Mis Anuncios</h1>
    </section>
    @foreach ($anuncios  as $an)
      <div class="col-md-3">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">{{$an->cargo_anuncio}}</h3>
            </div>
            <div class="box-body">
              <span class="description">{{$an->descripcion_anuncio}}</span>
              <br>
              <b class="description">{{$an->categoria_anuncio}}</b>
              <br>
              <i class="description">Publicado en: {{$an->publicacion_anuncio}}</i>
              <br>
              <div class="col-md-6">
              <a class="btn btn-block btn-warning" href="{{
                        URL::action('Empresa\AnunciosController@edit',
			                  array('idAnuncio'=>$an->id_anuncio))}}"
			                  class="list-group-item list-group-item-action">Editar</a>
              </div>
              <div class="col-md-6">
                  <a class="btn btn-block btn-danger" href="">Eliminar</a>
              </div>
            </div>
          </div>
        </div>
    @endforeach
</div>
@endsection
