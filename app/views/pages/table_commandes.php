
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
                                                <th  style="visibility: hidden;" >a</th>
                                                <th class="text-muted h6 ">Name produit</th>
                                                <th class=" text-muted h6">Nomper</th>
                                                <th class=" text-muted h6">Name client</th>
                                                <th class="text-muted h6">Address</th>
                                                <th class=" text-muted h6">Tele </th>
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
                                                    <td> 1</td>
                                                    <td> khalid hagane</td>
                                                    <td> hay el nnahda rue 10 N 30 youssoufia</td>
                                                    <td> 0626900075</td>

                                                    <td><a href='update.php?id=<?php echo $row['id'];?>'><i class="fas fa-ban fs-5  text-info"></i></a></td>
                                                    <td><a href='delete.php?id=<?php echo $row['id'];?>'> <i class="far fa-check-circle fs-5 text-info"></i> </a></td>
                                                    
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