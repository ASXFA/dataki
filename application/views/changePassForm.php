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
                        <center><h3 class="box-title">FORM GANTI PASSWORD</h3></center>
                    </div><!-- /.box-header -->
                        <?php 
                            if ($this->session->flashdata('cpAlert')) {
                                echo "<h3 class='text-danger'>".$this->session->flashdata('cpAlert')."</h3>";
                            }
                        ?>
                    <!-- form start -->
                    <div class="box-body">
                        <form action="<?= site_url('login/action_changePass') ?>" method="post">
                        <div class="form-group">
                            <label for="varchar">PASSWORD LAMA <?php echo form_error('PASSWORD_LAMA') ?></label>
                            <input type="text" class="form-control" name="PASSWORD_LAMA" id="PASSWORD_LAMA" placeholder="PASSWORD LAMA"  />
                        </div>
                        <div class="form-group">
                            <label for="varchar">PASSWORD BARU <?php echo form_error('PASSWORD_BARU') ?></label>
                            <input type="text" class="form-control" name="PASSWORD_BARU" id="PASSWORD_BARU" placeholder="PASSWORD BARU"  />
                        </div>
                        <div class="form-group">
                            <label for="varchar">PASSWORD KONFIRMASI <?php echo form_error('PASSWORD_KONFIRMASI') ?></label>
                            <input type="text" class="form-control" name="PASSWORD_KONFIRMASI" id="PASSWORD_KONFIRMASI" placeholder="PASSWORD KONFIRMASI" />
                        </div>
                        <!-- <input type="hidden" name="ID_DATA" value="<?php echo $ID_DATA; ?>" />  -->
                        <button type="submit" class="btn btn-primary">Ganti Password</button> 
                        </form>
                    </div>                        
                </div>
            </div><!--/.col (right) -->
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->