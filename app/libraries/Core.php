<?php
  /*
   * App Core Class
   * Creates URL & loads core controller
   * URL FORMAT - /controller/method/params
   */
  class Core {
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
      //print_r($this->getUrl());

      $url = $this->getUrl();
      // Look in controllers for first value
      // file_exists kat man hadak controller wach kain ola la. // ucwords function kat khali liya dima lharf 1 man kalima kbiiir 
      if((isset($url[1])) && file_exists('../app/controllers/' . ucwords($url[0]). '.php')){
        // If exists, set as controller
        $this->currentController = ucwords($url[0]);
        // Unset 0 Index
        unset($url[0]);
      }

      // Require the controller
      require_once '../app/controllers/'. $this->currentController . '.php';

      // Instantiate controller class
      $this->currentController = new $this->currentController;
//$this->currentController => probrtes type object 
      // Check for second part of url
      if(isset($url[1])){
        // Check to see if method exists in controller
        if(method_exists($this->currentController, $url[1])){
          $this->currentMethod = $url[1];
          // Unset 1 index
          unset($url[1]);
        }
      }

      // Get params
      $this->params = $url ? array_values($url) : [];
      // if($this->params == $url){
      //   $this->params = array_values($url);
      
      // }else{
      //   $this->params=[];
      // }

      // Call a callback with array of params
      call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl(){
      if(isset($_GET['url'])){
        $url = rtrim($_GET['url'], '/'); // rtrim function kat 9bal 2 dyal li parametr string o o hadik lhaja li bghiit n7ayadha 
        $url = filter_var($url, FILTER_SANITIZE_URL); //  filter_var function kat 9bal 2 dyal parametr string o method pré diffiné kat filtri liya man caracter
        $url = explode('/', $url); // explode function kat 9bal 2 dyal li parametr string o hadak caracter bach bghitiha tfra9 lik string otkhazzanha f array 
        return $url;
      }
    }
  } 
  
  