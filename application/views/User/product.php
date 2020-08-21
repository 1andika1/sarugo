  
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Produk</h2>
          <ol>
            <li><a href="<?= base_url()?>">Beranda</a></li>
            <li>Produk</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->
    
 

    <?php foreach($dataProduk as $key => $produk): ?>
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row justify-content-md-center">

          <div class="col-lg-5">
            <h2 class="portfolio-title"></h2>
            <div class="owl-carousel portfolio-details-carousel" >
<<<<<<< HEAD
              <img src="<?= base_url("$produk->gambar")?>" class="img-fluid" alt="">
=======
              <?php foreach ($gambarProduk as $key => $gambar) : ?>
                <?php if($gambar->id_produk == $produk->id_produk) : ?>
                  <img src="<?= base_url("$gambar->src")?>" class="img-fluid" alt="">
                <?php endif ?>
              <?php endforeach ?>
              <!-- <img src="assets/img/portfolio/portfolio-details-2.jpg" class="img-fluid" alt="">
              <img src="<?= base_url("$produk->gambar")?>" class="img-fluid" alt=""> -->
>>>>>>> d022b3a673d675a5f75ebfa6b32d910664f3921d
            </div>
          </div>

          <div class="col-lg-5 portfolio-info">
            <h3><b><?= $produk->nama_produk ?></b></h3>
            <ul>
              <li><strong>Harga Satuan: </strong><?=format_rp($produk->harga_satuan) ?></li>
              <li><strong>Berat Satuan: </strong><?= $produk->berat_satuan ?></li>
              <li><strong>Komposisi: </strong><?= $produk->komposisi ?> </li>
              <li><strong>Keterangan: </strong><?= $produk->keterangan ?> </li>
              <li><strong>Penjelasan produk : </strong><?= $produk->penjelasan_produk ?></li>

            </ul>

           
          </div>

        </div>

      </div>
    </section>
    <?php endforeach  ?>

    <!-- template produk -->
    <?php //foreach($dataProduk as $key => $produk): ?>
   <!--   <div class="row  justify-content-md-center">
        <div class="col-md-10">
          <div class="icon-box">
            <div class="container">
              <div class="row justify-content-md-center border">
                <h4><?//echo $produk->nama_produk ?></h4>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-4 border">
                  <img width="100%" src="<?// echo base_url("$produk->gambar")?> " alt="">
                </div>
                <div class="col-md-8 border">
                  <table class="table border" >
                      <tr>
                        <td>Harga Satuan: <?// echo format_rp($produk->harga_satuan) ?> </td>
                      </tr>
                      <tr>
                        <td>Berat Satuan: <?// echo $produk->berat_satuan ?> </td>
                      </tr>
                      <tr>
                        <td>Komposisi: <?// echo $produk->komposisi ?> </td>
                      </tr>
                      <tr>
                        <td>Keterangan: <?// echo $produk->keterangan ?> </td>
                      </tr>
                      <tr>
                        <td  >Penjelasan produk : 
                          <?// echo $produk->penjelasan_produk ?> 
                        </td>
                        
                      </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir template Produk -->
      <!--<?//php endforeach  ?>-->
  </main><!-- End #main -->