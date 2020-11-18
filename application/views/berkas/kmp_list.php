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
                            <center><h3 class="box-title"><strong>PENCARIAN JUDUL KARYA ILMIAH INFORMATIKA UNLA</h3></center></strong><br>
                                <div class="col-md-16 text-center">
                                <center><h4>Silahkan Input Keyword Judul</h4></center>
                                        <div style="margin-top: 12px"  id="message">
                                            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                                        </div>
                                <div class="col-md-12 text-center">
                                    <form action="" method="get" class="form-inline">
                                        <div class="input-group input-group-sm">
                                            <label for="Kata" class="sr-only">Masukan Judul</label>
                                            <input type="text" class="form-control" name="kata" placeholder="Masukan Judul">
                                        </div>
                                        <button type="submit" class="btn btn-info btn-flat">Cari</button>
                                    </form>
                                 </div>                  
                            </div>
                            <?php 
                                if(isset($hasil)){
                            ?>
                                    <!-- <center><u><h3>KARYA ILMIAH INFORMATIKA UNLA</h3></u></center> -->
                                    
                                    <h3>Jumlah Judul yang ditemukan : <?php echo count($hasil); ?></h3>
                                    <h3 class="text-warning">Pencarian <b><i><?php echo $informasi['kataa']; ?></i></b> ditemukan pada judul :</h3>
                                    
                                <?php 
                                    foreach($hasil as $h)
                                    {
                                ?>
                                <hr>
                                    <div class="card">
                                        <h4><b><?php echo nl2br(str_replace($h['KATA'],"<font color='red'><b>".ucfirst($h['KATA']).
                                        "</b></font>",strtolower($h['JUDUL_DATA']))) ?></b></h4>
                                        <!-- <h4><?php echo $h['ABSTRAK_DATA']; ?></h4> -->
                                        <table class="table">
                                            <tr>
                                                <td width="10%">ID PENULIS <?= $h['NO_USER'] ?></td>
                                                <td width="1%"> | </td>
                                                <td width="15%">PENULIS<br><?= $h['NAME'] ?></td>
                                                <td width="1%"> | </td>
                                                <td width="5%">KONSENTRASI <?php foreach($bidang as $b): if($b->ID_BIDANG == $h['BIDANG_DATA']){echo $b->BIDANG_DATA;} endforeach; ?></td>
                                                <td width="1%">|</td>
                                                <td width="5%">BIDANG <?php foreach($jenis as $j): if($j->ID_JENIS == $h['JENIS_DATA']){echo $j->JENIS_DATA;} endforeach; ?></td>
                                                <td width="1%">|</td>
                                                <td width="3%">TAHUN <?= $h['TAHUN_DATA'] ?></td>
                                                <td width="1%">|</td>
                                                <td width="20%"><a href="<?php echo base_url(); ?>index.php/upload/download/<?php echo $h['ID_DATA'];; ?>
                                                "><i class="fa fa-download"> DOWNLOAD</i></a><br><a href="<?php echo base_url(); ?>index.php/kmp"><i class="fa fa-arrow-circle-left">BACK</i></a></td>
                                                <!-- <td width="20%"><a href="<?php echo base_url(); ?>index.php/kmp"><i class="fa fa-download">BACK</i></a></td> -->
                                                <td>
                                                <td></td>
                                            </tr>
                                        </table>
                                        <h4 class="text-success">Berada di posisi String ke :  <?= $h['POSISI'] ?></h4>
                                        <hr>
                                    </div>
                                        <!-- <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $h['NO_USER']; ?></td>
                                            <td><?php echo $h['NAME']; ?></td>
                                            <td><?php echo nl2br(str_replace($h['KATA'],"<font color='red'><b>".$h['KATA']."</b></font>",strtolower($h['JUDUL_DATA']))) ?></td> -->
                                            <!-- <td><?php echo $h['ABSTRAK_DATA']; ?></td> -->
                                            <!-- <td><?php echo $h['BIDANG_DATA']; ?></td>
                                            <td><?php echo $h['TAHUN_DATA']; ?></td> -->
                                            <!-- <td><img width="100 " src="<?php echo base_url(); ?>uploads/<?php $h['NAMA_BERKAS']; ?>"/></td> -->
                                            
                                            <!-- <td><a href="<?php echo base_url(); ?>index.php/upload/download/<?php echo $h['ID_DATA'];; ?>">Download</a></td> -->
                                        <!-- </tr> -->
                                        <?php
                                    }
                                ?>
                            <?php
                            }else{ ?>
                            
                            
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