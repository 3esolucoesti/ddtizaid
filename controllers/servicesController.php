<?php
  class servicesController extends controller{
    
    public function __construct(){
      parent::__construct();  

    } 
    
    public function index(){
      $data = array();  
      
      $data['services'] = (new Pgservices)->getServices();

      $cache = new Cache();
      if(file_exists('assets/caches/services.cache') && $cache->is_valido('assets/caches/services.cache') == true){
          require 'assets/caches/services.cache';
      }else{
        ob_start();
        $this->loadTemplate("services" , $data);
          $html = ob_get_contents();
        ob_end_clean(); 
        
        $cache->setVar("services.cache", $html);

        echo $html;
      }
    }
  }