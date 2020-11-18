<!-- Content Wrapper. Contains page content -->
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
                            <center><h3 class="box-title">DATA BIDANG</h3></center>
                        </div><!-- /.box-header -->
                        <!-- <div class="row" style="margin-bottom: 10px"> -->
                        <div class="col-md-12 text-left">
                            <?php echo anchor(site_url('jenis/create'),'+ Tambah Bidang', 'class="btn btn-primary"'); ?>
                        </div>
                        <!-- form start -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12 text-center">                                
                                       <div style="margin-top: 4px"  id="message">
                                            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                                        </div>
                                </div>
                                <div class="col-md-12 text-right">
                                <form action="<?php echo site_url('data/index'); ?>" class="form-inline" method="get">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                                        <span class="input-group-btn">
                                            <?php 
                                                if ($q <> '')
                                                {
                                                    ?>
                                                    <a href="<?php echo site_url('data'); ?>" class="btn btn-default">Reset</a>
                                                    <?php
                                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
                                <div class="col-md-12 text-right">
                                        <!-- <?php echo anchor(site_url('users/create'), '+ Tambah User', 'class="btn btn-primary"'); ?> -->
                                 </div>                  
                            </div>
                            <table class="table table-bordered" style="margin-bottom: 10px">
                            <br>
            <tr>
                <th>No</th>
                <th>BIDANG DATA</th>
                <th>JENIS DATA</th>
                <th>KET JENIS</th>
                <th>Action</th>
                    </tr><?php
            foreach ($jenis_data as $jenis)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td>
                <?php 
                    foreach($bidang as $b):
                        if ($b->ID_BIDANG == $jenis->BIDANG_DATA) {
                            echo $b->BIDANG_DATA;
                        }
                    endforeach;
                ?>
            </td>
			<td><?php echo $jenis->JENIS_DATA ?></td>
			<td><?php echo $jenis->KET_JENIS ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('jenis/read/'.$jenis->ID_JENIS),'Read'); 
				echo ' | '; 
				echo anchor(site_url('jenis/update/'.$jenis->ID_JENIS),'Update'); 
				echo ' | '; 
				echo anchor(site_url('jenis/delete/'.$jenis->ID_JENIS),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
                        </div>                        
                    </div>
                </div><!--/.col (right) -->
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->