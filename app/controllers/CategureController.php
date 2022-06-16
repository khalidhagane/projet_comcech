<?php 
class CategureController extends Controller{
    function __construct(){

        $this->categureModel = $this->model('CategureModel');
        
    }


    public function addcategure(){
        $data = $_POST;
        
        
        
        $this->categureModel->addcategure($data);

       
        redirect("/pages/table_categure");
    }

    public function affichage_categure(){
        
         $data =  $this->categureModel->affichage_categure();
         
         
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
            $this->categureModel->update_categure($data,$id);
            redirect('/pages/table_categure');
         }
        }

        public function affichage_groupeproduit($categure){
   
            $data =  $this->categureModel->affichage_groupeproduit($categure);
            
           
            
            // // redirect("/pages/one_produit",$data);
            $this->view("/pages/produits",$data);
           
           
        }
        
}
?>