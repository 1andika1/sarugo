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
          <h2>Berita 1</h2>
          <ol>
            <li><a href="index.html">Beranda</a></li>
            <li><a href="berita.html">Berita</a></li>
            <li>Berita 1</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 entries">
            <article class="entry entry-single">

              <div class="entry-img">
                <img src="<?=base_url()?>Web_Statis/assets/img/blog-1.jpg" alt="" class="img-fluid" width="100%">
              </div>

              <h2 class="entry-title">
                <a href="Berita1.html">hal-hal baru yang ada di wisata saribu gonjong</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="Berita1.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="Berita1.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="Berita1.html">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                  Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                </p>

                <p>
                  Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
                </p>

                <blockquote>
                  <i class="icofont-quote-left quote-left"></i>
                  <p>
                    Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.
                  </p>
                  <i class="las la-quote-right quote-right"></i>
                  <i class="icofont-quote-right quote-right"></i>
                </blockquote>

                <p>
                  Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
                  Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque.
                  Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.
                </p>

                <h3>Et quae iure vel ut odit alias.</h3>
                <p>
                  Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui.
                  Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea.
                  Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.
                </p>
                <img src="assets/img/blog-inside-post.jpg" class="img-fluid" alt="">

                <h3>Ut repellat blanditiis est dolore sunt dolorum quae.</h3>
                <p>
                  Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In assumenda quia quae a id praesentium. Quos deleniti libero sed occaecati aut porro autem. Consectetur sed excepturi sint non placeat quia repellat incidunt labore. Autem facilis hic dolorum dolores vel.
                  Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a quam vitae.
                </p>
                <p>
                  Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas incidunt. Nulla sit eaque mollitia nisi asperiores est veniam.
                </p>

              </div>

              <div class="entry-footer clearfix">
                <div class="float-left">
                  <i class="icofont-folder"></i>
                  <ul class="cats">
                    <li><a href="#">Business</a></li>
                  </ul>

                  <i class="icofont-tags"></i>
                  <ul class="tags">
                    <li><a href="#">Creative</a></li>
                    <li><a href="#">Tips</a></li>
                    <li><a href="#">Marketing</a></li>
                  </ul>
                </div>

                <div class="float-right share">
                  <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                  <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                  <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
                </div>

              </div>

            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="berita2.html">Berita 2</a></li>
                  <li><a href="berita3.html">Berita 3</a></li>
                  <li><a href="berita4.html">Berita 4</a></li>
                  <li><a href="berita5.html">Berita 5</a></li>
                  <li><a href="berita6.html">Berita 6</a></li>
                  <li><a href="berita7.html">Berita 7</a></li>
                </ul>

              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="assets/img/blog-recent-5.jpg" alt="">
                  <h4><a href="Berita2.html">Nihil blanditiis at in nihil autem</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/business-20.jpg" alt="">
                  <h4><a href="Berita3.html">Quidem autem et impedit</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/business-26.jpg" alt="">
                  <h4><a href="Berita4.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/business-30.jpg" alt="">
                  <h4><a href="Berita5.html">Laborum corporis quo dara net para</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/business-16.jpg" alt="">
                  <h4><a href="Berita6.html">Et dolores corrupti quae illo quod dolor</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

              </div><!-- End sidebar recent posts-->
            </div><!-- End sidebar -->
          </div><!-- End blog sidebar -->
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