<?php
  class homeController extends controller{
    
    public function __construct(){
      parent::__construct();  
    } 
    
    public function index(){
      $data = array();  
      $pg_home = new Pghome();
      $pg_depoiments = new Pgdepoiments();
			$pg_about = new Pgabout();
			$pg_servicos = new Pgservices();
			$pg_photos = new Pgphotos();

      $data['info_home'] = $pg_home->getPgHome();
			$data['list_slide'] = $pg_home->getSlide();
			$data['primeiro_slide'] = $pg_home->getPriSlide();
      $data['list_depo'] = $pg_depoiments->getDepoiments();
			$data['info_about'] = $pg_about->getinfohome();
			$data['info_services'] = $pg_servicos->getServices();
			$data['list_photos'] = $pg_photos->getPhotosPage(0, 6);
      
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
