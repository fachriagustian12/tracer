  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <?php 
        if ($this->session->userdata('login')) {?>
      <div class="sufee-alert alert with-close alert-success alert-dismissible fade show" id="alertlogin">
          <span class="badge badge-pill badge-dark">Success</span>
          <?= $this->session->userdata('login') ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <?php
        }
        $this->session->set_userdata('login','');
    ?>
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0 text-dark">Dashboard</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Dashboard</li>
                      </ol>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <!-- Small boxes (Stat box) -->
              <div class="row">
                  <?php if($this->session->userdata('id_user_grup')==2){ ?>
                  <div class="col-lg-6 col-6">
                      <!-- small box -->
                      <div class="small-box bg-info ">
                          <div class="inner">
                              <h2 class="display-4 font-weight-bold text-center"><?= $user ?></h2>
                              <h4 class="text-center font-weight-bold">Users Alumni</h4>
                          </div>
                          <div class="icon ">
                              <i class="fa fa-users "></i>
                          </div>
                          <a href="<?= base_url('backend/users/user/3') ?>" class="small-box-footer">Kelola Alumni <i
                                  class="fas fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-6 col-6">
                      <!-- small box -->
                      <div class="small-box bg-success">
                          <div class="inner">
                              <h2 class="display-4 font-weight-bold text-center"><?= $survey ?></h2>
                              <h4 class="text-center font-weight-bold">Survey Tersedia</h4>

                          </div>
                          <div class="icon">
                              <i class="fa fa-edit"></i>
                          </div>
                          <a href="<?= base_url('backend/survey') ?>" class="small-box-footer">Kelola Survey <i
                                  class="fas fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
                  <!-- ./col -->
                  <!-- ./col -->
                  <?php }else{ ?>
                  <div class="col-lg-6 col-6">
                      <!-- small box -->
                      <div class="small-box bg-primary ">
                          <div class="inner">
                              <h2 class="display-3 font-weight-bold text-center"><?= $userDosen ?></h2>
                              <h4 class="text-center font-weight-bold">Users Dosen</h4>
                          </div>
                          <div class="icon ">
                              <i class="fa fa-users "></i>
                          </div>
                          <a href="#" class="small-box-footer">Kelola Dosen <i
                                  class="fas fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-6 col-6">
                      <!-- small box -->
                      <div class="small-box bg-success">
                          <div class="inner">
                              <h2 class="display-3 font-weight-bold text-center"><?= $user ?></h2>
                              <h4 class="text-center font-weight-bold">Users Alumni</h4>

                          </div>
                          <div class="icon">
                              <i class="fa fa-users"></i>
                          </div>
                          <a href="#" class="small-box-footer">Kelola Alumni <i
                                  class="fas fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
                  <?php } ?>
              </div>
              <div class="row">
                  <?php if($this->session->userdata('id_user_grup')==1){ ?>
                  <div class="col-md-6">
                      <!-- PIE CHART -->
                      <div class="card card-primary">
                          <div class="card-header">
                              <h3 class="card-title">Jumlah Gender Dosen</h3>
                              <?php 
                  $priaDSN = 0;
                  $perempuanDSN = 0;
                  $jmlhJKDSN = array();

                  foreach($usersDosen as $dosen):
                    if($dosen->jenis_kelamin == 'L'){
                      $priaDSN += 1;
                    }else{
                      $perempuanDSN += 1;
                    }
                  endforeach;
                  
                  array_push($jmlhJKDSN,$priaDSN);
                  array_push($jmlhJKDSN,$perempuanDSN);
                ?>
                              <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                          class="fas fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                          class="fas fa-times"></i></button>
                              </div>
                          </div>
                          <div class="card-body">
                              <canvas id="jkChartDSN"
                                  style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                          </div>
                          <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                  </div>
                  <?php } ?>
                  <div class="col-md-6">
                      <!-- PIE CHART -->
                      <div class="card card-success">
                          <div class="card-header">
                              <h3 class="card-title">Jumlah Gender Alumni</h3>
                              <?php 
                  $pria = 0;
                  $perempuan = 0;
                  $jmlhJK = array();

                  foreach($users as $user):
                    if($user->jenis_kelamin == 'L'){
                      $pria += 1;
                    }else{
                      $perempuan += 1;
                    }
                  endforeach;
                  
                  array_push($jmlhJK,$pria);
                  array_push($jmlhJK,$perempuan);
                ?>
                              <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                          class="fas fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                          class="fas fa-times"></i></button>
                              </div>
                          </div>
                          <div class="card-body">
                              <canvas id="jkChart"
                                  style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                          </div>
                          <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                  </div>
                  <div class="col-md-6">
                      <div class="card card-info">
                          <div class="card-header">
                              <h3 class="card-title"> <span class="font-weight-bold"> Hasil K-Means </h3>
                          </div>
                          <?php 
                    $hasilJumlahData = $kmeans->jumlahData1 + $kmeans->jumlahData2;
                    $data1 = ($kmeans->jumlahData1 / $hasilJumlahData)*100;
                    $data2 = ($kmeans->jumlahData2 / $hasilJumlahData)*100;
                  ?>
                          <div class="card-body">
                              <canvas id="pieChartKmeans"
                                  style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- /.row -->
          </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script src="<?= base_url('assets/backend/') ?>plugins/jquery/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
  <script>
$(function() {
    var pieChart = '#jkChartDSN';
    var pieChartCanvas = $(pieChart).get(0).getContext('2d');
    var donutData = {
        labels: ['Laki-Laki', 'Perempuan'],
        datasets: [{
            data: [<?= $jkld ?>, <?= $jkpd ?>],
            backgroundColor: ['#4addac', '#FC4A1A'],
        }]
    }
    var pieData = donutData;
    var pieOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions
    });
});
  </script>
  <script>
$(function() {
    var pieChart = '#jkChart';
    var pieChartCanvas = $(pieChart).get(0).getContext('2d');
    var donutData = {
        labels: ['Laki-Laki', 'Perempuan'],
        datasets: [{
            data: [<?= $jkl ?>, <?= $jkp ?>],
            backgroundColor: ['#4addac', '#FC4A1A'],
        }]
    }
    var pieData = donutData;
    var pieOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions
    });
});
  </script>
  <script>
$(function() {
    var pieChart = '#pieChartKmeans';
    var pieChartCanvas = $(pieChart).get(0).getContext('2d');
    var donutData = {
        labels: ['Sesuai Konsentrasi (%)', 'Tidak Sesuiai Konsentrasi (%)'],
        datasets: [{
            data: [<?= $data1 ?>, <?= $data2 ?>],
            backgroundColor: ['#1abc9c', '#2ecc71'],
        }]
    }
    var pieData = donutData;
    var pieOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions
    });
});
  </script>