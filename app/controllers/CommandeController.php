<?php
class CommandeController extends Controller{

    function __construct(){

        $this->commandeModel = $this->model('CommandeModel'); 
    }

    function affichage_commande(){

        $data = $this->commandeModel->affichage_commande();
    }

    public function addinfo_client_commande(){
        var_dump($_POST);
        exit;
        
        $data = $_POST;
        
        $this->commandeModel->addinfo_client($data);
       
        redirect("/pages/inedx");
    
    }


}


?>