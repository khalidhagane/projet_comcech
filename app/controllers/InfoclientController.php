<?php
class InfoclientController extends Controller{

    function __construct(){

        $this->infoclientModel = $this->model('InfoclientModel'); 
    }


public function addinfo_client(){
    $data = $_POST;
    
    $this->infoclientModel->addinfo_client($data);
    // redirect("/pages/table_produits");

}



}