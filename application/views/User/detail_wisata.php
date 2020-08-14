
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><?=$wisata->nama_wisata?></h2>
      <ol>
        <li><a href="<?=base_url("")?>">Beranda</a></li>
        <li><a href="<?=base_url("wisata")?>">Wisata</a></li>
        <li><?=$wisata->nama_wisata?></li>
      </ol>
    </div>

  </div>
</section>
 <!-- ======= Pricing Section ======= -->
 <section id="pricing" class="pricing">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="box featured">
              <h3>Foto dan Video</h3>
              <div class="row">
              <!-- gambar1 --> 
              <?php $counter=1; foreach ($dataResource as $key => $resource) : ?>

                <?php if(!$resource->tipe_resource) :?>
                    <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                        <div class="box featured">
                        <img width="100%" src="<?=base_url("$resource->link_resource")?>" alt="pict1">
                        <div class="btn-wrap">
                            <!--<a href="#keteranganUtama" id="buttonKet<?=$counter?>" class="btn-buy">ket. gambar</a>-->
                            <small id="keterangan<?=$counter++ ?>" class="d- "> <?= $resource->keterangan ?></small>
                        </div>
                        </div>
                    </div>
                <?php else : ?>
                <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                        <div class="box featured"> 
                        <video controls  autoplay    name="media" width="100%"   >
                            <source src="<?=base_url("$resource->link_resource")?>" type="video/mp4" style>
                        </video>
                        <div class="btn-wrap">
                            <!--<a href="#keteranganUtama" id="buttonKet<?=$counter?>" class="btn-buy">ket. video</a>-->
                            <small id="keterangan<?=$counter++ ?>" class="d- "> <?= $resource->keterangan ?></small>
                        </div>
                        </div>
                    </div>

                <?php endif ?>

                    <input type="hidden" id="banyakResource" value="<?=$counter?>">
                <?php endforeach ?>   


              <!-- gambar2 -->
              <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                <div class="box featured">
                  <img src="<?=base_url("")?>Web_Statis/assets/img/favicon.png" alt="pict1">
                  <div class="btn-wrap">
                    <a class="btn-buy">ket. gambar</a>
                  </div>
                </div>
              </div>
              <!-- gambar3 -->
              <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                <div class="box featured">
                  <img src="<?=base_url("")?>Web_Statis/assets/img/favicon.png" alt="pict1">
                  <div class="btn-wrap">
                    <a class="btn-buy">ket. gambar</a>
                  </div>
                </div>
              </div>
              <!-- gambar4 -->
              <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                <div class="box featured">
                  <img src="<?=base_url("")?>Web_Statis/assets/img/favicon.png" alt="pict1">
                  <div class="btn-wrap">
                    <a class="btn-buy">ket. gambar</a>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>

            <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
              <div class="row">
                <div id="#keterangan" class="box featured w-100">
                  <h3>Keterangan Wisata</h3>
                  <h5 id="keteranganUtama"><?=$wisata->keterangan?></h5>
                </div>
                
              </div>
            </div>
        </div>
      </div>
    </section><!-- End Pricing Section -->
    <!-- map -->
    <section>
      <div class="container">
        <div class="row justify-content-md-center">
            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#basicModal">Lihat Rute Wisata</a>
        </div>
      </div>
      <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <iframe width="1100" height="315" src="https://www.google.co.id/maps/place/Bofet+Pergaulan/@-0.229835,100.6309176,15z/data=!4m5!3m4!1s0x2e2ab4aefa212925:0xb1f0b044ce780890!8m2!3d-0.2272335!4d100.6275344" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->


  <script>
    const banyakResource = document.querySelector("#banyakResource").value;
    const keteranganUtama = document.querySelector("#keteranganUtama");
    const keterangan = []
    const buttonKet = []

    for(let index=1;index<=parseInt(banyakResource);index++){
        keterangan.push(document.querySelector("#keterangan"+index))
        buttonKet.push(document.querySelector("#buttonKet"+index))
    }  

    buttonKet.forEach((button,index) => {
        let count = index;

        button.addEventListener("click",( )=>{  
            keteranganUtama.innerHTML= keterangan[count].textContent;
        })
    });
 



  </script>