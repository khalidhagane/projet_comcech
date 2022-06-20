<?php


// Start the session
session_start();

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
        $this->view("/pages/info_client");

    }
    public function signin()
    {
            // echo "luka ";
            // $data=$_POST;
        //     if(isset($_POST['submit'])){

        //             $email_phone = $_POST['email_phone'];
        //             $password = $_POST['password'];
                
        //             if(empty($email_phone) && empty($password)){
        //                 header('location: sign_in.php?error=email or password non remplit');
        //             }
        //     var_dump($_POST);
        //     exit;

        
        //     //  if(essit($_POST) && $_POST['email_phone'] ==  ){}
        //     // $data=$_POST;
            
        //     // $this->loginModel->addclient($data);

        // }

        if(isset($_POST['submit']))
        {

            $compte = $_POST;

            // $email_phone = $data['email_phone'];
            // $password = $data['password'];
            

            if(empty($compte['password']) && empty($compte['email_phone']))
            {
                // header('location: sign_in.php?error=email or password non remplit');
                
                $this->view("/pages/signin");
                echo "3afak 3amar hadchi";
                // $error="email or password non remplit";
                

               

            }
            else
            {
        
        

            $data=$this->loginModel->verify_compt($compte);
                    // $query = "SELECT * FROM clients WHERE email_phone = '$email_phone' and password = '$password'";
                    // $result = mysqli_query($con,$query);
            
                if(isset($data))
                {
                    

                    
                    //  $row= mysqli_fetch_assoc($data);

                    //  var_dump($row );
                    //  exit;
                    
                    
                    
                    if(isset($data->email_phone) == $compte['email_phone'] && $data->password1 == $compte['password'])
                    {
                        
                    
                            $_SESSION['username'] = $data->username;
                            $_SESSION['id'] = $data->id;
                            $_SESSION['role'] = $data->role;

                            if(isset($_SESSION['role'])== $data->role){

                                $this->view("/pages/dashbord");
                                exit;
                            }

                            // var_dump($_SESSION['id']);
                            // exit;
                            
                            // if(isset($compte['remember']))
                            // {
                            //     // echo "cookie";
                                
                            //     setcookie('email_phone', $data->email_phone,time()+10);
                            //     setcookie('password1', $data->password1,time()+10);
                            // }
                            
                            // header('location: home.php');
                            $this->view("/pages/info_client");
                    }
                    else
                    {
                        // header('location: sign_in.php?error=email or password incorrect');
                        $this->view("/pages/signin");
                        echo"emal et passwod ghaltin";
                        // $error="email or password incorrect";
                    }
                
                }
                else
                {
                    // header('location: sign_in.php?error=email or password incorrect');
                    $this->view("/pages/signin");
                    echo"emal et passwod khawyin";
                    // $error="email or password incorrect";
                }
            }
        }
        else
        {
            // header('location: sign_in.php?error=email or password non remplit');
            $this->view("/pages/signin");
                        echo"emal et passwod khawyin";
                        // $error="email or password non remplit";
        }




    }


}






?>