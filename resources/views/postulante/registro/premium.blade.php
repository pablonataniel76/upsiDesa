@extends('layouts.postulante')

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <section class="content-header">
            <h1 class="fa fa-bullhorn">Premium</h1>
        </section>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="leftcolumn">
                  <!-- /.col -->
          <div class="col-md-11">
            <div class="box box-solid">
              <div class="box-header with-border">
                <h3 class="box-title"><strong>Beneficios de Ser Premium</strong></h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="http://placehold.it/900x300/39CCCC/ffffff&text=CURRICULOS+ILIMITADOS" alt="First slide">

                      <div class="carousel-caption">
                        <h4 style = "font-family:georgia,garamond,serif;font-style:italic;">Como candidato premium podras crear la cantidad de curriculos que desees.</h4>
                      </div>
                    </div>
                    <div class="item" >
                      <img src="http://placehold.it/900x300/3c8dbc/ffffff&text=PRIORIDAD+EN+BUSQUEDAS" alt="Second slide">

                      <div class="carousel-caption">
                        <h4 style = "font-family:georgia,garamond,serif;font-style:italic;">Al ser candidato premium tus curriculos tendran prioridad en las busquedas que relicen las empresas.</h4> 
                      </div>
                    </div>
                  </div>
                  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="fa fa-angle-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="fa fa-angle-right"></span>
                  </a>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>

          <div class="row">
            <div class="col-md-10">
              <h3 style = "font-family:georgia,garamond,serif;font-size:20px;font-style:italic;">Podras volverte premium y recibir todos estos beneficios por el modico precio de:</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <h2><strong>XXX.XX Bs./año </strong></h2>
            </div>
            <div class="col-md-2">
              <h3>(*)</h3>
            </div>
          </div>

          <div class="container">
              <div class="row">
                  <h5 style="color: red">(*)Este precio esta sujeto a modificaciones</h5>
                </div>
          </div>
          <div class="row">
              <div class="col-6 col-md-4"></div>
              <div class="col-6 col-md-4"><a class="btn btn-block btn-success" 
                href="{{URL::action('Postulante\CandidatoController@becomePremium')}}">
                Volverse Premium</a></div>
              <div class="col-6 col-md-4"></div>
            </div>
          
      
        </div>
      </div>
      
    </div>
                        
  </div>
</div>
      
@endsection