
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

                            <form method="POST" action="<?php echo URLROOT ?>/CategureController/update_categure/<?= $data['id']; ?>"  enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Image</label>
                                        <input type="file" name="image" class="form-control" value='<?php echo $data['image']; ?>'  id="exampleInputEmail1" >
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label"> Categorie</label>
                                        <input type="text" name="categure"  class="form-control" value='<?php echo $data['categure']; ?>'  id="exampleInputPassword1">
                                    </div>
                                    
                                    <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                    <textarea class="form-control" type="text" name="description"  value='' id="exampleFormControlTextarea1" rows="3"><?php echo $data['description']; ?></textarea>
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