<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TrabajopolisUmss</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  {{-- <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css"> --}}
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  {{-- <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css"> --}}
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  {{-- <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css"> --}}
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- daterange picker -->
  {{-- <link rel="stylesheet" href="../../bower_components/bootstrap-daterangepicker/daterangepicker.css"> --}}
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap datepicker -->
  {{-- <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"> --}}
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
  {{-- <link rel="stylesheet" href="../../plugins/iCheck/all.css"> --}}
  <link rel="stylesheet" href="{{asset('plugins/iCheck/all.css')}}">
  <!-- Bootstrap Color Picker -->
  {{-- <link rel="stylesheet" href="../../bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css"> --}}
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
  <!-- Bootstrap time Picker -->
  {{-- <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css"> --}}
  <link rel="stylesheet" href="{{asset('plugins/timepicker/bootstrap-timepicker.min.css')}}">
  <!-- Theme style -->
  {{-- <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css"> --}}
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
  <!-- DataTables -->
  {{-- <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"> --}}
  <link rel="stylesheet" href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.cs')}}">
  <!-- Select2 -->
  {{-- <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css"> --}}
  <link rel="stylesheet" href="{{asset('bower_components/select2/dist/css/select2.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  {{-- <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css"> --}}
  <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/extra.css')}}">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue sidebar-mini fixed">
  <div class="wrapper">
  
    <header class="main-header">
  
      <!-- Logo -->
      <a href="{{asset('empresa')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>U</b>T</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>UMSS</b>Trabajos</span>
      </a>
  
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">4</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 4 messages</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          Support Team
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <!-- end message -->
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          AdminLTE Design Team
                          <small><i class="fa fa-clock-o"></i> 2 hours</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          Developers
                          <small><i class="fa fa-clock-o"></i> Today</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          Sales Department
                          <small><i class="fa fa-clock-o"></i> Yesterday</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          Reviewers
                          <small><i class="fa fa-clock-o"></i> 2 days</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">See All Messages</a></li>
              </ul>
            </li>
            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                        page and may cause design problems
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-red"></i> 5 new members joined
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-user text-red"></i> You changed your username
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks: style can be found in dropdown.less -->
            <li class="dropdown tasks-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">9</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 9 tasks</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li><!-- Task item -->
                      <a href="#">
                        <h3>
                          Design some buttons
                          <small class="pull-right">20%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li><!-- Task item -->
                      <a href="#">
                        <h3>
                          Create a nice theme
                          <small class="pull-right">40%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">40% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li><!-- Task item -->
                      <a href="#">
                        <h3>
                          Some task I need to do
                          <small class="pull-right">60%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li><!-- Task item -->
                      <a href="#">
                        <h3>
                          Make beautiful transitions
                          <small class="pull-right">80%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">80% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                  </ul>
                </li>
                <li class="footer">
                  <a href="#">View all tasks</a>
                </li>
              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{asset('logos_empresa/').'/'.$anuncios[0]->logo }}" class="user-image" alt="User Image">
                {{-- img src="{{asset('logos_empresa/$anuncios[0]->logo')}}" class="user-image" alt="User Image"> --}}
                <span class="hidden-xs"></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="{{asset('logos_empresa/').'/'.$anuncios[0]->logo }}" class="img-circle" alt="User Image">
  
                  <p>
                    {{ $anuncios[0]->nombre_empresa }}
                  </p>
                </li>
                <!-- Menu Body -->
                {{-- <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li> --}}
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            {{-- <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li> --}}
          </ul>
        </div>
  
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> --}}
            <img src="{{asset('logos_empresa/').'/'.$anuncios[0]->logo }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ $anuncios[0]->nombre_empresa }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
          </div>
          
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">PANEL DE CONTROL</li>
          
          <li class="treeviews">
            <a href="{{asset('empresa/anuncios/create')}}">
              <i class="fa fa-paper-plane"></i> <span>Publicar Anuncios</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
          </li>

          <li class="treeviews">
              <a href="{{asset('empresa/postulante/buscar')}}">
                <i class="fa fa-search"></i> <span>Buscar Curriculum</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
          </li>

          <li class="treeviews">
              <a href="{{asset('empresa/anuncios')}}">
                <i class="fa fa-bullhorn"></i> <span>Mis Anuncios de Empleo</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
          </li>
          
          <li class="treeviews">
              <a href="{{asset('empresa/postulante')}}">
                <i class="fa fa-list-alt"></i> <span>Lista de Postulantes</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
          </li>

          <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Mis Pagos</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
          </li>

          <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Currículos Guardados</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
          </li>
      </section>
      <!-- /.sidebar -->
    </aside>
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="container">
        @yield('content')
        {{-- {{ $anuncios }} --}}
      </div>
    </div>
    <!-- /.content-wrapper -->
  
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.13
      </div>
      <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
      reserved.
    </footer>  
  </div>
  <!-- ./wrapper -->
  
<!-- jQuery 3 -->
{{-- <script src="../../bower_components/jquery/dist/jquery.min.js"></script> --}}
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
{{-- <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script> --}}
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Select2 -->
{{-- <script src="../../bower_components/select2/dist/js/select2.full.min.js"></script> --}}
<script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<!-- InputMask -->
{{-- <script src="../../plugins/input-mask/jquery.inputmask.js"></script> --}}
<script src="{{asset('plugins/input-mask/jquery.inputmask.js')}}"></script>
{{-- <script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script> --}}
<script src="{{asset('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
{{-- <script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script> --}}
<script src="{{asset('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<!-- date-range-picker -->
{{-- <script src="../../bower_components/moment/min/moment.min.js"></script> --}}
<script src="{{asset('bower_components/moment/min/moment.min.js')}}"></script>
{{-- <script src="../../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script> --}}
<script src="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap datepicker -->
{{-- <script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script> --}}
<script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- bootstrap color picker -->
{{-- <script src="../../bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script> --}}
<script src="{{asset('bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- bootstrap time picker -->
{{-- <script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script> --}}
<script src="{{asset('plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<!-- SlimScroll -->
{{-- <script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script> --}}
<script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
{{-- <script src="../../bower_components/fastclick/lib/fastclick.js"></script> --}}
<script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- iCheck 1.0.1 -->
{{-- <script src="../../plugins/iCheck/icheck.min.js"></script> --}}
<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
<!-- AdminLTE App -->
{{-- <script src="../../dist/js/adminlte.min.js"></script> --}}
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="../../dist/js/demo.js"></script> --}}
<script src="{{asset('dist/js/demo.js')}}"></script>

<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
  
      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()
  
      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }})
      //Date range as a button
      $('#daterange-btn').daterangepicker(
        {
          ranges   : {
            'Today'       : [moment(), moment()],
            'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate  : moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )
  
      //Date picker
      $('#datepicker').datepicker({
        autoclose: true
      })
  
      //iCheck for checkbox and radio inputs
      $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass   : 'iradio_minimal-blue'
      })
      //Red color scheme for iCheck
      $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass   : 'iradio_minimal-red'
      })
      //Flat red color scheme for iCheck
      $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass   : 'iradio_flat-green'
      })
  
      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()
  
      //Timepicker
      $('.timepicker').timepicker({
        showInputs: false
      })
    })
  </script>
</body>
</html>
