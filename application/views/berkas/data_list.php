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
                            <center><h3 class="box-title">DATA KARYA ILMIAH INFORMATIKA UNLA <?php if($this->uri->segment(3)){ echo "BIDANG ".$this->uri->segment(3); } ?> </h3></center>
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
                                    <form action="" method="get" class="form-inline">
                                        <div class="form-group mx-sm-3 mb-2">
                                            <label for="Kata" class="sr-only">Masukan Kata</label>
                                            <input type="text" class="form-control" name="kata" placeholder="Masukan Kata">
                                        </div>
                                        <button type="submit" class="btn btn-primary mb-2">Cari</button>
                                    </form>
                                 </div>                  
                            </div>
                            <?php if(isset($hasil)){
                            ?>
                            <table class="table table-bordered table-striped" id="mytable">
                                <thead>
                                    <tr>
                                        <th width="60px">NO</th>
                                        <!-- <th>NO</th> -->
                                        <th>ID USER</th>
                                        <th width="180px">PENULIS</th>
                                        <th>JUDUL</th>
                                        <!-- <th>ABSTRAK</th> -->
                                        <th>BIDANG</th>
                                        <th>TAHUN</th>
                                        <!-- <th>FILE PDF</th> -->
                                        <!-- <th>Action</th> -->
                                <th><center>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($hasil as $h)
                                    {
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $h['NO_USER']; ?></td>
                                            <td><?php echo $h['NAME']; ?></td>
                                            <td><?php echo nl2br(str_replace($h['KATA'],"<font color='red'><b>".$h['KATA']."</b></font>",strtolower($h['JUDUL_DATA']))) ?></td>
                                            <!-- <td><?php echo $h['ABSTRAK_DATA']; ?></td> -->
                                            <td><?php echo $h['BIDANG_DATA']; ?></td>
                                            <td><?php echo $h['TAHUN_DATA']; ?></td>
                                            <!-- <td><img width="100 " src="<?php echo base_url(); ?>uploads/<?php $h['NAMA_BERKAS']; ?>"/></td> -->
                                            
                                            <td><a href="<?php echo base_url(); ?>index.php/upload/download/<?php echo $h['ID_DATA'];; ?>">Download</a></td>
                                        </tr>
                                        <?php
                                    }
                                ?>
                                </tbody>
                            </table>
                            <?php
                            }else{ ?>
                            <table class="table table-bordered table-striped" id="mytable">
                                <thead>
                                    <tr>
                                        <th width="60px">NO</th>
                                        <!-- <th>NO</th> -->
                                        <th>ID USER</th>
                                        <th width="180px">PENULIS</th>
                                        <th>JUDUL</th>
                                        <!-- <th>ABSTRAK</th> -->
                                        <th>BIDANG</th>
                                        <th>TAHUN</th>
                                        <!-- <th>FILE PDF</th> -->
                                        <!-- <th>Action</th> -->
                                <th><center>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($berkas->result() as $row)
                                    {
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->NO_USER; ?></td>
                                            <td><?php echo $row->NAME; ?></td>
                                            <td><?php echo $row->JUDUL_DATA; ?></td>
                                            <!-- <td><?php echo $row->ABSTRAK_DATA; ?></td> -->
                                            <td><?php echo $row->BIDANG_DATA; ?></td>
                                            <td><?php echo $row->TAHUN_DATA; ?></td>
                                            <!-- <td><img width="100 " src="<?php echo base_url(); ?>uploads/<?php echo $row->NAMA_BERKAS; ?>"/></td> -->
                                            
                                            <td><a href="<?php echo base_url(); ?>index.php/upload/download/<?php echo $row->ID_DATA; ?>">Download</a></td>
                                        </tr>
                                        <?php
                                    }
                                ?>
                                </tbody>
                            </table
                            <?php }?>
                        </div>                        
                    </div>
                </div><!--/.col (right) -->
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->




        <!-- <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var t = $("#mytable").dataTable({});
            });
        </script> -->
<!-- <html>
    <head>
        <title></title>
    </head>
    <body>
        <h3><center>Tampil Berkas</center></h3>
        <hr/>
        <a href="<?php echo base_url(); ?>index.php/upload/create">Tambah Berkas</a>
        <hr/>
        <table border="1" width="75%" style="text-align:center;">
            <tr>
                <th>NO</th>
                <th>ID USER</th>
                <th>PENULIS</th>
                <th>JUDUL</th>
                <th>ABSTRAK</th>
                <th>BIDANG</th>
                <th>TAHUN</th>
                <th>FILE PDF</th>
                <th>Action</th>
            </tr>
            <?php 
                $no = 1;
                foreach($berkas->result() as $row)
                {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->NO_USER; ?></td>
                        <td><?php echo $row->NAME; ?></td>
                        <td><?php echo $row->JUDUL_DATA; ?></td>
                        <td><?php echo $row->ABSTRAK_DATA; ?></td>
                        <td><?php echo $row->BIDANG_DATA; ?></td>
                        <td><?php echo $row->TAHUN_DATA; ?></td>
                        <td><img width="100 " src="<?php echo base_url(); ?>uploads/<?php echo $row->NAMA_BERKAS; ?>"/></td>
                        <td><a href="<?php echo base_url(); ?>index.php/upload/download/<?php echo $row->ID_DATA; ?>">Download</a></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </body>
</html> -->