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
    // public function index2(){
    //   // $data = [
    //   //   'title' => 'TraversyMVC',
    //   // ];
    //   $data =  $this->promotionModel->affichage_promotion();
       
     
    //   $this->view('pages/index', $data );
    // }
    

    public function signin(){
      $data = [
        'title' => 'TraversyMVC',
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
     
     
      $this->view('pages/dashbord', $data);
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
      $data =  $this->produitModel->affichage_produit();
        
      $this->view('pages/table_produits', $data);
    }


    public function table_commandes(){
      // $data = [
      //   'title' => 'TraversyMVC',
      // ];
      $data =  $this->commandeModel->affichage_commande();
      
        
      $this->view('pages/table_commandes', $data);
    }

    // public function table_commandes(){
    //   $data = [
    //     'title' => 'TraversyMVC',
    //   ];
     
    //   $this->view('pages/table_commandes', $data);
    // }
    // public function slaid(){
    //   $data = [
    //     'title' => 'TraversyMVC jamal',
    //   ];
     
    //   $this->view('pages/slaid', $data);
    // }

    public function panier(){

      $data = $this->panierModel->affichage_produits();
      // echo '<pre>';
      // var_dump($data);
      // echo '</pre>';

      $this->view('pages/panier', $data);
    }
    public function table_clients(){
      
      // $data = [
      //   'title' => 'TraversyMVC kamal',
      // ];
      $data=$this->loginModel->affichage_compte();

     
      $this->view('pages/table_clients', $data);
    }
    public function table_commantair(){
      $data = [
        'title' => 'TraversyMVC namir',
      ];
     
      $this->view('pages/table_commantair', $data);
    }
    public function ajoute_produit(){
      $data = [
        'title' => 'TraversyMVC samir',
      ];
     
      $this->view('pages/ajoute_produit', $data);
    }
    public function update_produit(){
      $data = [
        'title' => 'update Produit'
      ];

      $this->view('pages/update_produit', $data);
    }
    public function update_categure(){
      $data = [
        'title' => 'update categure'
      ];

      $this->view('pages/update_categure', $data);
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

      $this->view('pages/ajoute_categure', $data);
    }
  
    public function table_categure(){
      // $data = [
      //   'title' => 'table_categure'
      // ];
      $data =  $this->categureModel->affichage_categure();

      $this->view('pages/table_categure', $data);
      
    }
    public function table_promotion(){
      // $data = [
      //   'title' => 'TraversyMVC',
      // ];
      $data =  $this->promotionModel->affichage_promotion();
        
      $this->view('pages/table_promotion', $data);
    }

    public function ajoute_promotion(){
      $data = [
        'title' => 'TraversyMVC samir',
      ];
     
      $this->view('pages/ajoute_promotion', $data);
    }
    public function update_promotion(){
      $data = [
        'title' => 'update Produit'
      ];

      $this->view('pages/update_promotion', $data);
    }

    // public function affichage_groupeproduit(){
      
    //   $this->view('pages/index', $data);
    // }
    
    

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }


  }