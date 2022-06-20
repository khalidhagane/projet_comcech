<?php
 session_start();
class PanierController extends Controller{

    function __construct(){

        $this->panierModel = $this->model('PanierModel'); 
        $this->detailproduitModel = $this->model('DetailproduitModel'); 
    }

    

    public function addproduit_session($id){
        
        $data = $this->detailproduitModel->affichagedetail_produit($id);
        
        if(isset($data)){

            $produit = $data->image . "," .$data->produit . "," .$data->id .','. $data->prix;
            
            // setcookie('panier['.$data->id.']', $produit, time() + (3600 * 24), '/');

            $_SESSION['panier'][$data->id]=$produit;
        
        redirect("/pages/panier");
}

}

public function deleteproduit_panier($id){   // suprimer un panier
    
    if ($_SESSION['panier'][$id]) {
      
        // setcookie("panier[$id]",time() - 3600);
         unset($_SESSION["panier"][$id]);
        // var_dump($_SESSION); 
        // setcookie('remember_user', null, -1, '/');
        redirect("/pages/panier"); 
        
        return true;
    } else {
        return false;
        
    }

}

// public function rederict_signin(){
     


// }




}
?>