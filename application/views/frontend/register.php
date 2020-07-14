
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tracer Study IF UNLA</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url('assets/login/fonts/material-icon/css/material-design-iconic-font.min.css') ?>">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('assets/login/css/style2.css')?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="main">
    <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <?php 
                    if($this->session->flashdata('login')):
                ?>
                <div class="alert alert-danger" role="alert">
                    <?= $this->session->flashdata('login') ?>
                </div>
                <?php endif ?>
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Registrasi & Pekerjaan</h2>
                        <form action="<?= base_url('register/aksidaftar') ?>" method="POST" class="register-form" enctype="multipart/form-data" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama_depan" id="name" placeholder="Nama depan" required/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama_belakang" id="name" placeholder="Nama belakang" required/>
                            </div>
                            <div class="form-group">
                                <label for="jenis kelamin"><i class="zmdi zmdi-male-female"></i></label>
                                <select name="jenis_kelamin" id="" required>
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Tanggal lahir"><i class="zmdi zmdi-calendar-check"></i></label>
                                <input type="text" name="tanggal_lahir" id="datepicker" placeholder="Tanggal lahir" required/>
                            </div>
                            <div class="form-group">
                                <label for="Phone"><i class="zmdi zmdi-whatsapp material-icons-name"></i></label>
                                <input type="text" name="telp" id="telp" placeholder="Telephone" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="Alamat"><i class="zmdi zmdi-pin"></i></label>
                                <input type="text" name="alamat" id="alamat" placeholder="Alamat" required/>
                            </div>
                            <div class="form-group">
                                <label for="Username"><i class="zmdi zmdi-account-add"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label for="Tahun lulus"><i class="zmdi zmdi-calendar-check"></i></label>
                                <input type="text" name="tahun_lulus" id="datepicker1" placeholder="Tahun lulus" required/>
                            </div>
                            <div class="form-group">
                                <label for="Angkatan"><i class="zmdi zmdi-calendar-check"></i></label>
                                <input type="text" name="angkatan" id="datepicker2" placeholder="Angkatan" required/>
                            </div>
                           
                    </div>
                    <div class="signup-form">
                        <h2 class="form-title dua"> halah </h2>
                            <div class="form-group">
                                <label for="Angkatan"><i class="zmdi zmdi-calendar-check"></i></label>
                                <input type="text" name="mulai_kerja" id="datepicker3" placeholder="Mukai Kerja Tahun" required/>
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan"><i class="zmdi zmdi-account-box-mail"></i></label>
                                <select name="pekerjaan" id="pekerjaan" required>
                                    <option selected>Pilih Pekerjaan</option>
                                    <?php foreach($pekerjaan as $pekerjaan): ?>
                                    <option value="<?= $pekerjaan->id ?>"><?= $pekerjaan->pekerjaan ?></option>
                                    <?php endforeach ?> 
                                </select>
                            </div>
                            <div class="form-group d-none" id="bidang2">
                                <label for="sub_pekerjaan"><i class="zmdi zmdi-account-box-mail"></i></label>
                                <input type="text" name="bidang_pekerjaan2" id="bidang_pekerjaan2" placeholder="Masukan bidang pekerjaan">
                            </div>
                            <div class="form-group d-none" id="bidang1">
                                <label for="pekerjaan"><i class="zmdi zmdi-account-box-mail"></i></label>
                                <select name="bidang_pekerjaan" id="bidang_pekerjaan"> 
                                    <option>Pilih</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jabatan"><i class="zmdi zmdi-account-box-mail"></i></label>
                                <input type="text" name="jabatan" id="name" placeholder="Jabatan" required/>
                            </div>
                            <div class="form-group">
                                <label for="Alamat"><i class="zmdi zmdi-pin"></i></label>
                                <input type="text area" name="alamat_kerja" id="alamat" placeholder="Alamat Kantor" required/>
                            </div>
                            <div class="form-group">
                                <label for="Kota"><i class="zmdi zmdi-pin"></i></label>
                                <input type="text" name="kota" id="alamat" placeholder="Kota" required/>
                            </div>
                            <div class="form-group">
                                <label for="foto"><i class="zmdi zmdi-camera"></i></label>
                                <input type="file" name="foto" id="alamat" placeholder="foto" required/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>

                        </div>
                        
                        <div class="signup-image">
                            <figure><img src="<?= base_url('assets/login/images/signup-image.jpg" alt="sing up image')?>"></figure>
                            <a href="<?= base_url('login')?>" class="signup-image-link">Sudah punya akun ? silakan login!</a>
                        </div>
                    </form>
                    </div>
                </div>
        </section>
    </div>

    <!-- JS -->
    <script src="<?= base_url('assets/login/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?= base_url('assets/login/js/main.js')?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script>
        $(function () {
            $("#datepicker").datepicker({ 
                    autoclose: true, 
                    format: 'dd  yyyy'
            });
            $("#datepicker1").datepicker({ 
                    autoclose: true, 
                    minViewMode: 'years',
                    format: 'yyyy'
            });
            $("#datepicker2").datepicker({ 
                    autoclose: true, 
                    minViewMode: 'years',
                    format: 'yyyy'
            });
            $("#datepicker3").datepicker({ 
                    autoclose: true, 
                    minViewMode: 'years',
                    format: 'yyyy'
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#pekerjaan').change(function(){
                var id=$(this).val();
                if (id === "2") {
                    $('#bidang2').removeClass('d-none');
                    $('#bidang1').addClass('d-none');
                }else{
                    $('#bidang1').removeClass('d-none');
                    $('#bidang2').addClass('d-none');
                    $.ajax({
                        url: "<?php echo base_url();?>register/get_sub_pekerjaan",
                        method: 'POST',
                        data : {id:id},
                        async: false,
                        dataType: 'json',
                        success: function(data){
                            var html = '';
                            var i;
                            for(i=0; i<data.length; i++){
                                html += "<option value="+data[i].nama+"> "+data[i].nama+"</option>";
                            }
                            $('#bidang_pekerjaan').html(html);
                        }
                    });
                }
            });
        });
    </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>