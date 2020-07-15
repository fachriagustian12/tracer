<div class="content-wrapper">
    <?php 
        if ($this->session->userdata('status')) {
            if ($this->session->userdata('kondisi')=="1") {
        ?>
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show" id="alertlogin">
                <span class="badge badge-pill badge-success">Success</span>
                <?= $this->session->userdata('status') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php 
            }else{
        ?>
            <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show" id="alertlogin">
                <span class="badge badge-pill badge-danger">Failed</span>
                <?= $this->session->userdata('status') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php
            }
        ?>
            
        <?php
        }
        $this->session->set_userdata('status','');
        $this->session->set_userdata('kondisi','');
    ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('backend/survey') ?>">Survey </a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('backend/survey/detail/'.$titleSurvey) ?>">Detail Survey </a></li>
              <li class="breadcrumb-item active">Pertanyaan Survey</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Pertanyaan :</h5>
                        <p class="card-text">
                        <?= $surveyPertanyaan->pertanyaan ?>
                        </p>
                    </div>
                    </div><!-- /.card -->
                </div>
                <div class="col-md-5">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="card-title">Tambah Jawaban</h5>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Minimize">
                                <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('backend/survey_jawaban/tambah/'.$titleSurvey.'/'.$titlePertanyaan) ?>" method="post">
                                <div class="form-group">
                                    <label for="" class="form-control-label">Jawaban</label>
                                    <input type="text" class="form-control" name="jawaban" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-sm float-right" name="submit" value="Tambah">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-success card-outline">
                <div class="card-header">
                    <h3 class="card-title">List Jawaban</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Jawaban</th>
                            <th width="20%" class="text-center">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($surveyJawaban as $survey): ?>
                            <tr>
                              <td><?= $no ?></td>
                              <td><?= $survey->jawaban ?></td>
                              <td class="text-center">
                                <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_edit<?= $survey->id ?>"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url('backend/survey_jawaban/delete/'.$titleSurvey.'/'.$titlePertanyaan.'/'.$survey->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('anda yakin ingini menghapus data tersebut ?')"><i class="fa fa-trash"></i></a>
                              </td>

                            </tr>
                            <?php $no++; endforeach ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </section>
</div>

  <?php
  foreach ($surveyJawaban2 as $survey) {
    ?>
      <div class="modal fade" id="modal_edit<?= $survey->id ?>" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Data Survey</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="<?=base_url('backend/survey_jawaban/update/'.$titleSurvey.'/'.$titlePertanyaan.'/'.$survey->id)?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="pertanyaan" class="form-control-label">Jawaban</label>
                        <input type="text" class="form-control" name="jawaban" value="<?= $survey->jawaban ?>">
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" >Edit</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
  <!-- /.modal -->
<?php } ?>