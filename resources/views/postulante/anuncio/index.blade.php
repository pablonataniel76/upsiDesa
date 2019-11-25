@extends('layouts.postulante')

@section('content')
<div class="row">
        <div class="col-xs-12">
                  <div class="box">
                    <div class="box-header">
                        <section class="content-header">
                            <h1 class="fa fa-bullhorn">Anuncios de Empleo</h1>
                        </section>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <div class="leftcolumn">

                          @foreach ($anuncios  as $an)
                            <div class="card">
                              <div class="col-xs-12">
                                  <div class="col-xs-6">
                                      <h2><strong>{{$an->cargo_anuncio}}</strong></h2>
                                      <h4>{{$an->nombre_empresa}}</h5>
                                  </div>
                                  <div class="col-xs-6">
                                      <h4 align="right">{{$an->ciudad_anuncio}}</h4>
                                      <h4 align="right">{{$an->publicacion_anuncio}}</h5>
                                  </div>
                              </div>

                              <div class="col-xs-12"><div class="fakeimg" style="height:200px;" align="center">{{$an->logo}}</div></div>
                              
                            <a href="{{URL::action('Postulante\AnuncioController@show',$an->id_anuncio)}}"><button type="button" class="btn btn-block btn-warning">VER DETALLES</button></a>
                            
                            </div>

                            {{-- <div class="col-xs-12">
                                <div id="recB">
                                    <div class="container">
                                      <div class="row">
                                          <div class="col-xs-6">
                                              <h2><strong>{{$an->cargo_anuncio}}</strong></h2>
                                              <h4>{{$an->nombre_empresa}}</h5>
                                          </div>
                                          <div class="col-xs-6">
                                              <h4 >{{$an->ciudad_anuncio}}</h4>
                                              <h4 align="right">{{$an->publicacion_anuncio}}</h5>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="container">
                                      <div class="row">
                                        
                                      </div>
                                    </div>
                                    <div class="container">
                                      <div class="row">
                                          <a href="{{URL::action('Postulante\AnuncioController@show',$an->id_anuncio)}}"><button type="button" class="btn btn-block btn-warning">VER DETALLES</button></a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <br> --}}
                              
                          @endforeach
                    
                      </div>
                    </div>
                    
                  </div>
                 {{-- {{$anuncios->render()}}  --}}
                              
      </div>
</div>

@endsection