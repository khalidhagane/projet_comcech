<?php
    class CategureModel{
    
        private $db;
   public function __construct()
   {
       $this->db = new Database();
   }
        public function addcategure($data){
            
             $this->db->query("INSERT INTO `categures`( `image`,`categure`, `description`)
             VALUES (?,?,?)");
             $this->db->bind(1,$_FILES['image']['name']);
             $this->db->bind(2 ,$data['categure']);
             $this->db->bind(3 ,$data['description']);
            
            try{
                $this->db->execute();
            
            }
            catch(Exception $e){
                return $e->getMessage();
            }

        }
        public function  affichage_categure(){
            $this->db->query("SELECT * FROM `categures`");
            return $this->db->resultSet();
        
        }
        public function delete_categure($id){
            
            $this->db->query('DELETE  FROM categures WHERE id = :id ');
            $this->db->bind(':id',$id);
            $this->db->execute();

            //     return true;
            // }else{
            //     return false;
            // }

        }
        public function get_categure($id){
            
            $this->db->query("SELECT * FROM `categures` WHERE id='$id'");
            
            return $this->db->single();
            
            
        }
        

        public function update_categure($data , $id){

            $this->db->query("UPDATE `categures` SET `image` = ? , `categure` = ? ,`description` = ?  WHERE `id` = '$id'") ;
            $this->db->bind(1,$_FILES['image']['name']);
            $this->db->bind(2 ,$data['categure']);
             $this->db->bind(3 ,$data['description']);
             

            try{
                $this->db->execute();
            
            }
            catch(Exception $e){
                return $e->getMessage();
            }

        }
        public function affichage_groupeproduit($categure){
            
            $this->db->query("SELECT * FROM `produits` WHERE categure='$categure'");
            
            return $this->db->resultSet();
            
            
        }
        


        public function selectAll($table)
        {
            $this->db->query("SELECT * FROM $table");
            return $this->db->resultSet();
        }
        
        
        public function get_allcategure(){
            $this->db->query("SELECT * FROM `categures`");
            return $this->db->resultSet();
        }



    }

?>