
<div class="col-auto  col-md-3  col-xl-2 asied shadow " style=" background: linear-gradient(-0.58deg, #02ACDF -20.73%, #F0F9FF 70.84%);  ">
                
                <div class="d-flex flex-column px-3 pt-2  min-vh-100   ">
                    <div class=" pb-3  me-md-auto ">
                        <h1 class=" border-start border-4 border-info  my-0 ps-2 h4 ">COMCECH</h1>   
                    </div>
                    <div class="d-flex flex-column align-items-center ">
                        <img src="<?=URLROOT?>/img/images/log.png" alt="hugenerd" width="90" height="90" class="rounded-circle  mt-1">
                        
                        <h4 class="text-dark mt-3 h6"> <b> <?php if(isset($_SESSION['username'])){echo $_SESSION['username']; }?> </b></h4>                                            

                        <p class="text-info m-0">Admin</p>
                    </div>

                    <ul class="nav d-flex flex-column w-100" >
                        <li class=" mt-2 mb-2 text-center  w-100" >
                            <a href="<?=URLROOT?>/pages/dashbord" class="nav-link   text-dark rounded "  >
                            <i class="fas fa-tachometer-alt-average pe-2"></i> 
                                <span class=" d-none d-sm-inline  ">Dashbord</span>
                            </a>
                        </li>
                        <li class="mb-2 text-center w-100" >
                            <a href="<?=URLROOT?>/pages/table_commandes" class="nav-link  text-dark rounded  ">
                            <i class="fas fa-person-carry pe-2"></i>
                                <span class=" d-none d-sm-inline ">Commandes</span>
                            </a>
                        </li>
                        <li class="mb-2 text-center w-100">
                            <a href="<?=URLROOT?>/pages/table_categure"  class="nav-link  text-dark rounded ">
                            <i class="fab fa-product-hunt pe-2"></i> 
                                <span class=" d-none d-sm-inline">Categures</span>
                            </a>
                        </li>
                        <li class="mb-2 text-center w-100" >
                            <a href="<?=URLROOT?>/pages/table_produits"  class="nav-link   text-dark rounded ">
                            <i class="fab fa-product-hunt pe-2"></i>
                                <span class=" d-none d-sm-inline">Produits</span> 
                            </a>
                        </li>
                        <li class="mb-2 text-center w-100">
                            <a href="<?=URLROOT?>/pages/table_promotion"  class="nav-link  text-dark rounded ">
                                <!-- <i class="fal fa-file-chart-line pe-2"></i> -->
                                <i class="fas fa-box-heart pe-2"></i> 
                                <span class=" d-none d-sm-inline">Promotion</span>
                            </a>
                        </li>
                        

                        <li class="mb-2 text-center w-100" >
                            <a href="<?=URLROOT?>/pages/table_clients" class="nav-link  text-dark rounded ">
                            <i class="fas fa-users-crown pe-2"></i>
                                <span class=" d-none d-sm-inline">Clients</span>
                            </a>
                        </li>
                        <li class="mb-2 text-center w-100">
                            <a href="<?=URLROOT?>/pages/table_commantair"  class="nav-link  text-dark rounded ">
                                <!-- <i class="fal fa-file-chart-line pe-2"></i>  -->
                                <i class="fas fa-comment-alt pe-2"></i>
                                <span class=" d-none d-sm-inline">Commantair</span>
                            </a>
                        </li>

                        
                        

                        <li class="mt-2 text-center w-100 " >
                            <a href="logout.php" class=" nav-link  text-dark rounded ">
                                <span class=" d-none d-sm-inline pe-3 ">Logout</span>
                                <i class="fal fa-sign-out-alt "></i>
                            </a>
                        </li>
                    </ul>
                </div>
</div>