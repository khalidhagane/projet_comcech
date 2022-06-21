<?php
    class DetailproduitModel{
    
        private $db;
   public function __construct()
   {
       $this->db = new Database();
   }

   public function affichagedetail_produit($id){
    
       
    $this->db->query("SELECT * FROM `produits` WHERE `id`=$id ");
    
    return $this->db->single();
    
}

}
?>