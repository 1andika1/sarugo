 <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Testimoni</h2>
          <ol>
            <li><a href="<?= base_url()?>">Beranda</a></li>
            <li>Testimoni</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<!-- bagian utama -->

<div class="container">
  <div class="row">
    <div id="kotakTestimony" class="card mr-auto" style="width: 35rem; margin: 20px; padding: 10px;">
      <!-- rating1 -->
      <div class="container" style="margin-bottom: 20px; text-align: center;">
        <div class="row">
          <div class="col border bg-light" style="padding: 10px;">Captain America</div>
          <div class="col-md-auto border bg-light center" style="padding: 10px;">PNS</div>
          <div class="col border bg-light" style="padding: 10px;">Ibuh</div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 border bg-light" style="padding: 10px;">Rating</div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 border bg-light" style="padding: 10px;">Mantap Wisata Sarugo</div>
        </div>
      </div>
      <!-- rating2 -->
      <div class="container" style="margin-bottom: 20px; text-align: center;">
        <div class="row">
          <div class="col border bg-light" style="padding: 10px;">Dokter Strange</div>
          <div class="col-md-auto border bg-light center" style="padding: 10px;">Dokter</div>
          <div class="col border bg-light" style="padding: 10px;">Koto nan IV</div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 border bg-light" style="padding: 10px;">Rating</div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 border bg-light" style="padding: 10px;">Keren Bangettt ngab</div>
        </div>
      </div>
      <!-- rating3 -->
      <div class="container" style="margin-bottom: 20px; text-align: center;">
        <div class="row">
          <div class="col border bg-light" style="padding: 10px;">Thor and Loki</div>
          <div class="col-md-auto border bg-light center" style="padding: 10px;">Pedagang</div>
          <div class="col border bg-light" style="padding: 10px;">Batang Tabik</div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 border bg-light" style="padding: 10px;">Rating</div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 border bg-light" style="padding: 10px;">Bagus, Lestariakn Budaya Lima Puluh Kota</div>
        </div>
      </div>
    </div>
    <div class="card"  style="width: 35rem; margin: 20px; padding: 10px;">
      <form style="padding-right: 10px; padding-bottom: 10px;">
        <div class="form-group row" style="padding-top: 10px; padding-left: 5px; padding-right: 5px;">
          <label for="inputNama" class="col-sm-4 col-form-label" >Nama</label>
          <div class="col-sm-8">
            <input type="Nama" class="form-control" id="inputNama" placeholder="Masukkan Nama">
          </div>
        </div>
        <div class="form-group row" style="padding-top: 10px; padding-left: 5px; padding-right: 5px;">
          <label for="inputPekerjaan" class="col-sm-4 col-form-label">Pekerjaan</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputPekerjaan" placeholder="Masukkan Pekerjaan">
          </div>
        </div>
        <div class="form-group row" style="padding-top: 10px; padding-left: 5px; padding-right: 5px;">
          <label for="inputAlamat" class="col-sm-4 col-form-label">Alamat</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputAlamat" placeholder="Masukkan Alamat">
          </div>
        </div>
        <div class="form-group row" style="padding-top: 10px; padding-left: 5px; padding-right: 5px;">
          <label for="inputTesti" class="col-sm-4 col-form-label">Testimoni</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputTesti" placeholder="Masukkan Testimoni">
          </div>
        </div><br>
        <div class="container rating" >
          <input  type="radio" name="star" id="star1" value="5"><label for="star1"></label>
          <input type="radio" name="star" id="star2" value="4"><label for="star2"></label>
          <input type="radio" name="star" id="star3" value="3"><label for="star3"></label>
          <input type="radio" name="star" id="star4" value="2"><label for="star4"></label>
          <input type="radio" name="star" id="star5" value="1"><label for="star5"></label>
        </div>
        <button id="kirim" type="submit" class="btn btn-primary float-right" style=" padding-right: 10px">Berikan Testimoni</button>
      </form>
  </div>
</div>
<!-- end bagian utama -->
</main><br> 