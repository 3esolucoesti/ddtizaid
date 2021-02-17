<?php

class pginsetosController extends controller
{
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


  private function prepareImage($image, $altura0, $largura0)
  {
    //TAMANHO ORIGINAL DA IMAGEM
    $filename1 = $image['tmp_name'];
    list($largura0Original, $altura0Original) = getimagesize($filename1);

    $ratio0 = $largura0Original / $altura0Original;

    //ALTURA DA IMAGEM 200px LARGURA VAI SER PROPOCIONAL 
    $largura0 = $altura0 * $ratio0;

    $img_filter = [
      'image/jpeg' =>  [
        "file-type" => ".jpg",
        "create" => fn ($name) => imagecreatefromjpeg($name),
        "save" => fn ($img, $path) => imagejpeg($img, $path)
      ],
      'image/png' =>  [
        "file-type" => ".png",
        "create" => fn ($name) => imagecreatefrompng($name),
        "save" => fn ($img, $path) => imagepng($img, $path)
      ],
      'image/gif' =>  [
        "file-type" => ".gif",
        "create" => fn ($name) => imagecreatefromgif($name),
        "save" => fn ($img, $path) => imagegif($img, $path)
      ]
    ];

    // Utiliza o array para filtrar o tipo de imagem 
    // retorna um array com as funçoes para o respectivo tipo de arquivo
    $img_manager = $img_filter[$image['type']];

    $imagem_original0 = $img_manager['create']($filename1);

    //criar uma imagem com essa altura e essa largura
    $dest_image = imagecreatetruecolor($largura0, $altura0);
    imagecopyresampled($dest_image, $imagem_original0, 0, 0, 0, 0, $largura0, $altura0, $largura0Original, $altura0Original);

    $dest_img_name = "min_800x500" . md5(rand(0, 999) . time() . rand(0, 999)) . $img_manager['file-type'];
    $img_manager['save']($dest_image, "assets/images/" . $dest_img_name);

    return $dest_img_name;
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
      $pg_insetos = new Pginsetos();

      if (isset($_GET['id'])) {
        $id = $_GET['id'];

        if (isset($_POST['addarticle']) && !empty($_POST['addarticle'])) {
          $addarticle = $_POST['addarticle'];

          $pg_insetos->updateInsetoArticle($id, $addarticle);
        }

        $data['info_inseto'] = $pg_insetos->getInseto($id);
        $this->loadView("pginseto_about", $data);
      } else {

        // Add new Inseto
        if (isset($_POST['addName']) && !empty($_POST['addName'])) {
          $addName = $_POST['addName'];
          $addDescription = $_POST['addDescription'];

          if (isset($_FILES['addImage']) && !empty($_FILES['addImage']['tmp_name'])) {
            $image = $_FILES['addImage'];
            $largura0 = 400; // Maxíma
            $altura0 = 400; // Maxíma

            $img_name = $this->prepareImage($image, $altura0, $largura0);
          }

          $pg_insetos->createInseto($img_name, $addName, $addDescription);
        }

        // edit Inseto
        if (isset($_POST['editName']) && !empty($_POST['editName'])) {
          $edit_id = $_POST['id'];
          $editName = $_POST['editName'];
          $editDescription = $_POST['editDescription'];

          if (isset($_FILES['editImage']) && !empty($_FILES['editImage']['tmp_name'])) {
            $image = $_FILES['editImage'];

            $largura0 = 400; // Maxíma
            $altura0 = 400; // Maxíma

            $img_name = $this->prepareImage($image, $altura0, $largura0);
            $pg_insetos->updateInsetoImage($edit_id, $img_name);
          } else {
            $pg_insetos->updateInseto($edit_id, $editName, $editDescription);
          }
        }

        $data["info_insetos"] = $pg_insetos->getInsetos();
        $this->loadView("pginsetos", $data);
      }
    } else {
      header("Location: " . BASE_URL . "/painel");
      exit;
    }
  }

  public function getInseto($id)
  {
    $data = [];
    $pg_insetos = new Pginsetos();

    $id = addslashes($id);

    $data = $pg_insetos->getInseto($id);
    echo json_encode($data);
  }

  public function deleteinseto($id)
  {
    $id = addslashes($id);

    $pg_insetos = new Pginsetos();
    $pg_insetos->deleteInseto($id);

    header("Location: " . BASE_URL . "/painel/pginsetos");
  }
}
