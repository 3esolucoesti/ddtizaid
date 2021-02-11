<?php
class ajaxController extends controller
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
	}


	public function mudastatus()
	{
		$data = array();

		$pgcontact = new Pgcontact();

		if (isset($_POST['id']) && !empty($_POST['id'])) {
			$id = addslashes($_POST['id']);
			$pgcontact->mudarstatus($id);
			$data = " ";
		}

		echo json_encode($data);
	}

	public function conteudoPgSlideHome()
	{
		$data = array();

		$pg_home = new Pghome();

		if (isset($_POST['id']) && !empty($_POST['id'])) {
			$id = addslashes($_POST['id']);

			$data = $pg_home->getSlideId($id);
		}

		echo json_encode($data);
	}

	public function conteudoPgDepoimento()
	{
		$data = array();

		$pg_depoiments = new Pgdepoiments();

		if (isset($_POST['id']) && !empty($_POST['id'])) {
			$id = addslashes($_POST['id']);

			$data = $pg_depoiments->getDepoId($id);
		}

		echo json_encode($data);
	}

	public function conteudoPgService(){
		$data = [];
		$pg_service = new Pgservices();

		if (isset($_POST['id']) && !empty($_POST['id'])) {
			$id = addslashes($_POST['id']);

			$data = $pg_service->getServiceId($id);
		}

		echo json_encode($data);
	}
}//FIM
