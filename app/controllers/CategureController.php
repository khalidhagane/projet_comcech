<?php 
class CategureController extends Controller{
    function __construct(){

        $this->categureModel = $this->model('CategureModel');
        
    }
    public function addcategure(){
        $data = $_POST;

        $categure_img = dirname(APPROOT) . "/public/img/categure_img/" . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $categure_img);
        
        $this->categureModel->addcategure($data);
       
        redirect("/pages/table_categure");
    }

    public function affichage_categure(){
        
         $produit =  $this->categureModel->affichage_categure();
         $this->view('pages/update_categure',(array) $produit);
    }


    public function affichage_categure_produit(){
        
        
        $produit =  $this->categureModel->affichage_categure();
        
        
        $this->view('pages/ajoute_produit', (array) $produit);
   }
    
    public function delete_categure($id){
        
        $this->categureModel->delete_categure($id);
        
        redirect("/pages/table_categure");
    } 

    public function update_categure($id){
        
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $produit = $this->categureModel->get_categure($id);
            $this->view('pages/update_categure',(array) $produit);
            
         }else if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data =  $_POST;
            $target_img = dirname(APPROOT) . "/public/img/image_produit/" . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $target_img);
            
            $this->categureModel->update_categure($data,$id);
            redirect('/pages/table_categure');
         }
        }

        // public function affichage_groupeproduit($categure){
   
        //     $data =  $this->categureModel->affichage_groupeproduit($categure);
            
        //     $this->view("/pages/produits",$data);
           
        // }
       
        
}
?>