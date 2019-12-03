@extends('layouts.postulante')
@section ('content')
<div class="row justify-content-start">
    <div class="col-md-11">
        <div class="box box-widget">
            <div class="box-header with-border">
                <div class="user-block">
                    <section class="content-header">
                        <h1 class="fa fa-search">Buscar Anuncio</h1>
                    </section>
                </div>
                <div class="box-tools">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body"> 
                {{ Form::open(['route' => 'buscarA','method' => 'GET', 'class' => 'form-inline pull rigth']) }}
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
                                {{ Form::select('ciudad', array('' => 'Ninguno', 'sucre' => 'sucre', 'Cochabamba' => 'Cochabamba'), '') }}
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
                @foreach ($anuncios  as $an)
                <div class="col-md-3">
                    <div class="box box-primary box-solid">
                      <div class="box-header with-border">
                        <h3 class="box-title">{{$an->cargo_anuncio}}</h3>
                      </div>
                      <div class="box-body">
                        <img width="100" height="100" class="img-circle" src="{{asset('logos_empresa/').'/'.$an->logo }}" alt="User Image">
                        <br>
                        <span class="description" >{{$an->descripcion_anuncio}}</span>
                        <br>
                        <b class="description">{{$an->categoria_anuncio}}</b>
                        <br>
                        <i class="description">Publicado en: {{$an->publicacion_anuncio}}</i>
                        <br>
                        <div class="col-md-12 col-sm-12">
                          <a class="btn btn-block btn-warning" href="{{ URL::action('Postulante\AnuncioController@show', $an->id_anuncio) }}"
                                  class="list-group-item list-group-item-action">Detalle</a>
                        </div>

                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                <div class="container">
                        {{ $anuncios->render() }}</div>            
        </div>
    </div>
</div>
@endsection
