<div class="main-content">
     <div class="section__content section__content--p30">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <div class="overview-wrap">
                         <h2 class="title-1">Form Input Data Akun Admin</h2>

                     </div>

                 </div>
             </div>
             <div class="row m-t-25">
                 <div class="col-sm-6 col-lg-3">
                 </div>
             </div>
 
<div class="col-lg-12">
    <div class="card"> 
        <div class="card-body card-block">
            <form action="<?php echo site_url('spradm_sarugo/akun_create'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Nama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input required type="text" id="nama_admin" name="nama_admin" class="form-control">
                        <small class="form-text text-muted">Masukan Nama Admin</small>
                        <span class="text-danger"><?php echo form_error('nama_admin') ?></span>
                    </div>
                </div>
                
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">NIP</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" min="1" id="nip_admin" name="nip_admin" class="form-control">
                        <small class="form-text text-muted">Masukan NIP Admin</small> 
                    </div>
                </div>
                
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Telepon</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input required type="number"  min="1000000" id="telp_admin" name="telp_admin" class="form-control">
                        <small class="form-text text-muted">Masukan Telepon Admin</small>
                        <span class="text-danger"><?php echo form_error('telp_admin') ?></span>
                    </div>
                </div>
                 <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Email</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input required type="email" id="email_admin" name="email_admin" class="form-control">
                        <small class="form-text text-muted">Masukan Email Admin</small>
                        <span class="text-danger"><?php echo form_error('email_admin') ?></span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Username</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input required type="text" id="username_admin" name="username_admin" class="form-control">
                        <small class="form-text text-muted">Masukan Username Admin</small>
                        <span class="text-danger"><?php echo form_error('username_admin') ?></span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Password</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input required type="password" id="pas_admin" name="password_admin" class="form-control">
                        <small class="form-text text-muted">Masukan Password Admin</small>
                        <span class="text-danger"><?php echo form_error('password_admin') ?></span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Konfirmasi Password</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="password" id="konfpass_admin" name="konfpass_admin" class="form-control">
                        <small required class="form-text text-muted">Masukan Password Admin</small>
                        <span class="text-danger"><?php echo form_error('konfpass_admin') ?></span>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class="d-block mb-0 form-control-label">Hak Akses </label>
                        <small class="mt-0">*Default semua akses kontrol</small>
                    </div>
                    <div class="col-12 col-md-9"> 

                        <div required class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class=" m-1 btn border  btn-outline-success  ">
                                <input name="hal_statis" type="checkbox" autocomplete="off"> Halaman Statis
                            </label>
                            <label class=" m-1 btn border bold btn-outline-success">
                                <input name="menu" type="checkbox" autocomplete="off"> Menu
                            </label>
                            <label class=" m-1 btn border bold btn-outline-success">
                                <input name="sub_menu" type="checkbox" autocomplete="off"> Sub Menu
                            </label>
                            <label class=" m-1 btn border bold btn-outline-success">
                                <input name="event" type="checkbox" autocomplete="off"> Event
                            </label>
                            <label class=" m-1 btn border bold btn-outline-success">
                                <input name="banner" type="checkbox" autocomplete="off"> Banner/Slider
                            </label>
                            <label class=" m-1 btn border bold btn-outline-success">
                                <input name="wisata" type="checkbox" autocomplete="off"> Wisata
                            </label>
                            <label class=" m-1 btn border bold btn-outline-success">
                                <input name="produk" type="checkbox" autocomplete="off"> Produk
                            </label>
                            <label class=" m-1 btn border bold btn-outline-success">
                                <input name="paket_wisata" type="checkbox" autocomplete="off"> Paket Wisata
                            </label>
                            <label class=" m-1 btn border bold btn-outline-success">
                                <input name="testimoni" type="checkbox" autocomplete="off"> Testimoni
                            </label>
                            <label class=" active m-1 btn border bold btn-outline-success">
                                <input name="all" type="checkbox" autocomplete="off"> All
                            </label>
                        </div>   

                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>
            </form>
        </div>
        
    </div>
    
</div>


<div class="container">
<!-- 
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7850200025073!2d100.6280175144634!3d-0.23409153544863676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2ab4b0b0fe94b3%3A0x34557fa47f524888!2sDinas%20Komunikasi%20dan%20Informatika%20Kabupaten%20Lima%20Puluh%20Kota!5e0!3m2!1sen!2sid!4v1597166816715!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->

</div>


 