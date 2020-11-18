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
                            <center><h3 class="box-title">DATA KARYA ILMIAH</h3></center>
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
                                        <?php echo anchor(site_url('upload/create'), '+ Tambah Data', 'class="btn btn-primary"'); ?>
                                 </div>                  
                            </div><br>
                            <table class="table table-bordered table-dark" style="margin-bottom: 10px">
        <!-- <thead class="thead-dark"> -->
            <tr>
        <th width="10px"><center>NO</th>
		<th><center>ID PENULIS</th>
		<th width="140px"><center>PENULIS</th>
		<th><center>JUDUL</th>
		<!-- <th>ABSTRAK DATA</th> -->
		<th width="100px"><center>BIDANG</th>
		<th width="60px"><center>TAHUN</th>
		<!-- <th>NAMA BERKAS</th> -->
		<!-- <th>TIPE BERKAS</th>
		<th>UKURAN BERKAS</th> -->
		<th width="10px"><center>Action</th>
            </tr><?php
            $no=1;
            foreach ($karya_data as $karya)
            {
                ?>
                <tr>
			<td width="60px"><?php echo $no ?></td>
			<td width="100px"><center><?php echo $karya->NO_USER ?></td>
			<td><?php echo $karya->NAME ?></td>
			<td><?php echo $karya->JUDUL_DATA ?></td>
			<!-- <td><?php echo $karya->ABSTRAK_DATA ?></td> -->
            <td><?php 
                foreach($bidang as $b):
                    if ($b->ID_BIDANG == $karya->BIDANG_DATA) {
                        echo $b->BIDANG_DATA;
                    }
                endforeach;
            ?></td>
			<td><?php echo $karya->TAHUN_DATA ?></td>
			<!-- <td><?php echo $karya->NAMA_BERKAS ?></td> -->
			<!-- <td><?php echo $karya->TIPE_BERKAS ?></td>
			<td><?php echo $karya->UKURAN_BERKAS ?></td> -->
			<td style="text-align:center" width="150px">
            <!-- <a href="<?php echo base_url(); ?>karya/read/<?php $karya->ID_DATA; ?>" class="fa fa-file-pdf-o btn btn-info"></a>
            <a href="<?php echo base_url(); ?>karya/update/<?php $karya->ID_DATA; ?>" class="fa fa-edit btn btn-primary"></a>
            <a href="<?php echo base_url(); ?>karya/delete/<?php $karya->ID_DATA; ?>" class="fa fa-eraser btn btn-danger"></a> -->

				<?php 
				echo anchor(site_url('karya/read/'.$karya->ID_DATA),'Read'); 
				echo ' | '; 
				echo anchor(site_url('karya/update/'.$karya->ID_DATA),'Update'); 
				echo ' | '; 
				echo anchor(site_url('karya/delete/'.$karya->ID_DATA),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
                $no++;
            }
            ?>
        </table>
                        </div>                        
                    </div>
                </div><!--/.col (right) -->
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    
    