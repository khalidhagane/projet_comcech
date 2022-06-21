
<?php
require_once APPROOT.'/views/inc/head.php';

?>
    <div class="container-fluid">
        
   

    
            
            
            
                
        <div class="bg-light py-2  ">
                <div class="d-flex  align-items-center  justify-content-center justify-content-sm-between  mt-3">
                    <h1 class=" fw-bolder d-none d-sm-block mx-3 h5">form des information</h1>
                   
                </div>
                
                
                <div class="container ">

                    <form method="POST" action="<?php echo URLROOT ?>/CommandeController/addinfo_client_commande">
                            <!-- <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">image</label>
                                <input type="file" name="image" class="form-control" id="exampleInputEmail1" >
                                
                            </div> -->
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"> name </label>
                                <input type="text" name="name"  class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">phone</label>
                                <input type="number" name="phone"  class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">address</label>
                                <input type="text" name="address"  class="form-control" id="exampleInputPassword1">
                            </div>
                            
                            <!-- <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">puissance</label>
                                <input type="number" name="puissance"  class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">longueur</label>
                                <input type="number" name="longueur"  class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">prix</label>
                                <input type="number" name="prix"  class="form-control" id="exampleInputPassword1">
                            </div> -->
                            <!-- <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div> -->
                            <div class="mb-3 form-check">
                            <?php
                $prix = 0;
            
                //  foreach($_SESSION['panier'] as $produit) :
                //     $produitDetails = explode(',', $produit);

                    // 
            ?>
                                <!-- <input type="text" class="form-check-input" id="exampleCheck1"> -->
                                <!-- <input type="hidden" name="<?php echo $produitDetails['2']; ?>" value="<?php echo $produit ;?>" > -->
                                <!-- <input type="hidden" name="produit" value="<?php// echo ;?>" >
                                <input type="hidden" name="prix" value="<?php //echo ;?>" > -->
                                <?php  //endforeach;  ?>
                            </div>
                            <input type="submit"   class="btn btn-primary" value="submit">
                    </form>

                </div>
                        
                        
        </div>
                        
    </div>    

        


</main>
<?php

require_once APPROOT.'/views/inc/footer_script.php';
?>