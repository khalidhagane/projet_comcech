
<?php

require_once APPROOT.'/views/inc/head.php';
require_once APPROOT.'/views/inc/navbar.php';
?>

<div class=" container w-100 pt-5 d-flex justify-content-center align-items-center">

    <div class=" card w-md-50 w-lg-50 h-75 w-sm-100  d-flex justify-content-center align-items-center flex-row flex-wrap  border-0 shadow py-4 ">
        <div class=" w-50 d-flex flex-column justify-content-center align-items-center">

            <img  class=" pb-3 pb-lg-0 pe-5 " src="<?php echo URLROOT ?>/public/img/image_produit/<?php echo $data->image ?>"src="<?=URLROOT?>/img/images/groupe.png" alt="photo" style="width: 400px ; height:300px   ">

        </div>
        <div> 

        <!-- rh ---------------- -->
        </div>
        
        <div class=" ">
            <div class="pb-3">
            <h1 class="">Caractiristique</h1>
            </div>

            <span class=" fs-2 pb-5 fw-bold  "  > <?php echo $data->produit; ?></span><br>
            <span>Poid :</span><span> <?php echo $data->poid; ?> Kg</span><br>
            <span>Tension :</span><span> <?php echo $data->tension; ?> V</span><br>
            <span>Puissance :</span><span> <?php echo $data->puissance; ?> Kw</span><br>
            <span>Longueur :</span><span> <?php echo $data->longueur; ?> Cm</span><br>
         
            <div>
            <span class=" py-2 fs-4 fw-bolder">tarif :</span><span class=" py-2 fs-4 fw-bolder "> <?php echo $data->prix; ?> dh/jour</span><br>
            </div>
            <div class="py-2 d-flex  justify-content-center">
                
            <a href="<?=URLROOT?>/PanierController/ajoute_produitpanier/<?php echo $data->id?>" type="button" class=" w-100 btn btn-border-comcech rounded px-5 ">Ajoute ou panier</a>
            
            </div>
            
        </div>
    </div>
</div>
</main>
<?php

require_once APPROOT.'/views/inc/footer_script.php';
?>