<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'TraversyMVC',
      ];
     
      $this->view('pages/index', $data);
    }

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
     
      $this->view('pages/dashbord', $data);
    }

    public function produits(){
      $data = [
        'title' => 'TraversyMVC',
      ];
     
      $this->view('pages/produits', $data);
    }

    public function one_produit(){
      $data = [
        'title' => 'TraversyMVC',
      ];
     
      $this->view('pages/one_produit', $data);
    }

    public function table_produits(){
      $data = [
        'title' => 'TraversyMVC',
      ];
     
      $this->view('pages/table_produits', $data);
    }

    public function table_commandes(){
      $data = [
        'title' => 'TraversyMVC',
      ];
     
      $this->view('pages/table_commandes', $data);
    }
    public function slaid(){
      $data = [
        'title' => 'TraversyMVC',
      ];
     
      $this->view('pages/slaid', $data);
    }

    public function panier(){
      $data = [
        'title' => 'TraversyMVC',
      ];
     
      $this->view('pages/panier', $data);
    }
    public function table_clients(){
      $data = [
        'title' => 'TraversyMVC',
      ];
     
      $this->view('pages/table_clients', $data);
    }
    public function commantair(){
      $data = [
        'title' => 'TraversyMVC',
      ];
     
      $this->view('pages/commantair', $data);
    }
    

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }
  }