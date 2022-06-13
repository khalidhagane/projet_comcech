<?php

require_once APPROOT.'/views/inc/head.php';
require_once APPROOT.'/views/inc/navbar.php';
?>

    <div class=" pt-5 container  ">
        <form class="h-25 d-flex flex-row flex-wrap gap-3 justify-content-evenly ">
            <div class="  card  shadow border-0" style="width: 600px;">
                <div class="pt-2">
                    <span class="ps-3   ">panier:1</span><hr class="mt-2">
                </div>
                
                <div class="d-flex p-3">
                    <div class="d-flex  ">
                        <div class=" w-25 d-flex flex-column gap-3">
                            <img class="w-75 h-50" src="<?=URLROOT?>/img/images/groupe.png" alt="">
                            <span class="ps-4 text-info ">suprimer</span>
                        </div>
                        <div>
                                <span><?= isset($_COOKIE['produit']) ? $_COOKIE['produit'] : '___';?> </span>
                        </div>
                    </div>
                        
                        
                    <div class=" w-25 d-flex flex-column justify-content-between ">
                        <div>
                        <span>prix : </span><span class="text-center "><?= isset($_COOKIE['prix']) ? $_COOKIE['prix'] : '___';?> Dhs</span>
                        </div>
                       

                        <input type="number" value="1" class="form-control border-info" id="exampleInputEmail1" >

                    </div>
                    
                </div>
            </div>

            <div class="  card  shadow border-0 pb-1" style="width: 250px;">
                <div class="pt-2">
                    <span class="ps-3 ">RESUME DU PANIER</span>
                    <hr class="my-2">
                </div>
                <div class=" d-flex justify-content-between">
                    <span class="ps-2   ">Sous-total: </span>
                    <span class="pe-2   ">400 Dhs</span>
                </div>
                <hr class="my-3" >
                <div class="d-flex justify-content-center ">
                    <button type="button" class="btn btn-border-comcech btn-outline-primary  px-5 ">commander</button>
                </div>

                

            </div>
        </form>

    </div>

</main>

<?php
 
require_once APPROOT.'/views/inc/footer_script.php';
?>