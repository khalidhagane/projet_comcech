<?php
class DetailproduitController extends Controller{

    function __construct(){

        $this->detailproduitModel = $this->model('DetailproduitModel'); 
    }

public function affichagedetail_produit($id){
   
    $data =  $this->detailproduitModel->affichagedetail_produit($id);
   
   
    $this->view("pages/one_produit",$data);
    
}


}