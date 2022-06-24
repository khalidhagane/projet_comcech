<?php
    class PanierModel{
    
        private $db;
   public function __construct()
   {
       $this->db = new Database();
   }


public function ajoute_produitpanier($idproduit){
    
    $this->db->query("INSERT INTO `paniers`( `id_user`,`id_produit`, `status`,`quantite`)  VALUES (?,?,?,?)");
     $this->db->bind(1,$_SESSION['id']);
     $this->db->bind(2,$idproduit);
     $this->db->bind(3 ,'panier');
     $this->db->bind(4 ,1);
    try{
        $this->db->execute();
    
    }
    catch(Exception $e){
        return $e->getMessage();
    }
}


public function affichage_produits(){
    $idproduits = $this->get_id_produits();
    $produitspanier = [];
    foreach ($idproduits as $id) {
        $this->db->query("SELECT * FROM `produits` WHERE id = ?");
        $this->db->bind(1,$id->id_produit);
        $produitspanier[] = $this->db->single();
    }
    return $produitspanier;
}

public function get_id_produits(){
    $this->db->query("SELECT id_produit FROM `paniers` WHERE id_user = ?");
    $this->db->bind(1,$_SESSION['id']);
    return $this->db->resultSet();
}

public function deleteproduit_panier($id){
    $this->db->query('DELETE  FROM paniers WHERE id_produit = :id ');
    $this->db->bind(':id',$id);
    $this->db->execute();
}

// public function modifier_status_commande($iduser){
//     $this->db->query("UPDATE `paniers` SET `status` = ? WHERE `id_user` = '$iduser'") ;
//     $this->db->bind(1,"commande");
            
//             try{
//                 $this->db->execute();
            
//             }
//             catch(Exception $e){
//                 return $e->getMessage();
//             }
// }

}
?>