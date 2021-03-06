<?php 
class ProduitController extends Controller{
    function __construct(){

        $this->produitModel = $this->model('ProduitModel'); 
        $this->categureModel = $this->model('CategureModel'); 
    }
    
    public function addProduit(){

        if($_SESSION['role'] == 'admin'){
        $data = $_POST;
        $target_img = dirname(APPROOT) . "/public/img/image_produit/" . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $target_img);
        
        $this->produitModel->addProduit($data);
       
        redirect("/pages/table_produits");
    }
    else{
        redirect("/pages/index");
    }

}

    public function affichage_produit(){

        
         $data =  $this->produitModel->affichage_produit();
        
    }
    
    public function delete_produit($id){
        
        if($_SESSION['role'] == 'admin'){
        $this->produitModel->delete_produit($id);
        
        redirect("/pages/table_produits");
        }else{
            redirect("/pages/index");
        }
    } 

    public function update_produit($id){
        if($_SESSION['role'] == 'admin'){
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $produit = $this->produitModel->get_produit($id);
            $categures= $this->categureModel->affichage_categure();
            $this->view('pages/update_produit',(array) $produit, $categures);

         }else if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data =  $_POST;
            $target_img = dirname(APPROOT) . "/public/img/image_produit/" . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $target_img);

            $this->produitModel->update_produit($data,$id);
            redirect('/pages/table_produits');
         }
        }else{
            redirect("/pages/index");
        }
        }
}
?>