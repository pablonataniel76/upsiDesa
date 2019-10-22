@extends('layouts.permisos')

@section('content')
<div class="row justify-content-start">
        <div class="box box-primary">
        <div class="box-header">
            <h1> 
                <strong>MI CUENTA</strong>   
                <small>Empresa</small>
            </h1>
        </div>
        <div class="box-body">

            <div class="container">
                <div class="row">
                    <div class="col-md-5" >
                        <i class="fa fa-fw fa-newspaper-o fa-10x" style="font-size: 60px;"></i>
                        <a href="/" style="font-size: 30px;">Publicar Anuncios</a>
                    </div>   
                    <div class="col-md-4" >
                        <i class="fa fa-fw fa-list-alt fa-10x" style="font-size: 60px;"></i>
                        <a href="/" style="font-size: 30px;">Lista de Postulantes</a>
                    </div> 
                    <div class="col-md-3" >
                        <i class="fa fa-fw fa-user fa-10x" style="font-size: 60px;"></i>
                        <a href="/" style="font-size: 30px;">Perfil</a>
                    </div>    
                </div>
            </div>
            <br> 
            <div class="container">
                <div class="row">
                    <div class="col-md-5" >
                        <i class="fa fa-fw fa-search fa-10x" style="font-size: 60px;"></i>
                        <a href="/" style="font-size: 30px;">Buscar CVs en Base de Datos</a>
                    </div>   
                    <div class="col-md-4" >
                        <i class="fa fa-fw fa-credit-card fa-10x" style="font-size: 60px;"></i>
                        <a href="/" style="font-size: 30px;">Mis Pagos</a>
                    </div>    
                </div>
            </div>
            <br> 
            <br> 
            <div class="container">
                <div class="row">
                    <div class="col-md-5" >
                        <i class="fa fa-fw fa-bullhorn fa-10x" style="font-size: 60px;"></i>
                        <a href="/" style="font-size: 30px;">Mis Anuncios de Empleo</a>
                    </div> 
                    <div class="col-md-4" >
                        <i class="fa fa-fw fa-save fa-10x" style="font-size: 60px;"></i>
                        <a href="/" style="font-size: 30px;">Currículos Guardados</a>
                    </div>  
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
