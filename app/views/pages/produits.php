
<?php

require_once APPROOT.'/views/inc/head.php';
require_once APPROOT.'/views/inc/navbar.php';
?>

    <div class="card w-100 h-25 bg-info ">
        <span class="fs-3 text-white text-center">welcome page produit</span>

    </div>
    <div class="navbar  w-100 d-flex flex-row justify-content-center p-5">
        <form class="form-inline  d-flex  gap-1">
            <input class="form-control mr-sm-2 border-info" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-border-comcech btn-outline-success  my-sm-0" type="submit">Search</button>
        </form>
    </div>

    <div class="container">
        <div class="row gap-4 d-flex justify-content-center px-4 ">


        <!-- ghadi rja3 liha bach  n9adha  -->

            
            <?php

                                                foreach($data as $produit){
                                                    ?>

            <a href="<?=URLROOT?>/DetailproduitController/affichagedetail_produit/<?php echo $produit->id?>" class="text-decoration-none col-ms-11  col-md-5 col-lg-3  p-0 card  border-0 shadow gap-3  d-flex flex-column align-items-center   ">
                
                <img  class="h-50 w-75 pt-3" src="<?=URLROOT?>/img/images/groupe.png" alt="img">

                <div class=" w-100   d-flex align-items-center">
                    <span class="text-start ps-2 text-white bg-price p-2"><?= $produit->prix ?> MAD</span>
                </div>

                <div class="px-2 pb-3 d-flex flex-column align-items-center ">
                    <h3 class="text-dark"><?= $produit->produit ?></h3>
                    <p class=" text-center text-dark"> <?= $produit->description?> </p>
                    <button type="button" class="btn btn-border-comcech btn-outline-primary rounded-pill px-5">Voir produit</button>
                </div>
            </a>
            <?php
                                                }
                                                ?> 
            

            <!-- <div class="col-ms-11  col-md-5 col-lg-3  p-0 card  border-0 shadow gap-3  d-flex flex-column align-items-center  ">
                
                <img  class="h-50 w-75 pt-3" src="<?=URLROOT?>/img/images/trax3.png" alt="img">
                <div class=" w-100   d-flex align-items-center">
                    <span class="text-start ps-2 text-white bg-price p-2">400 Dhs</span>
                </div>

                <div class="px-2 pb-3 d-flex flex-column align-items-center ">
                    <h3 class="">travaux public</h3>
                    <p class=" text-center"> Compactage, terrassement et matériel terrassement et matériel de chantier </p>
                    <button type="button" class="btn btn-border-comcech btn-outline-primary rounded-pill px-5">Voir produit</button>
                </div>
            </div>

            <div class="col-ms-11  col-md-5 col-lg-3  p-0 card  border-0 shadow gap-3  d-flex flex-column align-items-center  ">
                
                <img  class="h-50 w-75 pt-3" src="<?=URLROOT?>/img/images/post_sodage.png" alt="img">
                <div class=" w-100   d-flex align-items-center">
                    <span class="text-start ps-2 text-white bg-price p-2">400 Dhs</span>
                </div>

                <div class="px-2 pb-3 d-flex flex-column align-items-center ">
                    <h3 class="">post_sodage</h3>
                    <p class=" text-center"> Compactage, terrassement et matériel terrassement et matériel de chantier </p>
                    <button type="button" class="btn btn-border-comcech btn-outline-primary rounded-pill px-5">Voir produit</button>
                </div>
            </div>
            <div class="col-ms-11  col-md-5 col-lg-3  p-0 card  border-0 shadow gap-3  d-flex flex-column align-items-center  ">
                
                <img  class="h-50 w-75 pt-3" src="<?=URLROOT?>/img/images/perforateur.png" alt="img">
                <div class=" w-100   d-flex align-items-center">
                    <span class="text-start ps-2 text-white bg-price p-2">400 Dhs</span>
                </div>

                <div class="px-2 pb-3 d-flex flex-column align-items-center ">
                    <h3 class="">perforateur</h3>
                    <p class=" text-center"> Compactage, terrassement et matériel terrassement et matériel de chantier </p>
                    <button type="button" class="btn btn-border-comcech btn-outline-primary rounded-pill px-5">Voir produit</button>
                </div>
            </div>
            <div class="col-ms-11  col-md-5 col-lg-3  p-0 card  border-0 shadow gap-3  d-flex flex-column align-items-center  ">
                
                <img  class="h-50 w-75 pt-3" src="<?=URLROOT?>/img/images/hilti.png" alt="img">
                <div class=" w-100   d-flex align-items-center">
                    <span class="text-start ps-2 text-white bg-price p-2">400 Dhs</span>
                </div>

                <div class="px-2 pb-3 d-flex flex-column align-items-center ">
                    <h3 class="">motor énergé</h3>
                    <p class=" text-center"> Compactage, terrassement et matériel terrassement et matériel de chantier </p>
                    <button type="button" class="btn btn-border-comcech btn-outline-primary rounded-pill px-5">Voir produit</button>
                </div>
            </div>
            <div class="col-ms-11  col-md-5 col-lg-3  p-0 card  border-0 shadow gap-3  d-flex flex-column align-items-center  ">
                
                <img  class="h-50 w-75 pt-3" src="<?=URLROOT?>/img/images/la_meule.png" alt="img">
                <div class=" w-100   d-flex align-items-center">
                    <span class="text-start ps-2 text-white bg-price p-2">400 Dhs</span>
                </div>

                <div class="px-2 pb-3 d-flex flex-column align-items-center ">
                    <h3 class="">la meule</h3>
                    <p class=" text-center"> Compactage, terrassement et matériel terrassement et matériel de chantier </p>
                    <button type="button" class="btn btn-border-comcech btn-outline-primary rounded-pill px-5">Voir produit</button>
                </div>
            </div> -->
        </div>

    </div>

</main>

<?php
require_once APPROOT.'/views/inc/footer.php';
require_once APPROOT.'/views/inc/footer_script.php';
?>