<?php
require_once APPROOT.'/views/inc/head.php';
require_once APPROOT.'/views/inc/navbar.php';

?>

    <div class="pt-5 container">
        <form class="h-25 row  ">
            <?php
                $prix = 0;
                for($i = 0 ; $i<count($data);$i++) :
            ?>
            <div class="  card  shadow border-0 col-12 col-md-9 mb-3 me-auto" > <!--  style="width: 600px;"  -->
                <div class="pt-2">
                    <span class="ps-3">panier:1</span><hr class="mt-2">
                </div>
                <div class="d-flex p-3 ">
                    <div class="d-flex w-50 ">
                        <div class=" w-50 d-flex flex-column gap-3">
                            <img class="w-75 h-50" src="<?php echo URLROOT ?>/public/img/image_produit/<?php echo $data[$i]->image;?>" alt="">
                            <!-- <span class="ps-4 text-info ">suprimer</span> -->
                            <a class="ps-4 text-info " href="<?=URLROOT?>/PanierController/deleteproduit_panier/<?php echo $data[$i]->id;?>">suprimer</a>
                        </div>
                        <div>
                                <span class="produitsName">
                                    <?php
                                       // $produitDetails = explode(',', $produit);
                                        echo $data[$i]->produit;
                                    ?> 
                                </span>
                        </div>
                    </div>
                    
                    <div class="w-50 d-flex flex-column justify-content-between ">
                        <div>
                            <span>prix : </span><span class="text-center "><?php echo $data[$i]->prix;?> MAD</span>
                        </div>

                        <div class="d-flex flex-row ">  
                        <input  type="date" class="form-control border-info" >
                        <input  type="date"  class="form-control border-info" >
                        </div>

                        <i class="fas fa-chevron-circle-up" onclick="calcul()"></i>
                        <input onclick="calcul()" type="number" value="1" class="form-control border-info">
                        <i class="fas fa-chevron-circle-down" onclick="calcul()"></i>
                        <input type="hidden" name="id<?php echo $produitDetails[2];?>" value="<?php echo $produitDetails[2];?>" class="id">
                        
                    </div>
                    
                </div>
            </div>
            <?php endfor; ?>
            <!-- <div class="col-md-1"></div> -->
            <div class="card shadow border-0 pb-3 col-12 col-md-3 h-25" style="width: 250px; ">
                <div class="pt-2">
                    <span class="ps-3 ">RESUME DU PANIER</span>
                    <hr class="my-2">
                </div>
                <div class=" d-flex justify-content-between">
                    <span class="ps-2">Sous-total: </span>
                    <div>
                        <span class="pe-2" id="prixTTC"></span> <span>MAD</span>
                    </div>
                </div>
                <hr class="my-3" >
                <div  class="d-flex justify-content-center ">
                    <a href="<?=URLROOT?>/PanierController/modifier_status_commande/" type="button" class="btn btn-border-comcech btn-outline-primary  px-5 ">commander</a>
                    
                </div>
            </div>
        </form>
                    <!-- <button onclick="calcul()"> Calculer</button> -->
    </div>

</main>

<script>
    prixTTC = 0;
    eltTTC = document.querySelector('#prixTTC');

    eltTTC.innerText = prixTTC;

    function calcul(){
        produits = document.querySelectorAll(".produitsName");
        // prixTTC = 0;
        produits.forEach(produit => {
            // console.log();
            qte = document.querySelector("#" + produit.innerText + "").value;
            prix = document.querySelector("#" + produit.innerText + "").getAttribute("prix");
            // console.log(parseInt(qte) * parseInt(prix));
            prixTTC += parseInt(qte) * parseInt(prix);
            eltTTC.innerText = prixTTC;
        });
    }


</script>


<?php
 
require_once APPROOT.'/views/inc/footer_script.php';
?>