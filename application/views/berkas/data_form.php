<!-- <html>
    <head>
        <title> Belajar Upload di Codeigniter - Warung Belajar -</title>
    </head>
    <body>
        <?php 
        if(isset($error))
        {
            echo "ERROR UPLOAD : <br/>";
            print_r($error);
            echo "<hr/>";
        }
        ?>
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/upload/proses">
            <div>ID USER</div>
            <div><textarea name="NO_USER"></textarea></div>
            <div>PENULIS</div>
            <div><textarea name="NAME"></textarea></div>
            <div>JUDUL</div>
            <div><textarea name="JUDUL_DATA"></textarea></div>
            <div>ABSTRAK : </div>
            <div><textarea name="ABSTRAK_DATA"></textarea></div>
            <div>BIDANG : </div>
            <div><textarea name="BIDANG_DATA"></textarea></div>
            <div>TAHUN : </div>
            <div><textarea name="TAHUN_DATA"></textarea></div>
            <div>FILE PDF</div>
        	<div><input type="file" name="berkas"></div>
            <div><input type="submit" value="Simpan"/></div>
        </form>
    </body>
</html> -->
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
                            <center><h3 class="box-title">FORM DATA KARYA ILMIAH INFORMATIKA UNLA</h3></center>
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
                                    <?php 
                                    if(isset($error))
                                    {
                                        echo "ERROR UPLOAD : <br/>";
                                        print_r($error);
                                        echo "<hr/>";
                                    }
                                    ?>
                                    <?php 
                                        $no_user="";
                                        $name="";
                                        $judul="";
                                        $abstrak="";
                                        $bidang_data="";
                                        $jenis_data=0;
                                        $id_data=0;
                                        $tahun="";
                                        $berkas="";
                                        if (isset($row)) {
                                            $id_data = $row->ID_DATA; 
                                            $no_user = $row->NO_USER;
                                            $name = $row->NAME;
                                            $judul=$row->JUDUL_DATA;
                                            $abstrak = $row->ABSTRAK_DATA;
                                            $bidang_data = $row->BIDANG_DATA;
                                            $jenis_data = $row->JENIS_DATA;
                                            $tahun = $row->TAHUN_DATA;
                                            $berkas = $row->NAMA_BERKAS;
                                        }
                                    ?>
                                    <form method="post" enctype="multipart/form-data" action="<?php echo $url ?><?php if($id_data != 0){echo $id_data;} ?>">
                                        <div class="form group">
                                            <label for="" class="form-control-label">ID PENULIS <?php echo form_error('NO_USER') ?></label>
                                            <input type="text" name="NO_USER" class="form-control" value="<?= $no_user ?>">
                                        </div>
                                        <div class="form group">
                                            <label for="" class="form-control-label">PENULIS <?php echo form_error('NAME') ?></label>
                                            <input type="text" name="NAME" class="form-control" value="<?= $name ?>">
                                        </div>
                                        <div class="form group">
                                            <label for="" class="form-control-label">JUDUL <?php echo form_error('JUDUL_DATA') ?></label>
                                            <input type="text" name="JUDUL_DATA" class="form-control" value="<?= $judul ?>">
                                        </div>
                                        <div class="form group">
                                            <label for="" class="form-control-label">ABSTRAK <?php echo form_error('ABSTRAK_DATA') ?></label>
                                            <textarea name="ABSTRAK_DATA" cols="30" rows="5" class="form-control">
                                            <?= $abstrak ?>
                                            </textarea>
                                        </div>
                                        <div class="form group">
                                            <label for="" class="form-control-label">KONSENTRASI <?php echo form_error('BIDANG_DATA') ?></label>
                                            <select name="BIDANG_DATA" id="bidang_data" class="form-control">
                                                <option hidden>PILIH</option>
                                                <?php foreach($getBidang as $b): ?>
                                                <option value="<?= $b->ID_BIDANG ?>" <?php if(isset($bidang_data)){if($b->ID_BIDANG == $bidang_data){echo "selected";}} ?>><?= $b->BIDANG_DATA ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form group">
                                            <label for="" class="form-control-label">BIDANG <?php echo form_error('JENIS_DATA') ?></label>
                                            <select name="JENIS_DATA" id="jenis_data" class="form-control">
                                            </select>
                                        </div>
                                        <div class="form group">
                                            <label for="" class="form-control-label">TAHUN <?php echo form_error('TAHUN_DATA') ?></label>
                                            <input type="year" name="TAHUN_DATA" class="form-control" value="<?= $tahun ?>">
                                        </div>
                                        <div class="form group">
                                            <label for="" class="form-control-label">FILE PDF</label>
                                            <?php 
                                                if ($berkas != '') {
                                            ?>
                                            <input type="text" name="berkas_old" class="form-control" value="<?= $berkas ?>" readonly>
                                            <?php
                                                }
                                            ?>
                                            <input type="file" name="berkas" class="form-control">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" value="Simpan">
                                        </div>
                                    </form>
                                </body>
                        </div>                        
                    </div>
                </div><!--/.col (right) -->
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <script src="<?php echo base_url('')?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script>
        $(document).ready(function(){
            var id = $('#bidang_data').val();
            if (id != 'PILIH') {
                var jenis = <?php echo $jenis_data ?>;
                $.ajax({
                    method:'POST',
                    dataType:'JSON',
                    url:'<?= site_url('Jenis/getJenis') ?>',
                    data:{id_bidang:id},
                    success:function(result){
                        var html='';
                        var i =0;
                        for(i; i<result.length; i++){
                            html += "<option value='"+result[i].ID_JENIS+"'";
                            if (result[i].ID_JENIS ==  jenis) {
                                html += 'selected';
                            }
                            html += ">"+result[i].JENIS_DATA+"</option>";
                        }
                        $('#jenis_data').html(html);
                    }
                })
            }else{

            $('#bidang_data').change(function(){
                var id_bidang = $('#bidang_data').val();
                $.ajax({
                    method:'POST',
                    dataType:'JSON',
                    url:'<?= site_url('Jenis/getJenis') ?>',
                    data:{id_bidang:id_bidang},
                    success:function(result){
                        var html='';
                        var i =0;
                        for(i; i<result.length; i++){
                            html += "<option value='"+result[i].ID_JENIS+"'>"+result[i].JENIS_DATA+"</option>";
                        }
                        $('#jenis_data').html(html);
                    }
                })
            })
            }
        })
    </script>