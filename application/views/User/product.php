 
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Product</h2>
          <ol>
            <li><a href="<?= base_url()?>">Beranda</a></li>
            <li>Product</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->
    
  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

    <?php foreach($dataProduk as $key => $produk): ?>
      <!-- template produk -->
      <div class="row  justify-content-md-center">
        <div class="col-md-10">
          <div class="icon-box">
            <div class="container">
              <div class="row justify-content-md-center border">
                <h4><?= $produk->nama_produk ?></h4>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-4 border">
                  <img width="100%" src="<?= base_url("$produk->gambar")?> " alt="">
                </div>
                <div class="col-md-8 border">
                  <table class="table border" >
                      <tr>
                        <td>Harga Satuan: <?= $produk->harga_satuan ?> </td>
                      </tr>
                      <tr>
                        <td>Berat Satuan: <?= $produk->berat_satuan ?> </td>
                      </tr>
                      <tr>
                        <td>Komposisi: <?= $produk->komposisi ?> </td>
                      </tr>
                      <tr>
                        <td>Keterangan: <?= $produk->keterangan ?> </td>
                      </tr>
                      <tr>
                        <td  >Penjelasan produk : 
                          <?= $produk->penjelasan_produk ?> 
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
      <?php endforeach  ?>

      <div class="row  justify-content-md-center">
        <div class="col-md-10">
          <div class="icon-box">
            <div class="container">
              <div class="row justify-content-md-center border">
                <h4>Nama Produk</h4>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-4 border">
                  <img src="<?= base_url()?>Web_Statis/assets/img/product2.jpg" alt="">
                </div>
                <div class="col-md-8 border">
                  <table class="table border" >
                      <tr>
                        <td>Harga Satuan: </td>
                      </tr>
                      <tr>
                        <td>Berat Satuan: </td>
                      </tr>
                      <tr>
                        <td>Komposisi: </td>
                      </tr>
                      <tr>
                        <td>Keterangan: </td>
                      </tr>
                      <tr>
                        <td style="text-align: center;">Penjelasan produk</td>
                      </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- End Services Section -->
  </main><!-- End #main -->
 