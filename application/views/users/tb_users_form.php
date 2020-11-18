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
        <h2 style="margin-top:0px">USER FORM <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">NO USER <?php echo form_error('NO_USER') ?></label>
            <input type="text" class="form-control" name="NO_USER" id="NO_USER" placeholder="NO USER" value="<?php echo $NO_USER; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NAME <?php echo form_error('NAME') ?></label>
            <input type="text" class="form-control" name="NAME" id="NAME" placeholder="NAME" value="<?php echo $NAME; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">EMAIL <?php echo form_error('EMAIL') ?></label>
            <input type="text" class="form-control" name="EMAIL" id="EMAIL" placeholder="EMAIL" value="<?php echo $EMAIL; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NO TELP <?php echo form_error('NO_TELP') ?></label>
            <input type="text" class="form-control" name="NO_TELP" id="NO_TELP" placeholder="NO TELP" value="<?php echo $NO_TELP; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">LEVEL <?php echo form_error('LEVEL') ?></label>
            <input type="text" class="form-control" name="LEVEL" id="LEVEL" placeholder="LEVEL" value="<?php echo $LEVEL; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">PASSWORD <?php echo form_error('PASSWORD') ?></label>
            <input type="text" class="form-control" name="PASSWORD" id="PASSWORD" placeholder="PASSWORD" value="<?php echo $PASSWORD; ?>" />
        </div>
	    <input type="hidden" name="ID_USER" value="<?php echo $ID_USER; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('users') ?>" class="btn btn-default">Cancel</a>
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
                            <center><h3 class="box-title">FORM USER</h3></center>
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
                                <!-- <h2 style="margin-top:0px">USER FORM <?php echo $button ?></h2> -->
                                <form action="<?php echo $action; ?>" method="post">
                                <div class="form-group">
                                    <label for="varchar">NO USER <?php echo form_error('NO_USER') ?></label>
                                    <input type="text" class="form-control" name="NO_USER" id="NO_USER" placeholder="NO USER" value="<?php echo $NO_USER; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="varchar">NAME <?php echo form_error('NAME') ?></label>
                                    <input type="text" class="form-control" name="NAME" id="NAME" placeholder="NAME" value="<?php echo $NAME; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="varchar">EMAIL <?php echo form_error('EMAIL') ?></label>
                                    <input type="text" class="form-control" name="EMAIL" id="EMAIL" placeholder="EMAIL" value="<?php echo $EMAIL; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="varchar">NO TELP <?php echo form_error('NO_TELP') ?></label>
                                    <input type="text" class="form-control" name="NO_TELP" id="NO_TELP" placeholder="NO TELP" value="<?php echo $NO_TELP; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="enum">LEVEL <?php echo form_error('LEVEL') ?></label>
                                    <input type="text" class="form-control" name="LEVEL" id="LEVEL" placeholder="LEVEL" value="<?php echo $LEVEL; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="varchar">PASSWORD <?php echo form_error('PASSWORD') ?></label>
                                    <input type="text" class="form-control" name="PASSWORD" id="PASSWORD" placeholder="PASSWORD" value="<?php echo $PASSWORD; ?>" />
                                </div>
                                <input type="hidden" name="ID_USER" value="<?php echo $ID_USER; ?>" /> 
                                <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                                <a href="<?php echo site_url('users') ?>" class="btn btn-default">Cancel</a>
                            </form>
                            </body>
                        </div>                        
                    </div>
                </div><!--/.col (right) -->
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->