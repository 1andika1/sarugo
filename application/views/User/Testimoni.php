
<?php 
$lima = $empat = $tiga = $dua = $satu = $count = $mean = 0;
foreach ($dataTestimoni as $key => $testi) {
  $count ++;
  switch ($testi->bintang) {
    case 1:
      $satu++;
      break;
    case 2:
      $dua++;
      break;
    case 3:
      $tiga++;
      break;
    case 4:
      $empat++;
      break;
    case 5:
      $lima++;
      break;
    
  }

}

$mean = $satu*1 + $dua*2 + $tiga*3 + $empat*4 + $lima*5;
$mean = $mean/$count;

?>
    
 
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
   <h1 style="text-align: center;">Masukkan Testimoni Anda</h1>
     <div class="row justify-content-md-center">

       <div class="text-center card shadow" style="width: 35rem; margin: 20px; padding: 10px;">
           <span class="heading">Form Testimoni</span> 
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
           <div class="text-center  rating">
             <input type="radio" name="star" id="star<?=1?>"   value="5"><label for="star1"></label>
             <input type="radio" name="star" id="star<?=2?>"  value="4"><label for="star2"></label>
             <input checked type="radio" name="star" id="star<?=3?>"  value="3"><label for="star3"></label>
             <input type="radio" name="star" id="star<?=4?>"  value="2"><label for="star4"></label>
             <input type="radio" name="star" id="star<?=5?>"  value="1"><label for="star5"></label>
           </div>
           <div class="row">
             <div class="col-6 col-md-4"></div>
             <div class="col-6 col-md-4"><button id=" " type="submit" class="btn btn-success float-center" style=" padding-right: 10px; ">Kirim Testimoni</button></div>
             <div class="col-6 col-md-4"></div>
           </div>

         </form>
       </div>


       <div id="kotakTestimony" class="card shadow" style="width: 35rem; margin: 20px; padding: 10px;">

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
         <p>Dinilai <b> <?=$mean?> </b> Bintang dari <b><?=$count?></b> Ulasan </p>
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
             <div><?=$lima?></div>
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
             <div><?=$empat?></div>
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
             <div><?=$tiga?></div>
           </div>
           <div class="side">
             <div>2 star</div>
           </div>
           <div class="middle">
             <div class="bar-container">
               <div class="bar-0"></div>
             </div>
           </div>
           <div class="side right">
             <div><?=$dua?></div>
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
             <div><?=$satu?></div>
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
                     <!-- <?php for ($index = 1; $index <= 5; $index++) : ?>
                       <?php if ($index == strval($testi->bintang)) : ?>
                         <span class="fa fa-star checked" name="star" id="star<?= $index ?>" value="<?= 6 - $index ?>"><label for="star<?= $index ?>"></label>
                         <?php else : ?>
                           <span class="fa fa-star" name="star" id="star<?= $index ?>" value="<?= 6 - $index ?>"><label for="star<?= $index ?>"></label>
                           <?php endif ?>
                         <?php endfor  ?> -->


                         <?php for ($index = 1; $index <= $testi->bintang; $index++) : ?> 
                             <span class="fa fa-star checked"></span>
                             
                         <?php endfor  ?>
                   </div>

                 </div> 
               </div>


             <?php endforeach ?>
           </div>

         </div> 
       </div>

     </div>
   </div>

 </main>