<?php

class pgphotosController extends controller
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
    
    if ($u->hasPermission('editar_site')) {
      $pg_photos = new Pgphotos();

      if (isset($_FILES['addImage']) && !empty($_FILES['addImage']['tmp_name'])) {
        $image = $_FILES['addImage']; 
        
        $img_path = $this->prepareImage($image, 400, 400);

        $pg_photos->createPhoto($img_path);
      }

      $data['photos'] = $pg_photos->getPhotos();
      $this->loadView("pgphotos", $data);
    } else {
      header("Location: " . BASE_URL . "/painel");
      exit;
    }
  }

  
 
  public function deletephoto($id){
    $id = addslashes($id);

    $pg_photos = new Pgphotos();
    $pg_photos->deletePhoto($id);

    header("Location: " . BASE_URL . "/painel/pgphotos");
  }
}
