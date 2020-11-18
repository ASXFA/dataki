<!DOCTYPE html>
<!--
This is a Kredit Motor template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
<!-- <img src="<?php echo base_url();?>assets/img/logo.png" class="user-image" alt="User Image"> -->
<link rel="icon" type="image/png" href="assets/img/logo.png">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome to E-Research Informatics Engineering Langlangbuana University</title>
  <img src="<?php echo base_url();?>assets/img/icon.png" class="user-image" alt="User Image">
  <!-- <link rel="icon" href="/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" /> -->
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
          
          <!-- <right><a href="<?php echo site_url('login');?>" class="fa fa-user navbar-brand"> Login</a> -->
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
          <!-- <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form>  -->
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
              <!-- <a href="<?php echo site_url('register');?>" class="navbar-brand">Register</a> -->
              <a href="<?php echo site_url('login');?>" class="fa fa-user navbar-brand"> Login</a>
              <!-- <a href="login" class="dropdown-toggle" data-toggle="dropdown"> -->
                <!-- The user image in the navbar-->
                <!-- <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <!-- <a href="<?php echo site_url('dashboard2');?>" class="navbar-brand">Grafik Data</a> -->
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
   
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <title>TIF UNLA</title> -->
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h4><center><strong>
        <h3 class="box-title">PENCARIAN JUDUL DATA KARYA ILMIAH</h3></center>
          <!-- <small>Example 2.0</small> -->
        </h4>
        <!-- <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li>
        </ol> -->
      </section>

      <!-- Main content -->
      <section class="content">
      <div class="row">
    <div class="col-md-16 text-center">
                                <center><h5 class="box-title">Silahkan Input Keyword Judul</h></center>
                                        <div style="margin-top: 12px"  id="message">
                                            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                                        </div>
                                <div class="col-xl-12 text-center">
                                    <form action="" method="get" class="form-inline">
                                        <div class="input-group input-group-sb">
                                            <label for="Kata" class="sr-only">Masukan Judul</label>
                                            <input type="text" class="form-control" name="kata" placeholder="Masukan Judul">
                                        </div>
                                        <button type="submit" class="btn btn-info btn-flat">Cari</button>
                                    </form>
                                 </div>                  
                            </div>
                            <?php 
                                if(isset($hasil)){
                            ?>
                                    <!-- <center><u><h3>KARYA ILMIAH INFORMATIKA UNLA</h3></u></center> -->
                                    
                                    <h4>Jumlah Judul yang ditemukan : <?php echo count($hasil); ?></h4>
                                    <h4 class="text-warning">Pencarian <b><i><?php echo $informasi['kataa']; ?></i></b> ditemukan pada judul :</h4>
                                    
                                <?php 
                                    foreach($hasil as $h)
                                    {
                                ?>
                                <hr>
                                    <div class="card">
                                        <h4><b><?php echo nl2br(str_replace($h['KATA'],"<font color='red'><b>".ucfirst($h['KATA']).
                                        "</b></font>",strtolower($h['JUDUL_DATA']))) ?></b></h4>
                                        <h4><?php echo $h['ABSTRAK_DATA']; ?></h4>
                                        <table class="table">
                                            <tr>
                                                <td width="10%">ID PENULIS <?= $h['NO_USER'] ?></td>
                                                <td width="1%"> | </td>
                                                <td width="15%">PENULIS<br><?= $h['NAME'] ?></td>
                                                <td width="1%"> | </td>
                                                <td width="5%">KONSENTRASI <?= $h['BIDANG_DATA'] ?></td>
                                                <td width="1%">|</td>
                                                <td width="5%">BIDANG <?= $h['JENIS_DATA'] ?></td>
                                                <td width="1%">|</td>
                                                <td width="3%">TAHUN <?= $h['TAHUN_DATA'] ?></td>
                                                <td width="1%">|</td>
                                                <!-- <td width="20%"><a href="<?php echo base_url(); ?>index.php/upload/download/<?php echo $h['ID_DATA'];; ?>
                                                "><i class="fa fa-download"> DOWNLOAD</i></a><br><a href="<?php echo base_url(); ?>index.php/kmp"><i class="fa fa-arrow-circle-left">BACK</i></a></td> -->
                                                <td width="20%"><a href="<?php echo base_url(); ?>index.php/login"><class="">FULL PDF</a></td>
                                                <td>
                                                <td></td>
                                            </tr>
                                        </table>
                                        <h4 class="text-success">Berada di posisi String ke :  <?= $h['POSISI'] ?></h4>
                                        <hr>
                                    </div>
                                        <!-- <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $h['NO_USER']; ?></td>
                                            <td><?php echo $h['NAME']; ?></td>
                                            <td><?php echo nl2br(str_replace($h['KATA'],"<font color='red'><b>".$h['KATA']."</b></font>",strtolower($h['JUDUL_DATA']))) ?></td> -->
                                            <!-- <td><?php echo $h['ABSTRAK_DATA']; ?></td> -->
                                            <!-- <td><?php echo $h['BIDANG_DATA']; ?></td>
                                            <td><?php echo $h['TAHUN_DATA']; ?></td> -->
                                            <!-- <td><img width="100 " src="<?php echo base_url(); ?>uploads/<?php $h['NAMA_BERKAS']; ?>"/></td> -->
                                            
                                            <!-- <td><a href="<?php echo base_url(); ?>index.php/upload/download/<?php echo $h['ID_DATA'];; ?>">Download</a></td> -->
                                        <!-- </tr> -->
                                        <?php
                                    }
                                ?>
                            <?php
                            }else{ ?>
                            
                            
                            <?php }?>
        </div>
        <!-- <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Alamat : </h3>
          </div>
          <div class="box-body">
          
          </div> -->
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.82
      </div>
      <strong>Copyright &copy; 41155050160030 TEKNIK INFORMATIKA UNLA</strong>
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
</body>
</html>