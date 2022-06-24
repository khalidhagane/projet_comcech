<?php
 
class PanierController extends Controller{

    function __construct(){

        $this->panierModel = $this->model('PanierModel'); 
        $this->detailproduitModel = $this->model('DetailproduitModel'); 
    }
    
    public function ajoute_produitpanier($id){
       
        if(isset($_SESSION['id'])){
            $this->panierModel->ajoute_produitpanier($id);
            redirect("/pages/produits");
            
        }
        else{
            redirect("/pages/signin");
        }
}

public function deleteproduit_panier($id){   // suprimer un panier
    
    $this->panierModel->deleteproduit_panier($id);
    redirect("/pages/panier"); 


}


}
?>