@extends('layouts.postulante')

@section('content')
<h1> 
    <strong>MI CUENTA</strong>   
    <small>Administrador</small>
</h1>
<br> <br>
<div class="col-md-2 vertical"></div>

<div class="container">
    <div class="row">
        <div class="col-md-6" >
             <i class="fa fa-fw fa-user fa-10x" style="font-size: 60px;"></i>
             <a href="/" style="font-size: 30px;">Mi Perfil</a>
         </div>   
        <div class="col-md-6" >
            <i class="fa fa-fw fa-vcard-o fa-10x" style="font-size: 60px;"></i>
            <a href="/" style="font-size: 30px;">Lista Candidatos</a>
        </div>    
    </div>
</div>
<br> <br>
<br> <br>
<div class="container">
        <div class="row">
            <div class="col-md-6" >
                 <i class="fa fa-fw fa-buysellads fa-10x" style="font-size: 60px;"></i>
                 <a href="/" style="font-size: 30px;">Anuncios Empresas</a>
             </div>   
            <div class="col-md-6" >
                <i class="fa fa-fw fa-list-alt fa-10x" style="font-size: 60px;"></i>
                <a href="/" style="font-size: 30px;">Lista Empresas</a>
            </div>    
        </div>
</div>
<br> <br>
<br> <br>
<div class="container">
        <div class="row">
            <div class="col-md-6" >
                 <i class="fa fa-fw fa-clone fa-10x" style="font-size: 60px;"></i>
                 <a href="/" style="font-size: 30px;">Currículos Candidatos</a>
             </div>     
        </div>
    </div>

@endsection


