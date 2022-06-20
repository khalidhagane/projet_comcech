<?php
    class ProduitModel{
    
        private $db;
   public function __construct()
   {
       $this->db = new Database();
   }
        public function addProduit($data){
            
            $this->db->query("INSERT INTO `produits`( `image`,`produit`, `poid`, `tension`, `puissance`, `longueur`, `prix` , `description`,`categure`)
             VALUES (?,?,?,?,?,?,?,?,?)");
             $this->db->bind(1,$_FILES['image']['name']);
             $this->db->bind(2,$data['produit']);
             $this->db->bind(3 ,$data['poid']);
             $this->db->bind(4 ,$data['tension']);
             $this->db->bind(5 ,$data['puissance'] );
             $this->db->bind(6 ,$data['longueur']);
             $this->db->bind(7 ,$data['prix']);
             $this->db->bind(8 ,$data['description']);
             $this->db->bind(9 ,$data['categure']);

            try{
                $this->db->execute();
            }
            catch(Exception $e){
                return $e->getMessage();
            }

        }
        public function affichage_produit(){
            $this->db->query("SELECT * FROM `produits`");
            return $this->db->resultSet();
        
        }
        public function delete_produit($id){
            $this->db->query('DELETE  FROM produits WHERE id = :id ');
            $this->db->bind(':id',$id);
            $this->db->execute();

        }
        public function get_produit($id){
            $this->db->query("SELECT * FROM `produits` WHERE id='$id'");
            return $this->db->single();
        }

        public function update_produit($data , $id){
       
            $this->db->query("UPDATE `produits` SET `image` = ?, `produit` = ?, `poid` = ?, `tension` = ?, `puissance` = ?, `longueur` = ?, `prix` = ? ,`description` = ? ,`categure` = ? WHERE `id` = '$id'") ;
            
            $this->db->bind(1,$_FILES['image']['name']);
             $this->db->bind(2,$data['produit']);
             $this->db->bind(3,$data['poid']);
             $this->db->bind(4 ,$data['tension']);
             $this->db->bind(5 ,$data['puissance'] );
             $this->db->bind(6 ,$data['longueur']);
             $this->db->bind(7 ,$data['prix']);
             $this->db->bind(8 ,$data['description']);
             $this->db->bind(9 ,$data['categure']);
             
            try{
                $this->db->execute();
            
            }
            catch(Exception $e){
                return $e->getMessage();
            }
        }

        public function affichage_count(){
            $this->db->query("SELECT * FROM `produits`");
            return $this->db->resultSet();
        
        }


    }

?>