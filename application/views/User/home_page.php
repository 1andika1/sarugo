
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

       
        <div class="carousel-item ">
        
          <video autoplay muted loop id="myVideo" >
            <source src="https://limapuluhkotakab.go.id/assets/images/iconhome/videopakai.mp4" type="video/mp4" style>
          </video>

        </div>
   
      
      <?php foreach ($dataBanner as $key => $banner) : ?>
      
        <div class="carousel-item <?=$key==0?"active": ""?>" style='background-image:url(<?=base_url().$banner->foto?>)'>
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown"><?= $banner->judul ?></h2>
              <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
            </div>
          </div>
        </div>
        
      <?php endforeach ?>

     

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
        <div class="container display1">
            <h3 id="tengah"> Profile dan Sejarah</h3>
        </div>
            <div class="container">
              <div class="row">
              <div class="col-md-2"></div>
                <div class="col-md-8">
                <div class="entry-img">
                  <img src="<?=base_url()?>Web_Statis/assets/img/blog-1.jpg" alt="" class="img-fluid" width="100%">
                </div>
                <div class="col-md-2"></div>
                </div>
              </div>
            </div>
            <div class="container mt-5">
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
            </div>
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


   <?php foreach ($dataHalStatis as $key => $halStatis) :?>
    <?php if($halStatis->add_to_beranda) : ?>

      <!-- ======= Static Page Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="container display1">
            <h3 id="tengah"> <?= $halStatis->judul ?></h3>
        </div>
            <div class="container">
              <div class="row">
              <div class="col-md-2"></div>
                <div class="col-md-8">
                <div class="entry-img">
                  <img src="<?=base_url().$halStatis->gambar?>" alt="" class="img-fluid" width="100%">
                </div>
                <div class="col-md-2"></div>
                </div>
              </div>
            </div>
            <div class="container mt-5">
              <p>
                <?= $halStatis->isi ?>
              </p>
            </div>
             
          </div>
        </div>
      </div>
    </section>
    <!-- End Static Page Section -->

    <?php endif?>
   <?php endforeach ?>

  </main><!-- End #main -->
 