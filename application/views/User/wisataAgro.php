<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>SARUGO</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="<?= base_url()?>Web_Statis/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url()?>Web_Statis/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="<?= base_url()?>Web_Statis/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url()?>Web_Statis/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url()?>Web_Statis/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url()?>Web_Statis/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url()?>Web_Statis/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url()?>Web_Statis/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url()?>Web_Statis/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="<?= base_url()?>Web_Statis/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url()?>web_statis/assets/css/font-awesome.css">
    <link rel="stylesheet" href="<?= base_url()?>Web_Statis/assets/css/font-awesome.min.css">
  
    <!-- =======================================================
    * Template Name: Sailor - v2.1.0
    * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>

<body>

  <!-- ======= Header ======= -->
  <!-- headertop -->
  <header id="header" class="fixed-top ">
    <div class="header_top">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="full">
              <div class="topbar-left">
                <ul class="list-inline">
                  <li> <span class="topbar-label"><i class="bx bxl-home"></i></span> <span class="topbar-hightlight">Website Resmi Kampung Wisata Saribu Rumah Gonjong</span> </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 right_section_header_top">
            <div class="float-right">
              <div class="social_icon">
                <ul class="list-inline">
                  <div class="social-links mt-3">
                    <a href="https://www.facebook.com" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.whatsapp.com" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                    <a href="https://www.instagram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
                  </div>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- end headertop -->
    <div class="container d-flex align-items-center">

      <h1 class="logo"> <a href="<?=base_url("")?>"><img src="<?= base_url()?>Web_Statis/assets/img/logo.jpg" alt="logo" /></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">

        <ul>
          <li><a href="<?= base_url()?>">Beranda</a></li>

          <li class="drop-down"><a href="<?=base_url("wisata")?>">Wisata</a>
            <ul>
              <li><a href="<?=base_url("wisata?wisata=wisataAlam")?>">Wisata Alam</a></li>
              <li><a href="<?=base_url("wisata?wisata=wisataAgro")?>">Wisata Agro</a></li>
              <li><a href="<?=base_url("wisata?wisata=wisataKuliner")?>">Wisata Kuliner</a></li>
              <li><a href="<?=base_url("wisata?wisata=wisataAdat")?>">Wisata Adat/Budaya</a></li>
            </ul>
          </li>

          <li><a href="<?=base_url("product")?>">Product</a></li>
          <li class="drop-down"><a href="<?=base_url("paket")?>">Paket Wisata</a>
            <ul>
              <li><a href="<?=base_url("paket?paket=paket1")?>">Paket Wisata 1</a></li>
              <li><a href="<?=base_url("paket?paket=paket2")?>">Paket Wisata 2</a></li>
              <li><a href="<?=base_url("paket?paket=paket3")?>">Paket Wisata 3</a></li>
              <li><a href="<?=base_url("paket?paket=paket4")?>">Paket Wisata 4</a></li>
            </ul>
          </li>
          <li><a href="<?=base_url("Testimoni")?>">Testimoni</a></li>
          <li><a href="<?=base_url("berita")?>">Berita</a></li>

        </ul>

      </nav>
      <!-- .nav-menu -->

     <!--  <a href="index.html" class="get-started-btn ml-auto">Get Started</a> -->

    </div>
  </header><br><br>

<!-- End Header -->
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Wisata Agro</h2>
      <ol>
        <li><a href="<?=base_url("")?>">Beranda</a></li>
        <li><a href="<?=base_url("wisata")?>">Wisata</a></li>
        <li>Wisata Agro</li>
      </ol>
    </div>

  </div>
</section>
 <!-- ======= Pricing Section ======= -->
 <section id="pricing" class="pricing">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="box featured">
              <h3>Foto dan Video</h3>
              <div class="row">
              <!-- gambar1 -->
              <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                <div class="box featured">
                  <img src="<?=base_url("")?>Web_Statis/assets/img/favicon.png" alt="pict1">
                  <div class="btn-wrap">
                    <a class="btn-buy">ket. gambar</a>
                  </div>
                </div>
              </div>
              <!-- gambar2 -->
              <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                <div class="box featured">
                  <img src="<?=base_url("")?>Web_Statis/assets/img/favicon.png" alt="pict1">
                  <div class="btn-wrap">
                    <a class="btn-buy">ket. gambar</a>
                  </div>
                </div>
              </div>
              <!-- gambar3 -->
              <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                <div class="box featured">
                  <img src="<?=base_url("")?>Web_Statis/assets/img/favicon.png" alt="pict1">
                  <div class="btn-wrap">
                    <a class="btn-buy">ket. gambar</a>
                  </div>
                </div>
              </div>
              <!-- gambar4 -->
              <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                <div class="box featured">
                  <img src="<?=base_url("")?>Web_Statis/assets/img/favicon.png" alt="pict1">
                  <div class="btn-wrap">
                    <a class="btn-buy">ket. gambar</a>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>

            <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
              <div class="row">
                <div class="box featured">
                  <h3>Keterangan Wisata</h3>
                  <h5>Penjelasan mengenai wisata alam yang panjang dan Selengkap lengkapnya <br>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum</h5>
                </div>
                
              </div>
            </div>
        </div>
      </div>
    </section><!-- End Pricing Section -->
    <!-- map -->
    <section>
      <div class="container">
        <div class="row justify-content-md-center">
            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#basicModal">Lihat Rute Wisata Agro</a>
        </div>
      </div>
      <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <iframe width="1100" height="315" src="https://www.google.co.id/maps/place/Bofet+Pergaulan/@-0.229835,100.6309176,15z/data=!4m5!3m4!1s0x2e2ab4aefa212925:0xb1f0b044ce780890!8m2!3d-0.2272335!4d100.6275344" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; 2020<strong><span> Website Sarugo</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
        Designed by <a href="https://kominfo.limapuluhkotakab.go.id/">Diskominfo Kab. Lima Puluh Kota</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>