@extends('layouts.permisos')

@section('content')
<div class="row justify-content-start">
  <div class="col-md-11">
    <div class="container">
      <div class="row">
          <h2 class="page-header fa fa-comments-o">Publicaciones En Curso</h2>
      </div>
    </div>
    @foreach ($anuncios  as $an)
    <div class="col-md-4">
            <div class="box box-default collapsed-box">
              <div class="box-header with-border">
                <div class="user-block">
                  <img class="img-circle" src="{{asset('dist/img/user1-128x128.jpg')}}" alt="User Image">
                  <span class="username"><a href="#">{{$an->nombre_empresa}}</a></span>
                  <span class="description">Publicado en: {{$an->publicacion_anuncio}}</span>
                  <span class="description">{{$an->categoria_anuncio}}</span>
                  <span class="description">{{$an->cargo_anuncio}}</span>
                </div>
                <div class="box-tools box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
              </div>
              <div class="box-body">
                <p>{{$an->descripcion_anuncio}}</p>
                <div class="attachment-block clearfix">
                  <img class="attachment-img" src="../dist/img/photo1.png" alt="Attachment Image">
                  <div class="attachment-pushed">
                    <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>
                    <div class="attachment-text">
                      Description about the attachment can be placed here.
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
    @endforeach
  </div>
</div>
@endsection
