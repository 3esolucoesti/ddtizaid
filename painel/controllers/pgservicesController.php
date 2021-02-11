<?php

class pgservicesController extends controller
{
  private $dados;
  public $token;

  public function __construct()
  {
    parent::__construct();

    $u = new Users();
    if (isset($_COOKIE['token_' . NAME_TOKEN])) {
      $token = $_COOKIE['token_' . NAME_TOKEN];
      $ver = $u->veryToken($token);
      $this->token = $token;

      if ($ver == false) {
        header("Location: " . BASE_URL . "/painel/login");
      } else {
        $this->dados = $ver;
      }
    } else {
      header("Location: " . BASE_URL . "/painel/login");
    }
  }

  public function index()
  {
    $data = array();

    $u = new Users();
    $u->setLoggedUser($this->token);
    $company = new Companies($u->getCompany());
    $data['company_name'] = $company->getName();
    $data['company_logo'] = $company->getLogo();
    $data['user_name'] = $u->getName();
    $data['user_email'] = $u->getEmail();
    $data['user_imagem'] = $u->getImagem();
    $data['sector'] = $u->getSector();
    $data['grupo'] = $u->getGroupUser();


    if ($u->hasPermission('editar_site')) {
      $pg_services = new Pgservices();

      $data['services'] = $pg_services->getServices();
      $this->loadView("pgservices", $data);
    } else {
      header("Location: " . BASE_URL . "/painel");
      exit;
    }
  }

  public function services_list()
  {
    $data = [];

    $user = new Users();
    $user->setLoggedUser($this->token);

    if ($user->hasPermission('editar_site')) {
      $pg_services = new Pgservices();

      // Add new Service
      if (isset($_POST['service_title']) && !empty($_POST['service_title'])) {
        $service_title = $_POST['service_title'];
        $service_description = $_POST['service_description'];

        if (isset($_FILES['service_image']) && !empty($_FILES['service_image']['tmp_name'])) {

          $image = $_FILES['service_image'];

          $filename1 = $image['tmp_name'];

          $largura0 = 602; // Maxíma
          $altura0 = 468; // Maxíma

          //TAMANHO ORIGINAL DA IMAGEM
          list($largura0Original, $altura0Original) = getimagesize($filename1);

          $ratio0 = $largura0Original / $altura0Original;

          //ALTURA DA IMAGEM 200px LARGURA VAI SER PROPOCIONAL 
          $largura0 = $altura0 * $ratio0;

          if ($image['type'] == 'image/jpeg') {
            $imagem_original0 = imagecreatefromjpeg($filename1);
          } else if ($image['type'] == 'image/png') {
            $imagem_original0 = imagecreatefrompng($filename1);
          } else if ($image['type'] == 'image/gif') {
            $imagem_original0 = imagecreatefromgif($filename1);
          }

          $image800x500_final0 = imagecreatetruecolor($largura0, $altura0); //criar uma imagem com essa altura e essa largura
          imagecopyresampled($image800x500_final0, $imagem_original0, 0, 0, 0, 0, $largura0, $altura0, $largura0Original, $altura0Original);

          if ($image['type'] == 'image/jpeg') {
            $nameImg800x500 = "min_800x500" . md5(rand(0, 999) . time() . rand(0, 999)) . ".jpg"; //mandando image 200px
            imagejpeg($image800x500_final0, "assets/images/" . $nameImg800x500);
          } else if ($image['type'] == 'image/png') {
            $nameImg800x500 = "min_800x500" . md5(rand(0, 999) . time() . rand(0, 999)) . ".png"; //mandando image 200px
            imagepng($image800x500_final0, "assets/images/" . $nameImg800x500);
          } else if ($image['type'] == 'image/gif') {
            $nameImg800x500 = "min_800x500" . md5(rand(0, 999) . time() . rand(0, 999)) . ".gif"; //mandando image 200px
            imagegif($image800x500_final0, "assets/images/" . $nameImg800x500);
          }


          $pg_services->updateimage($nameImg800x500);
        }

        $pg_services->addService($service_title, $service_description);
      }

      // Update service
      if (isset($_POST['edit_title']) && !empty($_POST['edit_title'])) {
        $edit_service_id = $_POST['edit_service_id'];
        $edit_title = $_POST['edit_title'];
        $edit_description = $_POST['edit_description'];

        if (isset($_FILES['edit_image']) && !empty($_FILES['edit_image']['tmp_name'])) {

          $image = $_FILES['edit_image'];

          $filename1 = $image['tmp_name'];

          $largura0 = 602; // Maxíma
          $altura0 = 468; // Maxíma

          //TAMANHO ORIGINAL DA IMAGEM
          list($largura0Original, $altura0Original) = getimagesize($filename1);

          $ratio0 = $largura0Original / $altura0Original;

          //ALTURA DA IMAGEM 200px LARGURA VAI SER PROPOCIONAL 
          $largura0 = $altura0 * $ratio0;

          if ($image['type'] == 'image/jpeg') {
            $imagem_original0 = imagecreatefromjpeg($filename1);
          } else if ($image['type'] == 'image/png') {
            $imagem_original0 = imagecreatefrompng($filename1);
          } else if ($image['type'] == 'image/gif') {
            $imagem_original0 = imagecreatefromgif($filename1);
          }

          $image800x500_final0 = imagecreatetruecolor($largura0, $altura0); //criar uma imagem com essa altura e essa largura
          imagecopyresampled($image800x500_final0, $imagem_original0, 0, 0, 0, 0, $largura0, $altura0, $largura0Original, $altura0Original);

          if ($image['type'] == 'image/jpeg') {
            $nameImg800x500 = "min_800x500" . md5(rand(0, 999) . time() . rand(0, 999)) . ".jpg"; //mandando image 200px
            imagejpeg($image800x500_final0, "assets/images/" . $nameImg800x500);
          } else if ($image['type'] == 'image/png') {
            $nameImg800x500 = "min_800x500" . md5(rand(0, 999) . time() . rand(0, 999)) . ".png"; //mandando image 200px
            imagepng($image800x500_final0, "assets/images/" . $nameImg800x500);
          } else if ($image['type'] == 'image/gif') {
            $nameImg800x500 = "min_800x500" . md5(rand(0, 999) . time() . rand(0, 999)) . ".gif"; //mandando image 200px
            imagegif($image800x500_final0, "assets/images/" . $nameImg800x500);
          }


          $pg_services->updateimage($nameImg800x500);
        }

        $pg_services->updateService($edit_service_id, $edit_title, $edit_description);
      }

      $data['services_list'] = $pg_services->getServices();

      $this->loadView("pgservices_list", $data);
    } else {
      header("Location: " . BASE_URL . "/painel");
      exit;
    }
  }

  public function deleteServiceId($id){
    $id = addslashes($id);

    $pg_services = new Pgservices();
    $pg_services->deleteServiceId($id);

    header("Location: " . BASE_URL . "/painel/pgservices/services_list");
  }
}
