<!-- <!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Tb_bidang <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">BIDANG DATA <?php echo form_error('BIDANG_DATA') ?></label>
            <input type="text" class="form-control" name="BIDANG_DATA" id="BIDANG_DATA" placeholder="BIDANG DATA" value="<?php echo $BIDANG_DATA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KET BIDANG <?php echo form_error('KET_BIDANG') ?></label>
            <input type="text" class="form-control" name="KET_BIDANG" id="KET_BIDANG" placeholder="KET BIDANG" value="<?php echo $KET_BIDANG; ?>" />
        </div>
	    <input type="hidden" name="ID_BIDANG" value="<?php echo $ID_BIDANG; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('bidang') ?>" class="btn btn-default">Cancel</a>
	</form>
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
                            <center><h3 class="box-title">FORM BIDANG</h3></center>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                        <div style="margin-top: 4px"  id="message">
                                            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                                        </div>
                                </div>
                                <div class="col-md-12 text-right">
                                        <!-- <?php echo anchor(site_url('upload/create'), '+ Tambah Data', 'class="btn btn-primary"'); ?> -->
                                 </div>                  
                            </div>
                            <body>
        <!-- <h2 style="margin-top:0px">Tb_jenis <?php echo $button ?></h2> -->
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">BIDANG DATA <?php echo form_error('BIDANG_DATA') ?></label>
            <select name="BIDANG_DATA" id="" class="form-control">
                <?php foreach($bidang as $b): ?>
                <option value="<?= $b->ID_BIDANG ?>" <?php if($BIDANG_DATA == $b->ID_BIDANG){echo "selected";} ?>><?= $b->BIDANG_DATA ?></option>
                <?php endforeach ?>
            </select>
            <!-- <input type="text" class="form-control" name="BIDANG_DATA" id="BIDANG_DATA" placeholder="BIDANG DATA" value="<?php echo $BIDANG_DATA; ?>" /> -->
        </div>
	    <div class="form-group">
            <label for="varchar">JENIS DATA <?php echo form_error('JENIS_DATA') ?></label>
            <input type="text" class="form-control" name="JENIS_DATA" id="JENIS_DATA" placeholder="JENIS DATA" value="<?php echo $JENIS_DATA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">KET JENIS <?php echo form_error('KET_JENIS') ?></label>
            <input type="text" class="form-control" name="KET_JENIS" id="KET_JENIS" placeholder="KET JENIS" value="<?php echo $KET_JENIS; ?>" />
        </div>
	    <input type="hidden" name="ID_JENIS" value="<?php echo $ID_JENIS; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('jenis') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
                        </div>                        
                    </div>
                </div><!--/.col (right) -->
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->