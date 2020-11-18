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
            <br><tr>
        <th>NO</th>
		<th><center>ID PENULIS</th>
		<th><center>PENULIS</th>
		<th><center>JUDUL KARYA ILMIAH</th>
		<!-- <th>ABSTRAK DATA</th> -->
		<th><center>KONSENTRASI</th>
		<th><center>BIDANG</th>
		<!-- <th>TAHUN DATA</th> -->
		<!-- <th>NAMA BERKAS</th> -->
		<th><center>ACTION</th>
        </tr><?php
            foreach ($data_data as $data)
            {
                ?>
                <tr>
			<td width="40px"><?php echo ++$start ?></td>
			<td><?php echo $data->NO_USER ?></td>
			<td width="150px"><?php echo $data->NAME ?></td>
			<td><?php echo $data->JUDUL_DATA ?></td>
			<!-- <td><?php echo $data->ABSTRAK_DATA ?></td> -->
			<td width="150px"><?php foreach($bidang as $b):
                    if ($b->ID_BIDANG == $data->BIDANG_DATA) {
                        echo $b->BIDANG_DATA;
                    }
                endforeach; ?></td>
			<td><?php foreach($jenis as $j):
                    if ($j->ID_JENIS == $data->JENIS_DATA) {
                        echo $j->JENIS_DATA;
                    }
                endforeach; ?></td>
			<!-- <td><?php echo $data->TAHUN_DATA ?></td> -->
			<!-- <td><?php echo $data->NAMA_BERKAS ?></td> -->
			<td style="text-align:center" width="100px">
				<?php 
				echo anchor(site_url('karya/read/'.$data->ID_DATA),'Details'); 
				// echo ' | '; 
				// echo anchor(site_url('data/update/'.$data->ID_DATA),'Update'); 
				// echo ' | '; 
				// echo anchor(site_url('data/delete/'.$data->ID_DATA),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
        <h2 style="margin-top:0px">LIST DATA USER</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('users/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('users/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('users'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>NO USER</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>NO TELP</th>
		<th>LEVEL</th>
		<th>PASSWORD</th>
		<th>Action</th>
            </tr><?php
            foreach ($users_data as $users)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $users->NO_USER ?></td>
			<td><?php echo $users->NAME ?></td>
			<td><?php echo $users->EMAIL ?></td>
			<td><?php echo $users->NO_TELP ?></td>
			<td><?php echo $users->LEVEL ?></td>
			<td><?php echo $users->PASSWORD ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('users/read/'.$users->ID_USER),'Read'); 
				echo ' | '; 
				echo anchor(site_url('users/update/'.$users->ID_USER),'Update'); 
				echo ' | '; 
				echo anchor(site_url('users/delete/'.$users->ID_USER),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html> -->