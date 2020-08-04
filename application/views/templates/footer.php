                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>©2019. SARUGO by Diskominfo Kab. Lima Puluh Kota </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTAINER-->
                </div>



                </div>

                <!-- Jquery JS-->
                <script src="<?= base_url() ?>assets/vendor/jquery-3.2.1.min.js"></script>
                <!-- Bootstrap JS-->
                <script src="<?= base_url() ?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
                <script src="<?= base_url() ?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
                <!-- Vendor JS       -->
                <script src="<?= base_url() ?>assets/vendor/slick/slick.min.js">
                </script>
                <script src="<?= base_url() ?>assets/vendor/wow/wow.min.js"></script>
                <script src="<?= base_url() ?>assets/vendor/animsition/animsition.min.js"></script>
                <script src="<?= base_url() ?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
                </script>
                <script src="<?= base_url() ?>assets/vendor/counter-up/jquery.waypoints.min.js"></script>
                <script src="<?= base_url() ?>assets/vendor/counter-up/jquery.counterup.min.js">
                </script>
                <script src="<?= base_url() ?>assets/vendor/circle-progress/circle-progress.min.js"></script>
                <script src="<?= base_url() ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
                <script src="<?= base_url() ?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
                <script src="<?= base_url() ?>assets/vendor/select2/select2.min.js">
                </script>
                <script src="<?= base_url() ?>assets/vendor/vector-map/jquery.vmap.js"></script>
                <script src="<?= base_url() ?>assets/vendor/vector-map/jquery.vmap.min.js"></script>
                <script src="<?= base_url() ?>assets/vendor/vector-map/jquery.vmap.sampledata.js"></script>
                <script src="<?= base_url() ?>assets/vendor/vector-map/jquery.vmap.world.js"></script>

                <!-- Main JS-->
                <script src="<?= base_url() ?>assets/js/main.js"></script>

                <script>
    const tombol_harga = document.querySelector('#tombol_harga')
    const tabel_harga = document.querySelector("#tabel_harga")
    const tombol_ket = document.querySelector('#tombol_ket')
    const tabel_ket = document.querySelector("#tabel_ket")
    const tombol_jadwal = document.querySelector('#tombol_jadwal')
    const tabel_jadwal = document.querySelector("#tabel_jadwal")

    tombol_harga.addEventListener('click',tampil)
    tombol_ket.addEventListener('click',tampil2)
    tombol_jadwal.addEventListener('click',tampil3)

    function tampil(){
      tabel_harga.className = ""
      tabel_jadwal.className = "d-none"
      tabel_ket.className = "d-none"
      tombol_harga.className = "bg-dark"
      tombol_ket.className = ""
      tombol_jadwal.className = ""
    }
    function tampil2(){
      tabel_ket.className = ""
      tabel_jadwal.className = "d-none"
      tabel_harga.className = "d-none"
      tombol_ket.className = "bg-dark"
      tombol_harga.className = ""
      tombol_jadwal.className = ""
    }
    function tampil3(){
      tabel_jadwal.className = ""
      tabel_harga.className = "d-none"
      tabel_ket.className = "d-none"
      tombol_jadwal.className = "bg-dark"
      tombol_ket.className = ""
      tombol_harga.className = ""
    }
  </script>

<script>
      const kirim = document.querySelector("#kirim")
      const inputNama = document.querySelector("#inputNama")
      const inputPekerjaan = document.querySelector("#inputPekerjaan")
      const inputAlamat = document.querySelector("#inputAlamat")
      const inputTesti = document.querySelector("#inputTesti")
      const inputStar = document.querySelector("#inputStar")
      const kotakTestimony = document.querySelector("#kotakTestimony")
      // const star = document.querySelector('input[name="star"]:checked').value
      // const bintang = "";

      // for(i = 0;i<star;i++){
      //      bintang += `
      //       <input type="radio" checked name="star" id="star1" ><label for="star1"></label>
      //     `
      //   }


      
      

      kirim.addEventListener("click",(event)=>{
        event.preventDefault();
        displayTesti();
      })

      function displayTesti(){
        
          kotakTestimony.innerHTML += `<div class="container" style="margin-bottom: 20px; text-align: center;">
        <div class="row">
          <div class="col border bg-light" style="padding: 10px;">${inputNama.value}</div>
          <div class="col-md-auto border bg-light center" style="padding: 10px;">${inputPekerjaan.value}</div>
          <div class="col border bg-light" style="padding: 10px;">${inputAlamat.value}</div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 border bg-light" style="padding: 10px;">
            <div class="container rating" >
              <input disabled type="radio" name="star" id="star1" value="5"><label for="star1"></label>
              <input disabled type="radio" name="star" id="star2" value="4"><label for="star2"></label>
              <input disabled type="radio" name="star" id="star3" value="3"><label for="star3"></label>
              <input disabled type="radio" name="star" id="star4" value="2"><label for="star4"></label>
              <input disabled type="radio" name="star" id="star5" value="1"><label for="star5"></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 border bg-light" style="padding: 10px;">${inputTesti.value}</div>
        </div>
      </div>`
        
      }

</body>

</html>
<!-- end document-->