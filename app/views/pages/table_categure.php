
<?php
require_once APPROOT.'/views/inc/head.php';

?>
<div class="container-fluid">

        <div class="row flex-nowrap">
            <!-- asied -->
            <?php
            
            //  include 'asiedbar.php'
            require_once APPROOT.'/views/inc/asiedbar.php';
            ?>
            
            <!-- asied -->
            <div class="col px-0">
                <!-- nnavbar -->
            <?php 
            // include 'navbar.php' 
            require_once APPROOT.'/views/inc/navbar_dashbord.php';
            // require_once 'header.php';
            ?>
                <!-- nnavbar -->
                <div class="bg-light py-2  ">
                        <div class="d-flex  align-items-center  justify-content-center justify-content-sm-between  mt-3">
                            <h1 class=" fw-bolder d-none d-sm-block mx-3 h5">list de categures</h1>
                            <div class="d-flex align-items-center">
                                <i class="far  fa-sort me-3 fs-6 text-info "></i>
                                
                                    <a href="<?=URLROOT?>/Pages/ajoute_categure"  class=" btn btn-info  text-white text-uppercase mx-4 py-2 " >
                                        add new categure
                                    </a> 
                                
                            </div>
                        </div>
                        <hr>                       
                        
                            <div class="container ">
                                <div class="table-responsive px-4"  style="max-height :415px;">


                                <table class="table  table-borderless align-middle">
                                        <thead>
                                            <tr class="text-capitalize  ">
                                                <th class="text-muted h6 ">image</th>
                                                <th class=" text-muted h6">categure</th>
                                                <th class=" text-muted h6">description</th>
                                                <th style="display: none;">a</th>
                                                <th style="display: none;">a</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                        <?php
                                        foreach($data as $produit){
                                            ?>
                                            <tr class="bg-white">
                                            <td ><img width="50px" src="<?php echo URLROOT ?>/public/img/categure_img/<?php echo $produit->image ?>" alt=""></td>
                                            <td><?= $produit->categure?></td>
                                                <td><?= $produit->description?></td>
                                                
                                                <td><a href='<?=URLROOT?>/CategureController/update_categure/<?php echo $produit->id;?>'><i class="fal fa-pen fs-6 text-info"></i></a></td>
                                                <td><a href='<?=URLROOT?>/CategureController/delete_categure/<?php echo $produit->id;?>'> <i class="fal fa-trash fs-6 text-info"></i> </a></td>
                                            </tr>
                                            <?php } ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        
                    </div>
        </div>
    </div>

</main>
<?php

require_once APPROOT.'/views/inc/footer_script.php';
?>