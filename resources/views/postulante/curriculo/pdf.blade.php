<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!-- HTML Resume Template from http://www.alexking.org/software/resume/ -->
<html>
    <head>
        <title>John Smith</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <style type="text/css" media="screen">
            @import url(http://alexking.org/site/projects/html-resume-template/demo/resume.php?output=css_screen);
            body {
            margin: 0px;
            }
            p, td, span, li, a { 
                font-family: verdana, arial, helvetica, sans-serif; 
            }
            h1 {
                font: 14pt verdana, arial, helvetica, sans-serif;
                font-weight: bold;
                margin: 0 0 5px 0;
            }
            h2 {
                border-bottom: 1px solid #666;
                clear: both;
                font: 11pt verdana, arial, helvetica, sans-serif;
                font-weight: bold;
                margin: 15px 0 10px 0;
                padding: 0 0 3px 0;
                width: 100%;
            }
            h3 {
                font: 11pt verdana, arial, helvetica, sans-serif;
                font-weight: bold;
                margin: 0 0 2px 0;
                padding: 0;
            }
            li {
                font-size: 10pt;
                margin: 0 0 3px 5%;
                padding: 0;
            }
            p {
                font-size: 10pt;
                margin: 0 0 10px 0;
                padding: 0;
            }
            body ul {
                margin: 0 0 0 20%;
                padding: 0;
            }
            body div ul {
                margin: 3px 0 0 0;
                padding: 0;
            }
            #bio_left {
                font-size: 11pt;
                float: left;
                width: 50%;
            }
            #bio_right {
                font-size: 11pt;
                float: left;
                text-align: right;
                width: 50%;
            }
            .company {
                clear: both;
                margin: 0 0 5px 0;
                padding: 0;
            }
            .data {
                padding-left: 20%;
            }
            .date {
                clear: left;
                float: left;
                padding-top: 2px;
                width: 20%;
            }
            .job {
                clear: both;
                width: 100%;
            }
            .job_data {
                float: left;
                width: 80%;
            }
            .location {
                clear: right;
                float: right;
                text-align: right;
                width: 20%;
            }
            .position {
                font-style: italic;
                margin: 0 0 5px 0;
            }
            #references {
                margin-top: 20px;
            }
            #meta {
                display: none;
            }
        </style>
        <link rel="stylesheet" type="text/css" media="print" href="John%20Smith_files/resume.css">
        <script type="text/javascript" src="John%20Smith_files/resume.php"></script>
    </head>

    <body>
        <h1>Nombre: {{$general->nombre_candidato}} {{$general->apellido_candidato}}</h1>
        <h1>Titulo: {{$informaciones->titulo_informacion}}</h1>
        <p id="bio_left">
            <strong>Celular:</strong> {{$general->celular_candidato}}
            <br>
            <strong>Telefono:</strong> {{$general->telefono_candidato}}
            <br>	
            <script type="text/javascript">email();</script>
            <a href="mailto:$general->email_candidato"><strong>Email:</strong> {{$general->email_candidato}}</a>
            <br>
            <strong>Fecha de Nacimiento:</strong> {{$general->fecha_nacimiento}}
            <br>
            <strong>{{$general->tipo_documento_identidad}}:</strong> {{$general->numero_documento_identidad}}
        </p>
        <p id="bio_right" ><strong>Direccion:</strong> {{$general->direccion_candidato}}<br><strong>Ciudad:</strong> {{$general->ciudad_candidato}}
            <br>
            <strong>Sexo:</strong> {{$general->sexo}}
            <br>
            <strong>Estado Civil:</strong> {{$general->estado_civil}}
        </p>

        <h2>DETALLES</h2>
        <p class="data"><strong>Pretension Salarial:</strong> {{$informaciones->pretension_salarial}}
            <br> <strong>Categoria:</strong> {{$informaciones->categoria_informacion}}
            <br> <strong>Tipo de Contrato:</strong> {{$informaciones->contrato_informacion}}
            <br> <strong>Presentacion Biografica:</strong> {{$informaciones->presentacion_biografica}}</p>

        
        @if ($experiencia=="Si")
            <h2>EXPERIENCIA</h2>
             @foreach ($experiencias  as $ex)
                <div class="job">
                     @if ($ex->fecha_fin_experiencia==null)
                        <p class="date">{{$ex->fecha_inicio_experiencia}}/ <br> Presente</p>
                     @else
                        <p class="date">{{$ex->fecha_inicio_experiencia}}/ <br> {{$ex->fecha_fin_experiencia}}</p> 
                     @endif
                     <div class="job_data">
                         <h3>{{$ex->nombre_empresa}}</h3>
                         <p class="location">{{$ex->pais_experiencia}}, {{$ex->ciudad_experiencia}}</p>
                         <p class="company">{{$ex->telefono_referencia}}</p>
                         <p class="position">{{$ex->cargo_empresa}}/{{$ex->categoria_experiencia}}</p>
                         <ul>
                             <li><strong>Descripcion:</strong> {{$ex->descripcion_experiencia}}</li>
                             <li><strong>Personas a Cargo:</strong> {{$ex->personas_cargo}}</li>
                             <li><strong>Años de Experiencia:</strong> {{$ex->anios_experiencia}}</li>
                             <li><strong>Referencia:</strong> {{$ex->nombre_referencia}}</li>
                         </ul>
                         &nbsp;
                     </div>
                </div>
             @endforeach
        @else
        @endif
        
        @if ($habilidad=="Si")
            <h2>HABILIDADES</h2>
            @foreach ($habilidades as $ha)
                <ul>
                    <li><strong>{{$ha->habilidad}}</strong>, {{$ha->anios_habilidad}} años de experiencia</li>
                </ul>
            @endforeach
        @else
        @endif

        @if ($idioma=="Si")
            <h2>IDIOMAS</h2>
            @foreach ($idiomas as $idi)
                <ul>
                    <li><strong>{{$idi->idioma}}</strong></li>
                    <p class="data">
                        <strong>Nivel Escritura:</strong> {{$idi->nivel_escritura}}
                        <br> <strong>Nivel Oral:</strong> {{$idi->nivel_oral}}
                        <br> <strong>Nivel Lectura:</strong> {{$idi->nivel_lectura}}
                    </p>
                </ul>
            @endforeach
        @else
        @endif

        @if ($secundaria=="Si")
            <h2>EDUCACION SECUNDARIA</h2>
            @foreach ($secundarias as $sec)
                <ul>
                    <li><strong>{{$sec->institucion_secundaria}} </strong></li>
                    <p class="data">{{$sec->pais_secundaria}}, {{$sec->ciudad_secundaria}}
                    <br> <strong>Fecha Fin: </strong>{{$sec->fecha_fin_secundaria}}
                    </p>
                </ul>
            @endforeach
        @else
        @endif

        @if ($tecnica=="Si")
            <h2>EDUCACION TECNICA</h2>
            @foreach ($tecnicas as $tec)
                <ul>
                    <li><strong>{{$tec->institucion_tecnica}} </strong></li>
                    <p class="data">{{$tec->pais_tecnico}}, {{$tec->ciudad_tecnico}}
                    <br> <strong>Curso: </strong>{{$tec->curso_tecnico}}
                    <br> <strong>Fecha Curso: </strong>{{$tec->fecha_curso_tecnico}}
                    </p>
                </ul>
            @endforeach
        @else
        @endif

        @if ($universitaria=="Si")
            <h2>EDUCACION UNIVERSITARIA</h2>
            @foreach ($universidades as $uni)
                <ul>
                    <li><strong>{{$uni->universidad}} </strong></li>
                    <p class="data">{{$uni->pais_universidad}}, {{$uni->ciudad_univeridad}}
                    <br> <strong>Carrera: </strong>{{$uni->carrera}}
                    @if ($uni->fecha_fin_universidad==null)
                        <br> <strong>Fecha Fin: </strong>Estudiando Actualmente
                        
                    @else
                        <br> <strong>Fecha Fin: </strong>{{$uni->fecha_fin_universidad}}
                    @endif
                    </p>
                </ul>
            @endforeach
        @else
        @endif

        @if ($taller=="Si")
            <h2>CURSOS, TALLERES, SEMINARIOS</h2>
            @foreach ($talleres as $ta)
                <ul>
                    <li><strong>{{$ta->nombre_taller}} </strong></li>
                    <p class="data">{{$ta->lugar_taller}}
                    <br> <strong>Impartido por: </strong>{{$ta->impartido_por}}
                    <br> <strong>Fecha: </strong>{{$ta->fecha_taller}}
                    </p>
                </ul>
            @endforeach
        @else
        @endif
        

        <p id="meta">
            <span id="versions"><a href="http://alexking.org/site/projects/html-resume-template/demo/resume.php">HTML version</a> | <a href="http://alexking.org/site/projects/html-resume-template/demo/resume.php?output=html&amp;contained=1">E-mailable HTML version</a> | <a href="http://alexking.org/site/projects/html-resume-template/demo/resume.php?output=text">Plain Text (.txt) version</a>.</span>
            <span id="valid">Valid <a href="http://validator.w3.org/check/referer">XHTML 1.1</a> / <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS 2.0</a></span>
        </p>
    </body>
</html>