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
