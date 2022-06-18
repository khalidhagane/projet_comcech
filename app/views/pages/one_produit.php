
<?php

require_once APPROOT.'/views/inc/head.php';
require_once APPROOT.'/views/inc/navbar.php';
?>

<div class=" container w-100 pt-5 d-flex  justify-content-center align-items-center">

    <div class=" card w-md-50 w-lg-50 h-75 w-sm-100  d-flex  flex-row flex-wrap  border-0 shadow py-4 ">
        <div class=" w-50 d-flex flex-column justify-content-center align-items-center">
            
            <!-- <p class="w-50  " >groupe 5000 V</p> -->
            <img class="w-50 " src="<?php echo URLROOT ?>/public/img/image_produit/<?php echo $data->image ?>"src="<?=URLROOT?>/img/images/groupe.png" alt="photo">
            <!-- <img width="50px" src="<?php echo URLROOT ?>/public/img/image_produit/<?php echo $data->image ?>" alt=""> -->
            
        </div>
        <div> 

        <!-- rh ---------------- -->
        </div>
        
        <div class=" ">
            <div class="pb-3">
            <h1 class="">caractiristique</h1>
            </div>

            <span class=" fs-2 pb-5 fw-bold  "  > <?php echo $data->produit; ?></span><br>
            <span>poid :</span><span> <?php echo $data->poid; ?> Kg</span><br>
            <span>tension :</span><span> <?php echo $data->tension; ?> V</span><br>
            <span>puissance :</span><span> <?php echo $data->puissance; ?> Kw</span><br>
            <span>longueur :</span><span> <?php echo $data->longueur; ?> L</span><br>
         
            <div>
            <span class=" py-2 fs-4 fw-bolder">tarif :</span><span class=" py-2 fs-4 fw-bolder "> <?php echo $data->prix; ?> dh/jour</span><br>
            </div>
            <div class="py-2 d-flex  justify-content-center">
            <a href="<?=URLROOT?>/PanierController/addproduit_cookie/<?= $data->id?>" type="button" class=" w-100 btn btn-border-comcech rounded px-5 ">Ajoute ou panier</a>
            
            </div>
            
        </div>
    </div>
</div>
</main>
<?php

require_once APPROOT.'/views/inc/footer_script.php';
?>