<?php
class PanierController extends Controller{

    function __construct(){

        $this->panierModel = $this->model('PanierModel'); 
        
        $this->detailproduitModel = $this->model('DetailproduitModel'); 
    }



     public function addproduit_cookie($id){
    //     $data = $_POST;
        
    //     $this->panierModel->addproduit_panier($data);
    //     // redirect("/pages/table_produits");
    //
    $data = $this->detailproduitModel->affichagedetail_produit($id);
    
    
    if(isset($data)){

    // $cookie_image = $data->image;
    $cookie_produit = $data->produit;
    $cookie_poid = $data->poid;
    $cookie_tension = $data->tension;
    $cookie_puissance = $data->puissance;
    $cookie_longueur = $data->longueur;
    $cookie_prix = $data->prix;
    
    setcookie('produit',$cookie_produit, time() + (3600 * 24), '/');
    setcookie('poid',$cookie_poid, time() + (3600 * 24), '/');
    setcookie('tension',$cookie_tension, time() + (3600 * 24), '/');
    setcookie('puissance',$cookie_puissance, time() + (3600 * 24), '/'); // 86400 = 1 day
    setcookie('longueur',$cookie_longueur, time() + (3600 * 24), '/');
    setcookie('prix',$cookie_prix, time() + (3600 * 24), '/');

    
    redirect("/pages/panier");
}

}




}
?>