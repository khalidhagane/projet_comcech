<?php
require_once APPROOT.'/views/inc/head.php';
require_once APPROOT.'/views/inc/navbar.php';

?>

    <div class="pt-5 container">
        <form class="h-25 row p-3 ">
            <?php
            
                for($i = 0 ; $i<count($data);$i++) :
            ?>
            <div class="  card shadow border-0 col-12 col-md-9 mb-3 me-auto" > 
                <div class="pt-2">
                    <span class="ps-3">panier:1</span><hr class="mt-2">
                </div>
                <div class="d-flex  pb-2">
                    <div class="d-flex w-50 ">
                        <div class=" w-50 d-flex flex-column gap-3">
                            <img class="w-75 h-50" src="<?php echo URLROOT ?>/public/img/image_produit/<?php echo $data[$i]->image;?>" alt="">
                            
                            <a class="ps-4 text-info " href="<?=URLROOT?>/PanierController/deleteproduit_panier/<?php echo $data[$i]->id;?>">suprimer</a>
                        </div>
                        <div>
                                <span class="produitsName ">
                                    <?php
                                    
                                        echo $data[$i]->produit;
                                    ?> 
                                </span>
                        </div>
                    </div>
                    
                    <div class="w-50 d-flex flex-column justify-content-between  ">
                        <div >
                            <span>prix : </span><span class="text-center fw-bold ps-3 "><?php echo $data[$i]->prix;?> </span> <span>MAD</span>
                        </div>

                        <div class="d-flex flex-row gap-1 ">  
                        <input  type="date" class="form-control border-info" >
                        <input  type="date"  class="form-control border-info" >
                        </div>

                        
                        <input  type="number" value="1" class="form-control border-info ">
                       
                        <input type="hidden" name="id<?php echo $produitDetails[2];?>" value="<?php echo $produitDetails[2];?>" class="id">
                        
                    </div>
                    
                </div>
            </div>
            <?php endfor; ?>
            
            <div class="card shadow border-0 pb-3  col-md-3 h-25 " style="width: 250px; ">
                <div class="pt-2">
                    <span class="ps-3 ">RESUME DU PANIER</span>
                    <hr class="my-2">
                </div>
                <div class=" d-flex justify-content-between">
                    <span class="ps-2">Sous-total: </span>
                    <div>
                        <span class="pe-2 fw-bold" id="prixTTC"></span> <span>MAD</span>
                    </div>
                </div>
                <hr class="my-3" >
                <div  class="d-flex justify-content-center ">
                    <a href="<?=URLROOT?>/CommandeController/add_commande/" type="button" class="btn btn-border-comcech btn-outline-primary  px-5 ">commander</a>
                    
                </div>
            </div>
        </form>
                    
    </div>

</main>

<?php
 
require_once APPROOT.'/views/inc/footer_script.php';
?>