<?php
  class Pages extends Controller {
    public function __construct()
    {
      $this->produitModel = $this->model('ProduitModel');
      $this->commandeModel = $this->model('CommandeModel');
      $this->categureModel = $this->model('CategureModel');
      $this->loginModel = $this->model('LoginModel');
      $this->detailproduitModel = $this->model('DetailproduitModel');
      $this->panierModel = $this->model('PanierModel'); 
       
    }
    
    public function index()
    {
       $dataList =  $this->produitModel->affichage_promotion();
       $data =  $this->categureModel->affichage_categure();
     
       $this->view('pages/index', $data , $dataList );
    }
   
    

    public function signin()
    {
      $this->view('pages/signin');
    }

    public function signup()
    {   
      $this->view('pages/signup');
    }

    public function dashbord()
    {
      
      if($_SESSION['role'] == 'admin'){
     
      $this->view('pages/dashbord');
      }else{
        redirect("/pages/index");
      }
    }
    public function produits_glopale()
    {
      // $data =  $this->categureModel->affichage_groupeproduit($categure);
      
       $data=$this->produitModel->affichage_produit();
      $this->view('pages/produits_glopale', $data);
    }

    public function produits($categure)
    {
      $data =  $this->categureModel->affichage_groupeproduit($categure);
      
      // $data=$this->produitModel->affichage_produit();
      $this->view('pages/produits', $data);
    }

    public function one_produit($id)
    {
      
      $data =  $this->detailproduitModel->affichagedetail_produit($id);
      $this->view('pages/one_produit', $data);
    }

    public function table_produits()
    {
      if($_SESSION['role'] == 'admin'){
          $data =  $this->produitModel->affichage_produit();
          $this->view('pages/table_produits', $data);
      }else{
          redirect("/pages/index");
      }
    }

    public function table_commandes()
    {
      if($_SESSION['role'] == 'admin'){
      $data =  $this->commandeModel->affichage_commande();
      $this->view('pages/table_commandes', $data);
      }else{
        redirect("/pages/index");
      }
    }

    public function panier()
    {
      if(!empty($_SESSION['id'])){
        $data = $this->panierModel->affichage_produits();
        $this->view('pages/panier', $data);
      }else{
        redirect("/pages/signin");
      }
    }
    
    public function table_commantair()
    {
      $this->view('pages/table_commantair');
    }

    public function ajoute_produit()
    {
      if($_SESSION['role'] == 'admin'){
        $data =  $this->categureModel->affichage_categure();
        $this->view('pages/ajoute_produit',$data);
      }else{
        redirect("/pages/index");
      }
    }

    public function update_produit()
    {
      if($_SESSION['role'] == 'admin'){
        $data =  $this->categureModel->affichage_categure();
        
        $this->view('pages/update_produit', $data);
      }else{
        redirect("/pages/index");
  }
    }

    public function update_categure(){
      // $data = [
      //   'title' => 'update categure'
      // ];
      if($_SESSION['role'] == 'admin'){
      $this->view('pages/update_categure', $data);
    }else{
      redirect("/pages/index");
  }
    }

    public function info_client()
    {
      $this->view('pages/info_client');
    }
  
    public function table_categure(){
      // $data = [
      //   'title' => 'table_categure'
      // ];
      if($_SESSION['role'] == 'admin'){
      $data =  $this->categureModel->affichage_categure();

      $this->view('pages/table_categure', $data);
    }else{
      redirect("/pages/index");
  }
      
    }

    public function ajoute_categure()
    {
      if($_SESSION['role'] == 'admin'){
        $this->view('pages/ajoute_categure');
      }else{
        redirect("/pages/index");
      }
    }
    
  }