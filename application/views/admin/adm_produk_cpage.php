<div class="main-content">
     <div class="section__content section__content--p30">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <div class="overview-wrap">
                         <h2 class="title-1">Form Input Data Produk</h2>

                     </div>

                 </div>
             </div>
             <div class="row m-t-25">
                 <div class="col-sm-6 col-lg-3">
                 </div>
             </div>
 
<div class="col-lg-12"
    <div class="card">
        <!--<div class="card-header">
            <strong>Basic Form</strong> Elements
        </div>-->
        <div class="card-body card-block">
            <form action="<?php echo site_url('adm_sarugo/statis_fpage'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class="form-control-label">Nama Produk</label>
                    </div>
                    
                    <div class="col-12 col-md-9">
                        <input type="text" id="judul_hlmstat" name="judul_hlmstat" class="form-control">
                        <small class="form-text text-muted">Masukan Nama Produk</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Harga</label>
                    </div>
                    
                    <div class="col-12 col-md-9">
                        <input type="text" id="judul_hlmstat" name="judul_hlmstat" class="form-control">
                        <small class="form-text text-muted">Masukan harga produk</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Berat Satuan</label>
                    </div>
                    
                    <div class="col-12 col-md-9">
                        <input type="text" id="judul_hlmstat" name="judul_hlmstat" class="form-control">
                        <small class="form-text text-muted">Masukan Berat Produk</small>
                    </div>
                </div>
                
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Komposisi</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="isi_hlmsat" id="isi_hlmstat" rows="9" placeholder="Masukkan komposisi produk ..." class="form-control"></textarea>
                    </div>
                </div>

                <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Status</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="radio1" class="form-check-label ">
                                                                <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">Tersedia
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">Tidak Tersedia
                                                            </label>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Penjelasan Tambahan</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="isi_hlmsat" id="isi_hlmstat" rows="9" placeholder="Masukkan penjelasan produk ..." class="form-control"></textarea>
                    </div>
                </div>
                
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Upload Gambar</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="gbr_hlmstat" name="gbr_hlmstat" class="form-control-file">
                        <small class="form-text text-muted">File JPG/JPEG/PNG max file 2Mb</small>
                    </div>
                
                
            </form>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
    </div>
    
</div>