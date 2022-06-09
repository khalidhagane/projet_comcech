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

}
