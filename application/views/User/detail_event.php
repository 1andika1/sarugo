<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><?= $event->nama_event ?></h2>
      <ol>
        <li><a href="<?=base_url("")?>">Beranda</a></li>
        <li><a href="<?=base_url("")?>">Event</a></li>
        <li><?= $event->nama_event ?></li>
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
            <img src="<?=base_url("$event->gambar")?> " alt="" class="img-fluid rounded" width="100%">
          </div>

          <h2 class="entry-title">
                <?= $event->nama_event ?> 
          </h2>

          <div class="entry-meta">
            <ul>
              <!-- <li class="d-flex align-items-center"><i class="icofont-user"></i>  Admin </li>
              <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i>  <time datetime="<?= $event->tgl_awal ?>"><?= $berita->tgl_post ?></time> </li> -->
             
             </ul>
          </div>

          <div class="entry-content">
          
            <p>&emsp; &emsp; <?= $event->keterangan ?></p>

          </div>

          <div class="entry-footer clearfix">
            <!-- xx -->

            <div class="float-right share">
              <a href="https://twitter.com" title="Share on Twitter"><i class="icofont-twitter"></i></a>
              <a href="https://facebook.com" title="Share on Facebook"><i class="icofont-facebook"></i></a>
              <a href="https://instagram.com" title="Share on Instagram"><i class="icofont-instagram"></i></a>
            </div>

          </div>

        </article><!-- End blog entry -->

      </div><!-- End blog entries list -->

      <div class="col-lg-4">

        <div class="sidebar ">
 

          <h3 class="sidebar-title">Recent Posts</h3>
          <div class="sidebar-item recent-posts">
            <?php foreach ($dataEvent as $key => $event) : ?>
                <div class="post-item clearfix">
                    <img width="100%" src="<?= base_url("$event->gambar") ?>" alt="gambar">
                    <h4><a href="event2.html"><?=  $event->nama_event ?></a></h4>
                    <time datetime="<?=  $event->tgl_awal ?>"><?=  $event->tgl_awal ?></time>
                </div>
            <?php endforeach ?>

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
