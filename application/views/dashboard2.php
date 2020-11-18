<!DOCTYPE html>
<!--
This is a Kredit Motor template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
<link rel="icon" type="image/png" href="assets/img/logo.png">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IF UNLA</title>
  <img src="<?php echo base_url();?>assets/img/icon.png" class="user-image" alt="User Image">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
    <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="http://localhost/dataki/assets/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="http://localhost/dataki/assets/css/bootstrap-datetimepicker.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/dataki/assets/font-awesome-4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://localhost/dataki/assets/font-awesome-4.6.3/css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="http://localhost/dataki/assets/ionicons-2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="http://localhost/dataki/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="http://localhost/dataki/assets/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="http://localhost/dataki/assets/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="http://localhost/dataki/assets/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="http://localhost/dataki/assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="http://localhost/dataki/assets/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/dataki/assets/dist/css/AdminLTE.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="http://localhost/dataki/assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="http://localhost/dataki/assets/plugins/datepicker/datepicker3.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://localhost/dataki/assets/dist/css/skins/_all-skins.min.css">
  
  <link rel="stylesheet" href="http://localhost/dataki/assets/datatables/dataTables.bootstrap.css"/>
  <link rel="stylesheet" href="http://localhost/dataki/assets/datatables/dataTables.bootstrap.css"/>
  <link rel="stylesheet" href="http://localhost/dataki/assets/morris/morris.css"/>
</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
        <!-- <a href="<?php echo site_url('dashboard');?>"><i class="navbar-brand"></i><span>Dashboard</span></a> -->
        <a href="<?php echo site_url('mainmenu');?>" class="fa fa-home navbar-brand"> Home</a>
          <a href="<?php echo site_url('dashboard2');?>" class="fa fa-bar-chart navbar-brand"> Grafik Data</a>
          <a href="<?php echo site_url('judul');?>" class="fa fa-search navbar-brand"> Pencarian Judul</a>
          <!-- <a href="<?php echo site_url('#');?>" class="fa fa-info navbar-brand"> About</a> -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
            <!-- <li><a href="#">Link</a></li> -->
            <li class="dropdown">
              <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a> -->
              <ul class="dropdown-menu" role="menu">
                <!-- <li><a href="#">Action</a></li> -->
                <!-- <li><a href="#">Another action</a></li> -->
                <!-- <li><a href="#">Something else here</a></li> -->
                <li class="divider"></li>
                <!-- <li><a href="#">Separated link</a></li> -->
                <li class="divider"></li>
                <!-- <li><a href="#">One more separated link</a></li> -->
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <!-- <input type="text" class="form-control" id="navbar-search-input" placeholder="Search"> -->
            </div>
          </form> 
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- <i class="fa fa-envelope-o"></i> -->
                <!-- <span class="label label-success">4</span> -->
              </a>
              <ul class="dropdown-menu">
                <!-- <li class="header">You have 4 messages</li> -->
                <li>
                  <!-- inner menu: contains the messages -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <!-- User Image -->
                          <!-- <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
                        </div>
                        <!-- Message title and timestamp -->
                        <h4>
                          <!-- Support Team -->
                          <!-- <small><i class="fa fa-clock-o"></i> 5 mins</small> -->
                        </h4>
                        <!-- The message -->
                        <!-- <p>Why not buy a new awesome theme?</p> -->
                      </a>
                    </li>
                    <!-- end message -->
                  </ul>
                  <!-- /.menu -->
                </li>
                <!-- <li class="footer"><a href="#">See All Messages</a></li> -->
              </ul>
            </li>
            <!-- /.messages-menu -->

            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- <i class="fa fa-bell-o"></i> -->
                <!-- <span class="label label-warning">10</span> -->
              </a>
              <ul class="dropdown-menu">
                <!-- <li class="header">You have 10 notifications</li> -->
                <li>
                  <!-- Inner Menu: contains the notifications -->
                  <ul class="menu">
                    <li><!-- start notification -->
                      <a href="#">
                        <!-- <i class="fa fa-users text-aqua"></i> 5 new members joined today -->
                      </a>
                    </li>
                    <!-- end notification -->
                  </ul>
                </li>
                <!-- <li class="footer"><a href="#">View all</a></li> -->
              </ul>
            </li>
            <!-- Tasks Menu -->
            <li class="dropdown tasks-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- <i class="fa fa-flag-o"></i> -->
                <!-- <span class="label label-danger">9</span> -->
              </a>
              <ul class="dropdown-menu">
                <!-- <li class="header">You have 9 tasks</li> -->
                <li>
                  <!-- Inner menu: contains the tasks -->
                  <ul class="menu">
                    <li><!-- Task item -->
                      <a href="#">
                        <!-- Task title and progress text -->
                        <h3>
                          <!-- Design some buttons -->
                          <!-- <small class="pull-right">20%</small> -->
                        </h3>
                        <!-- The progress bar -->
                        <div class="progress xs">
                          <!-- Change the css width attribute to simulate progress -->
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <!-- <span class="sr-only">20% Complete</span> -->
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                  </ul>
                </li>
                <li class="footer">
                  <!-- <a href="#">View all tasks</a> -->
                </li>
              </ul>
            </li>
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <!-- <a href="login" class="dropdown-toggle" data-toggle="dropdown"> -->
              <a href="<?php echo site_url('login');?>" class="fa fa-user navbar-brand"> Login</a>
                <!-- The user image in the navbar-->
                <!-- <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <!-- <span class="hidden-xs">LOGIN</span> -->
                <!-- <a href="#" class="btn btn-default btn-flat">Sign out</a> -->
              </a>
              <!-- <ul class="dropdown-menu"> -->
                <!-- The user image in the menu -->
                <li class="user-header">
                  <!-- <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->

                  <p>
                    <!-- Alexander Pierce - Web Developer -->
                    <!-- <small>Member since Nov. 2012</small> -->
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <!-- <a href="#">Followers</a> -->
                    </div>
                    <div class="col-xs-4 text-center">
                      <!-- <a href="#">Sales</a> -->
                    </div>
                    <div class="col-xs-4 text-center">
                      <!-- <a href="#">Friends</a> -->
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <!-- <a href="#" class="btn btn-default btn-flat">Profile</a> -->
                  </div>
                  <div class="pull-right">
                    <!-- <a href="#" class="btn btn-default btn-flat">Sign out</a> -->
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
   
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <!-- <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
    <!-- agar array tidak menjadi object -->
    <?php 
      $semuaBidang = [];
      foreach($bidang as $b){
        $lower = strtolower($b->BIDANG_DATA);
        array_push($semuaBidang,ucfirst($lower));
      }
      $bidang_data = json_encode($semuaBidang);
    ?>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
         <center> <h3 class="box-title">Grafik Jumlah Data</h3></center>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div id="graph"></div>
        </div>
        <!-- /.box-body -->
        <!-- <div class="box-footer">
        </div> -->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<script src="<?php echo base_url('')?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url('')?>assets/raphael-min.js"></script>
<script src="<?php echo base_url('')?>assets/morris/morris.min.js"></script>
<script>
  console.log(<?= $bidang_data ?>);
    Morris.Bar({
      element: 'graph',
      data: <?php echo $jumlah;?>,
      xkey: 'TAHUN_DATA',
      ykeys: <?= $bidang_data ?>,
      labels: <?= $bidang_data ?>,
      pointSize: 2,
      hideHover: 'auto'
    });
</script>