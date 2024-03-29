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
    <h1>{{$candidato[0]->nombre_candidato}} {{$candidato[0]->apellido_candidato}}</h1>
        <p id="bio_left">
            {{$candidato[0]->telefono_candidato}} - {{$candidato[0]->celular_candidato}}
            <br>	
            <script type="text/javascript">email();</script>
            <a href="mailto:john.smith@example.com">{{$candidato[0]->email_candidato}}</a>
        </p>
        <p id="bio_right">{{$candidato[0]->direccion_candidato}}<br>{{$candidato[0]->ciudad_candidato}}, Bolivia</p>

        <h2>OBJETIVO</h2>
        <p class="data">{{$candidato[0]->presentacion_biografica}}.</p>

        <h2>EXPERIENCIA</h2>
        <div class="job">
            <p class="date">2000-Present</p>
            <div class="job_data">
                <h3><a href="http://example.com/">Company Name</a></h3>
                <p class="location">{{$candidato[0]->ciudad_candidato}}, Bolivia</p>
                <p class="company">Company description.</p>
                <p class="position">Position/Title</p>
                <ul>
                    <li>Responsibility description</li>
                    <li>Accomplishment description #1</li>
                    <li>Accomplishment #2</li>
                </ul>
                &nbsp;
                <p class="position">Position/Title 2</p>
                <ul>
                    <li>Responsibility description #2</li>
                    <li>Accomplishment for position #2</li>
                </ul>
                &nbsp;
            </div>
        </div>

        <div class="job">
            <p class="date">1995-2000</p>
            <div class="job_data">
                <h3>Company Name</h3>
                <p class="location">{{$candidato[0]->ciudad_candidato}}, Bolivia</p>
                <p class="company">Company description.</p>
                <p class="position">Position/Title</p>
                <ul>
                    <li>Responsibility description</li>
                    <li>Accomplishment description #1</li>
                    <li>Accomplishment #2</li>
                </ul>
                &nbsp;
            </div>
        </div>

        <h2>HABILIDADES, TECNOLOGIAS &amp; PROYECTOS</h2>
        <ul>
            <li>Skill description #1</li>
            <li>Skill description #2</li>
            <li>Skill description #3</li>
        </ul>

        <h2>EDUCACION &amp; INTERESES</h2>
        <ul>
            <li>Degree description</li>
            <li>Interest description</li>
            <li>Accomplishment of note</li>
        </ul>

        <p id="references">References available upon request.</p>

        <p id="meta">
            <span id="versions"><a href="http://alexking.org/site/projects/html-resume-template/demo/resume.php">HTML version</a> | <a href="http://alexking.org/site/projects/html-resume-template/demo/resume.php?output=html&amp;contained=1">E-mailable HTML version</a> | <a href="http://alexking.org/site/projects/html-resume-template/demo/resume.php?output=text">Plain Text (.txt) version</a>.</span>
            <span id="valid">Valid <a href="http://validator.w3.org/check/referer">XHTML 1.1</a> / <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS 2.0</a></span>
        </p>
    </body>
</html>