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
        // unset($_COOKIE['products']); 
        // setcookie('products', null, -1, '/'); 
        
        if(isset($data)){

            $produit = $data->produit . "," .$data->id .','. $data->prix;
            setcookie('panier['.$data->id.']', $produit, time() + (3600 * 24), '/');
                // if (isset($_COOKIE['products'])){
                //     echo 'kayn';
                //     exit;
                // }
                // else {
                //     echo "makaynch";
                //     exit;
                // }

            //$productsList = unserialize($_COOKIE['cookie'], ["allowed_classes" => false]);
            // $cookie_image = $data->image;
        //setcookie('', serialize($info), time()+3600);
            //
        // setcookie('produit',$cookie_produit, time() + (3600 * 24), '/');
        // setcookie('poid',$cookie_poid, time() + (3600 * 24), '/');
        // setcookie('tension',$cookie_tension, time() + (3600 * 24), '/');
        // setcookie('puissance',$cookie_puissance, time() + (3600 * 24), '/'); // 86400 = 1 day
        // setcookie('longueur',$cookie_longueur, time() + (3600 * 24), '/');
        // setcookie('prix',$cookie_prix, time() + (3600 * 24), '/');

        
        redirect("/pages/panier");
}

}

// public function deleteproduit_panier($id){   // suprimer un panier
     
    
//     if (isset($_COOKIE["panier"][$id])) {
//         echo "luka";
//         // setcookie("panier[$id]",time() - 3600);
//          unset($_COOKIE["panier"][$id]);
//         var_dump($_COOKIE); 
//         // setcookie('remember_user', null, -1, '/'); 
        
//         return true;
//     } else {
//         return false;
//     }

// }




}
?>