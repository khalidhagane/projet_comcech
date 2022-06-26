<?php
    class CommandeModel{
    
        private $db;
   public function __construct()
   {
       $this->db = new Database();
   }

    public function affichage_commande(){
    $this->db->query("SELECT * FROM `commandes`");
    
    return $this->db->resultSet();

}


public function add_commande(){
    $id_user=$_SESSION['id'];
    
    $this->db->query("INSERT INTO commandes (produit,quantite,address,phone,prix,name) SELECT pr.produit, p.quantite, c.address, c.phone, pr.prix,c.username
         FROM comptes c, paniers p, produits pr 
         WHERE c.id = $id_user 
             AND p.id_user = $id_user 
             AND pr.id = p.id_produit");
             return $this->db->execute();

}
public function delete_produit_panier_commande(){

    $this->db->query('DELETE  FROM paniers WHERE id_user = :id ');
    $this->db->bind(':id',$_SESSION['id']);
    $this->db->execute();
}




// public function addinfo_client($data){
//     session_start();
//     $listeProduits = [];
//     foreach($_SESSION['panier'] as $produit){
//         $produitDetails = explode(',', $produit);
//         $listeProduits [] =  $produitDetails[2];
//     }
//     // var_dump($listeProduits);
//     // exit;
//     // session_start();
//     // echo '<pre>';
//     // var_dump($_SESSION);
//     // echo '</pre>';
//     // exit;
//     $this->db->query("INSERT INTO `commandes`( `name`,`address`, `phone`)
//      VALUES (?,?,?)");
//      $this->db->bind(1,$data['name']);
//      $this->db->bind(2,$data['address']);
//      $this->db->bind(3 ,$data['phone']);
   

//     try{
//         $this->db->execute();
    
//     }
//     catch(Exception $e){
//         return $e->getMessage();
//     }

// }

// public function affichage_commande(){

//     $this->db->query("SELECT c.address, c.phone, c.username, p.id_produit, p.quantite, pr.produit, pr.prix
//     FROM copmtes c, paniers p, produits pr 
//     WHERE c.id = 20 
//         AND p.id_user = 20 
//         AND pr.id = p.id_produit")

// }



    }
