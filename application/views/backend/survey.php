<div class="content-wrapper">
    <?php 
        if ($this->session->flashdata('status')) {
            if ($this->session->flashdata('kondisi')=="1") {
        ?>
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show" id="alertlogin">
                <span class="badge badge-pill badge-success">Success</span>
                <?= $this->session->flashdata('status') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php 
            }else{
        ?>
            <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show" id="alertlogin">
                <span class="badge badge-pill badge-danger">Failed</span>
                <?= $this->session->flashdata('status') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php
            }
        ?>
            
        <?php
        }
        $this->session->set_flashdata('status','');
        $this->session->set_flashdata('kondisi','');
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
              <li class="breadcrumb-item active">Survey</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">List Survey </h3>
                    <span class="float-right">
                      <a  class="btn btn-primary btn-sm text-white" data-toggle="modal" data-target="#modal_tambah"><i class="fa fa-plus"></i> Tambah</a>
                    </span>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Akhir</th>
                            <th>Tanggal Update</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($survey as $survey): ?>
                            <tr>
                              <td><?= $no ?></td>
                              <td><?= ucfirst($survey->nama_survei) ?></td>
                              <td><?= $survey->tgl_mulai ?></td>
                              <td><?= $survey->tgl_berahkir ?></td>
                              <td><?= $survey->tgl_update ?></td>
                              <td><?= $survey->tgl_update ?></td>
                              <td class="text-center">
                                <a href="<?= base_url('backend/survey/detail/'.$survey->id) ?>" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_edit<?= $survey->id ?>"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url('backend/survey/delete/'.$survey->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('anda yakin ingini menghapus data tersebut ?')"><i class="fa fa-trash"></i></a>
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
  foreach ($survey2 as $survey) {
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
                <form action="<?=base_url('backend/survey/update/'.$survey->id)?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_depan" class="form-control-label">Nama Survey</label>
                        <input type="text" class="form-control" name="nama_survei" value="<?= $survey->nama_survei ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-group-label"></label>
                        <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"><?= $survey->deskripsi ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nama_depan" class="form-control-label">Tanggal Mulai</label>
                        <input type="text" class="form-control" name="tgl_mulai" value="<?= $survey->tgl_mulai ?>">
                    </div>
                    <div class="form-group">
                        <label for="nama_depan" class="form-control-label">Tanggal Berakhir</label>
                        <input type="text" class="form-control" name="tgl_berahkir" value="<?= $survey->tgl_berahkir ?>">
                    </div>
                    <div class="form-group">
                        <label for="nama_depan" class="form-control-label">Tanggal Update</label>
                        <?php $date = date('d m yy'); ?>
                        <input type="text" class="form-control" name="tgl_update" value="<?= $date ?>">
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

<div class="modal fade" id="modal_tambah" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Data</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="<?=base_url('backend/survey/tambah/')?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama_depan" class="form-control-label">Nama Survey</label>
                <input type="text" class="form-control" name="nama_survei">
            </div>
            <div class="form-group">
                <label for="" class="form-group-label"></label>
                <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="nama_depan" class="form-control-label">Tanggal Mulai</label>
                <input type="text" id="tgl_mulai" class="form-control" name="tgl_mulai" >
            </div>
            <div class="form-group">
                <label for="nama_depan" class="form-control-label">Tanggal Berakhir</label>
                <input type="text" id="tgl_berakhir" class="form-control" name="tgl_berahkir" >
            </div>
            <div class="form-group">
                <label for="nama_depan" class="form-control-label">Tanggal Update</label>
                <?php $date = date('d m yy'); ?>
                <input type="text" id="tgl_update" class="form-control" name="tgl_update" value="<?= $date ?>" readonly>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" >Tambah</button>
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>