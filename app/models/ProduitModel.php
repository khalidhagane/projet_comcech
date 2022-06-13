<?php
    class ProduitModel{
    
        private $db;
   public function __construct()
   {
       $this->db = new Database();
   }
        public function addProduit($data){
            
            $this->db->query("INSERT INTO `produits`( `image`,`produit`, `poid`, `tension`, `puissance`, `longueur`, `prix` , `description`)
             VALUES (?,?,?,?,?,?,?,?)");
             $this->db->bind(1,$data['image']);
             $this->db->bind(2,$data['produit']);
             $this->db->bind(3 ,$data['poid']);
             $this->db->bind(4 ,$data['tension']);
             $this->db->bind(5 ,$data['puissance'] );
             $this->db->bind(6 ,$data['longueur']);
             $this->db->bind(7 ,$data['prix']);
             $this->db->bind(8 ,$data['description']);

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

            //     return true;
            // }else{
            //     return false;
            // }

        }
        public function get_produit($id){
            $this->db->query("SELECT * FROM `produits` WHERE id='$id'");
            return $this->db->single();
        }

        public function update_produit($data , $id){
            // UPDATE `produits` SET `id`='[value-1]',`produit`='[value-2]',`poid`='[value-3]',`tension`='[value-4]',`puissance`='[value-5]',`longueur`='[value-6]',`prix`='[value-7]',`image`='[value-8]' WHERE 1
        
            $this->db->query("UPDATE `produits` SET  `produit` = ?, `poid` = ?, `tension` = ?, `puissance` = ?, `longueur` = ?, `prix` = ? ,`description` = ? WHERE `id` = '$id'") ;
          
             $this->db->bind(1,$data['produit']);
             $this->db->bind(2,$data['poid']);
             $this->db->bind(3 ,$data['tension']);
             $this->db->bind(4 ,$data['puissance'] );
             $this->db->bind(5 ,$data['longueur']);
             $this->db->bind(6 ,$data['prix']);
             $this->db->bind(7 ,$data['description']);
             
            //  $this->db->execute(array(
 
            //     ':image' => ['image'],
            //     ':produit' => ['produit'],
            //     ':poid' => ['poid'],
            //     ':tension' => ['tension'],
            //     ':puissance' => ['puissance'],
            //     ':longueur' => ['longueur'],
            //     ':prix' => ['prix'],
            //     ));
             

            try{
                $this->db->execute();
            
            }
            catch(Exception $e){
                return $e->getMessage();
            }

        }

//   $this->db->query("INSERT INTO `produits`( `produit`, `poid`, `tension`, `puissance`, `longueur`, `prix`)
// VALUES (':produit',':poid',':tension',':puissance',':longueur',':prix')");
// //  $this->db->bind(1 ,$data['imame']);
//  $this->db->bind(1 ,24343 );
//  $this->db->bind(2 ,234534);
//  $this->db->bind(3 ,34656);
//  $this->db->bind(4 ,35645);
//  $this->db->bind(5 ,34654);
//  $this->db->bind(6 ,345645);
 
        // _______________________
        // public function addAdmin($model){
        //     $this->db->query("INSERT INTO admins(roleAdmin,name, lname,salary,depot,CIN,phone,email,password) VALUES (? ,? ,? ,? ,? ,? ,? ,? ,?)");//:name,:email,:phone,:address

        //     $this->db->bind(1 ,$model['roleAdmin']);
        //     $this->db->bind(2 ,$model['name']);
        //     $this->db->bind(3 ,$model['lname']);
        //     $this->db->bind(4 ,$model['salary']);
        //     $this->db->bind(5 ,$model['depot']);
        //     $this->db->bind(6 ,$model['CIN']);
        //     $this->db->bind(7 ,$model['phone']);
        //     $this->db->bind(8 ,$model['email']);
        //     $this->db->bind(9 ,$model['password']);
        //     try{
        //         $this->db->execute();
        //     }
        //     catch(Exception $e){
        //         return $e->getMessage();
        //     }
        // }
    }

?>