<!-- <!doctype html>
<html>
    <head>
    <title>IF UNLA</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">DATA KARYA ILMIAH</h2>
        <table class="table">
	    <tr><td>NO USER</td><td><?php echo $NO_USER; ?></td></tr>
	    <tr><td>NAME</td><td><?php echo $NAME; ?></td></tr>
	    <tr><td>JUDUL DATA</td><td><?php echo $JUDUL_DATA; ?></td></tr>
	    <tr><td>ABSTRAK DATA</td><td><?php echo $ABSTRAK_DATA; ?></td></tr>
	    <tr><td>BIDANG DATA</td><td><?php echo $BIDANG_DATA; ?></td></tr>
	    <tr><td>TAHUN DATA</td><td><?php echo $TAHUN_DATA; ?></td></tr>
        <tr><td>TAHUN DATA</td><td><?php echo $NAMA_BERKAS; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('karya') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html> -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- <section class="content-header"> -->
            <!-- <h1>Halaman Mobil <small>form data mobil</small></h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#"><i class="fa fa-dashboard"></i> Level</a>
                </li>
                <li class="active">Here</li>
            </ol> -->
        <!-- </section> -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <!-- <div class="col-md-12"> -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <center><h3 class="box-title">Details Data Jenis</h3></center>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                        <div style="margin-top: 12px"  id="message">
                                            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                                        </div>
                                        </div>
                                <div class="col-md-12 text-right">
                                        <!-- <?php echo anchor(site_url('upload/create'), '+ Tambah Data', 'class="btn btn-primary"'); ?> -->
                                 </div>                  
                            </div>
                            <table class="table">
                                <tr><td>BIDANG DATA</td><td><?php foreach($bidang as $b): if($b->ID_BIDANG == $BIDANG_DATA){echo $b->BIDANG_DATA;} endforeach; ?></td></tr>
                                <tr><td>JENIS DATA</td><td><?php echo $JENIS_DATA; ?></td></tr>
                                <tr><td>KET JENIS</td><td><?php echo $KET_JENIS; ?></td></tr>
                                <tr><td></td><td><a href="<?php echo site_url('jenis') ?>" class="btn btn-default">Back</a></td></tr>
                            </table>
                         </div>                        
                    </div>
                </div><!--/.col (right) -->
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->