<?php

class LoginController extends Controller{
    function __construct()
    {
        $this->loginModel = $this->model('LoginModel'); 
    }

    function affichage_compte(){

        $this->loginModel->affichage_compte();

    }

    public function delete_compte($id){
        
        $this->loginModel->delete_compte($id);
        
        redirect("/pages/table_clients");
    } 

    public function addclient_signup()
    {
        
        $data=$_POST;
    
        $this->loginModel->addclient_signup($data);
        

        redirect("/pages/produits"); 

    }
    
    public function signin()
    {

        if(isset($_POST['submit']))
        {
            $compte = $_POST;

            if(empty($compte['password']) && empty($compte['email_phone']))
            {
                $this->view("/pages/signin");
                // echo "3afak 3amar hadchi";

            }
            else
            {

            $data=$this->loginModel->verify_compt($compte);
            
                if(isset($data))
                {

                    if(isset($data->email_phone) == $compte['email_phone'] && $data->password1 == $compte['password'])
                    {
                        
                    
                            $_SESSION['username'] = $data->username;
                            $_SESSION['id'] = $data->id;
                            $_SESSION['role'] = $data->role;
                            $_SESSION['address'] = $data->address;
                            $_SESSION['phone'] = $data->phone;

                            if(isset($_SESSION['role'])== $data->role){

                                $this->view("/pages/dashbord");
                                exit;
                            }
                            // else if(isset($_SESSION['phone']) && isset($_SESSION['address']) ){

                            //     // $this->view("/pages/produits",$data);
                            //     redirect("/pages/produits");

                            // }
                            else{
                                $this->view("/pages/info_client");
                            }

                            
                    }
                    else
                    {

                        $this->view("/pages/signin");
                        echo"emal et passwod ghaltin";
                        
                    }
                
                }
                else
                {
                    
                    $this->view("/pages/signin");
                    echo"emal et passwod khawyin";
                    
                }
            }
        }
        else
        {
            
            $this->view("/pages/signin");
                        echo"emal et passwod khawyin";
                        
        }

    }

    public function updateclient_entre_info()
    {
        
        $data=$_POST;
       
        $data=$this->loginModel->updateclient_entre_info($data,$_SESSION['id']);
        redirect("/pages/produits"); 
        
    }
    public function logout(){

        unset($_SESSION);
        redirect("/pages/index");
        

    }

}


?>