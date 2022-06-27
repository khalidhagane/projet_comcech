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

    }
