<div class="main-content">
     <div class="section__content section__content--p30">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <div class="overview-wrap">
                         <h2 class="title-1">Update Data Banner-Slider</h2>

                     </div>

                 </div>
             </div>
             <div class="row m-t-25">
                 <div class="col-sm-6 col-lg-3">
                 </div>
             </div>
 
<div class="col-lg-12">
    <div class="card">
        <!--<div class="card-header">
            <strong>Basic Form</strong> Elements
        </div>-->
        <div class="card-body card-block">
            <form action="<?php echo site_url('adm_sarugo/statis_fpage'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Judul Banner</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="judul_banner" name="judul_banner" class="form-control">
                        <small class="form-text text-muted">Masukan judul banner</small>
                    </div>
                </div>

                <div class="row form-group">
                
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Link Halaman</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="link_banner" name="link_banner" class="form-control">
                        <small class="form-text text-muted">Masukan Link Halaman Statis</small>
                    </div>
                </div>
                
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Upload Gambar</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="gbr_banner" name="gbr_banner" class="form-control-file">
                        <small class="form-text text-muted">File JPG/JPEG/PNG max file 2Mb</small>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Simpan Perubahan
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Batal
            </button>
        </div>
    </div>
    
</div>