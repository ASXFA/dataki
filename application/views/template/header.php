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
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
    <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?php echo base_url('');?>assets/css/bootstrap-datetimepicker.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/font-awesome-4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/font-awesome-4.6.3/css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/ionicons-2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/dist/css/AdminLTE.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/plugins/datepicker/datepicker3.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('');?>assets/dist/css/skins/_all-skins.min.css">
  
  <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
  <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
  <link rel="stylesheet" href="<?php echo base_url('assets/morris/morris.css') ?>"/>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">
  <!-- <link rel="icon" type="image/png" href="assets/img/logo.png"> -->

    <!-- Logo -->
    <a href="dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b></span>
      <!-- logo for regular state and mobile devices -->
      <!-- <link rel="icon" type="image/png" href="assets/img/logo.png"> -->
      <span class="logo-lg"><b>TIF</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <!-- <link rel="icon" type="image/png" href="assets/img/logo.png"> -->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          
          <!-- User Account Menu -->
          
              <!-- Menu Body -->
              
                <!-- /.row -->
              <!-- Menu Footer-->
              <!-- <li class="user-footer">
                
                <div class="pull-right">
                  <a href="<?php echo site_url("Login/logout");?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li> -->
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <!-- <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> -->
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
        <br>
          <!-- <img src="<?php echo base_url('/upload/avatars/'.$this->session->userdata('PHOTO'));?>" class="img-circle" alt="User Image"> -->
        </div>
        <div class="pull-left info">
          <p>Hi, <?php echo $this->session->userdata("NAME");?></p>
          <!-- <p><?php echo $this->session->userdata("NAME");?></p> -->
          
          <!-- Status -->
          <br><br>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="<?php echo site_url('dashboard');?>"><i class="fa fa-home"></i><span>Dashboard</span></a>
            <!-- <span class="pull-right-container">
              <i class="fa fa-circle-o"></i>
            </span> -->
          </li>
        <li class="treeview">
        <!-- <a href="<?php echo site_url('upload');?>"><i class="fa fa-search"></i><span>Pencarian Data</span></a> -->
        <a href="<?php echo site_url('data');?>"><i class="fa fa-database"></i><span>Pencarian Data</span></a>
        </li>
        <li class="treeview">
        <!-- <a href="<?php echo site_url('upload');?>"><i class="fa fa-search"></i><span>Pencarian Data</span></a> -->
        <a href="<?php echo site_url('kmp');?>"><i class="fa fa-search"></i><span>Cari Berdasarkan Judul</span></a>
        </li>
          <!-- <a href="<?php echo site_url('upload');?>"><i class="fa fa-book"></i><span>Karya Ilmiah Saya</span></a> -->
            <!-- <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span> -->
        <!-- <a href="<?php echo site_url('karya');?>"><i class="fa fa-search"></i><span>Pencarian Data</span></a> -->
        <li class="treeview">
        <?php 
        if($this->session->userdata('LEVEL')!="Mahasiswa"){
        ?>
        <a href="<?php echo site_url('karya');?>"><i class="fa fa-book"></i><span>Kelola Karya Ilmiah</span></a>
        <?php }else{ ?>
        <a href="<?php echo site_url('karya');?>"><i class="fa fa-book"></i><span>Karya Ilmiah Saya</span></a>
        <?php } ?>
        </li>
        <li class="treeview">
          <a href=""><i class="fa fa-cloud text-blue"></i><span>MANAGEMENT DATA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="<?php echo site_url('bidang/get_bidang/AI');?>"><i class="fa fa-lightbulb-o"></i>Artificial Intelegence</a></li>
            <li><a href="<?php echo site_url('bidang/get_bidang/ANDROID');?>"><i class="fa fa-android"></i>Android</a></li>
            <li><a href="<?php echo site_url('bidang/get_bidang/CODEIGNITER');?>"><i class="fa fa-code-fork"></i>Codeigniter</a></li>
            <li><a href="<?php echo site_url('bidang/get_bidang/PHPNATIVE');?>"><i class="fa fa-code"></i>PHP Native</a></li>
            <!-- <li><a href="<?php echo site_url('bidang/get_bidang/ANDROID');?>"><i class="fa fa-android"></i>Android</a></li>
            <li><a href="<?php echo site_url('bidang/get_bidang/WEBSITE');?>"><i class="fa fa-code"></i>Website</a></li>
            <li><a href="<?php echo site_url('bidang/get_bidang/JARINGAN');?>"><i class="fa fa-wifi"></i>Jaringan</a></li>
            <li><a href="<?php echo site_url('bidang/get_bidang/SECURITY');?>"><i class="fa fa-expeditedssl"></i>SECURITY</a></li> -->
          </ul>
          </li>
          <li class="treeview">
          <a href=""><i class="fa fa-wifi text-green"></i><span>JARINGAN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="<?php echo site_url('bidang/get_bidang/MIKROTIK');?>"><i class="fa fa-hdd-o"></i>Mikrotik</a></li>
            <li><a href="<?php echo site_url('bidang/get_bidang/WINBOX');?>"><i class="fa fa-laptop"></i>Winbox</a></li>
            <li><a href="<?php echo site_url('bidang/get_bidang/VMWARE');?>"><i class="fa fa-feed"></i>VMWARE</a></li>
            <!-- <li><a href="<?php echo site_url('bidang/get_bidang/SECURITY');?>"><i class="fa fa-expeditedssl"></i>PHP Native</a></li> -->
            <!-- <li><a href="<?php echo site_url('bidang/get_bidang/ANDROID');?>"><i class="fa fa-android"></i>Android</a></li>
            <li><a href="<?php echo site_url('bidang/get_bidang/WEBSITE');?>"><i class="fa fa-code"></i>Website</a></li>
            <li><a href="<?php echo site_url('bidang/get_bidang/JARINGAN');?>"><i class="fa fa-wifi"></i>Jaringan</a></li>
            <li><a href="<?php echo site_url('bidang/get_bidang/SECURITY');?>"><i class="fa fa-expeditedssl"></i>SECURITY</a></li> -->
          </ul>
          </li>
        <li class="treeview">
          <a href=""><i class="fa fa-expeditedssl text-cyan"></i><span>SECURITY</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="<?php echo site_url('bidang/get_bidang/KEMANAN JARINGAN');?>"><i class="fa fa-bolt"></i>Keamanan Jaringan</a></li>
            <li><a href="<?php echo site_url('bidang/get_bidang/KEMANAN WEBSITE');?>"><i class="fa fa-bug"></i>Keamanan Website</a></li>
            <!-- <li><a href="<?php echo site_url('bidang/get_bidang/JARINGAN');?>"><i class="fa fa-wifi"></i>Codeigniter</a></li> -->
            <!-- <li><a href="<?php echo site_url('bidang/get_bidang/SECURITY');?>"><i class="fa fa-expeditedssl"></i>PHP Native</a></li> -->
            <!-- <li><a href="<?php echo site_url('bidang/get_bidang/ANDROID');?>"><i class="fa fa-android"></i>Android</a></li>
            <li><a href="<?php echo site_url('bidang/get_bidang/WEBSITE');?>"><i class="fa fa-code"></i>Website</a></li>
            <li><a href="<?php echo site_url('bidang/get_bidang/JARINGAN');?>"><i class="fa fa-wifi"></i>Jaringan</a></li>
            <li><a href="<?php echo site_url('bidang/get_bidang/SECURITY');?>"><i class="fa fa-expeditedssl"></i>SECURITY</a></li> -->
          </ul>
          </ul>
        </li>
        </li>
               
        <!-- <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li> -->
        <!-- <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MANAGEMENT KARYA Ilmiah</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Data Karya Ilmiah</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Tambah Data Karya Ilmiah</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Update Data Karya Ilmiah</span></a></li>
      </ul> -->
      <?php 
        if($this->session->userdata('LEVEL')!="Mahasiswa"){
      ?>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MANAGEMENT USER</li>
        <li><a href="<?php echo site_url('users');?>"><i class="fa fa-users text-aqua"></i> <span>Kelola Data User</span></a></li>
        <!-- <li><a href="<?php echo site_url('users/create');?>"><i class="fa fa-user-plus text-yellow"></i> <span>Tambah User</span></a></li>
        <li><a href="<?php echo site_url('userss');?>"><i class="fa fa-pencil-square-o text-red"></i> <span>Update User</span></a></li> -->
      </ul>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MANAGEMENT BIDANG KI</li>
        <!-- <li><a href="#"><i class="fa fa-user text-aqua"></i> <span>My Profile</span></a></li> -->
        <li><a href="<?php echo site_url('bidang');?>"><i class="fa fa-list-ul"></i> <span>LIST KONSENTRASI</span></a></li>
        <li><a href="<?php echo site_url('jenis');?>"><i class="fa fa-list-ul"></i> <span>LIST BIDANG</span></a></li>
      </ul>
        <?php } ?>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MY ACCOUNT</li>
        <!-- <li><a href="#"><i class="fa fa-user text-aqua"></i> <span>My Profile</span></a></li> -->
        <li><a href="#"><i class="fa fa-asterisk text-yellow"></i> <span>Change Password</span></a></li>
        <li><a href="<?php echo site_url('login/logout');?>"><i class="fa fa-sign-out text-red"></i> <span>Sign Out</span></a></li>
      </ul>
      
          <!-- <ul class="treeview-menu">
      <ul class="sidebar-menu">
        <li class="header">HEADER</li> -->
        <!-- Optionally, you can add icons to the link -->
        <!-- <li><a href="<?php echo site_url('mobil');?>"><i class="fa fa-car"></i> <span>Mobil</span></a></li>
        <li><a href="<?php echo site_url('fasilitas');?>"><i class="fa fa-life-ring"></i> <span>Fasilitas Mobil</span></a></li>  
        <li><a href="<?php echo site_url('transaksi');?>"><i class="fa fa-shopping-cart "></i> <span>Pesanan</span></a></li>
        <li><a href="<?php echo site_url('transaksi/proses_list');?>"><i class="fa fa-area-chart"></i> <span>Proses Peminjaman</span></a></li>
        <li><a href="<?php echo site_url('transaksi/selesai_list');?>"><i class="fa fa-check"></i> <span>Transaksi Selesai</span></a></li> -->
    <!--     <li><a href="<?php echo site_url('users');?>"><i class="fa fa-area-chart"></i> <span>Denda</span></a></li>   -->             
        <!-- <li><a href="<?php echo site_url('users');?>"><i class="fa fa-user"></i> <span>Users</span></a></li>                -->
<!--         <li class="treeview">
          <a href="#"><i class="fa fa-edit"></i> <span>Coustomers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('pembeli');?>"><i class="fa fa-angle-double-right"></i>Form Data Coustomers</a></li>
            <li><a href="<?php echo site_url('pembeli/view_pembeli');?>"><i class="fa fa-angle-double-right"></i>List Coustomers</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-motorcycle"></i> <span>Motor</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('motor');?>"><i class="fa fa-angle-double-right"></i>Form Detail Motor</a></li>
            <li><a href="<?php echo site_url('motor/view_list_motor');?>"><i class="fa fa-angle-double-right"></i>List Motor</a></li>
            <li><a href="<?php echo site_url('motor/merk');?>"><i class="fa fa-angle-double-right"></i>Merk Motor</a></li>
            <li><a href="<?php echo site_url('motor/tipe');?>"><i class="fa fa-angle-double-right"></i>Tipe Motor</a></li>
            <li><a href="<?php echo site_url('motor/warna');?>"><i class="fa fa-angle-double-right"></i>Warna Motor</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-gear"></i> <span>Order Cash</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('pembeli_cash');?>"><i class="fa fa-angle-double-right"></i>Form Order Cash</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i>List Order Cash</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-check"></i> <span>Order Kredit</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('pembeli_cash');?>"><i class="fa fa-angle-double-right"></i>Form Order Cash</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i>List Order Cash</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-building"></i> <span>Paket Kredit</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('paket_kredit');?>"><i class="fa fa-angle-double-right"></i>Form Paket Kredit</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i>List Paket Kredit</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-money"></i> <span>Bayar Cicilan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('pembeli_cash');?>"><i class="fa fa-angle-double-right"></i>Form Order Cash</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i>List Order Cash</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-user-plus"></i> <span>Karyawan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('karyawan');?>"><i class="fa fa-angle-double-right"></i>Form Detail Karyawan</a></li>
            <li><a href="<?php echo site_url('karyawan/view_karyawan');?>"><i class="fa fa-angle-double-right"></i>List Karyawan</a></li>
            <li><a href="<?php echo site_url('karyawan/posisi');?>"><i class="fa fa-angle-double-right"></i>Posisi Karyawan</a></li>
          </ul>
        </li> -->
      
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>