
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
                
                require_once APPROOT.'/views/inc/navbar_dashbord.php';
               
                ?>
                <!-- nnavbar -->
                <div class="bg-light py-2  ">
                    <div class="d-flex  align-items-center  justify-content-center justify-content-sm-between  mt-3">
                        <h1 class=" fw-bolder d-none d-sm-block mx-3 h5">list de produits</h1>
                    </div>
                    <div class="container ">
                        <form method="POST" action="<?php  echo URLROOT ?>/ProduitController/update_produit/<?= $data['id']; ?>" enctype="multipart/form-data">
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
                            <div class="mb-3">
                                <select id="categure" class="form-control" name="promotion">
                                    <option value="nopromotion"  checked>no promotion</option>
                                    <option value="promotion">promotion</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">prix 2</label>
                                <input type="number" name="prix2"  class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="">categurie</label>
                                <select id="categure " class="form-control" name="categure">
                                
                                    <?php foreach($dataList as $categure){?>
                                    <option ><?= $categure->categure?></option>
                                    <?php }?>

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