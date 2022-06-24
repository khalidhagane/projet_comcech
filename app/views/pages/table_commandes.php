
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
                            <h1 class=" fw-bolder d-none d-sm-block mx-3 h5">list de commandes</h1>
                            <!-- <div class="d-flex align-items-center">
                                <i class="far  fa-sort me-3 fs-6 text-info "></i>
                                
                                    <a href="insert.php"  class=" btn btn-info  text-white text-uppercase mx-4 py-2 " >
                                        add new produit
                                    </a> 
                                
                            </div> -->
                        </div>
                        <hr>                       
                        
                            <div class="container ">
                                <div class="table-responsive-sm table-responsive-md  px-4">
                                    <table class="table  table-borderless ">
                                        <thead>
                                            <tr class="text-capitalize  ">
                                                
                                                <!-- <th class="text-muted h6 ">image</th> -->
                                                
                                                <th class="text-muted h6">name</th>
                                                <th class=" text-muted h6">address</th>
                                                <th class=" text-muted h6">phone</th>
                                                <th class=" text-muted h6">produit</th>
                                                <th class=" text-muted h6">quantité</th>
                                                <th class=" text-muted h6">prix</th>
                                                <th style="display: none;">a</th>
                                                <th style="display: none;">a</th>
                                            </tr>
                                        </thead>

                                        <tbody>                                              
                                        
                                        <tbody>
                                        <?php
                                        foreach($data as $commande){
                                            ?>
                                            <tr class="bg-white">
                                                
                                               
                                            <td><?= $commande->name ?></td>
                                                <td><?= $commande->address?></td>
                                                <td><?= $commande->phone ?></td>
                                                <td><?= $commande->produit ?></td>
                                                <td><?= $commande->quantite?></td>
                                                <td><?= $commande->prix ?></td>
                                                
                                                <td><a href='#<?php echo $commande->id;?>'><i class="fas fa-ban fs-6 text-info"></i></a></td>
                                                <td><a href='#<?php echo $commande->id;?>'><i class="far fa-check-circle fs-6 text-info"></i></a></td>
                                                <!-- <td><a href='<?=URLROOT?>/CommandeController/update_produit/<?php echo $commande->id;?>'><i class="fal fa-pen fs-6 text-info"></i></a></td>
                                                <td><a href='<?=URLROOT?>/ComanndeController/delete_produit/<?php echo $commande->id;?>'> <i class="fal fa-trash fs-6 text-info"></i> </a></td> -->
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>


                                               
                                                        <!-- <tr class="bg-white ">
                                                    <td><img src="<?= URLROOT;?>/img/images/groupe.png" width="65" alt="image représente étudiants"></td>
                                                    <td> motor</td>
                                                    <td> 1</td>
                                                    <td> khalid hagane</td>
                                                    <td> hay el nnahda rue 10 N 30 youssoufia</td>
                                                    <td> 0626900075</td> -->

                                                    <!-- <td><a href='update.php?id=<?php echo $row['id'];?>'><i class="fas fa-ban fs-5  text-info"></i></a></td>
                                                    <td><a href='delete.php?id=<?php echo $row['id'];?>'> <i class="far fa-check-circle fs-5 text-info"></i> </a></td>
                                                    
                                                     </tr> -->

                                    

                                        
                                    </table>
                                </div>
                            </div>
                        
                    </div>

        </div>
    </div>

</main>
<?php

require_once APPROOT.'/views/inc/footer_script.php';
?>