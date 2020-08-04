<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SARUGO</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">


  <!-- Menyisipkan library Google Maps -->
  <script src="http://maps.googleapis.com/maps/api/js"></script>

  <script>
      // fungsi initialize untuk mempersiapkan peta
      function initialize() {
      var propertiPeta = {
          center:new google.maps.LatLng(-0.0222384,100.3494011),
          zoom:17,
          mapTypeId:google.maps.MapTypeId.ROADMAP
      };
      
      var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
      }

      // event jendela di-load  
      google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  <!-- end maps -->

  <!-- Favicons -->
  <link href="Web_Statis/assets/img/favicon.png" rel="icon">
  <link href="Web_Statis/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Web_Statis/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Web_Statis/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="Web_Statis/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="Web_Statis/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="Web_Statis/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="Web_Statis/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="Web_Statis/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="Web_Statis/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="web_statis/assets/css/font-awesome.css">
  <link rel="stylesheet" href="Web_Statis/assets/css/font-awesome.min.css">

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

      <h1 class="logo"> <a href="<?= base_url()?>"><img src="<?= base_url()?>Web_Statis/assets/img/logo.jpg" alt="logo" /></a></h1>
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
  </header>

  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Wisata Saribu Gonjong</h2>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <div class="container">
              <video width="100%" height="75%" onloadeddata="this.play()" style="padding-top: 130px;">
                <source src="Web_Statis/assets/vid/prologue.mp4" type="video/mp4">
              </video>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(Web_Statis/assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Akses Wisata</h2>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
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
      <div class="container">
        <div class="container">
            <h3 id="tengah"> Profile dan Sejarah</h3>
          </div>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
            </ul>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
    <div class="container">
      <div class="container">
        <h3 id="tengah"> Akses Lokasi</h3>
        <!-- maps -->
            <div id="googleMap" style="width:100%;height:380px;"> </div>
            <!-- end maps -->
          </div>
          <br>  
          <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
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
      Designed by <a href="https://kominfo.limapuluhkotakab.go.id/">Diskominfo Kab. Lima Puluh Kota</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="WEb_Statis/assets/vendor/jquery/jquery.min.js"></script>
  <script src="WEb_Statis/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="WEb_Statis/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="WEb_Statis/assets/vendor/php-email-form/validate.js"></script>
  <script src="WEb_Statis/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="WEb_Statis/assets/vendor/venobox/venobox.min.js"></script>
  <script src="WEb_Statis/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="WEb_Statis/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="Web_Statis/assets/js/main.js"></script>

</body>

</html>