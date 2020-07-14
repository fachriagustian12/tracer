
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tracer Study IF UNLA</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/frontend')?>/img/logo.png" rel="icon">
  <link href="<?= base_url('assets/frontend/alumni')?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/frontend/alumni')?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/frontend/alumni')?>/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/frontend/alumni')?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/frontend/alumni')?>/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url('assets/frontend/alumni')?>/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/frontend/alumni')?>/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/frontend/alumni')?>/css/style.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

  <!-- =======================================================
  * Template Name: iPortfolio - v1.3.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="<?= base_url('assets')?>/user/<?= $this->session->userdata('foto')?>" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><?= ucfirst($this->session->userdata('nama_depan'))?></h1>
        <h1 class="text-light"><?= ucfirst($this->session->userdata('nama_belakang'))?></h1>
      </div>

      <nav class="nav-menu">
        <ul>
          <!-- <li class="active"><a href="#home"><i class="bx bx-home"></i> <span>Home</span></a></li> -->
          <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#portfolio"><i class="bx bx-book-content"></i>Loker</a></li>
          <li><a href="#services"><i class="bx bx-server"></i> Survei</a></li>
          <li><a href="#contact"><i class="bx bx-wrench"></i> Change Password</a></li>
          <li><a href="<?= base_url('login/logout') ?>"><i class="bx bx-exit"></i> Log out</a></li>
        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <?php if($this->session->flashdata('kondisi')): if($this->session->flashdata('kondisi')=="1"){ ?>
    <div class="alert alert-success alert-dismissible fade show" id="alertAlumni" role="alert">
      
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php }else{ ?>
    <div class="alert alert-danger alert-dismissible fade show" id="alertAlumni" role="alert">
      <?= $this->session->flashdata('msg') ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php } endif;?>
    <div class="hero-container" data-aos="fade-in">
      <h1><?= ucfirst($this->session->userdata('nama_depan'))." ".ucfirst($this->session->userdata('nama_belakang'))?></h1>
      <p>I'm <span class="typed" data-typed-items="<?= $this->session->userdata('jabatan')?>"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="<?= base_url('assets')?>/user/<?= $this->session->userdata('foto')?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3><?= $this->session->userdata('jabatan')?></h3>
            <!-- <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Tanggah Lahir: </strong> <?= $this->session->userdata('tgl_lahir')?></li>
                  <li><i class="icofont-rounded-right"></i> <strong>Jenis Kelamin: </strong> <?= $this->session->userdata('jenis_kelamin')?>
                  <li><i class="icofont-rounded-right"></i> <strong>Telepon : </strong> <?= $this->session->userdata('telp')?></li>
                  <li><i class="icofont-rounded-right"></i> <strong>Alamat: </strong> <?= $this->session->userdata('alamat')?></li>
                  <li><i class="icofont-rounded-right"></i> <strong>Bidang Pekerjaan: </strong><?= $this->session->userdata('bidang_pekerjaan')?></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> <?= $this->session->userdata('email')?></li>
                  <li><i class="icofont-rounded-right"></i> <strong>Tahun Lulus:</strong> <?= $this->session->userdata('tahun_lulus')?></li>
                  <li><i class="icofont-rounded-right"></i> <strong>Angkatan:</strong> <?= $this->session->userdata('angkatan')?></li>
                  <li><i class="icofont-rounded-right"></i> <strong>Mulai Kerja:</strong> <?= $this->session->userdata('mulai_kerja')?></li>
                  <li><i class="icofont-rounded-right"></i> <strong>Pekerjaan:</strong> <?= $this->session->userdata('pekerjaan')?></li>
                </ul>
              </div>
            </div>
            <!-- <p>
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p> -->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

   
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Lowongan Pekerjaan</h2>
          <p>Silahkan tambahkan atau lihat lowongan pekerjaan yang tersedia yang telah di tambahkan alumni lainnya</p>
        </div>

        <!-- <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> -->

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
          <?php foreach($loker as $loker):?> 
          <div class="col-lg-3 col-md-4 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?= base_url('assets/loker/'.$loker->foto)?>" width="100%" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url('assets/loker/'.$loker->foto)?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="loker" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Tambah Lowongan Kerja</h2>
          <p>Silakan tambahkan lowongan pekerjaan jika anda punya lowongan pekerjaan</p>
        </div>

        <div class="row" data-aos="fade-in">
          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="<?= base_url('frontend/loker/tambah/'.$this->session->userdata('id')) ?>" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Judul Lowongan</label>
                    <input type="text" class="form-control" name="judul" id="judul" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="name">Tanggal Sekarang</label>
                    <input type="text" name="tgl_buat" class="form-control" id="datepicker" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="name">Batas Akhir lowongan</label>
                    <input type="text" class="form-control" name="tgl_akhir" id="datepicker1" data-rule="minlen:4" data-msg="Please enter a valid date" />
                    <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <label for="name">Foto</label>
                    <input type="file" class="form-control" name="foto"  />
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Simpan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <?php foreach($survey as $survey): ?>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="icofont-tasks-alt"></i></div>
            <h4 class="title"><a><?= $survey->nama_survei ?></a></h4>
            <p class="description text-justify"><?= $survey->deskripsi ?></p>
            <a href="<?= base_url('detailSurvey/'.$survey->id) ?>" class="btn btn-primary btn-sm float-right">Mulai Survey  <i class="bx bx-right-arrow p-t-3"></i></a>
          </div>
          <?php endforeach ?>
        </div>

      </div>
    </section><!-- End Services Section -->
    <!-- ======= Contact Section ======= -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Ganti Password</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-in">
          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="<?= base_url('backend/users/ubahpassword') ?>" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Old Password</label>
                    <input type="password" class="form-control" name="old_password" id="oldPass" required/>
                </div>
                <div class="form-group">
                    <label for="name">New Password</label>
                    <input type="password" class="form-control" name="new_password" id="newPass" />
                </div>
                <div class="form-group">
                    <label for="name">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" id="conPass" />
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center">
                  <a class="btn btn-secondary btn-sm float-left" id="showpassword"><i class="bx bx-show-alt"></i> lihat password</a>
                  <input class="btn btn-info btn-sm float-right" name="submit" type="submit" value="simpan">
                </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Tracer Study 2020</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Bagja Septian M</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/frontend/alumni')?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/frontend/alumni')?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/frontend/alumni')?>/vendor/jquery.easing/jquery.easing.min.js"></script>
  <!-- <script src="<?= base_url('assets/frontend/alumni')?>/vendor/php-email-form/validate.js"></script> -->
  <script src="<?= base_url('assets/frontend/alumni')?>/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url('assets/frontend/alumni')?>/vendor/counterup/counterup.min.js"></script>
  <script src="<?= base_url('assets/frontend/alumni')?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('assets/frontend/alumni')?>/vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url('assets/frontend/alumni')?>/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url('assets/frontend/alumni')?>/vendor/typed.js/typed.min.js"></script>
  <script src="<?= base_url('assets/frontend/alumni')?>/vendor/aos/aos.js"></script>
  <script>
        window.setTimeout(function() {
            $("#alertAlumni").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 2000);
  </script>
  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/frontend/alumni')?>/js/main.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script>
            ClassicEditor
                .create( document.querySelector( '#deskripsi' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
    </script>
    <script>
        $(document).ready(function(){
            $("#datepicker").datepicker({ 
                    autoclose: true, 
                    format: 'dd mm yyyy'
            });
            $("#datepicker1").datepicker({ 
                    autoclose: true, 
                    format: 'dd mm yyyy'
            });
            $('#showpassword').click(function(){
              if($('#oldPass').attr('type')=="password"){
                $('#oldPass').attr('type','text');
                $('#newPass').attr('type','text');
                $('#conPass').attr('type','text');
                $('#showpassword').html("<i class='bx bx-show-alt'></i>  Tutup Password");
              }else{
                $('#oldPass').attr('type','password');
                $('#newPass').attr('type','password');
                $('#conPass').attr('type','password');
                $('#showpassword').html("<i class='bx bx-show-alt'></i>  Lihat Password");
              }
            });
        });
    </script>

</body>

</html>