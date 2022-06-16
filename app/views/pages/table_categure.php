
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
                            <h1 class=" fw-bolder d-none d-sm-block mx-3 h5">list de categures</h1>
                            <div class="d-flex align-items-center">
                                <i class="far  fa-sort me-3 fs-6 text-info "></i>
                                
                                    <a href="<?=URLROOT?>/pages/ajoute_categure"  class=" btn btn-info  text-white text-uppercase mx-4 py-2 " >
                                        add new categure
                                    </a> 
                                
                            </div>
                        </div>
                        <hr>                       
                        
                            <div class="container ">
                                <div class="table-responsive-sm table-responsive-md  px-4">


                                <table class="table  table-borderless ">
                                        <thead>
                                            <tr class="text-capitalize  ">
                                                <th class="text-muted h6 ">image</th>
                                                <th class=" text-muted h6">produit</th>
                                                <th class=" text-muted h6">description</th>
                                                <th class=" text-muted h6">categure</th>
                                                <th style="display: none;">a</th>
                                                <th style="display: none;">a</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                        <?php
                                        foreach($data as $produit){
                                            ?>
                                            <tr class="bg-white">
                                                <td><?= $produit->image ?></td>
                                                <td><?= $produit->produit?></td>
                                                <td><?= $produit->description?></td>
                                                <td><?= $produit->categure?></td>
                                                <td><a href='<?=URLROOT?>/CategureController/update_categure/<?php echo $produit->id;?>'><i class="fal fa-pen fs-6 text-info"></i></a></td>
                                                <td><a href='<?=URLROOT?>/CategureController/delete_categure/<?php echo $produit->id;?>'> <i class="fal fa-trash fs-6 text-info"></i> </a></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                    <!-- <table class="table  table-borderless ">
                                        <thead>
                                            <tr class="text-capitalize  ">
                                                <th class="text-muted h6 ">image</th>
                                                <th class="text-muted h6 ">produit</th>
                                                <th class=" text-muted h6">poid</th>
                                                <th class=" text-muted h6">tension</th>
                                                <th class="text-muted h6">puissance</th>
                                                <th class=" text-muted h6">longueur</th>
                                                <th class=" text-muted h6">prix</th>
                                                <th style="display: none;">a</th>
                                                <th style="display: none;">a</th>
                                            </tr>
                                        </thead>

                                        <tbody>                                              
                                        
                                              


                                                <?php


                                                

                                                    //  
                                                    ?>
                                                        <tr class="bg-white ">
                                                    <td><img src="<?= URLROOT;?>/img/images/groupe.png" width="65" alt="image représente étudiants"></td>
                                                    <td> motor</td>
                                                    <td> 50 Kg</td>
                                                    <td> 380 V</td>
                                                    <td> 3500 W</td>
                                                    <td> 1,25 m</td>
                                                    <td> 200 Dhs</td>
                                                    <td><a href='<?=URLROOT?>/pages/ajoute_produit?id=<?php echo $row['id'];?>'><i class="fal fa-pen fs-6 text-info"></i></a></td>
                                                    <td><a href='delete.php?id=<?php echo $row['id'];?>'> <i class="fal fa-trash fs-6 text-info"></i> </a></td>
                                                    </tr>

                                                    <?php
                                                   

                                            // }   






                                                //  include 'tableux_students.php'

                                              //   $array = file_get_contents('tableau_student.json');
                                              //   $student = json_decode( $array,true) 

                                            //    foreach ($student as $TB ){
                            
                                            //    if($TB['name']=='khalid'){

                                            // echo ' <tr class="bg-white ">
                                            // <td  ><img src="image/student.jpg" width="65" alt="image représente étudiants"> </td>
                                            // <td>'.$TB['name'].'</td>
                                            // <td >'.$TB['email'].'</td>
                                            // <td >'.$TB['phone'].'</td>
                                            // <td>'.$TB['enroll_number'].'</td>
                                            // <td >'.$TB['date_of_addmision'].'</td>
                                            // <td><a href="#"><i class="fal fa-pen fs-6 text-info"></i></a></td>
                                            // <td><a href="#"><i class="fal fa-trash fs-6 text-info"></i></a></td>
                                            // </tr>';
                                            // //   }
                                            // }  
                                            
                                            

                                        //          include 'tableux_students.php';

                                        //          $array = file_get_contents('tableau_student.json');
                                        //          $student = json_decode( $array,true) ;


                                        // for ($i = 0; $i < count($student);$i++) {
                                        //     echo'<tr class="bg-white ">';
                                        //     echo '<td  ><img src="image/student.jpg" width="65" alt="image représente étudiants"> </td>';
                                        //     echo '<td>'. $student[$i]['name'].'</td>';
                                        //     echo '<td>'. $student[$i]['email'] .'</td>';
                                        //     echo '<td>'. $student[$i]['phone'] .'</td>';
                                        //     echo '<td>'. $student[$i]['enroll_number'] .'</td>';
                                        //     echo '<td>'. $student[$i]['date_of_addmision'] .'</td>' ;
                                        //     echo ' <td><a href="#"><i class="fal fa-pen fs-6 text-info"></i></a></td>';
                                        //     echo '<td><a href="#"><i class="fal fa-trash fs-6 text-info"></i></a></td>';
                                        //     echo '</tr>';
                                        // }
                                            ?>

                                        </tbody>
                                    </table> -->
                                </div>
                            </div>
                        
                    </div>

        </div>
    </div>

</main>
<?php

require_once APPROOT.'/views/inc/footer_script.php';
?>