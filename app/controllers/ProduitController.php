<?php 
class ProduitController extends Controller{
    function __construct(){

        $this->produitModel = $this->model('ProduitModel'); 
    }

    public function addProduit(){
        $data = $_POST;
        
        
        $this->produitModel->addProduit($data);

       
        redirect("/pages/table_produits");
    }

    public function affichage_produit(){
        
         $data =  $this->produitModel->affichage_produit();
        
        
        
    }
    
    public function delete_produit($id){
        
        $this->produitModel->delete_produit($id);
        
        redirect("/pages/table_produits");
    } 

    public function update_produit($id){
     
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $produit = $this->produitModel->get_produit($id);
            $this->view('pages/update_produit',(array) $produit);

         }else if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data =  $_POST;
            $this->produitModel->update_produit($data,$id);
            redirect('/pages/table_produits');
         }
        }
}
?>