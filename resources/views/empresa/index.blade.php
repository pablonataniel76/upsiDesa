@extends('layouts.permisos')

@section('content')
<div class="row justify-content-start">
  <div class="col-md-11">
    <h2 class="page-header fa fa-comments-o">Publicaciones En Curso</h2>
    @foreach ($anuncios  as $an)
    <div class="col-md-4">
            <!-- Box Comment -->
            <div class="box box-default collapsed-box">
              <div class="box-header with-border">
                <div class="user-block">
                  <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                  <span class="username"><a href="#">{{$an->nombre_empresa}}</a></span>
                  <span class="description">Publicado en: {{$an->publicacion_anuncio}}</span>
                  <span class="description">{{$an->categoria_anuncio}}</span>
                  <span class="description">{{$an->cargo_anuncio}}</span>
                </div>
                <!-- /.user-block -->
                <div class="box-tools box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <!-- post text -->
                <p>{{$an->descripcion_anuncio}}</p>
  
                <!-- Attachment -->
                <div class="attachment-block clearfix">
                  <img class="attachment-img" src="../dist/img/photo1.png" alt="Attachment Image">
  
                  <div class="attachment-pushed">
                    <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>
  
                    <div class="attachment-text">
                      Description about the attachment can be placed here.
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                    </div>
                    <!-- /.attachment-text -->
                  </div>
                  <!-- /.attachment-pushed -->
                </div>
                <!-- /.attachment-block -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
    @endforeach
  </div>
    
</div>
@endsection
