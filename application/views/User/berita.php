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
        <?php foreach ($dataBerita as $key => $berita) : ?>
         <!-- template berita -->
         <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="<?= base_url("$berita->gambar")?> " alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?=base_url("berita/detailberita?id_berita=$berita->id_berita")?>"><?= $berita->judul_berita ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i>  admin </li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i>  <time datetime="2020-01-01"><?= $berita->tgl_post ?></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  <?= substr($berita->keterangan,0,200)."..." ?>
                </p>
                <div class="read-more">
                  <a href="<?=base_url("berita/detailberita?id_berita=$berita->id_berita")?>">Baca Selengkapnya</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>
         <!-- akhir template berita -->
         <?php endforeach ?>
          
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
 