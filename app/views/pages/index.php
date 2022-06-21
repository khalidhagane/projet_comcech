<?php

require_once APPROOT.'/views/inc/head.php';
require_once APPROOT.'/views/inc/navbar.php';

?>

    <div class=" image_daccueil vh-100 d-flex flex-row justify-content-center align-items-center">
       
        <div class="h-50 w-75 d-flex flex-column gap-3 justify-content-center align-items-center text-center ">
            <div>
                <h1 class="text-white py-2">Location de matériel pour les professionnels</h1>
                <p class="text-white ">Louez le matériel professionnel qu’il vous faut, quand il faut, et où il faut !</p>
            </div>
                <form class=" col-10 mx-auto d-flex bg-white rounded-pill border-0 w-50" role="search">
                    <input class="form-control me-2 rounded-pill border-0 " type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-border-comcech  rounded-pill search-btn border-white text-secondary" type="submit"><i class="fa fa-search "></i></button>
                </form>
        </div>
    </div>

    <section class="page-section mt-5 " id="apropo">
      <div class="container card border-bottom border-0">
          <div class="text-center">
              <h2 class="section-heading text-uppercase color_comcech_text">Apropo de nous</h2>
          </div>
          <div class="row text-center">
              <div class="col-md-4 mt-4">
              <img class="rounded-circle" src="<?=URLROOT?>/img/images/trax2.jpg" height="100px" width="100px" alt="">
              
                  <h4  style="margin-top: 40px;">AZZDINE HAGANE</h4>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui.  </p>
              </div>


                <div class="col-md-4 mt-4">
                  <img class="rounded-circle" src="<?=URLROOT?>/img/images/trax2.jpg" height="100px" width="100px" alt=""> 
               <h4  style="margin-top: 40px;">COMCECH</h4>
                  <p class="text-muted">entreprise et location de matirialle constrouire</p>
              </div>

              <div class="col-md-4 mt-4">
                <img class="rounded-circle" src="<?=URLROOT?>/img/images/trax2.jpg" height="100px" width="100px" alt="">
                  <h4  style="margin-top: 40px;">OBJECTIF</h4>
                  <p class="text-muted">aide de aplicition fasilite de taravaille sur matirialle.</p>
              </div>

          </div>
      </div>
  </section>

<!-- start partie pronotion -->
    <div class=" d-flex flex-column align-items-center gap-4" >
        <div class="w-75 d-flex flex-column align-items-center ">
            <h1 class="color_comcech_text mb-4 mt-5  "> LE REMISES </h1>
            <p class="text-center fs-5 ">Merci pour le téléchargement: Modèle de bannière de publication de médias sociaux de promotion de location de voiture Psd Premium</p>
        </div>


    </div>

    <div class="container ">
        
        <div class=" row gap-4 d-flex justify-content-center  px-4 " >
        <?php
                                        foreach($dataList as $produit){
                                            ?>
        <a href="<?=URLROOT?>/DetailproduitController/affichagedetail_produit/<?php echo $produit->id?>" class="text-decoration-none col-sm-12 border-0 shadow col-lg-5 p-2 card d-flex flex-row align-items-center " style=" background: linear-gradient(-0.58deg, #02ACDF -20.73%, #FFFFFF 70.84%);  " >
            
            
            <!-- <img class="h-75 w-25" src="<?=URLROOT?>/img/images/groupe.png" alt="" > -->
            <img class="h-75 w-25" src="<?php echo URLROOT ?>/public/img/image_produit/<?php echo $produit->image ?>" alt="" > 

            
            
                        
                        <div class="d-flex flex-column ps-2">
                            <p class="fs-3 text-center text-dark"><?= $produit->description ?></p>
                            <span class= "fs-2 text-white text-center "><?= $produit->prix ?> MAD</span>
                            <span class="fs-5  text-secondary text-decoration-line-through "><?= $produit->prix2 ?> MAD</span>
                        </div>
        
        </a>
        <?php 
                    } ?>
            
            <!-- <a class="text-decoration-none col-sm-12 border-0 shadow col-lg-5 p-2 card d-flex flex-row align-items-center " style=" background: linear-gradient(-0.58deg, #02ACDF -20.73%, #FFFFFF 70.84%);  " href="#">
            
            
            <img class="h-75 w-25" src="<?=URLROOT?>/img/images/post_sodage-mv.png" alt="" >
                        
                        <div class="d-flex flex-column ps-2">
                            <p class="fs-3 text-center text-dark">MEILLEURE  MACHINE A LOUER AUJOURD'HUI!</p>
                            <span class= "fs-2 text-white text-center ">50,00 Dh</span>
                            <span class="fs-5  text-secondary text-decoration-line-through ">60,00 Dh</span>
                        </div>
        
        </a>
            <a class="text-decoration-none col-sm-12 border-0 shadow col-lg-5 p-2 card d-flex flex-row align-items-center " style=" background: linear-gradient(-0.58deg, #02ACDF -20.73%, #FFFFFF 70.84%);  " href="#">
            
            
            <img class="h-75 w-25" src="<?=URLROOT?>/img/images/perforateur-mv.png" alt="" >
                        
                        <div class="d-flex flex-column ps-2">
                            <p class="fs-3 text-center text-dark">MEILLEURE  MACHINE A LOUER AUJOURD'HUI!</p>
                            <span class= "fs-2 text-white text-center ">180,00 Dh</span>
                            <span class="fs-5  text-secondary text-decoration-line-through ">2OO,00 Dh</span>
                        </div>
        
        </a>
            <a class="text-decoration-none col-sm-12 border-0 shadow col-lg-5 p-2 card d-flex flex-row align-items-center " style=" background: linear-gradient(-0.58deg, #02ACDF -20.73%, #FFFFFF 70.84%);  " href="#">
            
            
                <img class="h-75 w-25" src="<?=URLROOT?>/img/images/hilti-mv.png" alt="" >
                            
                            <div class="d-flex flex-column ps-2">
                                <p class="fs-3 text-center text-dark">MEILLEURE  MACHINE A LOUER AUJOURD'HUI!</p>
                                <span class= "fs-2 text-white text-center ">90,00 Dh</span>
                                <span class="fs-5  text-secondary text-decoration-line-through ">100,00 Dh</span>
                            </div>
            
            </a> -->
        
        </div>
    </div>

    
    <!-- fin partie pronotion -->
    <!-- start partie les produit recommande -->
    <div>
        <div class="d-flex justify-content-center">
            <span class="color_comcech_text fw-bolder mb-4 mt-5 fs-3 ">LES PODUIT RECOMMANDE </span>
        </div>

        <!-- <div class="d-flex flex-row justify-content-center ">

            <a class="card d-flex flex-column align-items-center border-0 shadow gap-2 w-50 py-4 text-decoration-none card_slaid  " href="#" >
            
                <div class=" w-100  d-flex align-items-center">
                    <span class="text-start ps-2 text-white bg-price p-2">400 Dhs</span>
                </div>
                <img  class="h-75 w-50 mt-4 px-2" src="<?=URLROOT?>/img/images/groupe.png " alt="img">
                <h3 class="text-center text-dark px-2 ">générateur de moteur</h3>
                <p class="text-center text-dark px-2"> Compactage, terrassement et matériel de chantier </p>
            
            </a>

        </div> -->

    
   



<!-- ********************************************** -->




<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="d-flex justify-content-center gap-3 px-4 py-3">
    <a class="card d-flex flex-column align-items-center border-0 shadow gap-2 w-50 py-4 text-decoration-none card_slaid  " href="#" >
            
            <div class=" w-100  d-flex align-items-center">
                <span class="text-start ps-2 text-white bg-price p-2">400 MAD</span>
            </div>
            <img  class="h-75 w-50 mt-4 px-2" src="<?=URLROOT?>/img/images/groupe.png " alt="img">
            <h3 class="text-center text-dark px-2 ">générateur de moteur</h3>
            <p class="text-center text-dark px-2"> Compactage, terrassement et matériel de chantier </p>
        
        </a>
        <a class="card d-flex flex-column align-items-center border-0 shadow gap-2 w-50 py-4 text-decoration-none card_slaid  " href="#" >
            
            <div class=" w-100  d-flex align-items-center">
                <span class="text-start ps-2 text-white bg-price p-2">400 MAD</span>
            </div>
            <img  class="h-75 w-50 mt-4 px-2" src="<?=URLROOT?>/img/images/groupe.png " alt="img">
            <h3 class="text-center text-dark px-2 ">générateur de moteur</h3>
            <p class="text-center text-dark px-2"> Compactage, terrassement et matériel de chantier </p>
        
        </a>
        <a class="card d-flex flex-column align-items-center border-0 shadow gap-2 w-50 py-4 text-decoration-none card_slaid  " href="#" >
            
            <div class=" w-100  d-flex align-items-center">
                <span class="text-start ps-2 text-white bg-price p-2">400 MAD</span>
            </div>
            <img  class="h-75 w-50 mt-4 px-2" src="<?=URLROOT?>/img/images/groupe.png " alt="img">
            <h3 class="text-center text-dark px-2 ">générateur de moteur</h3>
            <p class="text-center text-dark px-2"> Compactage, terrassement et matériel de chantier </p>
        
        </a>
    </div>
    </div>
    <div class="carousel-item">
    <div class="d-flex justify-content-center gap-2 px-4 py-3">
    <a class="card d-flex flex-column align-items-center border-0 shadow gap-2 w-50 py-4 text-decoration-none card_slaid  " href="#" >
            
            <div class=" w-100  d-flex align-items-center">
                <span class="text-start ps-2 text-white bg-price p-2">400 MAD</span>
            </div>
            <img  class="h-75 w-50 mt-4 px-2" src="<?=URLROOT?>/img/images/groupe.png " alt="img">
            <h3 class="text-center text-dark px-2 ">générateur de moteur</h3>
            <p class="text-center text-dark px-2"> Compactage, terrassement et matériel de chantier </p>
        
        </a>
        <a class="card d-flex flex-column align-items-center border-0 shadow gap-2 w-50 py-4 text-decoration-none card_slaid  " href="#" >
            
            <div class=" w-100  d-flex align-items-center">
                <span class="text-start ps-2 text-white bg-price p-2">400 MAD</span>
            </div>
            <img  class="h-75 w-50 mt-4 px-2" src="<?=URLROOT?>/img/images/groupe.png " alt="img">
            <h3 class="text-center text-dark px-2 ">générateur de moteur</h3>
            <p class="text-center text-dark px-2"> Compactage, terrassement et matériel de chantier </p>
        
        </a>
        <a class="card d-flex flex-column align-items-center border-0 shadow gap-2 w-50 py-4 text-decoration-none card_slaid  " href="#" >
            
            <div class=" w-100  d-flex align-items-center">
                <span class="text-start ps-2 text-white bg-price p-2">400 MAD</span>
            </div>
            <img  class="h-75 w-50 mt-4 px-2" src="<?=URLROOT?>/img/images/groupe.png " alt="img">
            <h3 class="text-center text-dark px-2 ">générateur de moteur</h3>
            <p class="text-center text-dark px-2"> Compactage, terrassement et matériel de chantier </p>
        
        </a>
    </div>
    </div>
    <div class="carousel-item ">
    <div class="d-flex justify-content-center gap-3 px-4 py-3 ">
    <a class="card d-flex flex-column align-items-center border-0 shadow gap-2  py-4 text-decoration-none card_slaid  " href="#" >
            
            <div class=" w-100  d-flex align-items-center">
                <span class="text-start ps-2 text-white bg-price p-2">400 MAD</span>
            </div>
            <img  class="h-75 w-50 mt-4 px-2" src="<?=URLROOT?>/img/images/groupe.png " alt="img">
            <h3 class="text-center text-dark px-2 ">générateur de moteur</h3>
            <p class="text-center text-dark px-2"> Compactage, terrassement et matériel de chantier </p>
        
        </a>
        <a class="card d-flex flex-column align-items-center border-0 shadow gap-2 w-50 py-4 text-decoration-none card_slaid  " href="#" >
            
            <div class=" w-100  d-flex align-items-center">
                <span class="text-start ps-2 text-white bg-price p-2">400 MAD</span>
            </div>
            <img  class="h-75 w-50 mt-4 px-2" src="<?=URLROOT?>/img/images/groupe.png " alt="img">
            <h3 class="text-center text-dark px-2 ">générateur de moteur</h3>
            <p class="text-center text-dark px-2"> Compactage, terrassement et matériel de chantier </p>
        
        </a>
        <a class="card d-flex flex-column align-items-center border-0 shadow gap-2 w-50 py-4 text-decoration-none card_slaid  " href="#" >
            
            <div class=" w-100  d-flex align-items-center">
                <span class="text-start ps-2 text-white bg-price p-2">400 MAD</span>
            </div>
            <img  class="h-75 w-50 mt-4 px-2" src="<?=URLROOT?>/img/images/groupe.png " alt="img">
            <h3 class="text-center text-dark px-2 ">générateur de moteur</h3>
            <p class="text-center text-dark px-2"> Compactage, terrassement et matériel de chantier </p>
        
        </a>
    </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="btn btn-primary">Previous</span> -->
    <i class="fas fa-chevron-left  fs-3 text-info" aria-hidden="true"></i>
    
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
    <!-- <span class=" btn btn-primary">Next</span> -->
    <i class="fas fa-chevron-right fs-3 text-info " aria-hidden="true"></i>

  </button>
</div>

</div>

<!-- ********************************************** -->

    
    <!-- fin partie les produit recommande -->
    <!-- start partie les card produit -->
    <div class="container ">
            <div class="  d-flex justify-content-center">
                <span class="color_comcech_text fw-bolder  mb-4 mt-5 fs-3"> UNE LARGE GAMME DE LATERIELS </span>
            </div>



        




            <div class="row gap-4 d-flex justify-content-center px-4 ">
            <?php

                     
                foreach($data as $produit){
                    
                    ?>

                    <div class="d-flex flex-column justify-content-between col-ms-11  col-md-5 col-lg-3  p-0 card  border-0 shadow gap-3  ">
                        
                        <!-- <img  class="h-50 w-100 rounded-top " src="<?=URLROOT?>/img/images/trax2.jpg" alt="img"> -->
                        <img class="h-50 w-100 rounded-top " src="<?php echo URLROOT ?>/public/img/categure_img/<?php echo $produit->image ?>" alt="">

                        <div class="px-2 ">
                            <h3 class=""><?php echo $produit->produit?></h3>
                            <p class="mb-2"> <?php echo $produit->description?></p>
                            
                        </div >
                        <a href="<?=URLROOT?>/CategureController/affichage_groupeproduit/<?php echo $produit->categure?>"  class="btn btn-border-comcech btn-outline-primary fw-bolder rounded-0 border-0 border-top "> Voir plus <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <?php
                    
                                                }
                                                ?> 
            
                
                <!-- <div class="d-flex flex-column justify-content-between col-ms-11  col-md-5  col-lg-3  p-0 card  border-0 shadow gap-3  ">
                    
                    <img  class="h-50 w-100 rounded-top " src="<?=URLROOT?>/img/images/groupe1.Jpg" alt="img">

                    <div class="px-2 ">
                        <h3 class="">les generateur</h3>
                        <p class="mb-2"> Compactage, terrassement et matériel terrassement et matériel de chantier </p>
                        
                    </div>
                    <button type="button" class="btn btn-border-comcech btn-outline-primary fw-bolder rounded-0 border-0 border-top   "> Voir plus <i class="fas fa-arrow-right"></i></button>
                </div>

                <div class="d-flex flex-column justify-content-between col-ms-11  col-md-5  col-lg-3  p-0 card  border-0 shadow gap-3  ">
                    
                    <img  class="h-50 w-100 rounded-top" src="<?=URLROOT?>/img/images/perforateurss.png" alt="img">

                    <div class="px-2 ">
                        <h3 class="">perforateur</h3>
                        <p class="mb-2"> Compactage, terrassement et matériel terrassement et matériel de chantier </p>
                        
                    </div>
                    <button type="button" class="btn btn-border-comcech btn-outline-primary fw-bolder rounded-0 border-0 border-top   "> Voir plus <i class="fas fa-arrow-right"></i></button>
                </div>
                <div class="d-flex flex-column justify-content-between col-ms-11  col-md-5  col-lg-3  p-0 card  border-0 shadow gap-3  ">
                    
                    <img  class="h-50 w-100 rounded-top" src="<?=URLROOT?>/img/images/hilti1.jpg" alt="img">

                    <div class="px-2 ">
                        <h3 class="">hilti</h3>
                        <p class="mb-2"> Compactage, terrassement et matériel terrassement et matériel de chantier </p>

                    </div>
                    <button type="button" class="btn btn-border-comcech btn-outline-primary fw-bolder rounded-0 border-0 border-top   "> Voir plus <i class="fas fa-arrow-right"></i></button>
                </div>
                <div class="d-flex flex-column justify-content-between col-ms-11  col-md-5  col-lg-3  p-0 card  border-0 shadow gap-3  ">
                    
                    <img  class="h-50 w-100 rounded-top" src="<?=URLROOT?>/img/images/bt.jpg" alt="img">

                    <div class="px-2 ">
                        <h3 class="">botonia</h3>
                        <p class="mb-2"> Compactage, terrassement et matériel terrassement et matériel de chantier </p>
                        
                    </div>
                    <button type="button" class="btn btn-border-comcech btn-outline-primary fw-bolder rounded-0 border-0 border-top   "> Voir plus <i class="fas fa-arrow-right"></i></button>
                </div>
                <div class="d-flex flex-column justify-content-between col-ms-11  col-md-5  col-lg-3  p-0 card  border-0 shadow gap-3  ">
                    
                    <img  class="h-50 w-100 rounded-top" src="<?=URLROOT?>/img/images/la muele.jpg" alt="img">

                    <div class="px-2 ">
                        <h3 class="">la muele</h3>
                        <p class="mb-2"> Compactage, terrassement et matériel terrassement et matériel de chantier </p>
                        
                    </div>
                    <button type="button" class="btn btn-border-comcech btn-outline-primary fw-bolder rounded-0 border-0 border-top   "> Voir plus <i class="fas fa-arrow-right"></i></button>
                </div> -->
            
            </div>
        
    </div>
    <!-- fin partie les card produit -->
    
    
    <?php
 require_once APPROOT.'/views/inc/footer.php'; 
require_once APPROOT.'/views/inc/footer_script.php';
?>
    

