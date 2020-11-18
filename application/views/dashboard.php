<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <!-- <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
    <!-- agar array tidak menjadi object -->
    <?php 
      $bidangData = [];
      foreach($jenis as $j){
        if ($j->BIDANG_DATA == 1) {
          $lower = strtolower($j->JENIS_DATA);
          array_push($bidangData,ucfirst($lower));
        }
      }
      $BDGData = json_encode($bidangData);
      $bidangJaringan = [];
      foreach($jenis as $j){
        if ($j->BIDANG_DATA == 2) {
          $lowers = strtolower($j->JENIS_DATA);
          array_push($bidangJaringan,ucfirst($lowers));
        }
      }
      $BDGJaringan = json_encode($bidangJaringan);
      $bidangSecurity = [];
      foreach($jenis as $j){
        if ($j->BIDANG_DATA == 3) {
          $lowerss = strtolower($j->JENIS_DATA);
          array_push($bidangSecurity,ucfirst($lowerss));
        }
      }
      $BDGSecurity = json_encode($bidangSecurity);
    ?>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
         <center> <h3 class="box-title">Grafik Jumlah Management Data</h3></center>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div id="graphData"></div>
        </div>
        <!-- /.box-body -->
        <!-- <div class="box-footer">
        </div> -->
        <!-- /.box-footer-->
      </div>
      <div class="box">
        <div class="box-header with-border">
         <center> <h3 class="box-title">Grafik Jumlah Jaringan</h3></center>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div id="graphJaringan"></div>
        </div>
        <!-- /.box-body -->
        <!-- <div class="box-footer">
        </div> -->
        <!-- /.box-footer-->
      </div>
      <div class="box">
        <div class="box-header with-border">
         <center> <h3 class="box-title">Grafik Jumlah Security</h3></center>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div id="graphSecurity"></div>
        </div>
        <!-- /.box-body -->
        <!-- <div class="box-footer">
        </div> -->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<script src="<?php echo base_url('')?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url('')?>assets/raphael-min.js"></script>
<script src="<?php echo base_url('')?>assets/morris/morris.min.js"></script>
<script>
    Morris.Bar({
      element: 'graphData',
      data: <?php echo $jumlahData;?>,
      xkey: 'TAHUN_DATA',
      ykeys: <?= $BDGData ?>,
      labels: <?= $BDGData ?>,
      pointSize: 10,
      hideHover: 'auto'
    });
    Morris.Bar({
      element: 'graphJaringan',
      data: <?php echo $jumlahJaringan;?>,
      xkey: 'TAHUN_DATA',
      ykeys: <?= $BDGJaringan ?>,
      labels: <?= $BDGJaringan ?>,
      pointSize: 10,
      hideHover: 'auto'
    });
    Morris.Bar({
      element: 'graphSecurity',
      data: <?php echo $jumlahSecurity;?>,
      xkey: 'TAHUN_DATA',
      ykeys: <?= $BDGSecurity ?>,
      labels: <?= $BDGSecurity ?>,
      pointSize: 10,
      hideHover: 'auto'
    });
</script>