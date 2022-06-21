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

public function addinfo_client($data){
    session_start();
    $listeProduits = [];
    foreach($_SESSION['panier'] as $produit){
        $produitDetails = explode(',', $produit);
        $listeProduits [] =  $produitDetails[2];
    }
    var_dump($listeProduits);
    exit;
    session_start();
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';
    exit;
    $this->db->query("INSERT INTO `commandes`( `name`,`address`, `phone`)
     VALUES (?,?,?)");
     $this->db->bind(1,$data['name']);
     $this->db->bind(2,$data['address']);
     $this->db->bind(3 ,$data['phone']);
   

    try{
        $this->db->execute();
    
    }
    catch(Exception $e){
        return $e->getMessage();
    }

}



    }
