
<?php
require_once APPROOT.'/views/inc/head.php';

?>
    <div class="container-fluid d-flex  align-items-center  justify-content-center">
        
   

    
            
            
            
                
        <div class="bg-light py-2 w-50  ">
                <div class="d-flex  align-items-center  justify-content-center justify-content-sm-between  mt-3">
                    <h1 class=" fw-bolder d-none d-sm-block mx-3 h5">form des information</h1>
                   
                </div>
                
                
                <div class="container d-flex  align-items-center  justify-content-center">

                    <form class="w-100 p-4 d-flex flex-column align-items-center  " method="POST" action="<?php echo URLROOT ?>/CommandeController/add_commande">
                            
                            <div class="mb-3 w-100">
                                <label for="exampleInputPassword1" class="form-label">address</label>
                                <input type="text" name="address"  class=" w-100  form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 w-100">
                                <label for="exampleInputPassword1" class="form-label">phone</label>
                                <input type="number" name="phone"  class="w-100 form-control" id="exampleInputPassword1">
                            </div>

                            <input type="submit"   class=" w-100 btn btn-primary" value="submit">
                    </form>

                </div>
                        
                        
        </div>
                        
    </div>    

        


</main>
<?php

require_once APPROOT.'/views/inc/footer_script.php';
?>