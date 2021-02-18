<?php
  class photosController extends controller{
    
    public function __construct(){
      parent::__construct();  
        
      
    } 
    
    public function index(){
      $data = array();  

      $data['photos'] = (new Pgphotos())->getPhotos();
      $cache = new Cache();  
      if(file_exists('assets/caches/photos.cache') && $cache->is_valido('assets/caches/photos.cache') == true){
          require 'assets/caches/photos.cache';
      }else{
        ob_start();
        $this->loadTemplate("photos" , $data);
        $html = ob_get_contents();
        ob_end_clean(); 
        
        $cache->setVar("photos.cache", $html);

        echo $html;

      }

      
    }
  
  }

?>