
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

                            <form method="POST" action="<?php echo URLROOT ?>/ProduitController/addProduit" enctype="multipart/form-data" >
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">image</label>
                                        <input type="file" name="image" class="form-control" id="exampleInputEmail1" >
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label"> name produit</label>
                                        <input type="text" name="produit"  class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">poid</label>
                                        <input type="number" name="poid"  class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">tension</label>
                                        <input type="number" name="tension"  class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3">
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
                                    </div>
                                    <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">description</label>
                                    <textarea class="form-control" type="text" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3 form-check">
                                    <select id="categure" name="promotion">
                                    <option value="nopromotion" checked>no promotion</option>
                                    <option value="promotion">promotion</option>
                                    
                                    </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">prix 2</label>
                                        <input type="number" name="prix2"  class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div>
                                    <select id="categure" name="categure">
                                    <option value="soudage">Outils de soudage</option>
                                    <option value="moteur">Moteur éléctrogéne</option>
                                    <option value="compreseure" selected>Aire compréseure</option>
                                    <option value="echelle">les échelle</option>
                                    <option value="Echafoudage">Echafoudage metalique</option>
                                    <option value="massonié">Outille de massonié</option>
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