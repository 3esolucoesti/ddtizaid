<?php
  class insetosController extends controller{
    
    public function __construct(){
      parent::__construct();  
        
      
    } 
    
    public function index(){
      $data = array();  

      $cache = new Cache();
      
      if(file_exists('assets/caches/insetos.cache') && $cache->is_valido('assets/caches/insetos.cache') == true){
          require 'assets/caches/insetos.cache';
      }else{
        ob_start();
        $this->loadTemplate("insetos" , $data);
          $html = ob_get_contents();
        ob_end_clean(); 
        
        $cache->setVar("insetos.cache", $html);

        echo $html;

      }

      
    }

    public function insetosid($id){
      $data = array();  

      $id = addslashes($id);

     //verificar se existe id

      $this->loadTemplate("insetosid" , $data);
    }
  }
