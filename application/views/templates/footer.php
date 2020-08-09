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
                    $(document).ready(function(){ 
                    $(".perbesar").fancybox({
                        openEffect: "none",
                        closeEffect: "none"
                    });
                });
                
                
                </script>


<script defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeJNuO2KtgjA59chaLOW-R2gniZDIRk4g&callback=initMap">
</script>
      


  <script>
    var map = new google.maps.Map(document.getElementById('map-canvas'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
            });

  </script>

</body>

</html>
<!-- end document-->