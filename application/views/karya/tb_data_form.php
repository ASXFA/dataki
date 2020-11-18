<!doctype html>
<html>
    <head>
        <<title>IF UNLA</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">FORM DATA KARYA<?php echo $button ?></h2>
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
            <label for="varchar">JUDUL DATA <?php echo form_error('JUDUL_DATA') ?></label>
            <input type="text" class="form-control" name="JUDUL_DATA" id="JUDUL_DATA" placeholder="JUDUL DATA" value="<?php echo $JUDUL_DATA; ?>" />
        </div>
	    <div class="form-group">
            <label for="ABSTRAK_DATA">ABSTRAK DATA <?php echo form_error('ABSTRAK_DATA') ?></label>
            <textarea class="form-control" rows="3" name="ABSTRAK_DATA" id="ABSTRAK_DATA" placeholder="ABSTRAK DATA"><?php echo $ABSTRAK_DATA; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">KONSENTRASI <?php echo form_error('BIDANG_DATA') ?></label>
            <input type="text" class="form-control" name="BIDANG_DATA" id="BIDANG_DATA" placeholder="BIDANG DATA" value="<?php echo $BIDANG_DATA; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">BIDANG <?php echo form_error('JENIS_DATA') ?></label>
            <input type="text" class="form-control" name="JENIS_DATA" id="JENIS_DATA" placeholder="BIDANG DATA" value="<?php echo $JENIS_DATA; ?>" />
        </div>
	    <div class="form-group">
            <label for="year">TAHUN DATA <?php echo form_error('TAHUN_DATA') ?></label>
            <input type="text" class="form-control" name="TAHUN_DATA" id="TAHUN_DATA" placeholder="TAHUN DATA" value="<?php echo $TAHUN_DATA; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NAMA BERKAS <?php echo form_error('NAMA_BERKAS') ?></label>
            <input type="file" class="form-control" name="NAMA_BERKAS" id="NAMA_BERKAS" placeholder="NAMA BERKAS" value="<?php echo $NAMA_BERKAS; ?>" />
        </div>
	    <input type="hidden" name="ID_DATA" value="<?php echo $ID_DATA; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('karya') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>