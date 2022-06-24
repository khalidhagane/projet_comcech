<?php
    class LoginModel{
    
        private $db;
   public function __construct()
   {
       $this->db = new Database();
   }
   
   public function affichage_compte(){
    $this->db->query("SELECT * FROM `copmtes` WHERE role <> 'admin' ");
   
    return $data = $this->db->resultSet();
    
var_dump($data);
exit;
}

public function delete_compte($id){
    $this->db->query('DELETE  FROM copmtes WHERE id = :id ');
    $this->db->bind(':id',$id);
    $this->db->execute();

    //     return true;
    // }else{
    //     return false;
    // }

}


        public function addclient_signup($data){
          
            $this->db->query("INSERT INTO `copmtes`( `username`, `email_phone`,`password1`,`password2`) VALUES (?,?,?,?)");
             $this->db->bind(1,$data['username']);
             $this->db->bind(2,$data['email_phone']);
             $this->db->bind(3,$data['password1']);
             $this->db->bind(4,$data['password2']);
             

            try{
                $this->db->execute();
            }
            catch(Exception $e){
                return $e->getMessage();
            }

        }
        


        public function verify_compt($compte){
         
            $this->db->query( "SELECT * FROM copmtes WHERE email_phone = '$compte[email_phone]' and password1 = '$compte[password]'");
        // $result = mysqli_query($con,$query);

        return $this->db->single();
        
        // try{
        //     $this->db->execute();
           
        // }
        // catch(Exception $e){
        //     return $e->getMessage();
        // }


        }

        
        public function updateclient_entre_info($data , $id){
            // UPDATE `produits` SET `id`='[value-1]',`produit`='[value-2]',`poid`='[value-3]',`tension`='[value-4]',`puissance`='[value-5]',`longueur`='[value-6]',`prix`='[value-7]',`image`='[value-8]' WHERE 1
            
            $this->db->query("UPDATE `copmtes` SET `phone` = ? , `address` = ?  WHERE `id` = ?") ;
            
            
            $this->db->bind(1 ,$data['phone']);
             $this->db->bind(2 ,$data['address']);
             $this->db->bind(3 ,$id);
             $this->db->execute();

             
             
             
            //  $this->db->execute(array(
 
            //     ':image' => ['image'],
            //     ':produit' => ['produit'],
            //     ':poid' => ['poid'],
            //     ':tension' => ['tension'],
            //     ':puissance' => ['puissance'],
            //     ':longueur' => ['longueur'],
            //     ':prix' => ['prix'],
            //     ));
             

            // try{
            //     $this->db->execute();
            
            // }
            // catch(Exception $e){
            //     return $e->getMessage();
            // }

        }

    }