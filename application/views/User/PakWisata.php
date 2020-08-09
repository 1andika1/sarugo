 
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Paket Wisata</h2>
          <ol>
            <li><a href="<?= base_url()?>">Beranda</a></li>
            <li>Paket Wisata</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="row">

        <?php foreach ($dataPaketWisata as $key => $paketWisata) : ?>
          <div class="col-lg-3 col-md-6 mb-5">
            <div class="box featured">
              <h3><?= $paketWisata->nama_paket_wisata ?></h3>
              <ul>
                <li><?= $paketWisata->jumlah_hari ?> Hari Liburan</li>
                <li>Max <?= $paketWisata->jumlah_orang ?> Orang</li>
                <li>Beragam fasilitas</li>
                <li>+ Pemandu Wisata</li> 
                <li class="na">Massa ultricies mi</li>
              </ul>
              <h4><sup>Rp.</sup><?= $paketWisata->biaya ?><span></span></h4>
              <div class="btn-wrap">
                <a href="<?=base_url("paket?paket=paket1")?>" class="btn-buy">Lihat Selengkapnya</a>
              </div>
            </div>
          </div>
        <?php endforeach ?>

          <div class="col-lg-3 col-md-6">
            <div class="box featured">
              <h3>Paket Wisata 1</h3>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <h4><sup>Rp.</sup>200.000<span></span></h4>
              <div class="btn-wrap">
                <a href="<?=base_url("paket?paket=paket1")?>" class="btn-buy">Lihat Selengkapnya</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3>Paket Wisata 2</h3>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <h4><sup>Rp.</sup>200.000<span></span></h4>
              <div class="btn-wrap">
                <a href="<?=base_url("paket?paket=paket2")?>" class="btn-buy">Lihat Selengkapnya</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured">
              <h3>Paket Wisata 3</h3>
              <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
              <h4><sup>Rp. </sup>200.000<span></span></h4>
              <div class="btn-wrap">
                <a href="<?=base_url("paket?paket=paket3")?>" class="btn-buy">Lihat Selengkapnya</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured">
              <!-- <span class="advanced">Paket Wisata</span> -->
              <h3>Paket Wisata 4</h3>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <h4><sup>Rp.</sup>200.000<span></span></h4>
              <div class="btn-wrap">
                <a href="<?=base_url("paket?paket=paket4")?>" class="btn-buy">Lihat Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->

  </main><!-- End #main -->
 