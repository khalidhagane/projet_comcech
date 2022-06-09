
<?php

require_once APPROOT.'/views/inc/head.php';
require_once APPROOT.'/views/inc/navbar.php';
?>

<div class=" container w-100 pt-5 d-flex  justify-content-center align-items-center">
    <div class=" card w-md-50 w-lg-50 h-75 w-sm-100  d-flex  flex-row flex-wrap  border-0 shadow ">
        <div class=" w-50 d-flex flex-column  align-items-center">
            <span class=" fs-2 pb-5 fw-bold  text-center" >motor electrogen</span>
            <!-- <p class="w-50  " >groupe 5000 V</p> -->
            <img class="w-50  " src="<?=URLROOT?>/img/images/groupe.png" alt="photo">
        </div>
        <div class=" ">
            <div>
            <h1 class="">caractiristique</h1>
            </div>
            <span>autonomie :</span><span> 6.40 KVA</span><br>
            <span>puissance :</span><span> 16 l</span><br>
            <span>capacité :</span><span> 12 l</span><br>
            <span>consomation :</span><span> 12 l/h</span><br>
            <span>sortie alternatif :</span><span> 12h</span><br>
            <span>autonomie :</span><span> 6.40 KVA</span><br>
            <span>puissance :</span><span> 16 l</span><br>
            <span>capacité :</span><span> 12 l</span><br>
            <span>consomation :</span><span> 12 l/h</span><br>
            <span>sortie alternatif :</span><span> 12h</span><br>
            <div>
            <span class=" py-2 fs-4 fw-bolder">tarif :</span><span class=" py-2 fs-4 fw-bolder"> 100 dh/jour</span><br>
            </div>
            <div class="py-2 d-flex  justify-content-center">
            <button type="button" class=" w-100 btn btn-border-comcech rounded px-5 ">ACHETE</button>
            </div>
            
        </div>
    </div>
</div>
</main>
<?php

require_once APPROOT.'/views/inc/footer_script.php';
?>