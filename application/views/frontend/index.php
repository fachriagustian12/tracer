
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Tracer Study</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/frontend')?>/img/logo.png" rel="icon">
  <link href="<?= base_url('assets/frontend/lp')?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/frontend/lp')?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/frontend/lp')?>/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/frontend/lp')?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/frontend/lp')?>/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url('assets/frontend/lp')?>/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/frontend/lp')?>/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url('assets/frontend/lp')?>/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/frontend/lp')?>/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Hidayah - v2.2.0
  * Template URL: https://bootstrapmade.com/hidayah-free-simple-html-template-for-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center justify-content-end">

          <h1 class="logo mr-auto"><a href="index.html">TRACER STUDY</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="<?= base_url('assets/frontend/lp')?>/img/logo.png" alt="" class="img-fluid"></a>-->
          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="<?= base_url() ?>">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="<?= base_url('register/daftar')?>">Register</a></li>
              <li><a href="<?= base_url('login')?>">Login</a></li>
          </nav><!-- .nav-menu -->

        </div>
      </div>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(<?=base_url('assets/frontend/lp/img/slide/sl1.jpg')?>)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Welcome to <span>Tracer Study</span></h2>
              <p class="animated fadeInUp">Silakan login dan register jika belum mendaftar</p>
              <a href="<?= base_url('login')?>" class="btn-get-started animated fadeInUp scrollto">Log in</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(<?=base_url('assets/frontend/lp/img/slide/sl2.jpg')?>)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">TRACER STUDY INFORMATIKA</h2>
              <p class="animated fadeInUp">Aplikasi Pendataan alumni alumni dengan menggunakan algoritma K-Means CLsutering</p>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(<?=base_url('assets/frontend/lp/img/slide/sl3.jpg')?>)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">IKATAN ALUMNI INFORMATIKA</h2>
              <p class="animated fadeInUp"></p>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row justify-content-center">

          <div class="col-xl-11 col-lg-12 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5 text-justify">
            <h2 class="text-center">Tracer Study IKA</h2>
            <hr>
            <p> Seluruh alumni TI-Unla diharapkan mendaftar dan melengkapi data tracer study. Angket tracer study dapat diakses setelah alumni login ke sistem.</p>
            <p class="text-justify">
                Tracer study / graduate survey / alumni research / follow up study / labor market signal , merupakan studi yang dilakukan terhadap lulusan perguruan tinggi yang terkait dengan transisi perguruan tinggi dengan dunia kerja.Sasaran studi adalah lulusan perguruan tinggi baik yang sudah kerja pada suatu instansi atau wirausaha maupun lulusan yang belum bekerja. 
            </p>
            <p>
            Selain definisi di atas terdapat pengertian lainnya bahwa tracer study merupakan perencanaan dan pengambilan keputusan pada instansi pendidikan, perencanaan alokasi sumber daya manusia baik di instansi pemerintah dan swasta, maupun di kalangan industri. Tracer study juga didefinisikan sebagai kesesuaian antara hasil pendidikan dengan bidang kerja, dantracer study merupakan informasi tentang suasana kerja dan kondisi responden pada saat masuk kerja.
            </p>

            <p><strong>Tujuan Pelaksanaan Tracer Study </em></strong><br />

            <ol type="a">
                <li> Mengevaluasi<em>output/outcome</em> perguruan tinggi. </li>
                <li> Memperoleh informasi kesuksesan lulusan dalam karir, status, pendapatan, serta
                    relevansi antara pengetahuan dan keterampilan pekerjaannya. </li>
                <li> Sebagai tanggung jawab (akuntabilitas) perguruan tinggi dalam menyiapkan anak didiknya
                    menghadapi dunia kerja pada masa mendatang. </li>
                <li> Sebagai dasar untuk pengembangan isntitusi selanjutnya dalam konteks akreditasi. </li>
                <li> Sebagai dasar untuk melakukan perbaikan dalam proses pembelajaran. </li>
            </ol>
            <br />
            <p><strong>Manfaat <em> Tracer Study </em></strong><br />
            <ol type="a">
                <li> Bagi perencana institusi pendidikan adalah sebagai indikator efesiensi eksternal
                    pada institusi perguruan tinggi, dan sebagai dasar untuk menyelenggarakan dialog
                    dengan kalangan bisnis, industry terkait, dan pengguna lainnya.</li>
                <li>Bagi administaratur institusi pendidikan adalah untuk menentukan prioritas dan
                    pemilihan model pendidikan/pelatihan yang dapat dikembangkan sesuai dengan
                    karateristik institusi.</li>
                <li>Bagi perencana alokasi sumber daya manusia adalah untuk mengembangkan konsep yang
                    tepat dan memungkinkan dalam implementasi model pendidikan/pelatihan.</li>
            </ol>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container-fluid">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>Jumlah alumni terdaftar</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">521</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Tracer Study IF UNLA</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/hidayah-free-simple-html-template-for-corporate/ -->
        Designed by <a href="#">Bagja Septian M</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/frontend/lp')?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/frontend/lp')?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/frontend/lp')?>/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url('assets/frontend/lp')?>/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url('assets/frontend/lp')?>/vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url('assets/frontend/lp')?>/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url('assets/frontend/lp')?>/vendor/counterup/counterup.min.js"></script>
  <script src="<?= base_url('assets/frontend/lp')?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('assets/frontend/lp')?>/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/frontend/lp')?>/js/main.js"></script>

</body>

</html>