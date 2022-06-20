
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
                                <h1 class=" fw-bolder d-none d-sm-block mx-3 h5">les commantair</h1>
                                <!-- <div class="d-flex align-items-center">
                                    <i class="far  fa-sort me-3 fs-6 text-info "></i>
                                    
                                        <a href="insert.php"  class=" btn btn-info  text-white text-uppercase mx-4 py-2 " >
                                            add new clients
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
                                                <th class="text-muted h6 ">username</th>
                                                <th class=" text-muted h6">message</th>
                                                
                                                <th style="display: none;">a</th>
                                                <th style="display: none;">a</th>
                                            </tr>
                                        </thead>

                                        <tbody>                                              
                                            
                                                
                                                <tr class="bg-white ">
                                                    <th  style="visibility: hidden;" >a</th>       
                                                    
                                                    <td> khalid hagane</td>
                                                    <td > Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                        Cumque Lorem ipsum dolor, sit amet consectetur adipisicing elit </td>
                                                    
                                                    
                                                    <td><a href='update.php?id=<?php echo $row['id'];?>'><i class="fal fa-pen fs-6 text-info"></i></a></td>
                                                    <td><a href='delete.php?id=<?php echo $row['id'];?>'> <i class="fal fa-trash fs-6 text-info"></i> </a></td>
                                                </tr>

                                                

                                        </tbody>
                                    </table>
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