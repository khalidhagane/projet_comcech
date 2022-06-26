
<?php

require_once APPROOT.'/views/inc/head.php';
require_once APPROOT.'/views/inc/navbar.php';
?>

    <!-- <div class="card w-100 h-25 bg-info ">
        <span class="fs-3 text-white text-center">welcome page produit</span>

    </div> -->
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

            <a href="<?=URLROOT?>/Pages/one_produit/<?php echo $produit->id?>" class="text-decoration-none col-ms-11  col-md-5 col-lg-3  p-0 card  border-0 shadow gap-3  d-flex flex-column align-items-center   ">
                
                <img  class="h-50 w-75 pt-3" src="<?php echo URLROOT ?>/public/img/image_produit/<?php echo $produit->image ?>" alt="img">
                
               

                <div class=" w-100   d-flex align-items-center">
                    <span class="text-start ps-2 text-white bg-price p-2"><?= $produit->prix ?> MAD</span>
                </div>

                <div class="px-2 pb-3 d-flex flex-column align-items-center ">
                    <h3 class="text-dark"><?= $produit->produit ?></h3>
                    <p class=" text-center text-dark"> <?= $produit->description?> </p>
                    <!-- <button type="button" class="btn btn-border-comcech btn-outline-primary rounded-pill px-5">Voir produit</button> -->
                </div>
            </a>
            <?php
                                                }
                                                ?> 
            

           
        </div>

    </div>

</main>

<?php
require_once APPROOT.'/views/inc/footer.php';
require_once APPROOT.'/views/inc/footer_script.php';
?>