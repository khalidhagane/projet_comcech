<?php
  class Pages extends Controller {
    public function __construct(){
      $this->produitModel = $this->model('ProduitModel');
      $this->commandeModel = $this->model('CommandeModel');
      $this->categureModel = $this->model('CategureModel');
      // $this->promotionModel = $this->model('PromotionModel');
      $this->loginModel = $this->model('LoginModel');
      $this->detailproduitModel = $this->model('DetailproduitModel');
      $this->panierModel = $this->model('PanierModel'); 


      

    }
    
    public function index(){
      // $data = [
      //   'title' => 'TraversyMVC',
      // ];
       $dataList =  $this->produitModel->affichage_promotion();
       $data =  $this->categureModel->affichage_categure();
     
      $this->view('pages/index', $data , $dataList );
    }
   
    

    public function signin(){
      $data = [
        'errorR' => 'this is required',
      ];
     
      $this->view('pages/signin', $data);
    }

    public function signup(){
      $data = [
        'title' => 'TraversyMVC',
      ];
     
      $this->view('pages/signup', $data);
    }

    public function dashbord(){
      $data = [
        'title' => 'TraversyMVC',
      ];
      //  $data=$this->produitModel->affichage_count();
      if($_SESSION['role'] == 'admin'){
     
      $this->view('pages/dashbord', $data);
    }else{
      redirect("/pages/index");
  }
    }

    public function produits(){
      $data=$this->produitModel->affichage_produit();
     
      $this->view('pages/produits', $data);
      
    }

    public function one_produit(){
      // $data = [
      //   'title' => 'TraversyMVC',
      // ];
      $data =  $this->detailproduitModel->affichagedetail_produit($id);
     
      $this->view('pages/one_produit', $data);
    }

    public function table_produits(){
      // $data = [
      //   'title' => 'TraversyMVC',
      // ];
      if($_SESSION['role'] == 'admin'){
      $data =  $this->produitModel->affichage_produit();
        
        $this->view('pages/table_produits', $data);
      }else{
        redirect("/pages/index");
    }
    }


    public function table_commandes(){
      // $data = [
      //   'title' => 'TraversyMVC',
      // ];
      if($_SESSION['role'] == 'admin'){
      $data =  $this->commandeModel->affichage_commande();
    }else{
      redirect("/pages/index");
  }
        
      $this->view('pages/table_commandes', $data);
    }

    

    public function panier(){
      if(!empty($_SESSION['id'])){
      $data = $this->panierModel->affichage_produits();
      // echo '<pre>';
      // var_dump($data);
      // echo '</pre>';

      $this->view('pages/panier', $data);
      }else{
        redirect("/pages/signin");
      }
    }
    
    

    public function table_commantair(){
      // $data = [
      //   'title' => 'TraversyMVC namir',
      // ];
     
      $this->view('pages/table_commantair', $data);
    }

    public function ajoute_produit(){
      // $data = [
      //   'title' => 'TraversyMVC samir',
      // ];
      if($_SESSION['role'] == 'admin'){
      $this->view('pages/ajoute_produit');
    }else{

      redirect("/pages/index");
  }
    }

    public function update_produit(){
      $data = [
        'title' => 'update Produit'
      ];
      if($_SESSION['role'] == 'admin'){
      $this->view('pages/update_produit', $data);
    }else{
      redirect("/pages/index");
  }
    }

    public function update_categure(){
      $data = [
        'title' => 'update categure'
      ];
      if($_SESSION['role'] == 'admin'){
      $this->view('pages/update_categure', $data);
    }else{
      redirect("/pages/index");
  }
    }

    public function info_client(){
      $data = [
        'title' => 'update Produit'
      ];

      $this->view('pages/info_client', $data);
    }

    public function ajoute_categure(){
      $data = [
        'title' => 'update Produit'
      ];
      
      if($_SESSION['role'] == 'admin'){
      $this->view('pages/ajoute_categure', $data);
    }else{
      redirect("/pages/index");
  }
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

    


  }