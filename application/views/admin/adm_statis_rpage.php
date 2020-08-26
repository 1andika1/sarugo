 <!-- MAIN CONTENT-->
 <div class="main-content">
     <div class="section__content section__content--p30">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <div class="overview-wrap">
                         <h2 class="title-1">Data Halaman statis</h2>

                     </div>
                 </div>
             </div>
             <div class="row m-t-25">
                 <div class="col-sm-6 col-lg-3">
                 </div>
             </div>
             <!-- DATA TABLE -->
             <div class="table-data__tool">
                 <div class="table-data__tool-left">
                     <div class="rs-select2--light rs-select2--md">
                         <form class="form-header form-header">
                             <input  id="search" class="au-input au-input--w400" type="text" placeholder="Cari data ...">
                             <button disabled class="au-btn--submit" type="submit">
                                 <i class="zmdi zmdi-search"></i>
                             </button>
                         </form>
                     </div>
                 </div>
                 <div class="table-data__tool-right">
                     <a href="<?= base_url('admin/statis/statis_create') ?>"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                             <i class="zmdi zmdi-plus"></i>tambah data</button></a>
                     <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                       
                         <div class="dropDownSelect2"></div>
                     </div>
                 </div>
             </div>
             <div class="table-responsive table-responsive-data2">
                 <table class="table table-data2">
                     <thead>
                         <tr>
                             <th>no</th>
                             <th>judul</th>
                             <th>aksi</th>
                         </tr>
                     </thead>
                     <tbody id="livesearch">
                         <?php $counter = 1;
                            foreach ($halaman as $key => $value) : ?>
                             <tr class="tr-shadow">
                                 <td><?= $counter++ ?></td>
                                 <td>
                                     <span><?= $value->judul ?></span>
                                 </td>
<<<<<<< HEAD
                                 <!-- <td class="link">halamanprofil.html</td> -->
                                 <td>
                                     <div class="table-data-feature">
=======
                                 <td>
                                     <div class="table-data-feature d-flex justify-content-start">
                                         <!--<button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                             <i class="zmdi zmdi-eye"></i>
                                         </button>-->
>>>>>>> 454905985d2dd8fd47dce40b9b5748c1fb4b8b40
                                         <a href='<?= base_url("admin/statis/edit?id=$value->id") ?>'>
                                         <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                 <i class="zmdi zmdi-edit"></i>
                                             </button>
                                            </a>
                                         <a href="<?= base_url("admin/statis/delete?id=$value->id") ?>">
                                             <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                 <i class="zmdi zmdi-delete"></i>
                                             </button>
                                         </a>
                                     </div>
                                 </td>
                             </tr>
                         <?php endforeach ?>
                     </tbody>
                 </table>
             </div>
             <!-- END DATA TABLE -->
         </div>
     </div>
 </div>
 </div>
 </div>
 <!-- END MAIN CONTENT-->
 <!-- END PAGE CONTAINER-->
 </div>
 </div>

 <script>

const search = document.querySelector("#search")
search.addEventListener("keyup",event=>{
    console.log("hello")
    let str = event.target.value

    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
        document.getElementById("livesearch").innerHTML=this.responseText;
        }
    }
    xmlhttp.open("GET","<?=base_url("admin/statis/fetch?q=")?>"+str,true);
    xmlhttp.send();
})

</script>