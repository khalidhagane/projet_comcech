<?php
class DetailproduitController extends Controller{

    function __construct(){

        $this->detailproduitModel = $this->model('DetailproduitModel'); 
    }

// public function detail_produit(){
//     $data = $_POST;
    
//     $this->detailproduitModel->addinfo_client($data);
//     // redirect("/pages/table_produits");

// }
public function affichagedetail_produit($id){
   
    $data =  $this->detailproduitModel->affichagedetail_produit($id);
   
   
     $this->view("pages/one_produit",$data);
    //  redirect("/pages/signin");
     
   
   
}



}