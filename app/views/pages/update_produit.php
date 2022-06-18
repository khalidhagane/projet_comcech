
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
                            <h1 class=" fw-bolder d-none d-sm-block mx-3 h5">list de produits</h1>
                            <!-- <div class="d-flex align-items-center">
                                <i class="far  fa-sort me-3 fs-6 text-info "></i>
                                
                                    <a href="insert.php"  class=" btn btn-info  text-white text-uppercase mx-4 py-2 " >
                                        add new clients
                                    </a> 
                                
                            </div> -->
                        </div>
                        
                        
                            <div class="container ">

                            <form method="POST" action="<?php echo URLROOT ?>/ProduitController/update_produit/<?= $data['id']; ?>" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">image</label>
                                        <input type="file" name="image" class="form-control" value='<?php echo $data['image']; ?>'  id="exampleInputEmail1" >
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label"> name produit</label>
                                        <input type="text" name="produit"  class="form-control" value='<?php echo $data['produit']; ?>'  id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">poid</label>
                                        <input type="number" name="poid"  class="form-control" value='<?php echo $data['poid']; ?>'  id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">tension</label>
                                        <input type="number" name="tension"  class="form-control" value='<?php echo $data['tension']; ?>'  id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">puissance</label>
                                        <input type="number" name="puissance"  class="form-control" value='<?php echo $data['puissance']; ?>'  id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">longueur</label>
                                        <input type="number" name="longueur"  class="form-control" value='<?php echo $data['longueur']; ?>'  id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">prix</label>
                                        <input type="number" name="prix"  class="form-control" value='<?php echo $data['prix']; ?>'  id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">description</label>
                                    <textarea class="form-control" type="text" name="description"  value='' id="exampleFormControlTextarea1" rows="3"><?php echo $data['description']; ?></textarea>
                                    </div>
                                    <!-- <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div> -->
                                    <div>
                                    <select id="categure" name="categure">
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="fiat" selected>Fiat</option>
                                    <option value="audi">Audi</option>
                                    </select>
                                    </div>
                                    <input type="submit" name="submit"  class="btn btn-primary" value="submit">
                            </form>



                            </div>
                                
                                                   

                                            
                                
                </div>
                        
            </div>

        </div>
</div>

</main>
<?php

require_once APPROOT.'/views/inc/footer_script.php';
?>