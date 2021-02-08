<?php
  class homeController extends controller{
    
    public function __construct(){
      parent::__construct();  
        
      
    } 
    
    public function index(){
      $data = array();  

      $cache = new Cache();
      
      if(file_exists('assets/caches/home.cache') && $cache->is_valido('assets/caches/home.cache') == true){
          require 'assets/caches/home.cache';
      }else{
        ob_start();
        $this->loadTemplate("home" , $data);
          $html = ob_get_contents();
        ob_end_clean(); 
        
        $cache->setVar("home.cache", $html);

        echo $html;

      }
      
    }
  
  }

?>