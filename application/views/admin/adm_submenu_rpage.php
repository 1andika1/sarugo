 <!-- MAIN CONTENT-->
 <div class="main-content">
     <div class="section__content section__content--p30">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <div class="overview-wrap">
                         <h2 class="title-1">Data Sub Menu</h2>

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
                    <a href="<?= base_url('admin/submenu/create')?>"> <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                         <i class="zmdi zmdi-plus"></i>Tambah SubMenu</button></a>
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
                             <th>sub menu</th>
                             <th>menu utama</th>
                             <th>Judul Halaman Statis</th>
                             <th>Status</th>
                             <th>aksi</th>
                         </tr>
                     </thead>
                     <tbody id="livesearch111">
                          <?php $count=1; foreach ($dataSubMenu as $key => $subMenu) : ?>
                         <tr class="tr-shadow">
                              
                             <td><?=$count++?></td>
                             <td>
                                 <span><?=$subMenu->nama_sub_menu?></span>
                             </td>
                             <?php foreach ($dataMenu as $key => $menu): ?>
                                <?php if($menu->id == $subMenu->id_menu) : ?>
                                    <td class="link"><?=$menu->nama_menu?></td>
                                <?php endif ?>
                             <?php endforeach ?>
                             <td class="link"> <?=$subMenu->hal_statis?> </td>
                             
                             <td>
                                 <span class="status--<?=$subMenu->status_sub_menu>0?'process':'denied'?>"><?=$subMenu->status_sub_menu>0?"Aktif" : "Nonaktif"?></span>
                             </td>
                             <td>
                                 <div class="table-data-feature d-flex justify-content-start">
                                  
                                     </button>
                                     <a href='<?= base_url("admin/submenu/update?id=$subMenu->id")?>' ><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                         <i class="zmdi zmdi-edit"></i>
                                     </button></a>
                                     <a href='<?= base_url("admin/submenu/delete?id=$subMenu->id")?>'>
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                     </a>
                                 </div>
                             </td>
                             <td></td>
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
    xmlhttp.open("GET","<?=base_url("admin/menu/fetch?q=")?>"+str,true);
    xmlhttp.send();
})

</script>