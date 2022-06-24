<?php 
class PromotionController extends Controller{
    function __construct(){

        $this->promotionModel = $this->model('PromotionModel'); 
    }

    public function addpromotion(){
        $data = $_POST;
        $target_img = dirname(APPROOT) . "/public/img/image_produit/" . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $target_img);
        
        
        $this->promotionModel->addpromotion($data);

       
        redirect("/pages/table_promotion");
    }

    public function affichage_promotion(){
        
         $data =  $this->promotionModel->affichage_promotion();
        
        
        
    }
    
    public function delete_promotion($id){
        
        $this->promotionModel->delete_promotion($id);
        
        redirect("/pages/table_promotion");
    } 

    public function update_promotion($id){
     
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $produit = $this->promotionModel->get_promotion($id);
            $this->view('pages/update_promotion',(array) $produit);

         }else if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data =  $_POST;
            $target_img = dirname(APPROOT) . "/public/img/image_produit/" . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $target_img);
        
            $this->promotionModel->update_promotion($data,$id);
            redirect('/pages/table_promotion');
         }
        }

        public function get_produitpromotion($id){
            
   
            $data =  $this->promotionModel->get_promotion($id);
            
           
            
           
            
            // // redirect("/pages/one_produit",$data);
            $this->view("/pages/one_produit",$data);
           
           
        }



        
}
?>