
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
                <div class="d-flex flex-wrap justify-content-around gap-3 pt-5">
                

                    <div class="card shadow " style="width: 14rem;background-color:#F0F9FF;">

                        <div class="card-body">
                            
                        <i class="fas fa-forklift h3 text-info"></i>
                            <p class="text-secondary"><?php /* echo $_SESSION['email'] */ ?>les produits</p>
                        
                            <div class='float-end fw-bolder fs-3'> 444 </div>
                        
                        </div>
                    </div>

                    <div class="card shadow" style="width: 14rem;background-color:#F0F9FF;">
                        <div class="card-body">
                            
                            <i class="fal fa-user h3 text-info"></i>
                            <p class="text-secondary">les client</p>
                            <p class="float-end fw-bolder fs-3">777</p>
                        </div>
                    </div>

                    <div class="card shadow" style="width: 14rem;background-color:#F0F9FF;">
                        <div class="card-body">
                            <i class=" col-3 bi bi-bookmark h3"  style="color: #e7b9dc;"></i>
                            <i class="far fa-badge-check h3 text-info"></i>
                            <p class="text-secondary">les commandes</p>
                            <p class="float-end fw-bolder fs-3"> 555 </p>
                        </div>
                    </div>

                    <div class="card shadow" style="width: 14rem;background-color:#F0F9FF;">

                        <div class="card-body">
                            
                            <i class="fal fa-usd-square h3 text-info"></i>
                            <p class="text-secondary">payment</p>
                            <div class="d-flex align-items-center float-end">
                                
                                <p class="fw-bolder fs-3 ps-1"> 666 </p>
                                <h5>DHS</h5>                                  

                            </div>
                        </div>
                    </div>

                   
                </div>
            </div>

        </div>
    </div>

</main>
<?php

require_once APPROOT.'/views/inc/footer_script.php';
?>