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

      <h1 class="logo"> <a href="index.html"><img src="<?= base_url()?>Web_Statis/assets/img/logo.jpg" alt="logo" /></a></h1>
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
          <li class="drop-down active"><a href="<?=base_url("paket")?>">Paket Wisata</a>
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
          <h2>Berita</h2>
          <ol>
            <li><a href="<?=base_url("")?>">Beranda</a></li>
            <li>Berita</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">
          
          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="<?= base_url()?>Web_Statis/assets/img/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?=base_url("berita?berita=berita1")?>">Judul Berita 1</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="<?=base_url("berita?berita=berita1")?>">admin</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="<?=base_url("berita?berita=berita1")?>"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Isi berita 1
                </p>
                <div class="read-more">
                  <a href="<?=base_url("berita?berita=berita1")?>">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="<?= base_url()?>Web_Statis/assets/img/blog-2.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?=base_url("berita?berita=berita2")?>">Judul Berita 2</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="<?=base_url("berita?berita=berita2")?>.html">admin</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="<?=base_url("berita?berita=berita2")?>"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Isi berita 2
                </p>
                <div class="read-more">
                  <a href="<?=base_url("berita?berita=berita2")?>">Read More</a>
                </div>
              </div>
            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="<?= base_url()?>Web_Statis/assets/img/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?=base_url("berita?berita=berita3")?>">Judul berita 3</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="<?=base_url("berita?berita=berita3")?>">admin</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="<?=base_url("berita?berita=berita3")?>"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Isi berita 3
                </p>
                <div class="read-more">
                  <a href="<?=base_url("berita?berita=berita3")?>">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="<?= base_url()?>Web_Statis/assets/img/blog-4.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?=base_url("berita?berita=berita4")?>">Judul berita 4</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="<?=base_url("berita?berita=berita4")?>">admin</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="<?=base_url("berita?berita=berita4")?>"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                 Isi berita 4
                </p>
                <div class="read-more">
                  <a href="<?=base_url("berita?berita=berita4")?>">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="<?= base_url()?>Web_Statis/assets/img/blog-5.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?=base_url("berita?berita=berita5")?>">Blanditiis dignissimos deleniti. Rerum iste et.</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="<?=base_url("berita?berita=berita5")?>">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="<?=base_url("berita?berita=berita5")?>"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Quidem et eum explicabo quia illo numquam nostrum corrupti provident. Quia aspernatur et et facere. Quisquam maiores natus nihil incidunt ipsum est optio eum maxime. Dignissimos vitae explicabo. Corrupti esse sed a a. Laborum optio reprehenderit quia dena per.
                </p>
                <div class="read-more">
                  <a href="<?=base_url("berita?berita=berita5")?>">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

          <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="<?= base_url()?>Web_Statis/assets/img/blog-6.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?=base_url("berita?berita=berita6")?>">Debitis cupiditate saepe ex quam aut id. Consequatur dignissimos et id id.</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="<?=base_url("berita?berita=berita6")?>">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="<?=base_url("berita?berita=berita6")?>"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Modi dolor et placeat ut iure ad. Qui perferendis fugit quo et cumque facilis et debitis rerum. Repellendus animi qui eos. Unde perferendis et tempora Ratione porro omnis magn delata sera marto ned.
                </p>
                <div class="read-more">
                  <a href="<?=base_url("berita?berita=berita6")?>">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>

        </div>

        <div class="blog-pagination" data-aos="fade-up">
          <ul class="justify-content-center">
            <li class="disabled"><i class="icofont-rounded-left"></i></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
          </ul>
        </div>

      </div>
    </section><!-- End Blog Section -->

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