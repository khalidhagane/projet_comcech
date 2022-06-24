<?php
class CommandeController extends Controller{

    function __construct(){

        $this->commandeModel = $this->model('CommandeModel'); 
    }

    function affichage_commande(){
        
        $data = $this->commandeModel->affichage_commande();
        
    }

    public function addinfo_client_commande(){
        $data = $_POST;
        
        $this->commandeModel->addinfo_client($data);
        redirect("/pages/inedx");
    
    }

    public function add_commande(){
        $this->commandeModel->add_commande();
        $this->commandeModel->delete_produit_panier_commande();
        redirect("/pages/produits");
    }

}


?>