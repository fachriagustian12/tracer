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
    ?>

    <?php 
        $c1x;
        $c1y;
        $c2x;
        $c2y;

        foreach($centroid as $c):
            if($c->id == 1){
                $c1x = $c->x;
                $c1y = $c->y;
            }
            if($c->id == 2){
                $c2x = $c->x;
                $c2y = $c->y;
            }
        endforeach;
    ?>



    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card kmeans mt-4">
                        <table class="table">
                            <thead class="thead-dark">
                                <th>Nama</th>
                                <th>Data 1</th>
                                <th>Data 2</th>
                                <th>C1</th>
                                <th>C2</th>
                                <th>Cluster</th>
                            </thead>
                            <tbody>
                                <?php foreach($users as $user): ?>
                                <tr>
                                    <td><?= $user->nama_depan." ".$user->nama_belakang ?></td>
                                    <td><?= $user->konsentrasi ?></td>
                                    <td><?= $user->bidang_pekerjaan ?></td>
                                    <td>
                                        <?php 
                                            $hasil1 = sqrt(pow($user->konsentrasi - $c1x,2) + pow($user->konsentrasi - $c1y,2));
                                            echo $hasil1;
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $hasil2 = sqrt(pow($user->bidang_pekerjaan - $c2x,2) + pow($user->bidang_pekerjaan - $c2y,2));
                                            echo $hasil2;
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            if($hasil1 < $hasil2){
                                                echo 1;
                                            }else if($hasil1 > $hasil2){
                                                echo 2;
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card kmeans mt-4">
                        <table class="table">
                            <thead class="thead-dark">
                                <th colspan="3" class="text-center">Centroid Awal</th>
                            </thead>
                            <tr>
                                <td>C1</td>
                                <td><?= $c1x ?></td>
                                <td><?= $c1y ?></td>
                            </tr>
                            <tr>
                                <td>C2</td>
                                <td><?= $c2x ?></td>
                                <td><?= $c2y ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

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