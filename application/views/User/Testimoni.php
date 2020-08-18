 <main id="main">
   <!-- ======= Breadcrumbs ======= -->
   <section id="breadcrumbs" class="breadcrumbs">
     <div class="container">

       <div class="d-flex justify-content-between align-items-center">
         <h2>Testimoni</h2>
         <ol>
           <li><a href="<?= base_url() ?>">Beranda</a></li>
           <li>Testimoni</li>
         </ol>
       </div>

     </div>
   </section><!-- End Breadcrumbs -->
   <!-- bagian utama -->

   <div class="container">
     <div class="row">

       <div class="card shadow" style="width: 35rem; margin: 20px; padding: 10px;">
         <form method="post" action="<?= base_url("testimoni/add") ?>" style="padding-right: 10px; padding-bottom: 10px;">
           <div class="form-group row" style="padding-top: 10px; padding-left: 5px; padding-right: 5px;">
             <label for="inputNama" class="col-sm-4 col-form-label">Nama</label>
             <div class="col-sm-8">
               <input required name="nama_testi" type="Nama" class="form-control" id="inputNama" placeholder="Masukkan Nama">
             </div>
           </div>
           <div class="form-group row" style="padding-top: 10px; padding-left: 5px; padding-right: 5px;">
             <label for="inputPekerjaan" class="col-sm-4 col-form-label">Pekerjaan</label>
             <div class="col-sm-8">
               <input required name="pekerjaan_testi" type="text" class="form-control" id="inputPekerjaan" placeholder="Masukkan Pekerjaan">
             </div>
           </div>
           <div class="form-group row" style="padding-top: 10px; padding-left: 5px; padding-right: 5px;">
             <label for="inputAlamat" class="col-sm-4 col-form-label">Alamat</label>
             <div class="col-sm-8">
               <input required name="alamat_testi" type="text" class="form-control" id="inputAlamat" placeholder="Masukkan Alamat">
             </div>
           </div>
           <div class="form-group row" style="padding-top: 10px; padding-left: 5px; padding-right: 5px;">
             <label for="inputTesti" class="col-sm-4 col-form-label">Testimoni</label>
             <div class="col-sm-8">
               <input required name="pesan_testi" type="text" class="form-control" id="inputTesti" placeholder="Masukkan Testimoni">
             </div>
           </div><br>
           <div class="container rating">
             <input type="radio" name="star" id="star1" value="5"><label for="star1"></label>
             <input type="radio" name="star" id="star2" value="4"><label for="star2"></label>
             <input checked type="radio" name="star" id="star3" value="3"><label for="star3"></label>
             <input type="radio" name="star" id="star4" value="2"><label for="star4"></label>
             <input type="radio" name="star" id="star5" value="1"><label for="star5"></label>
           </div>
           <div class="row">
             <div class="col-6 col-md-4"></div>
             <div class="col-6 col-md-4"><button id=" " type="submit" class="btn btn-success float-center" style=" padding-right: 10px; ">Kirim Testimoni</button></div>
             <div class="col-6 col-md-4"></div>
           </div>

         </form>
       </div>


       <div id="kotakTestimony" class="card mr-auto shadow" style="width: 35rem; margin: 20px; padding: 10px;">

         <!-- Add icon library -->
         <link rel="stylesheet" href="<?= base_url() ?>assets/css/rating.css">



         <span class="heading">Rating Pengunjung</span>
         <div>
           <span class="fa fa-star checked"></span>
           <span class="fa fa-star checked"></span>
           <span class="fa fa-star checked"></span>
           <span class="fa fa-star checked"></span>
           <span class="fa fa-star"></span>
         </div>
         <p>Dinilai <b> 4.1 </b> Bintang dari <b>254</b> Pengunjung </p>
         <hr style="border:3px solid #f1f1f1">

         <div class="row-center">
           <div class="side">
             <div>5 star</div>
           </div>
           <div class="middle">
             <div class="bar-container">
               <div class="bar-5"></div>
             </div>
           </div>
           <div class="side right">
             <div>150</div>
           </div>
           <div class="side">
             <div>4 star</div>
           </div>
           <div class="middle">
             <div class="bar-container">
               <div class="bar-4"></div>
             </div>
           </div>
           <div class="side right">
             <div>63</div>
           </div>
           <div class="side">
             <div>3 star</div>
           </div>
           <div class="middle">
             <div class="bar-container">
               <div class="bar-3"></div>
             </div>
           </div>
           <div class="side right">
             <div>15</div>
           </div>
           <div class="side">
             <div>2 star</div>
           </div>
           <div class="middle">
             <div class="bar-container">
               <div class="bar-2"></div>
             </div>
           </div>
           <div class="side right">
             <div>6</div>
           </div>
           <div class="side">
             <div>1 star</div>
           </div>
           <div class="middle">
             <div class="bar-container">
               <div class="bar-1"></div>
             </div>
           </div>
           <div class="side right">
             <div>20</div>
           </div>
         </div>

         <br>
         <div>
           <div class="overflow-auto p-3 mb-3 mb-md-0 bg-light" style="max-width: 100%; max-height: 200px;">
             <?php foreach ($dataTestimoni as $key => $testi) : ?>

               <div class="container" style="margin-bottom: 20px; text-align: center;">
                 <div class="row">
                   <div class="col border bg-light" style="padding: 10px;"><?= $testi->nama_testi ?></div>
                   <!-- <div class="col-md-auto border bg-light center" style="padding: 10px;">
      <?//= $testi->pekerjaan_testi ?></div>-->
    <div class="col border bg-light" style="padding: 10px;">
      <?= $testi->alamat_testi ?></div>

                   <div class="col border bg-light" style="padding: 10px;">
                     <?php for ($index = 1; $index <= 5; $index++) : ?>
                       <?php if ($index == strval($testi->bintang)) : ?>
                         <span class="fa fa-star checked" name="star" id="star<?= $index ?>" value="<?= 6 - $index ?>"><label for="star<?= $index ?>"></label>
                         <?php else : ?>
                           <span class="fa fa-star" name="star" id="star<?= $index ?>" value="<?= 6 - $index ?>"><label for="star<?= $index ?>"></label>
                           <?php endif ?>
                         <?php endfor  ?>
                   </div>

                 </div>
                 <!-- <div class="row">
    <div class="col-12 col-md-12 border bg-light" style="padding: 10px;"><?//= $testi->pesan_testi ?></div>
  </div> -->
               </div>


             <?php endforeach ?>
           </div>

         </div>
         <!-- rating1 -->

         <!-- rating2 -->
         <!--     <div class="container" style="margin-bottom: 20px; text-align: center;">
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
         <!--        <div class="container" style="margin-bottom: 20px; text-align: center;">
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

         </div>
         <!-- end bagian utama -->
       </div>

     </div>
   </div>

 </main>