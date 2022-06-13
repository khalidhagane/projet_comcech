<?php
class CommandeController extends Controller{

    function __construct(){

        $this->commandeModel = $this->model('CommandeModel'); 
    }

    function affichage_commande(){

        $data = $this->commandeModel->affichage_commande();
    }



}


?>