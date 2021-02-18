<?php
  class aboutController extends controller{
    
    public function __construct(){
      parent::__construct();  
    } 
    
    public function index(){
      $data = array();  

      $data['info_about'] = (new Pgabout())->getinfohome();

      $cache = new Cache();
      if(file_exists('assets/caches/about.cache') && $cache->is_valido('assets/caches/about.cache') == true){
          require 'assets/caches/about.cache';
      }else{
        ob_start();
        $this->loadTemplate("about" , $data);
          $html = ob_get_contents();
        ob_end_clean(); 
        
        $cache->setVar("about.cache", $html);

        echo $html;
      } 
    }  
  }
