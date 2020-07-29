<div class="main-content">
     <div class="section__content section__content--p30">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <div class="overview-wrap">
                         <h2 class="title-1">Update Data Berita</h2>

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
                        <label for="text-input" class=" form-control-label">Judul Berita</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="judul_hlmstat" name="judul_hlmstat" class="form-control">
                        <small class="form-text text-muted">Masukan Judul Berita</small>
                    </div>
                </div>
                
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Isi Berita</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="isi_hlmsat" id="isi_hlmstat" rows="9" placeholder="Masukkan isi berita ..." class="form-control"></textarea>
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
                </div>
                
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Tampilkan di Beranda?</label>
                    </div>
                    <div class="col col-md-9">
                        <div class="form-check-inline form-check">
                            <label for="inline-checkbox1" class="form-check-label ">
                                <input type="checkbox" id="tampilkan_hlmstat" name="tampilkan_hlmstat" value="option1" class="form-check-input">Ya
                            </label>
                        </div>
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