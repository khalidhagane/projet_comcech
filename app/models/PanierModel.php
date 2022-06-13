<?php
    class PanierModel{
    
        private $db;
   public function __construct()
   {
       $this->db = new Database();
   }



//    public function addproduit_panier($data){
            
//     $this->db->query("INSERT INTO `produits`( `image`,`produit`, `poid`, `tension`, `puissance`, `longueur`, `prix` , `description`)
//      VALUES (?,?,?,?,?,?,?,?)");
//      $this->db->bind(1,$data['image']);
//      $this->db->bind(2,$data['produit']);
//      $this->db->bind(3 ,$data['poid']);
//      $this->db->bind(4 ,$data['tension']);
//      $this->db->bind(5 ,$data['puissance'] );
//      $this->db->bind(6 ,$data['longueur']);
//      $this->db->bind(7 ,$data['prix']);
//      $this->db->bind(8 ,$data['description']);

//     try{
//         $this->db->execute();
    
//     }
//     catch(Exception $e){
//         return $e->getMessage();
//     }

// }

}
?>