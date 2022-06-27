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
        
        redirect("/pages/signin"); 

    }
    
    public function signin()
    {
        if(isset($_POST['submit'])){

            $compte = $_POST;

            if((empty($compte['email_phone']) || empty($compte['password'])))
            {
                $_SESSION['error_empty'] = "Vous n'avez pas rempli un champ";
                redirect("/pages/signin");
            }
            else
            {
                $data = $this->loginModel->verify_compt($compte);
                
                if($data){
                   $_SESSION['id'] = $data->id;
                   $_SESSION['username'] = $data->username;
                   $_SESSION['role'] = $data->role;
                   $_SESSION['address'] = $data->address;
                   $_SESSION['phone'] = $data->phone;

                   if($data->role == 'admin')
                   {
                    redirect("/pages/dashbord");
                   }
                   else
                   {
                    redirect("/pages/index");
                   }

                }
                else{

                    $_SESSION['error_wrong'] = "L'email ou le mot de passe est incorrect";
                    redirect("/pages/signin");
                   
                }
            }
        }
    }

    public function updateclient_entre_info()
    {
        
        $data=$_POST;
        $data=$this->loginModel->updateclient_entre_info($data,$_SESSION['id']);
        redirect("/pages/produits"); 
        
    }
    public function logout(){
        
        session_destroy();
        redirect("/pages/index");
        
    }

}


?>